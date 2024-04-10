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

if ("etudiant" == "etudiant") {
    Route::get('/accueil', 
    [RequetesController::class, 'index'])->name('Requetes.index');
}

else if ($user.role == "tuteur") {
    Route::get('/accueil', 
    [RequetesController::class, 'show'])->name('Requetes.show');
}


Route::get('/creation', 
[RequetesController::class, 'create'])->name('Requetes.create');


Route::get('/show', 
[RequetesController::class, 'show'])->name('Requetes.show');

//------- Tuteurs -------//

Route::get('/Tuteur/{tuteur}', 
[TuteursController::class, 'show'])->name('Tuteurs.show');

Route::get('/remunerationTuteur', 
[TuteursController::class, 'remuneration'])->name('Tuteurs.remuneration');

//------- Etudiants -------//

Route::get('/accueilEtudiant', 
[EtudiantsController::class, 'show'])->name('Etudiants.show');



//----- Users ------//

Route::get('/connexion', 
[UsersController::class, 'login'])->name('users.login');

Route::get('/inscription', 
[UsersController::class, 'create'])->name('users.create');