<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Srmklive\PayPal\Services\PayPal as PayPalClient;
use Stripe;
use Illuminate\Support\Str;

class PayPalController extends Controller
{
    /**
     * create transaction.
     *
     * @return \Illuminate\Http\Response
     */
    public function createTransaction()
    {
        return view('usersView.depot.home');
    }
    public function createTransactionConfirm(Request $req){
     $data=$req;
        return view('usersView.depot.details',['infos'=>$data]);
    }

    /**
     * process transaction.
     *
     * @return \Illuminate\Http\Response
     */
    public function processTransaction(Request $request)
    {
        if($request['method_transaction']=="PayPal"){

            $provider = new PayPalClient;
            $provider->setApiCredentials(config('paypal'));
            $paypalToken = $provider->getAccessToken();

            $response = $provider->createOrder([
                "intent" => "CAPTURE",
                "application_context" => [
                    "return_url" => route('successTransaction'),
                    "cancel_url" => route('cancelTransaction'),
                ],
                "purchase_units" => [
                    0 => [
                        "amount" => [
                            "currency_code" => 'USD',
                            "value" => $request['price'],
                        ]
                    ]
                ]
            ]);

            if (isset($response['id']) && $response['id'] != null) {

                // redirect to approve href
                foreach ($response['links'] as $links) {
                    if ($links['rel'] == 'approve') {
                        return redirect()->away($links['href']);
                    }
                }

                return redirect()
                    ->route('createTransaction')
                    ->with('error', 'Something went wrong.');

            } else {
                return redirect()
                    ->route('createTransaction')
                    ->with('error', $response['message'] ?? 'Something went wrong.');
            }

        }elseif($request['method_transaction']=="Stripe"){

            try {
                $this->validate($request, [
                    'card_no' => 'required',
                    'expiry_month' => 'required',
                    'expiry_year' => 'required',
                    'cvv' => 'required',
                ]);

                $stripe = Stripe\Stripe::setApiKey(config('stripe.secret_key'));

                $response = \Stripe\Token::create(array(
                    "card" => array(
                        "number" => $request->input('card_no'),
                        "exp_month" => $request->input('expiry_month'),
                        "exp_year" => $request->input('expiry_year'),
                        "cvc" => $request->input('cvv'),
                    )
                ));

                $charge = \Stripe\Charge::create([
                    'card' => $response['id'],
                    'currency' => 'USD',
                    'amount' => $amount * 100,
                    'description' =>  "Test de paiement du blog paki leonel.",
                ]);
                if ($charge['status'] == 'succeeded') {
                    return response()->json([
                        'status' => 'ok',
                        'message' => "Payment Complete",
                    ], 200);
                } else {
                    return response()->json(['status' => 'error', "message" => "Payment Failed"], 500);
                }
            } catch (\Exception $e) {
                return response()->json(['status' => 'error', 'error' => $e->getMessage(), "message" => "Payment Failed"], 500);
            }

           /* Stripe\Stripe::setApiKey(env('STRIPE_SECRET'));
            Stripe\Charge::create ([
                    "amount" => 100 * 100,
                    "currency" => "usd",
                    "source" => $request->stripeToken,
                    "description" => "Test payment from itsolutionstuff.com."
            ]);

            Session::flash('success', 'Payment successful!');*/

        }

    }

    /**
     * success transaction.
     *
     * @return \Illuminate\Http\Response
     */
    public function successTransaction(Request $request)
    {

        $provider = new PayPalClient;
        $provider->setApiCredentials(config('paypal'));
        $provider->getAccessToken();
        $response = $provider->capturePaymentOrder($request['token']);

        if (isset($response['status']) && $response['status'] == 'COMPLETED') {
            return redirect()
                ->route('createTransaction')
                ->with('success', 'Transaction complete.');
        } else {
            return redirect()
                ->route('createTransaction')
                ->with('error', $response['message'] ?? 'Something went wrong.');
        }
    }

    /**
     * cancel transaction.
     *
     * @return \Illuminate\Http\Response
     */
    public function cancelTransaction(Request $request)
    {
        return redirect()
            ->route('createTransaction')
            ->with('error', $response['message'] ?? 'You have canceled the transaction.');
    }
}
