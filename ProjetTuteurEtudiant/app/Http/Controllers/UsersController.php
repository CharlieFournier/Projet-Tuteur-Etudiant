<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Log;
use Illuminate\Http\Request;
use App\Models\Tuteur;

class UsersController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
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
        try 
        {
            $users = new Tuteur($request->all());
            #Log::debug($users);
            $users->save();
        }
        catch (\Throwable $e) 
        {
            #Log::debug($e);
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
