<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ProduitController;
use App\Http\Controllers\CategorieController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\VendeuseController;
use App\Http\Controllers\VendeusrProduitController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();


Route::get('admin/login', [AdminController::class, 'login'])->name('admin.login');
Route::get('admin/produits/enattente', [AdminController::class, 'produitenattente'])->name('admin.produitenattente');
Route::get('vendeuses/login', [VendeuseController::class, 'vendeuselogin'])->name('vendeuses.login');
    Route::get('/home', [AdminController::class, 'index'])->name('home');


        route::resource('produits', ProduitController::class);
        route::resource('vendeuseproduits', VendeusrProduitController::class);
        route::resource('categories', CategorieController::class);
        Route::resource('clients', ClientController::class);
    Route::patch('produits/{id}/update-status', [ProduitController::class, 'updateStatus'])->name('produits.updateStatus');



        Route::resource('vendeuses', VendeuseController::class);
        Route::get('vendeuse/home/produits', [VendeuseController::class, 'index'])->name('vendeuse.produits');
        Route::get('vendeuse/home', [VendeuseController::class, 'vendeusehome'])->name('vendeuse.home');

        Route::get('collaborateurs', [VendeuseController::class, 'collaborateurindex'])->name('collaborateurs.index');
        Route::post('collaborateurs', [VendeuseController::class, 'storecollaborateur'])->name('collaborateurs.store');
        Route::get('collaborateurs/{id}/edit', [VendeuseController::class, 'editcollaborateur'])->name('collaborateurs.edit');
        Route::put('collaborateurs/{id}', [VendeuseController::class, 'updatecollaborateur'])->name('collaborateurs.update');
        Route::delete('collaborateurs/{id}', [VendeuseController::class, 'destroycollaborateur'])->name('collaborateurs.destroy');


