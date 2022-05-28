<nav class="primary-menu ml-auto">
    <a id="mobile-menu-toggler" href="#"><i class="fas fa-bars"></i></a>
    <ul>
        <li class="current-menu-item has-menu-child"><a href="#">Home</a>
            <ul class="sub-menu">
                <li><a href="../home-01.html">Home 01</a></li>
                <li><a href="../home-02.html">Home 02</a></li>
                <li><a href="../home-03.html">Home 03</a></li>
                <li><a href="../home-04.html">Home 04</a></li>
            </ul>
        </li>
        <li class="current-menu-item"><a href="dashboard.html">Dashboard</a>
        <li class="has-menu-child"><a href="#">Pages</a>
            <ul class="sub-menu">
                <li><a href="../landing-page-send.html">Send Money</a></li>
                <li><a href="../landing-page-receive.html">Receive Money</a></li>
                <li><a href="../how-it-works-send.html">How it works - Send</a></li>
                <li><a href="../how-it-works-receive.html">How it works - Receive</a></li>
                <li><a href="../how-it-works-paybills.html">How it works - Paybills</a></li>
                <li><a href="../landing-page-ecommerce.html">Landing - Ecommerce</a></li>
                <li><a href="../faq.html">Faq</a></li>
                <li><a href="../404.html">404 Error page</a></li>
                <li><a href="../coming-soon.html">Coming soon</a></li>
                <li><a href="../signup.html">Sign up</a></li>
            </ul>
        </li>
        <li class="has-menu-child">
            <a href="#">About</a>
            <ul class="sub-menu">
                <li><a href="../about-01.html">About 01</a></li>
                <li><a href="../about-02.html">About 02</a></li>
            </ul>
        </li>
        <li class="has-menu-child">
            <a href="../blog.html">Blog</a>
            <ul class="sub-menu">
                <li><a href="../blog.html">Blog</a></li>
                <li><a href="../blog-details.html">Blog Details</a></li>
            </ul>
        </li>
        <li><a href="../contact.html">Contact</a></li>
        <li class="has-menu-child pro-menu-drop">
            <a href="#">
                <div class="header-pro-thumb">
                    <img class="rounded-circle" src="{{asset('dashboard/images/profile.jpg')}}" alt="">
                </div>
                @if (Auth::user()->firstname == null and Auth::user()->lastname ==null)
                {{Auth::user()->pseudo}}
                @else
                {{Auth::user()->lastname. " ".Auth::user()->firstname}}
                @endif
                <i class="fas fa-chevron-down"></i>
            </a>
            <ul class="dropdown-menu-md sub-menu profile-drop">
                <li class="dropdown-header">
                    <div>
                        <h5 class="hidden-xs m-b-0 text-primary text-ellipsis">
                            @if (Auth::user()->firstname == null and Auth::user()->lastname ==null)
                            {{Auth::user()->pseudo}}
                            @else
                            {{Auth::user()->firstname. " ".Auth::user()->lastname}}
                            @endif
                        </h5>
                        <div class="small text-muted">
                            @if (Auth::user()->type_compte == 2 )
                            <span>Compte Indiivuel</span>
                            @elseif( Auth::user()->type_compte == 3)
                            <span>Compte Professionnel</span>
                            @endif
                        </div>
                    </div>
                </li>
                <li>
                    <hr class="mx-n3 mt-0">
                </li>
                <li class="nav__create-new-profile-link">
                    <a href="{{route('u.profil')}}">
                        <span>Voir mon profil</span>
                    </a>
                </li>
                <li class="divider"></li>
                <li class="nav__dropdown-menu-items">
                    <a href="{{route('u.update.profil')}}">
                        <i class="icon icon-setting"></i>
                        <span>Paramètre</span>
                    </a>
                </li>
                <li class="nav__dropdown-menu-items">
                    <a href="{{ route('logout') }}"
                        onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                        <i class="icon icon-logout"></i><span>Deconnexion</span>
                    </a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST">@csrf</form>
                </li>
            </ul>
        </li>
    </ul>
</nav>
