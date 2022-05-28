<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
  <!-- Brand Logo -->
  <a href="{{route('admin.home')}}" class="brand-link">
    <img src="{{asset('admin/dist/img/AdminLTELogo.png')}}" alt="gdc logo"
    class="brand-image img-circle elevation-3"
         style="opacity: .8;height:25px;width:25px;">
    <span class="brand-text font-weight-light">{{config('info.app_name')}}</span>
  </a>

  <!-- Sidebar -->
  <div class="sidebar">
    <div class="user-panel mt-3 pb-3 mb-3 d-flex">
      <div class="image">
        <img src="{{asset('admin/dist/img/avatar.png')}}" class="img-circle elevation-2"
         alt="User Image">
      </div>
      <div class="info">
        <a href="#" class="d-block">{{Auth::user()->pseudo}}</a>
      </div>
    </div>

    <nav class="mt-2">
      <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
        <li class="nav-item">
          <a href="{{route('admin.home')}}" class="nav-link {{$page == 'home' ? 'active' : ''}}">
            <i class="nav-icon fas fa-home"></i>
            <p>
              Accueil
            </p>
          </a>
        </li>
        <li class="nav-item">
          <a href="{{route('admin.user.home')}}" class="nav-link {{$page == 'user' ? 'active' : ''}}">
            <i class="nav-icon fas fa-users"></i>
            <p>
              Utilisateurs
            </p>
          </a>
        </li>
        <li class="nav-item">
          <a href="{{route('admin.currency.home')}}" class="nav-link {{$page == 'currency' ? 'active' : ''}}">
            <i class="nav-icon fas fa-coins"></i>
            <p>
              Devises
            </p>
          </a>
        </li>
        <li class="nav-item">
          <a href="{{route('admin.news.home')}}" class="nav-link {{$page == 'news' ? 'active' : ''}}">
            <i class="nav-icon fas fa-newspaper"></i>
            <p>
              Actualités
            </p>
          </a>
        </li>
        {{--<li class="nav-item">
          <a href="#" class="nav-link {{$page == 'newsletter' ? 'active' : ''}}">
            <i class="nav-icon fas fa-newspaper"></i>
            <p>
              Newsletter
            </p>
          </a>
        </li> --}}
        <hr>

        <li class="nav-item">
          <form class="nav-link" onsubmit="return confirm('{{config('info.confirm_operation')}}');"
          action="{{route('logout')}}" method="post">
            <button type="submit" class="btn btn-outline-danger"> <i class="fas fa-power"></i> Se déconnecter</button>
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
          </form>
        </li>
      </ul>
    </nav>
    <!-- /.sidebar-menu -->
  </div>
  <!-- /.sidebar -->
</aside>
