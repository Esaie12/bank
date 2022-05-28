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
                                <div class="in-padding-horizontal@s">
                                    <!-- logo begin -->
                                    <a class="uk-logo" href="index.html">
                                        <img src="{{asset('assets/img/in-lazy.gif')}}"
                                            data-src="{{asset('assets/img/logo-signup.png')}}" alt="logo" width="160"
                                            height="34" data-uk-img>
                                    </a>
                                    <!-- logo end -->
                                    <p class="uk-text-lead uk-margin-top uk-margin-remove-bottom">Créer votre compte
                                        Pro</p>
                                    <p class="uk-text-small uk-margin-remove-top uk-margin-medium-bottom">Déjà membre,
                                        veuillez-vous connectez <a href="{{ route('login') }}">Connexion</a></p>
                                    <!-- login form begin -->

                                    <form class="uk-grid uk-form" action="{{ route('register')  }}" method="POST">
                                        @csrf <input type="hidden" name="typeCompte" value="pro">

                                        <div class="uk-margin-small uk-width-1-1 uk-inline">
                                            <span class="uk-form-icon uk-form-icon-flip fas fa-user fa-sm"></span>
                                            <input type="text" class="uk-input uk-border-rounded" placeholder="Nom de la société"
                                                name="nomSociete" value="{{@old('nomSociete')}}">
                                            @error('pseudo')
                                            <span style="color-red">{{ $message }}</span>
                                            @enderror
                                        </div>

                                        <div class="uk-margin-small uk-width-1-1 uk-inline">
                                            <span class="uk-form-icon uk-form-icon-flip fas fa-lock fa-sm"></span>
                                            <input type="text" class="uk-input uk-border-rounded"
                                                placeholder="Vos services" name="service" value="{{ @old('service')}}">
                                            @error('service')
                                            <span style="color-red">{{ $message }}</span>
                                            @enderror
                                        </div>


                                        <div class="uk-margin-small uk-width-1-1 uk-inline">
                                            <span class="uk-form-icon uk-form-icon-flip fas fa-lock fa-sm"></span>
                                            <input type="email" class="uk-input uk-border-rounded"
                                                placeholder="Adresse mail de la société" name="email" value="{{ @old('email')}}">
                                            @error('email')
                                            <span style="color-red">{{ $message }}</span>
                                            @enderror
                                        </div>


                                        <div class="uk-margin-small uk-width-1-1 uk-inline">
                                            <span class="uk-form-icon uk-form-icon-flip fas fa-lock fa-sm"></span>
                                            <input id="password" placeholder="Mot de passe" type="password"
                                                class="uk-input uk-border-rounded @error('password') is-invalid @enderror"
                                                name="password" autocomplete="new-password">
                                            @error('password')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror

                                        </div>

                                        <div class="uk-margin-small uk-width-1-1 uk-inline">
                                            <span class="uk-form-icon uk-form-icon-flip fas fa-lock fa-sm"></span>

                                            <input id="password-confirm" type="password" class="uk-input uk-border-rounded" name="password_confirmation" autocomplete="new-password" placeholder="Récrire mot de passe">

                                        </div>

                                        <!--div class="uk-margin-small uk-width-1-1 uk-inline">
                                            <span class="uk-form-icon uk-form-icon-flip fas fa-lock fa-sm"></span>
                                            <input class="uk-input uk-border-rounded" id="text" value="" type="text"
                                                placeholder="Nom & Prénoms">
                                        </div>
                                        <div class="uk-margin-small uk-width-1-1 uk-inline">
                                            <span class="uk-form-icon uk-form-icon-flip fas fa-lock fa-sm"></span>
                                            <input class="uk-input uk-border-rounded" id="text" value="Adresse"
                                                type="text" placeholder="Adresse">
                                        </div-->
                                        <div class="uk-margin-small uk-width-1-1">
                                            <button type="submit" class="uk-button uk-width-1-1 bg-primary uk-border-rounded uk-float-left">Creer mon compte</button>
                                        </div>
                                    </form>

                                    <!-- login form end -->
                                    <a href="{{ route('register.personnel') }}">Vous pouvez choisir créer un compte individuel ..</a>

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
