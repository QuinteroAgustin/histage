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

Route::get('/admin/createUser', [AdminController::class, 'createUser'])->middleware('isAuth')->name('createUser');
Route::post('/admin/createUser', [AdminController::class, 'createUserPost'])->middleware('isAuth')->name('createUserPost');

Route::get('/admin/editUser-{id}', [AdminController::class, 'editUser'])->middleware('isAuth')->name('editUser');
Route::post('/admin/editUser', [AdminController::class, 'editUserPost'])->middleware('isAuth')->name('editUserPost');
Route::post('/admin/editUserPassword', [AdminController::class, 'editUserPasswordPost'])->middleware('isAuth')->name('editUserPasswordPost');

Route::get('/admin/createRole', [AdminController::class, 'createRole'])->middleware('isAuth')->name('createRole');
Route::post('/admin/createRole', [AdminController::class, 'createRolePost'])->middleware('isAuth')->name('createRolePost');
Route::get('/admin/editRole-{id}', [AdminController::class, 'editRole'])->middleware('isAuth')->name('editRole');
Route::post('/admin/editRole', [AdminController::class, 'editRolePost'])->middleware('isAuth')->name('editRolePost');

Route::get('/admin/createAnneeScolaire', [AdminController::class, 'createAnneeScolaire'])->middleware('isAuth')->name('createAnneeScolaire');
Route::post('/admin/createAnneeScolaire', [AdminController::class, 'createAnneeScolairePost'])->middleware('isAuth')->name('createAnneeScolairePost');
Route::get('/admin/editAnneeScolaire-{id}', [AdminController::class, 'editAnneeScolaire'])->middleware('isAuth')->name('editAnneeScolaire');
Route::post('/admin/editAnneeScolaire', [AdminController::class, 'editAnneeScolairePost'])->middleware('isAuth')->name('editAnneeScolairePost');

Route::get('/admin/createSection', [AdminController::class, 'createSection'])->middleware('isAuth')->name('createSection');
Route::post('/admin/createSection', [AdminController::class, 'createSectionPost'])->middleware('isAuth')->name('createSectionPost');
Route::get('/admin/editSection-{id}', [AdminController::class, 'editSection'])->middleware('isAuth')->name('editSection');
Route::post('/admin/editSection', [AdminController::class, 'editSectionPost'])->middleware('isAuth')->name('editSectionPost');

Route::get('/admin/createSection', [AdminController::class, 'createSection'])->middleware('isAuth')->name('createSection');
Route::post('/admin/createSection', [AdminController::class, 'createSectionPost'])->middleware('isAuth')->name('createSectionPost');

Route::get('/admin/createUser/eleve-{id}', [AdminController::class, 'createUserEleve'])->middleware('isAuth')->name('createUserEleve');
Route::post('/admin/createUser/eleve', [AdminController::class, 'createUserElevePost'])->middleware('isAuth')->name('createUserPostEleve');
