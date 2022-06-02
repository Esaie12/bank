<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rule;
use Laravel\Fortify\Contracts\CreatesNewUsers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\PasswordValidationRules;


class UserController extends Controller
{
    function profil() {
        $data= User::find(Auth::user()->id);
        return view('usersView.profil.show',['infos'=>$data]);
    }
    function PhotoProfil(Request $req){

        $req->validate([
            'photo'=>'required|file|mimes:png,jpg,jpeg,pdf,docx,doc|max:5000000',
        ]);

        $dest = public_path('public/upload_profil');
        $name ='pictur_'.Auth::user()->id.'-'.date('Y-m-d').'.'.$req['photo']->extension();

        $req['photo']->move($dest, $name);

        $pay= User::find(Auth::user()->id);
        $pay->photo='public/upload_profil/'.$name;
        $pay->save();

        return redirect()->route('u.profil');
    }
    function DeletePhotoProfil(){

        $pay= User::find(Auth::user()->id);
        $pay->photo=null;
        $pay->save();

        return redirect()->route('u.profil');
    }

    function Updateprofil(){
        $data= DB::table('users')->where('id',Auth::user()->id)->get();

        return view('usersView.profil.edit',['infos'=>$data]);
    }
    function SaveProfil(Request $req){
        if($req['type']=="ind"){

            $req->validate([
                /*'pseudo' => ['required', 'string', 'max:255'],
                'dateAnnif' => ['required'],
                'email' => [
                    'required',
                    'string',
                    'email',
                    'max:255',
                    Rule::unique(User::class),
                ],
                'password' => ['required'],
                'password_confirmation'=> ['required']*/
            ]);
            $user = User::find($req['id']);

            $user->pseudo = $req['pseudo'];
            $user->firstname = $req['firstname'];
            $user->lastname = $req['lastname'];
            $user->dateAnnif = $req['dateAnnif'];
            $user->telephoneUser = $req['telephoneUser'];
            $user->adresse = $req['adresse'];
            $user->save();

        }elseif($req['type']=="pro"){

            $user = User::find($req['id']);

            $user->pseudo = $req['pseudo'];
            $user->firstname = $req['firstname'];
            $user->lastname = $req['lastname'];
            $user->dateAnnif = $req['dateAnnif'];
            $user->telephoneUser = $req['telephoneUser'];
            $user->telephoneSociete = $req['telephoneSociete'];
            $user->adresse = $req['adresse'];
            $user->adresseSociete = $req['adresseSociete'];
            $user->save();

        }



        return redirect()->route('u.profil');
    }

    function SavePassword(Request $req){
        $req->validate([

        ]);

        if($req['password'] == $req['password_confirm']){

            $user = User::where('id', Auth::user()->id)->first();

            if( Hash::check($req['passwordNext'], $user->password) ){
                $user->password = Hash::make($req['password']);
                $user->save();

                return redirect()->route('u.update.profil')->with('msg-success', 'Mot de passe bien modifié');

            }else{
                return redirect()->route('u.update.profil')->with('msg-error2', 'Erreur, mot de passe erroné');
            }
        }else{
            return redirect()->route('u.update.profil')->with('msg-error', 'Erreur, mot de passe erroné');
        }




    }

    function Setting(){
        $data= DB::table('users')->where('id',Auth::user()->id)
        ->get(['language', 'currency', 'is_active' , 'quiz1_id', 'answer1', 'quiz2_id', 'answer2', 'quiz3_id', 'answer3' ]);


        return view('usersView.setting',['infos'=>$data]);
    }

    function SaveSetting(Request $req){

        $user = User::find(Auth::user()->id);
        $user->language = $req['language'];
        $user->currency = $req['currency'];

        $user->quiz1_id=$req['quiz1'];
        $user->answer1 =$req['answer1'];

        $user->quiz2_id=$req['quiz2'];
        $user->answer2 =$req['answer2'];

        $user->quiz3_id=$req['quiz3'];
        $user->answer3 =$req['answer3'];

        $user->save();

        return redirect()->route('u.setting')->with('msg','Modification enregistrée');
    }
    function Inactif(Request $req){

        $user = User::find(Auth::user()->id);
        $user->is_active = 0;
        $user->desactivated_by='User';
        $user->desactivated_at= date('Y-m-d H:i');
        $user->save();


        auth()->logout();
        return redirect('/');

        //return redirect()->route('u.setting')->with('msg-inactif','Compte à été bloqué');
    }

    function Actif(Request $req){

        $user = User::find(Auth::user()->id);
        $user->is_active = 1;
        $user->desactivated_by=null;
        $user->desactivated_at=null;
        $user->save();

        return redirect()->route('u.setting')->with('msg-actif','Compte à été débloqué');
    }
}
