<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\UsuarioController;
use App\Http\Controllers\VeiculoController;
use App\Http\Controllers\EstacionamentoController;

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
    return view('auth/login');
});

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Auth::routes();

Route::get('/home', 'App\Http\Controllers\HomeController@index')->name('home');

Route::group(['middleware' => 'auth'], function () {
	Route::resource('user', 'App\Http\Controllers\UserController', ['except' => ['show']]);
	Route::get('profile', ['as' => 'profile.edit', 'uses' => 'App\Http\Controllers\ProfileController@edit']);
	Route::put('profile', ['as' => 'profile.update', 'uses' => 'App\Http\Controllers\ProfileController@update']);
	Route::put('profile/password', ['as' => 'profile.password', 'uses' => 'App\Http\Controllers\ProfileController@password']);

	Route::get('/usuarios', [UsuarioController::class, 'index']);
	Route::get('/usuarios/create',[UsuarioController::class, 'create']);
	Route::post('/usuarios',[UsuarioController::class, 'store']);
	Route::get('/usuarios/{id}',[UsuarioController::class, 'show']);
	Route::get('/usuarios/{id}/edit',[UsuarioController::class, 'edit']);
	Route::put('/usuarios/{id}',[UsuarioController::class, 'update']);
	Route::delete('/usuarios/{id}',[UsuarioController::class, 'destroy']);

	Route::get('/veiculos', [VeiculoController::class, 'index']);
	Route::get('/veiculos/create',[VeiculoController::class, 'create']);
	Route::post('/veiculos',[VeiculoController::class, 'store']);
	Route::get('/veiculos/{id}',[VeiculoController::class, 'show']);
	Route::get('/veiculos/{id}/edit',[VeiculoController::class, 'edit']);
	Route::put('/veiculos/{id}',[VeiculoController::class, 'update']);
	Route::delete('/veiculos/{id}',[VeiculoController::class, 'destroy']);

	Route::get('/estacionamentos', [EstacionamentoController::class, 'index']);
	Route::get('/estacionamentos/create',[EstacionamentoController::class, 'create']);
	Route::post('/estacionamentos',[EstacionamentoController::class, 'store']);
	Route::get('/estacionamentos/{id}',[EstacionamentoController::class, 'show']);
	Route::get('/estacionamentos/{id}/edit',[EstacionamentoController::class, 'edit']);
	Route::put('/estacionamentos/{id}',[EstacionamentoController::class, 'update']);
	Route::delete('/estacionamentos/{id}',[EstacionamentoController::class, 'destroy']);
});

