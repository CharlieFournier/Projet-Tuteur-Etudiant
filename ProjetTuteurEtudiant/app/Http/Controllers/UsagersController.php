<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\UsagerRequest;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\DB;

use App\Models\Usager;
use App\Models\Etudiant;
use App\Models\Tuteur;


class UsagersController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $fillable = Usager::all();
        $tuteurs = Usager::all()->where('role', 'like', 'tuteur');
        $etudiants = Usager::all()->where('role', 'like', 'etudiant');

        return view('Auth.login', compact('fillable', 'tuteurs', 'etudiants'));
    }

    public function usagerindex()
    {
        $fillable = Usager::all();
        $usagers = Usager::all();
        return view('Auth.index', compact('usagers','fillable'));
    }

    public function login(Request $request)
    {
        $reussi = Auth::attempt(['matricule' => $request->matricule, 'password' => $request->password]);
        Log::debug(''.$reussi);

        if($reussi){
            return redirect()->route('Requetes.index')->with('message', "Connexion réussi");
        }
        else{
            return redirect()->route('login')->withErrors(['Informations invalides']);
        }
    }

    public function logout (Request $request)
    {
        Auth::logout();
        Session::flush();
        return redirect()->route('showLogin')->with("message",'Déconnexion réussi');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('Auth.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(UsagerRequest $request)
    {
        try{
            $usagers = new Usager($request->all());
            $usagers->save();
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
    public function show(Usager $usager)
    {
        return view('Auth.show', compact('usager'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($matricule)
    {
        $usager = Usager::where('matricule', $matricule)->firstOrFail();
        $roles = Usager::orderBy('role')->get();
        $niveaux = Usager::orderBy('niveau')->get();

        return view('Auth.edit', compact('usager', 'roles', 'niveaux'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UsagerRequest $request, Usager $id)
    {
        log::debug('loop update debut');
        try
        {
            $id->matricule = $request->matricule;
            $id->nom = $request->nom;
            $id->prenom = $request->prenom;
            $id->email = $request->email;
            $id->password = $request->password;
            $id->nb_heures = $request->nb_heures;
            $id->role = $request->role;
            $id->niveau = $request->niveau;

            log::debug('avant save');
            $id->save();
            log::debug('END');
            return redirect()->route('usagers.index')->with('message', "Modification de " . $id->nom . " réussi!");
        }
        catch(\Throwable $e)
        {
            Log::debug($e);
            return redirect()->route('usagers.index')->withErrors(['la modification n\'a pas fonctionné']);
        }
        return redirect()->route('usagers.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        try
        {
            $usager = Usager::findOrFail($id);

            $usager->delete();
            return redirect()->route('usagers.index')->with('message', "Suppression de " . $usager->nom . " réussi!");
        }
        catch(\Throwable $e)
        {
            Log::debug($e);
            return redirect()->route('usagers.index')->withErrors(['la suppression n\'a pas fonctionné']); 
        }
            return redirect()->route('usagers.index');
    }
}
