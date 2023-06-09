<?php

use App\Http\Controllers\DogController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PetController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
// */

Route::get('/', function () {
    return redirect('/iniciar-sessao');
});

Route::get('/teste', 'App\Http\Controllers\Api\CadastroController@status');


Route::controller(LoginController::class)->group(function(){
    //gets
    Route::get('/criar-conta','create')->name('User.Create');
    Route::get('/iniciar-sessao','index')->name("User.Index");
    //post
    Route::post('/criado', 'store')->name("User.Store");
    Route::post('/user/acesso', 'login')->name("User.Login");
}
);

Route::controller(HomeController::class)->group(function(){
    //get
    Route::get('/principal','index')->name('HomePage.Index');
    //post
    Route::post('/logout', 'logout')->name('HomePage.Logout');
    Route::post('/user/update','update')->name('HomePage.update');
});

Route::post('/pet/store', [PetController::class,'store']);

Route::post('/enviar-sinal', 'ArduinoController@enviarSinal');

