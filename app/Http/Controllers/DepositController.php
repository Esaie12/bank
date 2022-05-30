<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Deposit;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class DepositController extends Controller
{
    public function Start(){
        return view('usersView.depot.home');
    }
    public function SendMoney(){
        return view('usersView.sendMoney.starter');
    }

    function SendMoneyVerify(Request $req){
        $req->validate([
            'email'=>'required',
        ]);

        if($req['email']=="depot@transfert.com"){

            return view('usersView.sendMoney.validateAdmin');

        }else{

            if($req['email'] != Auth::user()->email){
                $data= User::where('email', $req['email'])->first();

                if(!empty($data)){
                    return view('usersView.sendMoney.validate',['info'=>$data]);
                }else{
                    return view('usersView.sendMoney.starter',['msg'=>"error"]);
                }

            }else{
                return view('usersView.sendMoney.starter',['msg'=>"error"]);
            }

        }

    }

    function Confirm(Request $req){

        //idRec":"2","amount":"52","devise":"1","message":"pmii

        $solde= Auth::user()->solde;

        if($req['type']=="Admin"){

            $req->validate([
                'amount'=>'required',
                'message'=>'required',
            ]);

            if($req['amount'] <=  $solde){

                $env = new Deposit;
                $env->idUser = Auth::user()->id;
                $env->idReceve = 0;
                $env->amount = $req['amount'];
                $env->price = $req['amount'];
                $env->devise = $req['devise'];
                $env->description = $req['message'];
                $env->date_operation = date('Y-m-d H:i');
                $env->statut = 0;
                $env->paiement_method="Transfert Union";
                $env->destinate="Admin";
                $env->save();

                $us = User::find(Auth::user()->id);
                $us->solde=$solde- $req['amount'];
                $us->save();


                return view('usersView.sendMoney.succesAdmin');

            }else{
                return view('usersView.sendMoney.validateAdmin',['msg'=>'error']);
            }

        }elseif($req['type']=="User"){

            $req->validate([
                'amount'=>'required',
                'idRec'=>'required',
                'message'=>'required',
            ]);

            if($req['amount'] <=  $solde){

                $env = new Deposit;
                $env->idUser = Auth::user()->id;
                $env->idReceve = $req['idRec'];
                $env->amount = $req['amount'];
                $env->price = $req['amount'];
                $env->devise = $req['devise'];
                $env->description = $req['message'];
                $env->date_operation = date('Y-m-d H:i');
                $env->statut = 0;
                $env->paiement_method="Transfert Union";
                $env->destinate="User";
                $env->save();

                $us = User::find(Auth::user()->id);
                $us->solde=$solde- $req['amount'];
                $us->save();

                $user = User::find($req['idRec'])->first();

                return view('usersView.sendMoney.success',['info'=>$user]);

            }else{
                $data= User::find($req['idRec'])->first();
                return view('usersView.sendMoney.validate',['info'=>$data, 'msg'=>'error']);
            }

        }


    }
}
