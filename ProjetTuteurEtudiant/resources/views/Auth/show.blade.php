@extends('layouts.usagers')

@section('title', "Page d'acceuil utilisateur")

@section('contenu')

<div class="container-fluid">
    <div class="row justify-content-center align-items-center h-100">
        <div class="col-8 scroll text-center">
            <h1>Nom de l'utilisateur: {{$usager->matricule}}</h1>
            <br>
            <h2>Prénom: {{$usager->prenom}}</h2>
            <h2>Nom: {{$usager->nom}}</h2>
            <br>
            <h3>Email: {{$usager->email}}</h3>
            <br>
            <h5>Role: {{$usager->role}}</h5>
            <h5>Niveau: {{$usager->niveau}}</h5>
            <a href="{{route('usagers.edit', [$usager->matricule])}}" class="btn btn-danger">
                Editer l'utilisateur
            </a>
        </div>
    </div>
</div>
@endsection