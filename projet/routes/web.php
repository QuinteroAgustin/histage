<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\home\HomeController;
use App\Http\Controllers\admin\AdminController;
use App\Http\Controllers\admin\roles\AdminEditRoleController;
use App\Http\Controllers\admin\users\AdminEditUserController;
use App\Http\Controllers\users\profile\ProfileUserController;
use App\Http\Controllers\admin\roles\AdminCreateRoleController;
use App\Http\Controllers\admin\users\AdminCreateUserController;
use App\Http\Controllers\users\connexion\ConnexionUserController;
use App\Http\Controllers\admin\sections\AdminEditSectionController;
use App\Http\Controllers\admin\sections\AdminCreateSectionController;
use App\Http\Controllers\admin\anneescolaires\AdminEditAnneeScolaireController;
use App\Http\Controllers\admin\anneescolaires\AdminCreateAnneeScolaireController;

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
//routes page d'accueil
Route::get('/', [HomeController::class, 'accueil'])->name('home');
//fin route page d'accueil

//routes connexion/deconnexion utilisateur
Route::get('/connexion', [ConnexionUserController::class, 'connexion'])->middleware('notAuth')->name('connexion');
Route::post('/connexion', [ConnexionUserController::class, 'connexionPost'])->middleware('notAuth')->name('connexionPost');
Route::get('/profil/deconnexion', [ConnexionUserController::class, 'deconnexion'])->middleware('isAuth')->name('deconnexion');
//fin routes connexion/deconnexion utilisateur

//routes profil utilisateur
Route::get('/profil', [ProfileUserController::class, 'profil'])->middleware('isAuth')->name('profil');
//fin routes profil utilisateur

//routes edit profil utilisateur
Route::get('/profil/edit-password', [ProfileUserController::class, 'editpassword'])->middleware('isAuth')->name('editpassword');
Route::post('/profil/edit-password', [ProfileUserController::class, 'editpasswordPost'])->middleware('isAuth')->name('editpasswordPost');
//fin routes edit profil utilisateur

//Routes pour l'admin
Route::get('/admin', [AdminController::class, 'pannel'])->middleware('isAuth')->name('pannelAdmin');

Route::get('/admin/createUser', [AdminCreateUserController::class, 'createUser'])->middleware('isAuth')->name('createUser');
Route::post('/admin/createUser', [AdminCreateUserController::class, 'createUserPost'])->middleware('isAuth')->name('createUserPost');

Route::get('/admin/editUser-{id}', [AdminEditUserController::class, 'editUser'])->middleware('isAuth')->name('editUser');
Route::post('/admin/editUser', [AdminEditUserController::class, 'editUserPost'])->middleware('isAuth')->name('editUserPost');
Route::post('/admin/editUserPassword', [AdminEditUserController::class, 'editUserPasswordPost'])->middleware('isAuth')->name('editUserPasswordPost');

Route::get('/admin/createRole', [AdminCreateRoleController::class, 'createRole'])->middleware('isAuth')->name('createRole');
Route::post('/admin/createRole', [AdminCreateRoleController::class, 'createRolePost'])->middleware('isAuth')->name('createRolePost');
Route::get('/admin/editRole-{id}', [AdminEditRoleController::class, 'editRole'])->middleware('isAuth')->name('editRole');
Route::post('/admin/editRole', [AdminEditRoleController::class, 'editRolePost'])->middleware('isAuth')->name('editRolePost');

Route::get('/admin/createAnneeScolaire', [AdminCreateAnneeScolaireController::class, 'createAnneeScolaire'])->middleware('isAuth')->name('createAnneeScolaire');
Route::post('/admin/createAnneeScolaire', [AdminCreateAnneeScolaireController::class, 'createAnneeScolairePost'])->middleware('isAuth')->name('createAnneeScolairePost');
Route::get('/admin/editAnneeScolaire-{id}', [AdminEditAnneeScolaireController::class, 'editAnneeScolaire'])->middleware('isAuth')->name('editAnneeScolaire');
Route::post('/admin/editAnneeScolaire', [AdminEditAnneeScolaireController::class, 'editAnneeScolairePost'])->middleware('isAuth')->name('editAnneeScolairePost');

Route::get('/admin/createSection', [AdminCreateSectionController::class, 'createSection'])->middleware('isAuth')->name('createSection');
Route::post('/admin/createSection', [AdminCreateSectionController::class, 'createSectionPost'])->middleware('isAuth')->name('createSectionPost');
Route::get('/admin/editSection-{id}', [AdminEditSectionController::class, 'editSection'])->middleware('isAuth')->name('editSection');
Route::post('/admin/editSection', [AdminEditSectionController::class, 'editSectionPost'])->middleware('isAuth')->name('editSectionPost');

Route::get('/admin/createUser/eleve-{id}', [AdminCreateUserController::class, 'createUserEleve'])->middleware('isAuth')->name('createUserEleve');
Route::post('/admin/createUser/eleve', [AdminCreateUserController::class, 'createUserElevePost'])->middleware('isAuth')->name('createUserPostEleve');
//fin route pour l'admin
