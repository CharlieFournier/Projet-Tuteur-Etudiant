<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\EtudiantsController;
use App\Http\Controllers\RequetesController;
use App\Http\Controllers\TuteursController;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Models\Requete;

//------- Demandes d'aides -------//

Route::get('/', 
[RequetesController::class, 'index'])->name('Requetes.index');


//------- Tuteurs -------//

Route::get('/Tuteur/{tuteur}', 
[TuteursController::class, 'show'])->name('Tuteurs.show');

Route::get('/remunerationTuteur', 
[TuteursController::class, 'remuneration'])->name('Tuteurs.remuneration');


//------- Etudiants -------//

Route::get('/accueilEtudiant/{etudiant}', 
[EtudiantsController::class, 'show'])->name('Etudiants.show');


//----- Users ------//

Route::get('/login', 
[UsersController::class, 'index'])->name('showLogin');

Route::post('/login', 
[UsersController::class, 'login'])->name('login');

Route::post('/logout', 
[UsersController::class, 'logout'])->name('logout')->middleware('auth');

Route::get('/inscription', 
[UsersController::class, 'create'])->name('Users.create')->middleware('auth');

Route::post('/inscription', 
[UsersController::class, 'store'])->name('Users.store')->middleware('auth');

