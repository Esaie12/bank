<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Transaction;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;


class TransactionController extends Controller
{
    function History(){
        $data = DB::table('transactions')->where('user_id',Auth::user()->id)->get();

        return view('usersView.transaction.store',['transactions'=>$data]);
    }
}
