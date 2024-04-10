<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tuteur;
use App\Models\Etudiant;
use App\Models\User;

class UsersController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $tuteurs = User::all()->where('role', 'like', 'tuteur');
        $etudiants = User::all()->where('role', 'like', 'etudiant');

        return view('' ,compact('tuteurs', 'etudiants'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $tuteurs = User::all()->where('role', 'like', 'tuteur');
        $etudiants = User::all()->where('role', 'like', 'etudiant');

        return view('users.create', compact('tuteurs', 'etudiants'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function login()
    {
        $tuteurs = User::all()->where('role', 'like', 'tuteur');
        $etudiants = User::all()->where('role', 'like', 'etudiant');

        return view('users.login', compact('tuteurs', 'etudiants'));
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
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit()
    {
        $tuteurs = User::all()->where('role', 'like', 'tuteur');
        $etudiants = User::all()->where('role', 'like', 'etudiant');

        return view('users.edit', compact('tuteurs', 'etudiants'));
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
