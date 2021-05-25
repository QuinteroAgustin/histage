<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
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

Route::get('/connexion', [UsersController::class, 'connexion'])->middleware('notAuth')->name('connexion');
Route::post('/connexion', [UsersController::class, 'connexionPost'])->middleware('notAuth')->name('connexionPost');

Route::get('/profil', [UsersController::class, 'profil'])->middleware('isAuth')->name('profil');

Route::get('/profil/edit-password', [UsersController::class, 'editpassword'])->middleware('isAuth')->name('editpassword');
Route::post('/profil/edit-password', [UsersController::class, 'editpasswordPost'])->middleware('isAuth')->name('editpasswordPost');

Route::get('/profil/deconnexion', [UsersController::class, 'deconnexion'])->middleware('isAuth')->name('deconnexion');

Route::get('/admin', [AdminController::class, 'pannel'])->middleware('isAuth')->name('pannelAdmin');

Route::get('/admin/createuser', [AdminController::class, 'createUser'])->middleware('isAuth')->name('createUser');
Route::post('/admin/createuser', [AdminController::class, 'createUserPost'])->middleware('isAuth')->name('createUserPost');

Route::get('/admin/edit-{id}', [AdminController::class, 'editUser'])->middleware('isAuth')->name('editUser');
Route::post('/admin/edit', [AdminController::class, 'editUserPost'])->middleware('isAuth')->name('editUserPost');
Route::post('/admin/editPassword', [AdminController::class, 'editUserPasswordPost'])->middleware('isAuth')->name('editUserPasswordPost');