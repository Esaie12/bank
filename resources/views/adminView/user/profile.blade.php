@extends('adminView.layout.layout')

@section('title')
  {{config ('info.app_name')}} - Liste des utilisateurs
@endsection

@section('body_class','hold-transition sidebar-mini')

@section('layout_content')
<div class="wrapper">
  @include ("adminView.layout.top")
  @include ("adminView.layout.aside_left")
  <div class="content-wrapper">
    @include('flash::message')
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Tous les utilisateurs</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{route('admin.home')}}">Accueil</a></li>
              <li class="breadcrumb-item active">Liste des utilisateurs</li>
            </ol>
          </div>
        </div>
      </div>
    </div>

    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-3">

            <!-- Profile Image -->
            <div class="card card-primary card-outline">
              <div class="card-body box-profile">
                <div class="text-center">
                  <img class="profile-user-img img-fluid img-circle"
                       src="{{asset("admin/dist/img/user4-128x128.jpg")}}"
                       alt="Profil">
                </div>

                <h3 class="profile-username text-center">{{$user->pseudo}}</h3>

                <p class="text-muted text-center">{{$user->email}}
                  @if($user->email_verified_at)
                   <span class="text-success font-weight-bolder"> <i class="fas fa-check"></i> </span>
                  @else
                   <span class="text-danger font-weight-bolder"> <i class="fas fa-ban"></i> </span>
                  @endif
                </p>

                <ul class="list-group list-group-unbordered mb-3">
                  <li class="list-group-item">
                    <b>Type compte</b> <a class="float-right">{{$user->type_compte == 2 ? "Particulier" : "Professionnel"}}</a>
                  </li>
                  <li class="list-group-item">
                    <b>Transaction total</b> <a class="float-right">0</a>
                  </li>
                  <li class="list-group-item">
                    <b>Adresse</b> <a class="float-right">{{$user->adresse}}</a>
                  </li>
                </ul>
                @if( $user->is_active )
                  <a href="{{route('admin.user.block',['id'=>$user->id])}}" onclick="return confirm('{{config('info.confirm_operation')}}');" class="btn btn-danger btn-block"><b>Bloquer</b></a>
                @else 
                  @if($user->desactivated_by == "admin")
                    Compte bloqué par un admin le {{$user->desactivated_at}}.
                    <a href="{{route('admin.user.unblock',['id'=>$user->id])}}" onclick="return confirm('{{config('info.confirm_operation')}}');" class="btn btn-warning btn-block"><b>Débloquer ?</b></a>
                  @else   
                    Compte bloqué par l'utilisateur lui-même le {{$user->desactivated_at}}.
                  @endif
                @endif
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
          <div class="col-md-9">
            <div class="card">
              <div class="card-header p-2">
                <ul class="nav nav-pills">
                  <li class="nav-item">
                    <a class="active nav-link font-weight-bolder" href="#activity" data-toggle="tab">
                      Toutes les transactions
                    </a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link font-weight-bolder" href="#profil" data-toggle="tab">
                      Profil professionnel
                    </a>
                  </li>
                </ul>
              </div><!-- /.card-header -->
              <div class="card-body">
                <div class="tab-content">
                  <div class="active tab-pane" id="activity">
                    <table id="example1" class="table table-bordered table-striped">
                      <thead>
                        <tr>
                          <th>Type</th>
                          <th>Compte</th>
                          <th>Montant</th>
                          <th>Date</th>
                          <th>Statut</th>
                          <th>Actions</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td colspan="6" class="text-center"> Aucune donnée en attendant</td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                  <div class="tab-pane" id="profil">
                    <div>
                      <div>
                        <p> <strong>Nom société</strong>: {{$user->nameSociete}} </p>
                        <p> <strong>adresse société</strong>: {{$user->adresseSociete}} </p>
                        <p> <strong>Téléphone société</strong>: {{$user->telephoneSociete}} </p>
                        <p> <strong>Service société</strong>: {{$user->serviceSociete}} </p>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- /.tab-content -->
              </div><!-- /.card-body -->
            </div>
            <!-- /.nav-tabs-custom -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>

  </div>
</div>
@endsection
