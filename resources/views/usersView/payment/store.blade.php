@extends('layout_dash.template')
@section('contenu')
<div class="profile-content">
    <h3 class="admin-heading bg-offwhite">
        <p>Faire une demande de paiement à Transfert Union </p>

    </h3>
    <h4 class="text-2 msg-header"><a href="{{route('u.make.paiment')}}">Faire une demande</a> </h4>

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
            @foreach($data as $item)
            <div class="items">
                <a href="transactions-details.html">
                    <div class="row">
                        <div class="col-3">
                            {{ $item->created_at }}
                        </div>
                        <div class="col">
                            <span class="name">{{ $item->message }}</span></div>
                        <div class="col text-center">
                            @if($item->reject ==0)
                                @if($item->confirm == 0)
                                    <span class="payments-status text-warning" >
                                    <i class="fas fa-ellipsis-h" data-toggle="tooltip" data-original-title="In Progress"></i>
                                    </span>
                                @elseif($item->confirm == 1)
                                    <span class="payments-status text-success" >
                                        <i data-toggle="tooltip" data-original-title="Completed" class="fas fa-check-circle"></i>
                                    </span>
                                @endif
                            @else
                            <span class="payments-status text-danger" >
                                <i data-toggle="tooltip" data-original-title="Cancelled" class="fas fa-times-circle"></i>
                            </span>
                            @endif
                        </div>
                    </div>
                </a>
            </div>
            @endforeach

        </div>
    </div>
</div>

@endsection
