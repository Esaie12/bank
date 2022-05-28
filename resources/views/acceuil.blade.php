@extends('layout.templateNo')

@section('contenu')
<!-- slideshow content begin -->
<div class="uk-section uk-padding-remove-vertical">
    <div class="uk-light in-slideshow uk-background-cover uk-background-top-center"
        style="background-image: url({{asset('assets/img/in-liquid-slide-bg.png')}});" data-uk-slideshow>
        <ul class="uk-slideshow-items">
            <li>
                <div class="uk-container">
                    <div class="uk-grid-medium" data-uk-grid>
                        <div class="uk-width-1-2@s">
                            <div class="uk-overlay">
                                <h1>Transférer<br>de l'argent.</h1>
                                <p class="uk-text-lead uk-visible@m">Effectuez des transferts d'argent plus
                                    rapides et à faible coût et en toute sécurité</p>
                                <a href="#"
                                    class="uk-button uk-button-default uk-border-rounded uk-visible@s">Envoyez
                                    de l'argent</a>
                            </div>
                        </div>
                        <div class="uk-width-1-2@s">
                            <img class="in-slide-img" src="{{asset('assets/img/in-lazy.gif')}}" data-src="{{asset('assets/img/in-liquid-slide-1.svg')}}"
                                alt="image-slide" width="500" height="400" data-uk-img>
                        </div>
                    </div>
                </div>
            </li>
            <li>
                <div class="uk-container">
                    <div class="uk-grid-medium" data-uk-grid>
                        <div class="uk-width-1-2@s">
                            <div class="uk-overlay">
                                <h1>Virement Transfert Union :</h1>
                                <p class="uk-text-lead uk-visible@m"> Facile. Rapide. Sécuritaire..</p>
                                <a href="#"
                                    class="uk-button uk-button-default uk-border-rounded uk-visible@s">Transférer
                                    de l'argent</a>
                            </div>
                        </div>
                        <div class="uk-width-1-2@s">
                            <img class="in-slide-img" src="{{asset('assets/img/in-lazy.gif')}}" data-src="{{asset('assets/img/in-liquid-slide-2.svg')}}"
                                alt="image-slide" width="500" height="400" data-uk-img>
                        </div>
                    </div>
                </div>
            </li>
        </ul>
        <a class="uk-position-center-left uk-position-small uk-hidden-hover" href="#" data-uk-slidenav-previous
            data-uk-slideshow-item="previous"></a>
        <a class="uk-position-center-right uk-position-small uk-hidden-hover" href="#" data-uk-slidenav-next
            data-uk-slideshow-item="next"></a>
        <div class="uk-section uk-padding-remove-vertical in-slideshow-features uk-visible@m">
            <div class="uk-container">
                <ul class="uk-grid uk-child-width-1-5@m uk-text-center" data-uk-grid>
                    <li>
                        <img src="{{asset('assets/img/in-lazy.gif')}}" data-src="{{asset('assets/img/orange-money.png')}}" alt="ticker-image" data-width
                            data-height data-uk-img>
                        <span class="uk-label uk-label-success uk-margin-left"><i
                                class="fas fa-caret-up"></i>1,740.05</span>
                    </li>
                    <li>
                        <img src="{{asset('assets/img/in-lazy.gif')}}" data-src="{{asset('assets/img/mtn.png')}}" alt="ticker-image" data-width
                            data-height data-uk-img>
                        <span class="uk-label uk-label-success uk-margin-left"><i
                                class="fas fa-caret-up"></i>217.90</span>
                    </li>
                    <li>
                        <img src="{{asset('assets/img/in-lazy.gif')}}" data-src="{{asset('assets/img/moov-money.png')}}" alt="ticker-image" data-width
                            data-height data-uk-img>
                        <span class="uk-label uk-label-danger uk-margin-left"><i
                                class="fas fa-caret-down"></i>270.97</span>
                    </li>
                    <li>
                        <img src="{{asset('assets/img/in-lazy.gif')}}" data-src="{{asset('assets/img/Interac-e-transfer.png')}}" alt="ticker-image"
                            data-width data-height data-uk-img>
                        <span class="uk-label uk-label-success uk-margin-left"><i
                                class="fas fa-caret-up"></i>3,218.51</span>
                    </li>
                    <li>
                        <img src="{{asset('assets/img/in-lazy.gif')}}" data-src="{{asset('assets/img/interac.png')}}" alt="ticker-image" data-width
                            data-height data-uk-img>
                        <span class="uk-label uk-label-danger uk-margin-left"><i
                                class="fas fa-caret-down"></i>735.11</span>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>
