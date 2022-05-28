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
    <title>Modifier mot de passe | Transfert d'argent rapide et sécurisé - Canada - Afrique</title>
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
                        style="background-image: url({{asset('assets/img/woman-login.jpg')}});"></div>
                    <div class="uk-width-expand@m uk-flex uk-flex-middle">
                        <div class="uk-grid uk-flex-center">
                            <div class="uk-width-3-5@m">
                                <div class="in-padding-horizontal@s">
                                    <!-- logo begin -->
                                    <a class="uk-logo" href="index.html">
                                        <img src="{{asset('assets/img/in-lazy.gif')}}"
                                            data-src="{{asset('assets/img/logo-retina.png')}}" alt="logo" width="160"
                                            height="34" data-uk-img>
                                    </a>
                                    <!-- logo end -->
                                    <p class="uk-text-lead uk-margin-top uk-margin-remove-bottom">Mot de passe oublié</p>
                                    <p class="uk-text-small uk-margin-remove-top uk-margin-medium-bottom">Vous n'avez
                                        pas de compte? <a href="{{route('register.personnel')}}">Inscription</a></p>
                                    @if(session('status'))
                                    <div class="alert alert-success">
                                        {{ session('status')}}
                                    </div>
                                    @endif

                                    <!-- login form begin -->
                                    <form class="uk-grid uk-form" method="POST" action="{{ route('password.request') }}">
                                        @csrf

                                        <div class="uk-margin-small uk-width-1-1 uk-inline">
                                            <span class="uk-form-icon uk-form-icon-flip fas fa-user fa-sm"></span>
                                            <input type="text" name="email"
                                                class="uk-input uk-border-rounded @error('email') is-invalid @enderror" name="email"
                                                value="{{ old('email') }}" placeholder="xxxxxxx@gmail.com"
                                                value="{{ old('email') }}">
                                            @error('email')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror

                                        </div>
                                        <div class="uk-margin-small uk-width-1-1">

                                                <button type="submit" class="uk-button uk-width-1-1 bg-primary uk-border-rounded uk-float-left">Modifier mot de passe</button>
                                        </div>
                                    </form>
                                    <!-- login form end -->
                                    <p class="uk-heading-line uk-text-center"><span>Ou connectez-vous via</span></p>
                                    <div class="uk-margin-medium-bottom uk-text-center">
                                        <a class="uk-button uk-button-small uk-border-rounded in-brand-google"
                                            href="#"><i class="fab fa-google uk-margin-small-right"></i>Google</a>
                                        <a class="uk-button uk-button-small uk-border-rounded in-brand-facebook"
                                            href="#"><i class="fab fa-facebook-f uk-margin-small-right"></i>Facebook</a>
                                    </div>
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
