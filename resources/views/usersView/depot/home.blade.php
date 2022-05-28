@extends('layout_dash.template')
@section('contenu')

<div class="profile-content">
    <h3 class="admin-heading">Deposer de l'argent sur mon compte</h3>
    <ul class="nav nav-pills">
        <li class="nav-item">
            <a class="nav-link active" href="deposit-money.html">Lancer dépot</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="deposit-money-confirm.html">Confirmer</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="deposit-money-success.html">Succes</a>
        </li>
    </ul>
    <div class="tab-content" id="pills-tabContent">
        <div class="tab-pane fade show active" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
            <form id="deposit-send-money" method="post" class="form bg-offwhite">
                <div class="form-group">
                    <label for="deposit-money">Montant</label>
                    <div class="input-group">
                        <!--div class="input-group-prepend"><span class="input-group-text currency-icon">$</span>
                        </div-->
                        <input type="text" class="form-control" name="price" value="1,000.00" placeholder="" >

                        <div class="input-group-append">
                            <span class="input-group-text">
                                <select id="youSendCurrency" data-style="custom-select" data-container="body"
                                    data-live-search="true" class="selectpicker " required="">
                                    <optgroup label="Popular Currency">
                                        <option data-icon="currency-flag currency-flag-usd mr-1"
                                            data-subtext="United States dollar" selected="selected" value="">USD
                                        </option>
                                        <option data-icon="currency-flag currency-flag-aud mr-1"
                                            data-subtext="Australian dollar" value="">AUD</option>
                                        <option data-icon="currency-flag currency-flag-eur mr-1" data-subtext="Euro"
                                            value="">EUR</option>
                                    </optgroup>
                                    <option value="" data-divider="true">divider</option>
                                    <optgroup label="Other Currency">
                                        <option data-icon="currency-flag currency-flag-aed mr-1"
                                            data-subtext="United Arab Emirates dirham" value="">AED</option>
                                        <option data-icon="currency-flag currency-flag-ars mr-1"
                                            data-subtext="Argentine peso" value="">ARS</option>
                                        <option data-icon="currency-flag currency-flag-aud mr-1"
                                            data-subtext="Australian dollar" value="">AUD</option>
                                    </optgroup>
                                </select>
                            </span>
                        </div>

                    </div>
                   @error('price')
                   {{ $message}}
                   @enderror
                </div>
                <div class="form-group">
                    <label for="description">Description</label>
                    <textarea class="form-control p-3" rows="4"  required="" name="description"
                        placeholder="Ajouter une description" ></textarea>
                    @error('description')
                   {{ $message}}
                   @enderror
                </div>
                <div class="row">
                    <div class="payment col-6">
                        <h3 class="title">Choisir une méthode de paiement </h3>
                        <select name="paiement_method" id="" class="form-control">
                            <option value="Pay Pal" class="form-control m-3">Pay Pal</option>
                            <option value="Card Bank" class="form-control m-3">Cartes bancaire</option>
                            <option value="Perfect Money" class="form-control m-3">Perfect money</option>
                        </select> <br>
                        <b>Frais de transaction </b>
                        <span class=" ml-4 mr-4 bg-success free-charge">Gratuit</span>
                        <del>1.00 USD</del>

                    </div>
                </div>
                <!--div class="payment col-6">
                    <h3 class="title">Choisir une méthode de paiement </h3>
                    <select name="" id="" class="form-control">
                        <option value="" class="form-control m-3">Pay Pal</option>
                        <option value="" class="form-control m-3">Cartes bancaire</option>
                        <option value="" class="form-control m-3">Perfect money</option>
                    </select>
                    <div class="row">
                        <div class="col-md-4 col-sm-4">
                            <div class="single-payment selected">
                                <img src="{{asset('dashboard/images/payment-1.png')}}" alt="">
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-4">
                            <div class="single-payment">
                                <img src="{{asset('dashboard/images/payment-2.png')}}" alt="">
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-4">
                            <div class="single-payment">
                                <img src="{{asset('dashboard/images/payment-3.png')}}" alt="">
                            </div>
                        </div>
                    </div>
                </div-->
                <hr>
                <div class="row">
                    <div class="col-md-6">
                        <p class="text-left"><b>Lancer un dépot de </b></p>
                    </div>
                    <div class="col-md-6">
                        <span class="float-right">1,000.00 USD</span>
                    </div>
                </div>
                <ul class="pager mt-4">
                    <li>&nbsp;</li>
                    <li>
                        <a href="deposit-money-confirm.html" class="btn btn-default mr-0">
                            <span class="bh"></span>
                            <span>Next</span>
                            <i class="fas fa-chevron-right"></i>
                        </a>
                    </li>
                </ul>

            </form>
        </div>

    </div>
</div>

@endsection
