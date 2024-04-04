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

Route::get('/show', 
[RequetesController::class, 'show'])->name('Requetes.show');

//------- Tuteurs -------//

Route::get('/Tuteur/{tuteur}', 
[TuteursController::class, 'index'])->name('Tuteurs.index');

//------- Etudiants -------//

Route::get('/accueilEtudiant', 
[EtudiantsController::class, 'show'])->name('Etudiants.show');

//------- Admins -------//

Route::get('/adminlogin', 
[AdminController::class, 'login'])->name('admin.login');