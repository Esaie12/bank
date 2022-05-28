<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class DepositController extends Controller
{
    function Start() {
        return view('usersView.depot.home');
    }

    function SendAutherUser(){
        return view('usersView.depot.send');
    }
    function SendAutherverify(Request $req){

        $req->validate([
            'email'=>'required',
        ]);
        if($req['email'] != Auth::user()->email){

            $data= User::where('email', $req['email'])->first();

            if(!empty($data)){
                return view('usersView.depot.details',['info'=>$data]);
            }else{
                return view('usersView.depot.send',['msg'=>"error"]);
            }

        }else{
            return view('usersView.depot.send',['msg'=>"error"]);
        }


    }
}
