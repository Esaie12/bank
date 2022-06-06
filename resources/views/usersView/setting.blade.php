@extends('layout_dash.template')
@section('contenu')
<div class="profile-area">
    <h3 class="admin-heading bg-offwhite">
        <a href="{{ route('u.profil') }}" class="" >
            <i class="fas fa-edit mr-1"></i>Voir mon profil</a>
        <p>Paramètres </p>
    </h3>
    <!-- Edit personal info  -->
    <div id="edit-personal-details" class="accord bg-offwhite shadow">

    </div>
    <!-- Edit personal info End -->


    <!-- Edit personal info End -->
    @foreach ($infos as $item)
    <div class="infoItems shadow">


        <div class="content-edit-area mt-4">

            <div class="edit-header">
                <h5 class="title">Paramètres du compte</h5>
            </div>
            @if( Session::get('msg'))
                <div class="alert">
                    <div class="alert-success py-3">
                       <span class="px-3"> {{ Session::get('msg') }}</span>
                    </div>
                </div>
            @endif

            @if( Session::get('msg-inactif'))
                <div class="alert">
                    <div class="alert-danger py-3">
                       <span class="px-3"> {{ Session::get('msg-inactif') }}</span>
                    </div>
                </div>
            @endif

            @if( Session::get('msg-actif'))
                <div class="alert">
                    <div class="alert-warning py-3">
                       <span class="px-3"> {{ Session::get('msg-actif') }}</span>
                    </div>
                </div>
            @endif

            <div class="edit-content">

                <form  method="post" action="{{ route('u.save.setting') }}" >
                    @csrf

                    <div class="row">
                        <div class="col-12">
                            <div class="form-group">
                                <label for="language">Langue</label>
                                <select class="lang-select custom-select"  name="language">
                                    @if($item->language == 1)
                                    <option value="1" selected >Français</option>
                                    @else
                                    <option value="1">Français</option>
                                    @endif

                                    @if($item->language == 2)
                                    <option value="2" selected >Anglais</option>
                                    @else
                                    <option value="2">Anglais</option>
                                    @endif

                                </select>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-group">
                                <label for="timezone">Devises</label>
                                <select class="custom-select" id="timezone" name="currency">
                                    @if($item->currency == 1)
                                    <option value="1" selected >FCFA</option>
                                    @else
                                    <option value="1">FCFA</option>
                                    @endif

                                    @if($item->currency == 2)
                                    <option value="2" selected >USD</option>
                                    @else
                                    <option value="2">USD</option>
                                    @endif
                                </select>
                            </div>
                        </div>

                        <div class="col-12">
                            <label for="timezone">Questions de sécurité et reponse</label>
                        </div>
                        <?php  $i= 0; ?>
                        @foreach($les_quizs as $quiz)
                        <?php  $i+=1; ?>
                        <div class="col-12">
                            <div class="form-group">
                                <span class="text-primary">Question {{$i}}:</span>
                                <select class="custom-select"  name="{{ "quiz".$i}}">
                                    <option value="{{$quiz->id}}" >{{$quiz->quiz}}</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-group">
                                <span class="text-success">Reponse {{$i}}:</span> <?php $on="answer".$i ; ?>
                                <input type="text" class="form-control" name="{{ "answer".$i}}" id="" value=" <?php if($item->$on != null){ echo $item->$on; } ?>" >
                                @error('answer')
                                <span>Veillez entrer une reponse</span>
                                @enderror
                            </div>

                        </div>
                        @endforeach

                        <button class="btn btn-default" type="submit"><i class="far fa-save"></i>Sauvegarder les changements</button>
                    </div>
                </form>

            </div>
        </div>



        <div class="content-edit-area mt-5">
            <div class="edit-header">
                <h5 class="title">Modifier son mot de passe</h5>
            </div>
            <div class="edit-content">
                <form id="change-password" method="post" action="{{ route('u.profil.passwordEdit') }}" >
                    @csrf

                    <div class="form-group">
                        <label for="Current-pass">Mot de passe actuel</label>
                        <input type="text" class="form-control" name="passwordNext"
                            placeholder="Enter Current Password">
                    </div>
                    <div class="form-group">
                        <label for="new-password">Nouveau mot de passe</label>
                        <input type="text" class="form-control" name="password" required
                            placeholder="Ecrivez le nouveau mot de passe">
                    </div>
                    <div class="form-group">
                        <label for="confirmPassword">Confirmer le nouveau mot de passe</label>
                        <input type="text" class="form-control" name="password_confirm"  placeholder="Re-ecrivez encore le nouveau mot de passe">
                    </div>
                    <button class="btn btn-default" type="submit"><i class="far fa-save"></i>Sauvegarder les changements</button>
                </form>
            </div>
        </div>

        @if($item->is_active == 1)
        <div class="content-edit-area mt-5">
            <div class="edit-header">
                <h5 class="title">Supprimer son compte</h5>
            </div>
            <div class="edit-content">
                <form id="change-password" method="post" action="{{ route('u.desactive.account') }}" onsubmit="return confirm('Voulez-vous vraiment bloquer votre compte ?') "  >
                    @csrf
                    <button class="btn btn-danger" type="submit">Supprimé</button>
                </form>
            </div>
        </div>
        @elseif($item->is_active == 0)
        <div class="content-edit-area mt-5">
            <div class="edit-header">
                <h5 class="title">Debloquer son compte</h5>
            </div>
            <div class="edit-content">
                <form id="change-password" method="post" action="{{ route('u.active.account') }}" onsubmit="return confirm('Vous etes sur le point de débloquer votre compte ') " >
                    @csrf
                    <button class="btn btn-success" type="submit">Oui, je veux debloquer mon compte</button>

                </form>
            </div>
        </div>
        @endif

    </div>
    @endforeach


</div>
@endsection
