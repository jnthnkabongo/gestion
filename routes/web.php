<?php

use App\Http\Controllers\AdminsController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\index;
use App\Http\Controllers\login;
use App\Http\Controllers\ClientsController;
use App\Http\Controllers\ArticlesController;
use App\Http\Controllers\NotificationsController;
use App\Http\Controllers\ParametresController;
use App\Http\Controllers\ProfilController;
use App\Http\Controllers\utilisateur;

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

/* Administration de la plateforme */

    Route::get('/Home_admin',[index::class, 'index'])->name('home_admin');
    Route::get('/Administration/login_admin', [login::class, 'index'])->name('login_admin');
    Route::post('/Administration/Authentification_admin',[login::class, 'authentification'])->name('authentification_admin');
    Route::get('/Administration/Parametres_admin',[ParametresController::class, 'index'])->name('parametre_admin');
    Route::get('/Administration/Profil_admin',[ProfilController::class, 'index'])->name('profil_admin');
    Route::get('Administration/Clients_admin/bonjour',[ClientsController::class, 'index'])->name('clients_admin');
    Route::get('Administration/Notifications_admin/',[NotificationsController::class, 'index'])->name('notification_admin');
    Route::get('/Logout_admin',[login::class, 'logout'])->name('logout_admin');
    Route::get('/Administration/Articles_home', [ArticlesController::class, 'create'])->name('articles_admin');

/* Fin de l'administration */


/* Utilisateur de la plateforme */

    Route::get('/',[utilisateur::class, 'index'])->name('home_e-commerce');
    Route::get('/Login',[ClientsController::class, 'destroy'])->name('login_users');
    Route::get('/Lougout_users',[ClientsController::class, 'logout_users'])->name('logout_users');
    Route::post('/Authentification',[ClientsController::class, 'update'])->name('authentification_users');
    Route::get('/Profil',[ClientsController::class, 'store'])->name('profil_users');
    Route::get('/Register',[ClientsController::class, 'create'])->name('register');
    Route::get('/Changer_mot_de_passe',[ClientsController::class, 'mdp'])->name('changer_mdp');
    Route::post('/Poster',[ArticlesController::class,'show'])->name('poster-article');
    Route::get('/Formulaire_poste',[ArticlesController::class, 'store'])->name('formulaire_poste');
    Route::get('/Recuperation_compte', [ClientsController::class, 'recup'])->name('recuperation_compte');
    Route::post('/Verifier_compte', [ClientsController::class, 'verif'])->name('verification_compte');
    Route::post('/Verification_compte', [ClientsController::class, 'verification'])->name('verification_complete');
    Route::get('/Details/{article}', [ArticlesController::class, 'detail'])->name('detail_user');

    /* Fin de l'utiilisateur */





