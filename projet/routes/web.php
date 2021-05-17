<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UsersController;

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

Route::get('/', [HomeController::class, 'accueil'])->name('home');
Route::get('/inscription', [UsersController::class, 'inscription'])->name('inscription');
Route::get('/connexion', [UsersController::class, 'connexion'])->middleware('notAuth')->name('connexion');
Route::post('/connexion', [UsersController::class, 'connexionPost'])->middleware('notAuth')->name('connexionPost');
Route::get('/profil', [UsersController::class, 'profil'])->middleware('isAuth')->name('profil');
Route::post('/profil', [UsersController::class, 'deconnexion'])->middleware('isAuth')->name('deconnexion');