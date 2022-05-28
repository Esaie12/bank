<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Demande;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class DemandeController extends Controller
{
    function Starter(){
        return view('usersView.request.starter');
    }

    function Starter_Post(Request $req){
        $req->validate([
            'email'=>'required',
        ]);

        if($req['email'] != Auth::user()->email){
            $data= User::where('email', $req['email'])->first();

            if(!empty($data)){
                return view('usersView.request.validate',['info'=>$data]);
            }else{
                return view('usersView.request.starter',['msg'=>"error"]);
            }

        }else{
            return view('usersView.request.starter',['msg'=>"error"]);
        }


    }

    function Confirm(Request $req){

        $req->validate([
            'idRec'=>'required',
            'amount'=>'required',
            'devise'=>'required',
            'description'=>'required',
            'dateBut'=>'required',
        ]);
        /*$dem = Demande::create([
            'idUser' => Auth::user()->id,
            'receve' => $req['idRec'],
            'amount' => $req['amount'],
            'description'=>$req['description'],
            'devise'=>$req['devise'],
            'delai' => $req['dateBut'],
            'statut'=>0,
        ]);*/


        $re = new Demande();
        $re->idUser = Auth::user()->id;
        $re->receve = $req['idRec'];
        $re->amount = $req['amount'];
        $re->description = $req['description'];
        $re->devise = $req['devise'];
        $re->delai = $req['dateBut'];
        $re->statut=0;
        $re->save();

        $req = DB::table('demandes')->join('users', 'users.id', 'demandes.receve')->where('idUser',Auth::user()->id)
        ->where('receve',$req['idRec'])->where('amount',$req['amount'])->where('delai',$req['dateBut'])
        ->where('statut',0)->limit(1)->OrderByDesc('demandes.id')->get(['users.pseudo', 'users.email', 'demandes.amount' ,'demandes.devise']);

        return view('usersView.request.success',['infos'=>$req]);
    }
}
