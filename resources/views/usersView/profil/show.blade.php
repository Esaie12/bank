@extends('layout_dash.template')
@section('contenu')
<div class="profile-area">
    <h3 class="admin-heading bg-offwhite">
        <a href="{{ route('u.update.profil') }}" class="" >
            <i class="fas fa-edit mr-1"></i>Modifier</a>
        <p>Profil Personnel</p>
        <span>Retrouvez ici vos différentes informations</span>
    </h3>


    <!-- Edit personal info End -->
    <div class="infoItems shadow">
        <!--ul class="nav nav-tabs">
            <li><a data-toggle="tab" href="#menu1" class="active">Informations personnelles</a></li>
            <li><a data-toggle="tab" href="#menu2">Paramètres de connexion et de sécurité</a></li>
        </ul-->
        <form class="form-group" enctype="multipart/form-data" action="{{ route('u.pp.save') }}" method="POST" >
            @csrf
            <div class="row">
                <div class="col-4">
                    <input type="file" name="photo" id="" class="">
                    @error('photo')
                    <span class="text-danger">Veillez choisir une photo</span>
                    @enderror
                </div>
                <div class="col-4">
                    <button class="btn btn-primary" type="submit">Changer ma photo </button>
                </div>
            </div>
        </form>

        <div class="tab-content">
            @if(Auth::user()->type_compte == 2)
            <div id="menu1" class="tab-pane fade in active">

                <div class="row">
                    <p class="col-sm-3"><b>Pseudo du compte</b></p>
                    <p class="col-sm-9">{{$infos->pseudo}}</p>
                </div>
                <hr>
                <div class="row">
                    <p class="col-sm-3"><b>Nom</b></p>
                    <p class="col-sm-9">{{$infos->firstname}}</p>
                </div>
                <hr>
                <div class="row">
                    <p class="col-sm-3"><b>Prénom(s)</b></p>
                    <p class="col-sm-9">{{$infos->lastname}}</p>
                </div>
                <hr>
                <div class="row">
                    <p class="col-sm-3"><b>Date d'anniversaire</b></p>
                    <p class="col-sm-9">{{$infos->dateAnnif}}</p>
                </div>
                <hr>
                <div class="row">
                    <p class="col-sm-3"><b>Status du compte</b></p>
                    <p class="col-sm-9">
                        <span class="text-success mr-2" data-toggle="tooltip" data-original-title="Active"><i
                                class="fas fa-check-circle"></i></span>Compte valide</p>
                </div>
                <hr>
                <div class="row">
                    <p class="col-sm-3"><b>Adresse email</b></p>
                    <div class="col-sm-9">
                        <p class="mb-0">{{$infos->email}} </p>
                    </div>
                </div>
                <hr>
                <div class="row">
                    <p class="col-sm-3"><b>Numero de téléphone</b> </p>
                    <p class="col-sm-9">{{$infos->telephoneUser}}</p>
                </div>
                <hr>
                <div class="row">
                    <p class="col-sm-3"><b>Address</b></p>
                    <p class="col-sm-9">{{$infos->adresse}}</p>
                </div>
            </div>
            @elseif(Auth::user()->type_compte == 3)

            <div id="menu1" class="tab-pane fade in active">
                <div class="row">
                    <p class="col-sm-3"><b>Nom de l'entreprise</b></p>
                    <p class="col-sm-9">{{$infos->pseudo}}</p>
                </div>
                <hr>
                <div class="row">
                    <p class="col-sm-3"><b>Nom du propriétaire</b></p>
                    <p class="col-sm-9">{{$infos->firstname}}</p>
                </div>
                <hr>
                <div class="row">
                    <p class="col-sm-3"><b>Prénom(s) du propriétaire</b></p>
                    <p class="col-sm-9">{{$infos->lastname}}</p>
                </div>
                <hr>
                <div class="row">
                    <p class="col-sm-3"><b>Date d'anniversaire</b></p>
                    <p class="col-sm-9">{{$infos->dateAnnif}}</p>
                </div>
                <hr>
                <div class="row">
                    <p class="col-sm-3"><b>Status du compte</b></p>
                    <p class="col-sm-9">
                        <span class="text-success mr-2" data-toggle="tooltip" data-original-title="Active"><i
                                class="fas fa-check-circle"></i></span>Compte valide</p>
                </div>
                <hr>
                <div class="row">
                    <p class="col-sm-3"><b>Adresse email</b></p>
                    <div class="col-sm-9">
                        <p class="mb-0">{{$infos->email}} </p>
                    </div>
                </div>
                <hr>
                <div class="row">
                    <p class="col-sm-3"><b>Numero de téléphone de l'entreprise</b> </p>
                    <p class="col-sm-9">{{$infos->telephoneSociete}}</p>
                </div>
                <hr>
                <div class="row">
                    <p class="col-sm-3"><b>Numero de téléphone personnel</b> </p>
                    <p class="col-sm-9">{{$infos->telephoneUser}}</p>
                </div>
                <hr>
                <div class="row">
                    <p class="col-sm-3"><b>Address</b></p>
                    <p class="col-sm-9">{{$infos->adresse}}</p>
                </div>
                <hr>
                <div class="row">
                    <p class="col-sm-3"><b>Services de la société</b></p>
                    <p class="col-sm-9">
                        {{$infos->serviceSociete}}
                    </p>
                </div>
            </div>

            @endif

        </div>


    </div>



</div>
@endsection
