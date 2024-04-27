<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Log;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\Requete;
use App\Models\Tuteur;
use App\Models\Etudiant;
use App\Models\User;
use App\Models\CalendrierJour;
use App\Models\CalendrierNote;

class RequetesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $IdUser = Auth::id();
        $tuteurs = User::all()->where('role', 'like', 'tuteur');
        $etudiants = User::all()->where('role', 'like', 'etudiant');
        $Usager = User::all();
        $requetes = Requete::all();
        $CalJour = CalendrierJour::all();
        $CalNote = CalendrierNote::all();


        return view('Requetes.accueil', compact('requetes', 'tuteurs', 'etudiants','CalJour', 'CalNote', 'IdUser', 'Usager'));
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
