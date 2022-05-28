<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!--TITLE-->
    <title>Roysha- Money Transfer and Online Payments HTML Template</title>

   @include('includes_dash.cssLink')
</head>

<body>
    <!-- Preloader -->
    <div id="preloader">
        <div id="status"></div>
    </div>

    <!-- Document Wrapper  -->
    <div id="main-wrapper">
        <!-- Header start -->
        <header class="header02">
            <div class="header-top">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-sm-8">
                            <div class="d-inline-flex ml-auto">
                                <a href="#" class="top-text"><i class="fas fa-phone-alt"></i> info@roysha.com</a>
                                <a href="#" class="top-text"><i class="fas fa-envelope"></i> +21 (0) 332 0000 12</a>
                            </div>
                        </div>
                        <div class="col-sm-4 text-sm-right">
                            <div class="social-icons">
                                <a href="#"><i class="fab fa-facebook-f"></i></a>
                                <a href="#"><i class="fab fa-twitter"></i></a>
                                <a href="#"><i class="fab fa-google-plus-g"></i></a>
                                <a href="#"><i class="fab fa-pinterest-p"></i></a>
                                <a href="#"><i class="fab fa-instagram"></i> </a>
                            </div>
                            <div class="header-language">
                                    <a href="#" class="langbtn">
                                        <span>EN</span>
                                        <i class="fas fa-angle-down"></i>
                                    </a>
                                    <ul class="list-unstyled dropdown-menu" style="display: none;">
                                        <li class="active"><a href="#">EN</a></li>
                                        <li><a href="#">FR</a></li>
                                        <li><a href="#">PT</a></li>
                                        <li><a href="#">IT</a></li>
                                    </ul>
                                </div>
                        </div>
                    </div>
                </div>
            </div>

            <!--header -->
            <div class="header-main">
                <div class="container d-flex align-items-center">
                    <a class="logo d-inline-flex" href="../index.html">
                        <img src="{{asset('dashboard/images/logo.png')}}" alt="">
                    </a>

                    @include('layout_dash.menu')

                </div>
            </div>
            <!--end main header-->

        </header>
        <!-- Header end -->

        <!-- Admin Hero section-->
        <!--div class="hero-section">
            <div class="container">
                <div class="row  profile-complete-area">
                    <div class="col">
                        <div class="progress" data-percentage="50">
                            <span class="progress-left">
                                <span class="progress-bar"></span>
                            </span>
                            <span class="progress-right">
                                <span class="progress-bar"></span>
                            </span>
                            <div class="progress-value">
                                <div class="profile-thumb mt-3 mb-4">
                                    <img class="rounded-circle" src="{{asset('dashboard/images/profile.jpg')}}" alt="">
                                    <div class="profile-thumb-edit verify-icon" data-toggle="tooltip" title="Profile Verified">
                                        <i class="fas fa-check"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <p class="profile-name">Jhone Doue</p>
                    </div>
                    <div class="col">
                        <div class="profile-item">
                            <i class="fas fa-mobile-alt bg-icon"></i>
                            <i class="fas fa-check-circle Verified-icon"></i>
                            <p class="title">Mobile Added</p>
                        </div>
                    </div>
                    <div class="col">
                        <div class="profile-item">
                            <i class="fas fa-envelope bg-icon"></i>
                            <i class="fas fa-check-circle Verified-icon"></i>
                            <p class="title">Email Added</p>
                        </div>
                    </div>
                    <div class="col">
                        <a href="#">
                            <div class="profile-item">
                                <i class="fas fa-credit-card bg-icon"></i>
                                <i class="far fa-circle  Verified-icon"></i>
                                <p class="title">Add Card</p>
                            </div>
                        </a>
                    </div>
                    <div class="col">
                        <a href="#">
                            <div class="profile-item">
                                <i class="fas fa-university bg-icon"></i>
                                <i class="far fa-circle  Verified-icon"></i>
                                <p class="title">Add Bank</p>
                            </div>
                        </a>
                    </div>
                </div>

            </div>
        </div-->
        <!-- Admin End of Hero section-->

        <!-- Profile bar -->
        <div class="profilebar">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <div class="balance-area">
                            <b>Solde:</b>
                            <p class="total-blance">
                                {{Auth::user()->solde}} fcfa
                                <a href="#" class="reload-btn"><i class="fas fa-sync"></i></a>
                            </p>

                        </div>
                    </div>
                    <div class="col">
                        <div class="local-time">
                            <p><b>Heure actuelle :</b> {{  date('H:i')}} </p>
                        </div>
                    </div>
                    <div class="col">
                        <div class="local-time">
                            <p><b>Date actuelle:</b>{{  date('Y-m-d')}}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Profile bar -->

        <!-- Admin Content Section  -->
        <div id="content" class="py-4">
            <div class="container">
                <div class="row">
                    <!-- Left sidebar -->
                    <aside class="col-lg-3 sidebar">

                            @if(Auth::user()->type_compte == 2)

                              @include('layout_dash.menu-ind') <!-- Menu de compte personnel -->

                            @elseif(Auth::user()->type_compte == 3)

                              @include('layout_dash.menu-pro') <!-- Menu de compte pro -->

                            @endif

                    </aside>


                    <!-- Middle Panel  -->
                    <div class="col-lg-9">
                        @yield('contenu')

                    </div>

                </div>
            </div>
        </div>
        <!-- Content end -->

        <!-- Footer strat -->
        <footer class="footer">
            @include('layout_dash.footer')
        </footer>
        <!-- Footer end -->

    </div>
    <!-- Document Wrapper end -->

    <!-- Script -->
    @include('includes_dash.jsLink')

</body>

</html>
