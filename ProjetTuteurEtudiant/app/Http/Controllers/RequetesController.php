<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Log;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Requete;
use App\Models\Tuteur;
use App\Models\Etudiant;
use App\Models\Usager;

class RequetesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $tuteurs = Usager::all()->where('role', 'like', 'tuteur');
        $etudiants = Usager::all()->where('role', 'like', 'etudiant');
        $requetes = Requete::all();

        return view('Requetes.accueil', compact('requetes', 'tuteurs', 'etudiants'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return View('Requetes.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show()
    {
        return View('Requetes.show');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
