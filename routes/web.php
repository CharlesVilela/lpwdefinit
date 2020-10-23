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

Route::put('usuarios/update/{id}', 'App\Http\Controllers\UsuarioController@update');
Route::get('usuarios/{id}/edit', 'App\Http\Controllers\UsuarioController@edit');
Route::get('/usuarios/{id}/delete', 'App\Http\Controllers\UsuarioController@delete');



Route::get('/livros/new', 'App\Http\Controllers\LivrosController@new');
Route::post('/livros/add', 'App\Http\Controllers\LivrosController@add');
Route::put('livros/update/{id}', 'App\Http\Controllers\LivrosController@update');
Route::get('/livros', 'App\Http\Controllers\LivrosController@show');
Route::get('/livros/{id}/delete', 'App\Http\Controllers\LivrosController@delete');
Route::get('/livros/{id}/edit', 'App\Http\Controllers\LivrosController@edit');

Route::get('/livros/{id}/reservarLivro', 'App\Http\Controllers\LivrosController@reservarLivro');




Route::get('/funcionarios', 'App\Http\Controllers\FuncionarioController@show');
Route::get('/funcionarios/new', 'App\Http\Controllers\FuncionarioController@new');
Route::post('/funcionarios/add', 'App\Http\Controllers\FuncionarioController@add');


