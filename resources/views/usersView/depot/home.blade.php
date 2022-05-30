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
                <label for="youSend">You Send</label>

                <form action="{{ route('createTransaction.confirm') }}" method="POST" >
                    @csrf
                    <div class="input-group">
                        <div class="input-group-prepend"><span class="input-group-text currency-icon">$</span>
                        </div>
                        <input type="integer" class="form-control" name="price" value="10" placeholder="">
                        <div class="input-group-append">
                            <select name="currency" id="" class="form-control" >
                                <option value="USD CAD">USD CAD</option>
                            </select>
                        </div>
                        <select name="method_transaction" id="" class="form-control" >
                            <option value="PayPal">PayPal</option>
                        </select>

                    </div>
                    <button  class="btn btn-primary m-3" >Lancer le depot</button>
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
