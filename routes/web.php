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
use App\Http\Controllers\PayPalController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\TransactionController;
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

        Route::get('/transactions-history', [TransactionController::class, 'History'])->name('transaction');

        Route::get('/bank', [CardController::class, 'store'])->name('bank');
        Route::get('/bank/add', [CardController::class, 'Add'])->name('bank.add');
        Route::post('/bank/add', [CardController::class, 'AddSave'])->name('bank.add.save');
        Route::get('/bank/delete/{id}',[CardController::class, 'Effacer'])
        ->name('bank.delete')->where("id","[0-9]+");

        Route::get('/bank/edit/{id}',[CardController::class, 'Show'])
        ->name('bank.edit')->where("id","[0-9]+");
        Route::post('/bank/edit-save', [CardController::class, 'EditSave'])->name('bank.edit.save');

        Route::get('/deposit-money', [DepositController::class, 'Start'] )->name('depot');

        //
        Route::get('/make-payment-store', [PaymentController::class, 'MakePaiementStore'] )->name('make.paiment.store');
        Route::get('/make-payment', [PaymentController::class, 'MakePaiement'] )->name('make.paiment');
        Route::post('/make-payment-next', [PaymentController::class, 'MakePaiementNext'] )->name('make.payment.next');

        Route::get('/send-money', [DepositController::class, 'SendMoney'] )->name('send');
        Route::post('/send-money-verify', [DepositController::class, 'SendMoneyVerify'] )->name('send.verify');
        Route::post('/send-money-confirm', [DepositController::class,'Confirm'])->name('send.confirm');

        Route::get('/request-money-payment', [DemandeController::class,'Starter'])->name('request.starter');
        Route::post('/request-money-payment', [DemandeController::class,'Starter_Post'])->name('request.starter');
        Route::post('/request-money-payment-confirm', [DemandeController::class,'Confirm'])->name('request.confirm');

        Route::get('/settings', [UserController::class, 'Setting' ] )->name('setting');
        Route::post('/settings-account', [UserController::class, 'SaveSetting' ])->name('save.setting');

        Route::post('/block-account', [UserController::class, 'Inactif' ])->name('desactive.account');
        Route::post('/unblock-account', [UserController::class, 'Actif' ])->name('active.account');
    });


});


Route::get('create-transaction', [PayPalController::class, 'createTransaction'])->name('createTransaction');
Route::post('create-transaction-confirm',[PayPalController::class, 'createTransactionConfirm'])->name('createTransaction.confirm');

Route::post('process-transaction', [PayPalController::class, 'processTransaction'])->name('processTransaction');
Route::get('success-transaction', [PayPalController::class, 'successTransaction'])->name('successTransaction');
Route::get('cancel-transaction', [PayPalController::class, 'cancelTransaction'])->name('cancelTransaction');



