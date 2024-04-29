@extends('layouts.gestion')

@section('title', "Page d'inscription")

@section('contenu')
<div class="p-3 text-center">
    <h1>Inscription</h1><hr/>
</div>

<form method="post" action="{{route('usagers.store')}}">
@csrf
    <div class="row p-3">
        <div class="col-4">
            <label class="form-label" for="matricule">Matricule : </label>
            <input class="form-control" type="text" id="matricule" name="matricule">
        </div>
        <div class=" col-4">
            <label class="form-label" for="prenom">Prénom : </label>
            <input class="form-control" type="text" id="prenom" name="prenom">
        </div>
        <div class="col-4">
            <label class="form-label" for="nom">Nom : </label>
            <input class="form-control" type="text" id="nom" name="nom">
        </div>
    </div>
    <div class="row p-3">
        <div>
            <label class="form-label" for="email">Address Courriel : </label>
            <input class="form-control" type="email" id="email" name="email">
        </div>
        <div class="">
            <label class="form-label" for="password">Password : </label>
            <input class="form-control" type="password" id="password" name="password">
        </div>
    </div>
    <div class="row p-3">
        <div class="col-4">
            <label class="form-label" for="role">Rôle : </label>
            <select name="role" id="role" type="text" class="form-control" placeholder="Veuillez choisir...">
                <option value="tuteur">Tuteur</option>
                <option value="etudiant">Étudiant</option>
            </select>
        </div>
        <div class="col-4">
            <label class="form-label" for="niveau">Niveau : </label>
            <select name="niveau" id="niveau" type="text" class="form-control" placeholder="Veuillez choisir...">
                <option value="1iere annee">1iere annee</option>
                <option value="2ieme annee">2ieme annee</option>
                <option value="3ieme annee">3ieme annee</option>
                <option value="Enseignant">Enseignant</option>
            </select>
        </div>
        <div class="col-4">
            <label class="form-label" for="nb_heures">Nombre d'heure : </label>
            <input class="form-control" type="number" id="nb_heures" name="nb_heures" min=0 max=15>
        </div>
    </div>
    <div class="p-3 text-center">
        <button class="btn" style="background-color: rgba(255,192,203,0.5); border-color: black;" type="submit"
            onclick="var val= document.getElementById('password').value; document.getElementById('password').value(sha512(val));">
            S'inscrire
        </button>
        <br>
    </div>
    <div class="p-3 text-center">
        <a class="nav-link" href="{{route('login')}}">
            <button class="btn" style="background-color: rgba(255,192,203,0.5); border-color: black;" type="button">
                Se connecter
            </button>
        </a>
    </div>
</form>
@endsection