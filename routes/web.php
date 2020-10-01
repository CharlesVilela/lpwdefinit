<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use  Illuminate\Http\Request;

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

Route::group(['middleware' => 'web'], function(){
		Route::get('/', function () {
    	return view('welcome');
	});
		Auth::routes();
		Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
});

Route::get('/usuarios', 'App\Http\Controllers\UsuarioController@listar');

Route::get('/livros/new', 'App\Http\Controllers\LivrosController@new');
Route::post('/livros/add', 'App\Http\Controllers\LivrosController@add');
Route::get('/livros/{id}/edit', 'App\Http\Controllers\LivrosController@edit');
Route::get('/livros', 'App\Http\Controllers\LivrosController@show');


Route::get('/funcionarios', 'App\Http\Controllers\FuncionarioController@show');
Route::get('/funcionarios/new', 'App\Http\Controllers\FuncionarioController@new');
Route::post('/funcionarios/add', 'App\Http\Controllers\FuncionarioController@add');


