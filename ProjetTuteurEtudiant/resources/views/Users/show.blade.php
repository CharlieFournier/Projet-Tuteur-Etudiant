@extends('layouts.app')

@section('title', "Page d'acceuil Netflix")

@section('contenu')

<div id="bg" class="wrapper black">
    <section class="main-container">
        <div class="container-fluid">
            <div class="row">
                <div class="col-xl-2"></div>
                <div class="col-xl-6">
                    <h1>Nom de l'utilisateur: {{$user->matricule}}</h1>
                    <br>
                    <h2>Prénom: {{$user->prenom}}</h2>
                    <h2>Nom: {{$user->nom}}</h2>
                    <br>
                    <h3>Email: {{$user->email}}</h3>
                    <br>
                    <h5>Role: {{$user->role}}</h5>
                </div>
                <div class="col-xl-2 text-left">
                    <br><br><br><br><br><br>
                    <a href="{{route('users.edit', [$user])}}" class="btn btn-danger">
                        Editer l'utilisateur
                    </a>
                </div>
                <div class="col-xl-2"></div>
            </div>
        </div>
    </section>
</div>

@endsection