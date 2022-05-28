<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    private const PAGE = "user";

    public function list(){
        $users = User::all();
        return view("adminView.user.list",[
            "users"=>$users,
            "page"=>self::PAGE
        ]);
    }

    public function profile($id){
      $user = User::findOrFail($id);
      return view("adminView.user.profile",[
        "user"=>$user,
        "page"=>self::PAGE
      ]);
    }

    public function blockAccount($id){
      $user = User::findOrFail($id);
      if(!$user->is_active){
        flash("Cet utilisateur n'est pas actif sur le site")->error();
        return redirect()->back();
      }
      if($user->role == 1){
        flash("Cet utilisateur est un administrateur")->error();
        return redirect()->back();
      }
      $user->is_active = false;
      $user->desactivated_by = "admin";
      $user->desactivated_at = new \DateTime();
      $user->admin_can_active_account = true;
      $user->save();
      // déconnecter l'utilisateur ici
      flash("Utilisateur bloqué avec succès")->success();
      return redirect()->route('admin.user.profile',["id"=>$user->id]);
    }

    public function unblockAccount($id){
      $user = User::findOrFail($id);
      if($user->is_active){
        flash("Cet utilisateur est actif sur le site")->error();
        return redirect()->back();
      }

      if($user->desactivated_by == "user"){
        flash("Vous ne pouvez pas activer ce compte. Il a été désactivé par l'utilisateur lui-même")->error();
        return redirect()->back();
      }
      $user->is_active = true;
      $user->desactivated_by = null;
      $user->desactivated_at = null;
      $user->admin_can_active_account = true;
      $user->save();
      // déconnecter l'utilisateur ici
      flash("Utilisateur débloqué avec succès")->success();
      return redirect()->route('admin.user.profile',["id"=>$user->id]);
    }
}
