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