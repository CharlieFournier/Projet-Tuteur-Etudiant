<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\EtudiantsController;
use App\Http\Controllers\RequetesController;
use App\Http\Controllers\TuteursController;
use App\Http\Controllers\UsersController;

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Models\Requete;

//-------Calendrier-------//

Route::get('/Acceuil', 
[RequetesController::class, 'index'])->name('Requetes.index');


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

Route::get('/', 
[UsagersController::class, 'index'])->name('showLogin');

Route::post('/', 
[UsagersController::class, 'login'])->name('login');

Route::post('/logout', 
[UsagersController::class, 'logout'])->name('logout');

Route::get('/inscription', 
[UsagersController::class, 'create'])->name('usagers.create');

Route::post('/inscription', 
[UsagersController::class, 'store'])->name('usagers.store');

Route::get('/usagers/{usager}', 
[UsagersController::class, 'show'])->name('usager.show');

Route::get('/usagers', 
[UsagersController::class, 'usagerindex'])->name('usagers.index');

Route::get('/usagers/{matricule}/modifier/',
[UsagersController::class, 'edit'])->name('usagers.edit');

Route::patch('/usagers/{usager}/modifier',
[UsagersController::class, 'update'])->name('usagers.update');

Route::delete('/usagers/{usager}/supprimer', 
[UsagersController::class, 'destroy'])->name('usagers.destroy');


// Demandes //

Route::get('/createDemandes', 
[DemandesController::class, 'create'])->name('Demandes.create');

Route::post('/createDemandes', 
[DemandesController::class, 'store'])->name('Demandes.store');