<!-- slideshow content end -->
<!-- section content begin -->
<div class="uk-section uk-section-secondary in-liquid-1">
    <div class="uk-container uk-light">
        <div class="uk-grid uk-flex uk-flex-middle">
            <div class="uk-width-1-2@m">
                <h2>Le rapprochement <span class="in-highlight">dont votre</span> famille a besoin..</h2>
            </div>
            <div class="uk-width-1-2@m">
                <a class="uk-button uk-button-default uk-border-rounded uk-align-right@m" href="#">Plus de
                    solutions<i class="fas fa-angle-right uk-margin-small-left"></i></a>
            </div>
        </div>
        <div class="uk-child-width-1-3@m" data-uk-grid>
            <div>
                <div class="uk-card uk-card-secondary uk-border-rounded uk-cover-container">
                    <div class="uk-card-media-top">
                        <img src="{{asset('assets/img/in-lazy.gif')}}" data-src="{{asset('assets/img/pay-bill.png')}}" alt="sample-image" data-width
                            data-height data-uk-img>
                    </div>
                    <div class="uk-card-body">
                        <h3>Payer vos employés</h3>
                        <p>Envoyez de l'argent à vos employés et prestataires de services en toute simplicité
                        </p>
                    </div>
                </div>
            </div>
            <div>
                <div class="uk-card uk-card-secondary uk-border-rounded uk-cover-container">
                    <div class="uk-card-media-top">
                        <img src="{{asset('assets/img/in-lazy.gif')}}" data-src="{{asset('assets/img/in-liquid-object-1.png')}}" alt="sample-image"
                            data-width data-height data-uk-img>
                    </div>
                    <div class="uk-card-body">
                        <h3>Payer vos factures</h3>
                        <p>Envoyez de l'argent à votre famille resté au pays pour payer les frais médicaux de
                            vos parents malades </p>
                    </div>
                </div>
            </div>
            <div>
                <div class="uk-card uk-card-secondary uk-border-rounded uk-cover-container">
                    <div class="uk-card-media-top">
                        <img src="{{asset('assets/img/in-lazy.gif')}}" data-src="{{asset('assets/img/received-money.png')}}" alt="sample-image"
                            data-width data-height data-uk-img>
                    </div>
                    <div class="uk-card-body">
                        <h3>Recevez de l'argent</h3>
                        <p>Recevez de l'argent depuis l'étranger en toute sécurité et en toute simplicité .</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- section content end -->
<!-- section content begin -->
<div class="uk-section in-liquid-2">
    <div class="uk-container">
        <div class="uk-grid-large uk-child-width-1-2@m" data-uk-grid>
            <div class="uk-flex uk-flex-left">
                <div class="uk-margin-right">
                    <img src="{{asset('assets/img/in-lazy.gif')}}" data-src="{{asset('assets/img/world.png')}}" alt="sample-icon" width="128"
                        height="128" data-uk-img>
                </div>
                <div>
                    <h3>Réseau mondial</h3>
                    <p>Nous envoyons de l’argent dans plusieurs pays et nous nous ouvrons à de nouveaux pays
                        régulièrement.</p>
                </div>
            </div>
            <div class="uk-flex uk-flex-left">
                <div class="uk-margin-right">
                    <img src="{{asset('assets/img/in-lazy.gif')}}" data-src="{{asset('assets/img/expenses.png')}}" alt="sample-icon" width="128"
                        height="128" data-uk-img>
                </div>
                <div>
                    <h3>Frais fixes</h3>
                    <p>Nous n'avons aucuns frais caché, nous affichons tous les frais de transferts et le
                        montant à recevoir.</p>
                </div>
            </div>
            <div class="uk-flex uk-flex-left">
                <div class="uk-margin-right">
                    <img src="{{asset('assets/img/in-lazy.gif')}}" data-src="{{asset('assets/img/money-transfer.png')}}" alt="sample-icon" width="128"
                        height="128" data-uk-img>
                </div>
                <div>
                    <h3>Nombreuses méthodes de transfert</h3>
                    <p>Envoyez votre argent comme bon vous semble, en agence ou via un numéro de téléphone
                        portable.</p>
                </div>
            </div>
            <div class="uk-flex uk-flex-left">
                <div class="uk-margin-right">
                    <img src="{{asset('assets/img/in-lazy.gif')}}" data-src="{{asset('assets/img/benefits-6.png')}}" alt="sample-icon" width="128"
                        height="128" data-uk-img>
                </div>
                <div>
                    <h3>Service clientèle</h3>
                    <p>Notre équipe de service client se tient à votre disposition 24 h/24, 7j/7</p>
                </div>
            </div>
        </div>
        <div class="uk-grid uk-flex uk-flex-center">
            <div class="uk-width-5-6@m uk-margin-medium-top">
                <div class="uk-card uk-card-default uk-card-body uk-background-contain uk-background-top-left"
                    style="background-image: url({{asset('assets/img/in-liquid-card-bg.png')}});" data-uk-img>
                    <div class="uk-grid uk-child-width-1-3@s uk-child-width-1-3@m uk-text-center" data-uk-grid>
                        <div class="uk-width-1-1">
                            <h4><span>Comment ça marche?.</span></h4>
                        </div>
                        <div>
                            <span class="in-icon-wrap circle">1</span>
                            <p>Créez un compte</p>
                        </div>
                        <div>
                            <span class="in-icon-wrap circle">2</span>
                            <p>Créez un transfert pour votre destinataire</p>
                        </div>
                        <div>
                            <span class="in-icon-wrap circle">3</span>
                            <p>Réglez votre transfer</p>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- section content end -->
