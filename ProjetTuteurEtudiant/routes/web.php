<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});

Route::get('/Accueil', function () {
    return view('Accueil');
});

Route::get('/creation/', function(){
    return view('creation');
});