<?php

use App\Http\Controllers\Admin\UserController as AdminUserController;
use Illuminate\Support\Facades\Route;
use App\Providers\FortifyServiceProvider;
use App\http\Controllers\UserController;
use App\Http\Controllers\Admin\NewsController as AdminNewsController;
use App\Http\Controllers\Admin\HomeController as AdminHomeController;
use App\Http\Controllers\admin\CurrencyController as AdminCurrencyController;

use App\Http\Controllers\CardController;
use App\Http\Controllers\DepositController;
use App\Http\Controllers\DemandeController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () { return view('acceuil');  });
Route::get('/inscription-personnel', function () { return view('auth.registerIndividual'); })->name('register.personnel');
Route::get('/inscription-professionnel', function () { return view('auth.registerPro'); })->name('register.professionnel');

//Pour les administrateurs
Route::group( [ 'middleware'=> ['authGroup', 'adminAcces'] ],function(){

    Route::name("admin.")->group(function(){
        // home
        Route::get('/', [AdminHomeController::class,'home'])->name("home");
        //user
        Route::name("user.")->group(function(){

            Route::prefix("/user")->group(function(){

                Route::get("/list",[AdminUserController::class,'list'])->name('home');
                Route::get("/profile/{id?}",[AdminUserController::class,'profile'])
                       ->name('profile')
                       ->where("id","[0-9]+");
                Route::get("/block-account/{id?}",[AdminUserController::class,'blockAccount'])
                       ->name('block')
                       ->where("id","[0-9]+");
                Route::get("/unblock-account/{id?}",[AdminUserController::class,'unblockAccount'])
                       ->name('unblock')
                       ->where("id","[0-9]+");

            });
        });
        //news
        Route::name("news.")->group(function(){
            Route::prefix("/news")->group(function(){

                Route::get("/list",[AdminNewsController::class,'list'])->name('home');
                Route::get("/create",[AdminNewsController::class,'create_view'])
                       ->name('new');
                Route::post("/create",[AdminNewsController::class,'create'])
                       ->name('new.post');
                Route::get("/edit/{id?}",[AdminNewsController::class,'edit_view'])
                       ->name('edit')
                       ->where("id","[0-9]+");
                Route::post("/edit/{id?}",[AdminNewsController::class,'edit'])
                       ->name('edit.post')
                       ->where("id","[0-9]+");
                Route::post("/delete/{id?}",[AdminNewsController::class,'delete'])
                       ->name('delete')
                       ->where("id","[0-9]+");
                Route::get("/show/{id?}",[AdminNewsController::class,'show'])
                       ->name('show')
                       ->where("id","[0-9]+");
            });

        });
        //cuurency // devises
        Route::name("currency.")->group(function(){
              Route::prefix("/currency")->group(function(){

                  Route::get("/list",[AdminCurrencyController::class,'list'])->name('home');
                  Route::get("/create",[AdminCurrencyController::class,'create_view'])
                         ->name('new');
                  Route::post("/create",[AdminCurrencyController::class,'create'])
                         ->name('new.post');
                  Route::get("/edit/{id?}",[AdminCurrencyController::class,'edit_view'])
                         ->name('edit')
                         ->where("id","[0-9]+");
                  Route::post("/edit/{id?}",[AdminCurrencyController::class,'edit'])
                         ->name('edit.post')
                         ->where("id","[0-9]+");
                  Route::post("/delete/{id?}",[AdminCurrencyController::class,'delete'])
                         ->name('delete')
                         ->where("id","[0-9]+");
              });

          });
    });

});

//Pour les utilisateurs
Route::group(['middleware'=>[ 'userAcces', 'authGroup', 'verifiedGroup'] ],function(){

    Route::name('u.')->group(function(){

        Route::get('/home', function () { return view('usersView.dashboard'); })->name('dashboard');
        Route::get('/profile', [UserController::class, 'profil' ])->name('profil');
        Route::get('/update-profile', [UserController::class, 'Updateprofil' ])->name('update.profil');
        Route::post('/update-profile', [UserController::class, 'SaveProfil' ])->name('profil.save');
        Route::post('/update-account', [UserController::class, 'SavePassword' ])->name('profil.passwordEdit');

        Route::get('/bank', [CardController::class, 'store'])->name('bank');
        Route::get('/bank/add', [CardController::class, 'Add'])->name('bank.add');
        Route::post('/bank/add', [CardController::class, 'AddSave'])->name('bank.add.save');
        Route::get('/bank/delete/{id}',[CardController::class, 'Effacer'])
        ->name('bank.delete')->where("id","[0-9]+");

        Route::get('/deposit-money', [DepositController::class, 'Start'] )->name('depot');

        Route::get('/send-money', [DepositController::class, 'SendAutherUser'] )->name('send');
        Route::post('/send-money-verify', [DepositController::class, 'SendAutherverify'] )->name('send.verify');

        Route::get('/request-money-payment', [DemandeController::class,'Starter'])->name('request.starter');
        Route::post('/request-money-payment', [DemandeController::class,'Starter_Post'])->name('request.starter');
        Route::post('/request-money-payment-confirm', [DemandeController::class,'Confirm'])->name('request.confirm');

        Route::get('/settings', [UserController::class, 'Setting' ] )->name('setting');
        Route::post('/settings-account', [UserController::class, 'SaveSetting' ])->name('save.setting');

        Route::post('/block-account', [UserController::class, 'Inactif' ])->name('desactive.account');
        Route::post('/unblock-account', [UserController::class, 'Actif' ])->name('active.account');
    });


});




