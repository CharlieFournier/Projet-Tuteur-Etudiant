<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tuteur;

class TuteursController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $tuteurs = Tuteur::all();
        return view('Tuteurs.accueil',compact('tuteurs'));
    }

    public function remuneration()
    {
        return view('Tuteurs.remuneration');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        try {
            $tuteurs = new Personne($request->all());
            Log::debug($tuteurs);
            $tuteurs->save();
                }
                
            catch (\Throwable $e) {
                Log::debug($e);
            }
    }

    /**
     * Display the specified resource.
     */
    public function show($tuteurMatricule)
    {
        $tuteur = Tuteur::where('matricule', $tuteurMatricule)->firstOrFail();
        return view('Tuteurs.accueil', compact('tuteur'));
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
