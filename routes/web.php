<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CartController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PanierController;
use App\Http\Controllers\CommandeController;
use App\Http\Controllers\PaiementController;
use App\Http\Controllers\ReponseControlller;

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

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');


Route::get('/', [HomeController::class, 'index']);

Route::get('produit/show/{slug}', [HomeController::class, 'showproduit'])->name('showproduit');
Route::resource('cart', CartController::class);

Route::get('passer-a-la-caisse', [CommandeController::class, 'passeralacaisse'])->name('passeralacaisse');
Route::post('passer-a-la-caisse',[CommandeController::class, 'store'])->name('commandestore');

Route::get('confirmation',[CommandeController::class, 'confirmation'])->name('confirmation');
Route::get('paiement-en-ligne/{reference}', [PaiementController::class, 'index'])->name('paiement.index');
Route::post('paiement-en-ligne', [PaiementController::class, 'store'])->name('paiement.store');

Route::get('paiement/success',[ReponseControlller::class, 'success'])->name('paiement.success');
Route::get('paiement/cancel',[ReponseControlller::class, 'cancel'])->name('paiement.cancel');

require __DIR__.'/auth.php';
