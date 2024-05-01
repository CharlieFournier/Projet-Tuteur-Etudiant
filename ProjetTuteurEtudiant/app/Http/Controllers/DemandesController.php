<?php

namespace App\Http\Controllers;

use App\Http\Requests\DemandeRequest;
use Illuminate\Http\Request;
use App\Http\Requests\UsagerRequest;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

use App\Models\Usager;
use App\Models\Etudiant;
use App\Models\Tuteur;
use App\Models\Demande;
use App\Models\Matiere;
use App\Models\CalendrierJour;

class DemandesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $Usager = Auth::user();

        return view('Demandes.index', compact('Usager'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $Usager = Auth::user();
        $tuteurs = Usager::all()->where('role', 'like', 'tuteur');
        $matieres = Matiere::all();
        $demandes = Demande::all();
        $columns = DB::getSchemaBuilder()->getColumnListing('calendrierjours');
        return view('Demandes.create', compact('Usager', 'tuteurs', 'matieres', 'demandes', 'columns'));

        
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(DemandeRequest $request)
    {
        try{
            $demandes = new Demande($request->all());
            $demandes->save();
        }
        catch(\Throwable $e) {
            Log::debug($e);
            return redirect()->route('Requetes.index')->withErrors(['ajout n\'a pas fonctionné']);
        }
        return redirect()->route('Requetes.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
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
