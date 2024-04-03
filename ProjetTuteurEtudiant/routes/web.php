<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Models\Requete;

//------- Demandes d'aides -------//

Route::get('/accueil', 
[RequetesController::class, 'index'])->name('Requetes.index');

Route::get('/creation', 
[RequetesController::class, 'create'])->name('Requetes.create');

Route::get('/show', 
[RequetesController::class, 'show'])->name('Requetes.show');

//------- Tuteurs -------//

Route::get('/accueilTuteur', 
[TuteursController::class, 'index'])->name('Tuteurs.index');

Route::get('/remunerationTuteur', 
[TuteursController::class, 'remuneration'])->name('Tuteurs.remuneration');

//------- Etudiants -------//

Route::get('/accueilEtudiant', 
[EtudiantsController::class, 'index'])->name('Etudiants.index');

//------- Admins -------//

Route::get('/adminlogin', 
[AdminController::class, 'login'])->name('admin.login');