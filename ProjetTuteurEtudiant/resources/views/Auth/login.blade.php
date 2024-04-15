@extends('layouts.gestion')

@section('title', "Page de connexion")

@section('contenu')

<div class="p-3 text-center"><h1>Connexion Admin</h1><hr/></div>
<form method="post" action="{{route('login')}}">
@csrf
    <div class="p-3">
        <label class="form-label" for="matricule">Matricule : </label>
        <input class="form-control" type="text" id="matricule" name="matricule">
    </div>
    <div class="p-3">
        <label class="form-label" for="password">Mot de Passe : </label>
        <input class="form-control" type="password" id="password" name="password">
    </div>
    <div class="p-3 text-center">
        <button class="btn" style="background-color: rgba(255,192,203,0.5); border-color: black;" type="submit">
            Connexion
        </button>
    </div>
    <div class="p-3 text-center">
    <a class="nav-link" href="{{route('usagers.create')}}">
        <button class="btn" style="background-color: rgba(255,192,203,0.5); border-color: black;" type="button">
            Inscription
        </button>
    </a>    
    
    </div>
</form>

@endsection