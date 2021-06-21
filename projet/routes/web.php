<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\home\HomeController;
use App\Http\Controllers\admin\AdminController;
use App\Http\Controllers\eleve\EleveController;
use App\Http\Controllers\enseignant\EnseignantController;
use App\Http\Controllers\enseignant\rs\RsController;
use App\Http\Controllers\enseignant\rs\RsEntrepriseController;
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
Route::get('/admin', [AdminController::class, 'pannel'])->middleware(['isAuth', 'isAdmin'])->name('pannelAdmin');

Route::get('/admin/createUser', [AdminCreateUserController::class, 'createUser'])->middleware(['isAuth', 'isAdmin'])->name('createUser');
Route::post('/admin/createUser', [AdminCreateUserController::class, 'createUserPost'])->middleware(['isAuth', 'isAdmin'])->name('createUserPost');

Route::get('/admin/editUser-{id}', [AdminEditUserController::class, 'editUser'])->middleware(['isAuth', 'isAdmin'])->name('editUser');
Route::post('/admin/editUser', [AdminEditUserController::class, 'editUserPost'])->middleware(['isAuth', 'isAdmin'])->name('editUserPost');
Route::post('/admin/editUserPassword', [AdminEditUserController::class, 'editUserPasswordPost'])->middleware(['isAuth', 'isAdmin'])->name('editUserPasswordPost');

Route::get('/admin/createRole', [AdminCreateRoleController::class, 'createRole'])->middleware(['isAuth', 'isAdmin'])->name('createRole');
Route::post('/admin/createRole', [AdminCreateRoleController::class, 'createRolePost'])->middleware(['isAuth', 'isAdmin'])->name('createRolePost');
Route::get('/admin/editRole-{id}', [AdminEditRoleController::class, 'editRole'])->middleware(['isAuth', 'isAdmin'])->name('editRole');
Route::post('/admin/editRole', [AdminEditRoleController::class, 'editRolePost'])->middleware(['isAuth', 'isAdmin'])->name('editRolePost');

Route::get('/admin/createAnneeScolaire', [AdminCreateAnneeScolaireController::class, 'createAnneeScolaire'])->middleware(['isAuth', 'isAdmin'])->name('createAnneeScolaire');
Route::post('/admin/createAnneeScolaire', [AdminCreateAnneeScolaireController::class, 'createAnneeScolairePost'])->middleware(['isAuth', 'isAdmin'])->name('createAnneeScolairePost');
Route::get('/admin/editAnneeScolaire-{id}', [AdminEditAnneeScolaireController::class, 'editAnneeScolaire'])->middleware(['isAuth', 'isAdmin'])->name('editAnneeScolaire');
Route::post('/admin/editAnneeScolaire', [AdminEditAnneeScolaireController::class, 'editAnneeScolairePost'])->middleware(['isAuth', 'isAdmin'])->name('editAnneeScolairePost');

Route::get('/admin/createSection', [AdminCreateSectionController::class, 'createSection'])->middleware(['isAuth', 'isAdmin'])->name('createSection');
Route::post('/admin/createSection', [AdminCreateSectionController::class, 'createSectionPost'])->middleware(['isAuth', 'isAdmin'])->name('createSectionPost');
Route::get('/admin/editSection-{id}', [AdminEditSectionController::class, 'editSection'])->middleware(['isAuth', 'isAdmin'])->name('editSection');
Route::post('/admin/editSection', [AdminEditSectionController::class, 'editSectionPost'])->middleware(['isAuth', 'isAdmin'])->name('editSectionPost');

Route::get('/admin/createUser/eleve-{id}', [AdminCreateUserController::class, 'createUserEleve'])->middleware(['isAuth', 'isAdmin'])->name('createUserEleve');
Route::post('/admin/createUser/eleve', [AdminCreateUserController::class, 'createUserElevePost'])->middleware(['isAuth', 'isAdmin'])->name('createUserElevePost');

Route::get('/admin/createUser/enseignant-{id}', [AdminCreateUserController::class, 'createUserEnseignant'])->middleware(['isAuth', 'isAdmin'])->name('createUserEnseignant');
Route::post('/admin/createUser/enseignant', [AdminCreateUserController::class, 'createUserEnseignantPost'])->middleware(['isAuth', 'isAdmin'])->name('createUserEnseignantPost');

Route::get('/admin/createUser/contact-{id}', [AdminCreateUserController::class, 'createUserContact'])->middleware(['isAuth', 'isAdmin'])->name('createUserContact');
Route::post('/admin/createUser/contact', [AdminCreateUserController::class, 'createUserContactPost'])->middleware(['isAuth', 'isAdmin'])->name('createUserContactPost');

Route::get('/admin/editUser/eleve-{id}', [AdminEditUserController::class, 'editUserEleve'])->middleware(['isAuth', 'isAdmin'])->name('editUserEleve');
Route::post('/admin/editUser/eleve', [AdminEditUserController::class, 'editUserElevePost'])->middleware(['isAuth', 'isAdmin'])->name('editUserElevePost');

Route::get('/admin/editUser/enseignant-{id}', [AdminEditUserController::class, 'editUserEnseignant'])->middleware(['isAuth', 'isAdmin'])->name('editUserEnseignant');
Route::post('/admin/editUser/enseignant', [AdminEditUserController::class, 'editUserEnseignantPost'])->middleware(['isAuth', 'isAdmin'])->name('editUserEnseignantPost');

Route::get('/admin/editUser/contact-{id}', [AdminEditUserController::class, 'editUserContact'])->middleware(['isAuth', 'isAdmin'])->name('editUserContact');
Route::post('/admin/editUser/contact', [AdminEditUserController::class, 'editUserContactPost'])->middleware(['isAuth', 'isAdmin'])->name('editUserContactPost');
//fin route pour l'admin


//Routes pour les Rs
Route::get('/enseignant/rs', [RsController::class, 'pannel'])->middleware(['isAuth', 'isRs'])->name('pannelRs');
//creation entreprise
Route::get('/enseignant/rs/createEntreprise', [RsEntrepriseController::class, 'createEntreprise'])->middleware(['isAuth', 'isRs'])->name('createEntreprise');
Route::post('/enseignant/rs/createEntreprise', [RsEntrepriseController::class, 'createEntreprisePost'])->middleware(['isAuth', 'isRs'])->name('createEntreprisePost');
//fin des routes pour le rs

//Routes pour les Enseignants
Route::get('/enseignant', [EnseignantController::class, 'pannel'])->middleware(['isAuth', 'isEnseignant'])->name('pannelEnseignant');
//fin des routes pour le enseignants

//Routes pour les eleves
Route::get('/eleve', [EleveController::class, 'pannel'])->middleware(['isAuth', 'isEleve'])->name('pannelEleve');
//fin des routes pour les eleves
