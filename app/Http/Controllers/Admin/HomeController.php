<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\News;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    private const page_name = "home";

    public function home()
    {
        $news_number = count(News::all());
        $users_number = count(
            DB::table("users")
                ->where('is_active','=',true)
                ->get()
        );
        $agence =  count(
            DB::table("users")
                ->where('is_active','=',true)
                ->where('type_compte','=',3)
                ->get()
        );
        return view("adminView.dashboard",[
            "page"=>self::page_name,
            "news_number"=>$news_number,
            "agence_number"=>$agence,
            "users_number"=>$users_number
        ]);
    }
}
