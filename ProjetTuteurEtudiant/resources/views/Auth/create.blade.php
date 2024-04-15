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
            <input class="form-control" type="text" id="email" name="email">
        </div>
        <div class="">
            <label class="form-label" for="password">Password : </label>
            <input class="form-control" type="password" id="password" name="password">
        </div>
    </div>
    <div class="row p-3">
        <div class="col-4">
            <label class="form-label" for="role">Role : </label>
            <input class="form-control" type="text" id="role" name="role">
            <!--
            <label class="form-label" for="role">Rôle : </label>
            <br>
            <input type="radio" id="role" name="role">
            <label class="form-label" for="role">Tuteur</label>
            <br>
            <input type="radio" id="role" name="role">
            <label class="form-label" for="role">Etudiant</label>
            -->
        </div>
        <div class="col-4">
            <label class="form-label" for="niveau">Niveau : </label>
            <input class="form-control" type="text" id="niveau" name="niveau">
            <!--
            <label class="form-label" for="niveau">Niveau : </label>
            <select name="niveau" id="niveau" type="text" class="form-control" placeholder="Veuillez choisir...">
                <option value="niveau">1iere annee</option>
                <option value="niveau">2ieme annee</option>
                <option value="niveau">3ieme annee</option>
                <option value="niveau">Enseignant</option>
            </select>
            -->
        </div>
        <div class="col-4">
            <label class="form-label" for="nb_heures">Nombre d'heure : </label>
            <input class="form-control" type="number" id="nb_heures" name="nb_heures" min=0 max=15>
        </div>
    </div>
    <div class="p-3 text-center">
        <button class="btn" style="background-color: rgba(255,192,203,0.5); border-color: black;" type="submit">
            S'inscrire
        </button>
    </div>
</form>
@endsection