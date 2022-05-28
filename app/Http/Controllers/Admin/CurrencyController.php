<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\CreateCurrencyRequest;
use Illuminate\Http\Request;
use App\Models\Devise;

/**
* Devise
*/
class CurrencyController extends Controller
{
   private const page = "currency";

   public function list(){
      $c = Devise::all();
      return view('adminView.currency.list',[
        "currencies"=>$c,
        "page"=>self::page
      ]);
   }

   public function create_view(){
     return view('adminView.currency.create',[
       "page"=>self::page
     ]);
   }
   public function create(CreateCurrencyRequest $request){
     $devise = new Devise();
     $devise->intitule = $request->intitule;
     $devise->symbole = $request->symbole;
     $devise->abbreviation = $request->abbreviation;
     $devise->save();
     flash("Devise ajoutée avec succès")->success();
     return redirect()->route("admin.currency.home");
   }

   public function edit_view($id){
     $devise = Devise::findOrFail($id);
     return view('adminView.currency.edit',[
       "page"=>self::page,
       "currency"=>$devise
     ]);
   }
   public function edit($id, CreateCurrencyRequest $request){
     $devise = Devise::findOrFail($id);
     $devise->intitule = $request->intitule;
     $devise->symbole = $request->symbole;
     $devise->abbreviation = $request->abbreviation;
     $devise->save();
     flash("Devise modifiée avec succès")->success();
     return redirect()->route("admin.currency.home");
   }

   public function delete($id){
     $devise = Devise::findOrFail($id);
     $devise->delete();
     flash("Devise supprimée avec succès")->error();
     return redirect()->route("admin.currency.home");
   }

}
