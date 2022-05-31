@extends('layout_dash.template')
@section('contenu')
<div class="profile-content">
    <h3 class="admin-heading bg-offwhite">
        <p>Voir l'Historique de mes transactions </p>

    </h3>

    <div id="etat" >
        <div class="transaction-title bg-offwhite">
            <div class="items">
                <div class="row">
                    <div class="col-3"><span class="">Date</span></div>
                    <div class="col">Motif</div>
                    <div class="col text-center">Etat</div>
                </div>
            </div>
        </div>
        <div class="transaction-area">
            @foreach($transactions as $item)
            <div class="items">
                <a href="transactions-details.html">
                    <div class="row">
                        <div class="col pay-date">
                            <span class="date">17</span>
                            <span class="pay-month">Jan</span></div>
                        <div class="col">
                            <span class="name">{{$item->content}}</span></div>
                        <div class="col text-center">
                            <span class="payments-status text-warning" ><i class="fas fa-ellipsis-h" data-toggle="tooltip" data-original-title="In Progress"></i></span>
                        </div>
                        <div class="col">
                            <span class="payment-amaount"> {{ "$ ".$item->amount}}</span>
                        </div>
                        <div class="col">
                            <span class="payment-amaount">- $342</span>
                            <span class="currency">(USD)</span>
                        </div>
                    </div>
                </a>
            </div>
            @endforeach

            <div class="items">
                <a href="transactions-details.html">
                    <div class="row">
                        <div class="col pay-date">
                            <span class="date">15</span>
                            <span class="pay-month">APR</span></div>
                        <div class="col">
                            <span class="name">Payment Received From Envato </span></div>
                        <div class="col text-center">
                            <span class="payments-status text-success" ><i data-toggle="tooltip" data-original-title="Completed" class="fas fa-check-circle"></i></span>
                        </div>
                        <div class="col">
                            <span class="payment-amaount">- $0.2</span>
                        </div>
                        <div class="col">
                            <span class="payment-amaount">+ $912</span>
                            <span class="currency">(USD)</span>
                        </div>
                    </div>
                </a>
            </div>

        </div>
    </div>
</div>

@endsection
