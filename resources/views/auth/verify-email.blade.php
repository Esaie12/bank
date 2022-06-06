
<!DOCTYPE html>
<html lang="zxx" dir="ltr">

<head>
    <!-- Standard Meta -->
    <meta charset="utf-8">
    <meta name="description" content="Premium HTML5 Template by Indonez">
    <meta name="keywords" content="blockit, uikit3, indonez, handlebars, scss, vanilla javascript">
    <meta name="author" content="Indonez">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="theme-color" content="#f2f3f5" />
    <!-- Site Properties -->
    <title>Inscription | Transfert d'argent rapide et sécurisé - Canada - Afrique </title>
    @include('includes.cssLink')

</head>

<body>
    <!-- preloader begin -->
    <div class="in-loader">
        <div></div>
        <div></div>
        <div></div>
    </div>
    <!-- preloader end -->
    <main>
        <!-- section content begin -->
        <div class="uk-section uk-padding-remove-vertical">
            <div class="uk-container uk-container-expand">
                <div class="uk-grid" data-uk-height-viewport="expand: true">
                    <div class="uk-width-3-5@m uk-background-cover uk-background-center-right uk-visible@m uk-box-shadow-xlarge"
                        style="background-image: url({{asset('assets/img/register.jpg')}});"></div>
                    <div class="uk-width-expand@m uk-flex uk-flex-middle">
                        <div class="uk-grid uk-flex-center">
                            <div class="uk-width-3-5@m">
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
                    </div>
                </div>
            </div>
        </div>
        <!-- section content end -->
    </main>
    @include('includes.jsLink')
</body>

</html>