<!-- section content begin -->
<div class="uk-section uk-section-muted uk-padding-large in-liquid-3 uk-background-contain uk-background-center-center"
    style="background-image: url();" data-uk-img>
    <div class="uk-container">
        <div class="uk-grid uk-flex uk-flex-center">
            <div class="uk-width-5-6@m uk-inline">
                <div class="uk-grid-large uk-flex uk-flex-middle uk-flex-right" data-uk-grid>
                    <div class="uk-position-top-left">
                        <img src="{{asset('assets/img/in-lazy.gif')}}" data-src="{{asset('assets/img/in-tu-3-mockup.png')}}" alt="sample-images"
                            width="650" height="469" data-uk-img>
                    </div>
                    <div class="uk-width-1-2@m">
                        <span class="uk-label in-liquid-label uk-margin-bottom">Pensé Pour Vous Smplifier La
                            Vie</span>
                        <h2 class="uk-margin-remove">Acun frais caché<br>Reception instentané.</h2>
                        <p align="justify">Transférer vos dollars canadiens à un proche en Afrique au meilleur
                            tarif, sans payer de frais de virements bancaires exorbitants ni de majoration
                            déraisonnable appliquée sur le taux de change CAD – XOF</p>
                        <div class="uk-grid-small uk-child-width-1-3 uk-child-width-1-4@m uk-margin-medium-top uk-text-center"
                            data-uk-grid>
                            <div>
                                <img src="{{asset('assets/img/in-lazy.gif')}}" data-src="{{asset('assets/img/bank-transfer.png')}}" alt="sample-icon"
                                    width="50" height="50" data-uk-img>
                                <p class="uk-text-small">Banque</p>
                            </div>
                            <div>
                                <img src="{{asset('assets/img/in-lazy.gif')}}" data-src="{{asset('assets/img/mobil-money.png')}}" alt="sample-icon"
                                    width="50" height="50" data-uk-img>
                                <p class="uk-text-small">Mobile money</p>
                            </div>
                            <div>
                                <img src="{{asset('assets/img/in-lazy.gif')}}" data-src="{{asset('assets/img/cash-money.png')}}" alt="sample-icon"
                                    width="50" height="50" data-uk-img>
                                <p class="uk-text-small">Cash money</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- section content end -->
