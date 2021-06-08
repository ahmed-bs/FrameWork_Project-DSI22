<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
Route::apiResource('admin/commandes', 'Api\Admin\CommandeController');
Route::apiResource('admin/livraisons', 'Api\Admin\LivraisonController');
Route::apiResource('admin/produits', 'Api\Admin\ProduitController');
Route::apiResource('admin/catalogues', 'Api\Admin\CatalogueController');
Route::apiResource('admin/clients', 'Api\Admin\ClientController');
Route::apiResource('admin/paniers', 'Api\Admin\PanierController');

