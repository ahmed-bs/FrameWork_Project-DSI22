<?php

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

Route::get('/', 'HomeController@welcome')->name('welcome');
Auth::routes();
/*


Route::get('/home', 'HomeController@index')->name('home');


Route::get('/admin-dashboard', function () {
    return view('admin.dashboard');
})->middleware('auth', 'admin');

Route::resource('clients', 'Admin\ClientController');
Route::resource('produits', 'Admin\ProduitController');


Route::resource('catalogues', 'Admin\CatalogueController');

Route::resource('livraisons', 'Admin\LivraisonController');

Route::resource('commandes', 'Admin\CommandeController');
Route::resource('paiements', 'Admin\PaiementController');
Route::resource('paniers', 'Admin\PanierController');

Route::post('/panier/ajouter', 'CartController@store')->name('cart.store');
Route::get('/panier', 'CartController@index')->name('cart.index');
Route::delete('/panier/{rowId}', 'CartController@destroy')->name('cart.destroy');

Route::get('/videpanier', function () {
    Cart::destroy();

});
Route::get('/paiement', 'CheckController@index')->name('check.index');
Route::post('/paiement', 'CheckController@charge')->name('check.charge');

});*/

Route::get('/videpanier', function () {
    Cart::destroy();
});
Route::resource('views','ProduitAjoutController');
Route::middleware('auth')->group(function () {
    Route::get('/home', 'HomeController@index')->name('home');
    Route::post('/panier/ajouter', 'CartController@store')->name('cart.store');
    Route::get('/panier', 'CartController@index')->name('cart.index');
    Route::delete('/panier/{rowId}', 'CartController@destroy')->name('cart.destroy');


    Route::get('/paiement', 'CheckController@index')->name('check.index');
    Route::post('/paiement', 'CheckController@charge')->name('check.charge');
    Route::post('/paiement', 'CheckController@store')->name('check.store');
    Route::get('/merci', 'CheckController@thankyou')->name('check.thankyou');
    Route::middleware('admin')->namespace('Admin')->prefix('admin')->group(function () {
        Route::get('/dashboard', function () {
            return view('admin.dashboard');
        })->name('admin.dashboard');
        Route::resource('clients', 'ClientController');
        Route::resource('produits', 'ProduitController');
        Route::resource('catalogues', 'CatalogueController');  
        Route::resource('livraisons', 'LivraisonController');
        Route::resource('commandes', 'CommandeController');
        Route::resource('paiements', 'PaiementController');
        Route::resource('paniers', 'PanierController');
    } );
    
} );

