@extends('layouts.app')

@section('title', "Page d'acceuil utilisateur")

@section('contenu')

<div id="bg" class="wrapper black">
    <section class="main-container">
        <div class="container-fluid">
            <div class="row">
                <div class="col-xl-2"></div>
                <div class="col-xl-6">
                    <h1>Nom de l'utilisateur: {{$usager->matricule}}</h1>
                    <br>
                    <h2>Prénom: {{$usager->prenom}}</h2>
                    <h2>Nom: {{$usager->nom}}</h2>
                    <br>
                    <h3>Email: {{$usager->email}}</h3>
                    <br>
                    <h5>Role: {{$usager->role}}</h5>
                </div>
                <div class="col-xl-2 text-left">
                    <br><br><br><br><br><br>
                    <a href="{{route('usagers.edit', [$usager])}}" class="btn btn-danger">
                        Editer l'utilisateur
                    </a>
                </div>
                <div class="col-xl-2"></div>
            </div>
        </div>
    </section>
</div>
@endsection