<!-- section content begin -->
<div class="uk-section in-liquid-4">
    <div class="uk-container">
        <div class="uk-grid uk-flex uk-flex-middle">
            <div class="uk-width-1-2@m">
                <h2>Restez au courant des nouvelles chez Transfert Union..</h2>
            </div>
            <div class="uk-width-1-2@m uk-visible@m">
                <a class="uk-button uk-button-text uk-align-right@m" href="blog.html">Tout voir<i
                        class="fas fa-angle-right uk-margin-small-left"></i></a>
            </div>
        </div>
        <div class="uk-grid uk-child-width-1-2@s uk-child-width-1-3@m in-blog-4" data-uk-grid>
            <div class="uk-flex uk-flex-left">
                <div class="in-liquid-category">
                    <p class="uk-text-small uk-text-uppercase"><span>Actualité</span></p>
                </div>
                <div>
                    <article class="uk-article">
                        <h5 class="uk-margin-remove-bottom">
                            <a href="#">Wall Street cautious on 'frothy' stocks, warn bitcoin bubble</a>
                        </h5>
                        <p class="uk-text-small uk-text-muted uk-margin-top">
                            Par <a href="#">Transfert Union</a>
                            <span class="uk-margin-small-left uk-margin-small-right">•</span>
                            Jan 8, 2021
                        </p>
                        <p>Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit ...</p>
                        <a class="uk-button uk-button-text uk-margin-top" href="#">Lire la suite<i
                                class="fas fa-long-arrow-alt-right uk-margin-small-left"></i></a>
                    </article>
                </div>
            </div>
            <div class="uk-flex uk-flex-left">
                <div class="in-liquid-category">
                    <p class="uk-text-small uk-text-uppercase"><span>Analysis</span></p>
                </div>
                <div>
                    <article class="uk-article">
                        <h5 class="uk-margin-remove-bottom">
                            <a href="#">Will AUD/USD Hit 0.8000 In The Foreseeable Future?</a>
                        </h5>
                        <p class="uk-text-small uk-text-muted uk-margin-top">
                            Par <a href="#">Transfert Union</a>
                            <span class="uk-margin-small-left uk-margin-small-right">•</span>
                            Jan 4, 2021
                        </p>
                        <p>Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit ...</p>
                        <a class="uk-button uk-button-text uk-margin-top" href="#">Lire la suite<i
                                class="fas fa-long-arrow-alt-right uk-margin-small-left"></i></a>
                    </article>
                </div>
            </div>
            <div class="uk-flex uk-flex-left uk-visible@m">
                <div class="in-liquid-category">
                    <p class="uk-text-small uk-text-uppercase"><span>Education</span></p>
                </div>
                <div>
                    <article class="uk-article">
                        <h5 class="uk-margin-remove-bottom">
                            <a href="#">How Can You Use Volatility to Your Advantage</a>
                        </h5>
                        <p class="uk-text-small uk-text-muted uk-margin-top">
                            Par <a href="#">Transfert Union</a>
                            <span class="uk-margin-small-left uk-margin-small-right">•</span>
                            Dec 16, 2020
                        </p>
                        <p>Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit ...</p>
                        <a class="uk-button uk-button-text uk-margin-top" href="#">Lire la suite<i
                                class="fas fa-long-arrow-alt-right uk-margin-small-left"></i></a>
                    </article>
                </div>
            </div>
        </div>

    </div>
</div>
<!-- section content end -->
<!-- section content begin -->
<div class="uk-section uk-section-muted in-liquid-5 uk-background-contain uk-background-top-center in-offset-bottom-40"
    style="background-image: url({{asset('assets/img/in-liquid-5-bg.png')}});">
    <div class="uk-container">
        <div class="uk-grid uk-flex uk-flex-center">
            <div class="uk-width-5-6@m">
                <div class="uk-text-center">
                    <h4>Envoyez de l'argent depuis le Canada<br> Pays populaires</h4>
                </div>
                <div class="uk-grid-collapse uk-child-width-1-2@s uk-child-width-1-6@m uk-text-center uk-margin-medium in-client-logo-6"
                    data-uk-grid>
                    <div class="uk-tile">
                        <img class="uk-margin-remove" src="{{asset('assets/img/in-lazy.gif')}}" data-src="{{asset('assets/img/cameroon.png')}}"
                            alt="payment-image" width="167" height="55" data-uk-img>
                    </div>
                    <div class="uk-tile">
                        <img class="uk-margin-remove" src="{{asset('assets/img/in-lazy.gif')}}" data-src="{{asset('assets/img/benin.png')}}"
                            alt="payment-image" width="167" height="55" data-uk-img>
                    </div>
                    <div class="uk-tile">
                        <img class="uk-margin-remove" src="{{asset('assets/img/in-lazy.gif')}}" data-src="{{asset('assets/img/ghana.png')}}"
                            alt="payment-image" width="167" height="55" data-uk-img>
                    </div>
                    <div class="uk-tile">
                        <img class="uk-margin-remove" src="{{asset('assets/img/in-lazy.gif')}}" data-src="{{asset('assets/img/ivory-coast.png')}}"
                            alt="payment-image" width="167" height="55" data-uk-img>
                    </div>
                    <div class="uk-tile">
                        <img class="uk-margin-remove" src="{{asset('assets/img/in-lazy.gif')}}" data-src="{{asset('assets/img/mali.png')}}"
                            alt="payment-image" width="167" height="55" data-uk-img>
                    </div>
                    <div class="uk-tile">
                        <img class="uk-margin-remove" src="{{asset('assets/img/in-lazy.gif')}}" data-src="{{asset('assets/img/togo.png')}}"
                            alt="payment-image" width="167" height="55" data-uk-img>
                    </div>
                </div>
                <div class="uk-text-center uk-text-small in-border-text">
                    <p><span>Envoyez de l'argent en ligne dans plus de 100 pays et territoires grâce à nos
                            agences partenaires.<br class="uk-hidden@m"> <a
                                class="uk-button uk-button-small uk-button-primary uk-border-rounded uk-margin-left"
                                href="#">Voir les agences<i
                                    class="fas fa-angle-right uk-margin-small-left"></i></a></span></p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
