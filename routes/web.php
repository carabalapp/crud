<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ArticuloController;

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

Route::get('/', function () {
    return view('layouts.plantillabase');
});

// Route::resource('articulos','app\Http\Cotrollers\ArticuloController');
Route::resource('articulo',ArticuloController::class);
// Route::get('articulo/create',[ArticuloController::class, 'create']);
// Route::post('articulo',[ArticuloController::class, 'store']);
// Route::get('articulo/edit',[ArticuloController::class, 'edit']);
// Route::put('articulo/{{$articulo->id}}/edit',[ArticuloController::class, 'edit']);

// Route::get('/form', 'UserController@userForm');
// Route::get('/form',[UserController::class, 'userForm']);
