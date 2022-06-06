@extends('layout_dash.template')
@section('contenu')

<div class="profile-content">
    <h3 class="admin-heading">Deposer de l'argent sur mon compte</h3>
    <ul class="nav nav-pills">
        <li class="nav-item">
            <a class="nav-link active" href="{{route('createTransaction')}}">Commencer</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#">Success</a>
        </li>
    </ul>
    <div class="tab-content" id="pills-tabContent">
        <div class="tab-pane fade show active" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">

            <div class="form-group">
                <label for="youSend">Je veux : </label>

                <form action="{{ route('createTransaction.confirm') }}" method="POST">
                    @csrf
                    <div class="input-group">
                        <div class="input-group-prepend"><span class="input-group-text currency-icon">$</span>
                        </div>
                        <input type="integer" class="form-control" name="price" value="10" placeholder="">
                        <div class="input-group-append">
                            <select name="currency" id="" class="form-control">
                                <option value="USD CAD">USD CAD</option>
                            </select>
                        </div>
                        <input type="hidden" name="method_transaction" value="PayPal">

                    </div>
                    <button class="btn btn-primary m-3">Lancer le depot</button>
                </form>

                <br>
                <br>
                <form action="{{ route('createTransaction.confirm') }}" method="POST">
                    @csrf
                    <div class="input-group">
                        <div class="input-group-prepend"><span class="input-group-text currency-icon">$</span>
                        </div>
                        <input type="integer" class="form-control" name="price" value="10" placeholder="">
                        <div class="input-group-append">
                            <select name="currency" id="" class="form-control">
                                <option value="USD CAD">USD CAD</option>
                            </select>
                        </div>
                        <input type="hidden" name="method_transaction" value="PayPal">

                    </div>
                    <button class="btn btn-primary m-3">Lancer le depot</button>
                </form>


                <form role="form" action="{{ route('createTransaction.confirm') }}" method="post" class="require-validation"
                    data-cc-on-file="false" data-stripe-publishable-key="{{ env('STRIPE_KEY') }}" id="payment-form">
                    @csrf

                    <input type="hidden" name="method_transaction" value="Stripe">
                    <div class='form-row row'>
                        <div class='col-xs-12 form-group required'>
                            <label class='control-label'>Name on Card</label> <input class='form-control' size='4'
                                type='text'>
                        </div>
                    </div>

                    <div class='form-row row'>
                        <div class='col-xs-12 form-group card required'>
                            <label class='control-label'>Card Number</label> <input autocomplete='off'
                                class='form-control card-number' size='20' type='text'>
                        </div>
                    </div>

                    <div class='form-row row'>
                        <div class='col-xs-12 col-md-4 form-group cvc required'>
                            <label class='control-label'>CVC</label> <input autocomplete='off'
                                class='form-control card-cvc' placeholder='ex. 311' size='4' type='text'>
                        </div>
                        <div class='col-xs-12 col-md-4 form-group expiration required'>
                            <label class='control-label'>Expiration Month</label> <input
                                class='form-control card-expiry-month' placeholder='MM' size='2' type='text'>
                        </div>
                        <div class='col-xs-12 col-md-4 form-group expiration required'>
                            <label class='control-label'>Expiration Year</label> <input
                                class='form-control card-expiry-year' placeholder='YYYY' size='4' type='text'>
                        </div>
                    </div>

                    <div class='form-row row'>
                        <div class='col-md-12 error form-group hide'>
                            <div class='alert-danger alert'>Please correct the errors and try
                                again.</div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-xs-12">
                            <button class="btn btn-primary btn-lg btn-block" type="submit">Pay Now ($100)</button>
                        </div>
                    </div>

                </form>

            </div>

        </div>

        @if(\Session::has('error'))
        <div class="alert alert-danger">{{ \Session::get('error') }}</div>
        {{ \Session::forget('error') }}
        @endif
        @if(\Session::has('success'))
        <div class="alert alert-success">{{ \Session::get('success') }}</div>
        {{ \Session::forget('success') }}
        @endif

    </div>
</div>

@endsection
