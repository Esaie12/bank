

@extends('layout.templateNo')

@section('contenu')
<div class="login-area ptb-100">
    <div class="container">
        <div class="login-form">
            <h2>Verification email</h2>
            @if (session('status'))
            <div class="alert alert-success" role="alert">
                Un nouveau lien de vérification a été envoyé à votre adresse e-mail.
            </div>
            @endif

            Ouvrer votre boite mail, pour verifier votre compte. <br>
            Si vous n'avez pas reçu de mail
            <form class="d-inline" method="POST" action="{{ route('verification.send')  }}">
                @csrf
                <button type="submit" class="btn btn-link p-0 m-0 align-baseline">cliquer ici pour renvoyer</button>.
            </form>
        </div>
    </div>
</div>
@endsection
