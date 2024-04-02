<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Models\Requete;



Route::get('/', 
[RequetesController::class, 'index'])->name('Requetes.index');

Route::get('/creation', 
[RequetesController::class, 'create'])->name('Requetes.create');

//----------------------------------------------------------------
/*
Route::get('/', function () {
    return view('index');
});
*/

Route::get('/Accueil', function () {
    return view('Requetes/Accueil');
});
/*
Route::get('/create', function(){
    return view('Requetes/create');
});
*/