<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Log;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Requete;
use App\Models\Tuteur;
use App\Models\Etudiant;
use App\Models\User;
use App\Models\commentaire;

class UsersController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }
    public function commentaire()
    {
        return view('users.commentaire');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('users.createTuteur');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function login()
    {
        return view('users.login');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        try{
            $commentaires = new Commentaire($request->all());
            $commentaires->save();

        }
        catch(\Throwable $e) {
            Log::debug($e);
            return redirect()->route('commentaire')->withErrors(['ajout n\'a pas fonctionné']);
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
