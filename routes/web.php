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
*/

Route::get('/', function () {
    return view('welcome');
});


//  páginas  que criar conta e login do usuário
Route::get('/iniciar-sessao', [LoginController::class,'index']);
Route::post('/acesso', [LoginController::class,'login']);
Route::get('/criar-conta', [LoginController::class,'create']);
Route::post('/criado', [LoginController::class,'store']);

// páginas principais
Route::get('/principal',[HomeController::class,'index']);
Route::post('/pet/store', [PetController::class,'store']);
Route::post('/logout', [HomeController::class,'logout']);
