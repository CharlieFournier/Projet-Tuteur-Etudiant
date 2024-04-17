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

Route::get('/accueil', 
[RequetesController::class, 'index'])->name('Requetes.index');

Route::get('/creation', 
[RequetesController::class, 'create'])->name('Requetes.create');



//------- Tuteurs -------//

Route::get('/Tuteur/{tuteur}', 
[TuteursController::class, 'show'])->name('Tuteurs.show');

Route::get('/remunerationTuteur', 
[TuteursController::class, 'remuneration'])->name('Tuteurs.remuneration');

//------- Etudiants -------//

Route::get('/accueilEtudiant/{etudiant}', 
[EtudiantsController::class, 'show'])->name('Etudiants.show');

Route::get('/heuresEtudiant', 
[EtudiantsController::class, 'heures'])->name('Etudiants.heures');
//----- Users ------//

Route::get('/connexion', 
[UsersController::class, 'login'])->name('users.login');

<<<<<<< Updated upstream
Route::get('/inscription', 
[UsersController::class, 'create'])->name('users.create');
=======
Route::get('/adminlogin', 
[AdminController::class, 'login'])->name('admin.login');

//------- Commentaires -------//

>>>>>>> Stashed changes
