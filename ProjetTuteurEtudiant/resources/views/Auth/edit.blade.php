@extends('layouts.app')

@section('title', "Page de modification")

@section('contenu')

@if(isset($usager))
<form method="post" action="{{route('usagers.update', [$usager])}}">
    @csrf 
    @method('PATCH')
    <div class="container-fluid text-center">
    <div class="row">
            <div class="col-xl-2"></div>
            <div class="col-xl-8">
                <h1>Formulaire pour ajouter un utilisateur</h1>
            </div>
            <div class="col-xl-2"></div>
        </div>
        <div class="row">
            <div class="col-xl-2"></div>
            <div class="col-xl-2">
                <br>
                <label class="form-label" for="matricule">Matricule</label>
                <input type="text" class="form-control" id="matricule" name="matricule" value="{{old('matricule', $usager->matricule)}}">
            </div>
            <div class="col-xl-3">
                <br>
                <label class="form-label" for="prenom">Prénom du client</label>
                <input type="text" class="form-control" id="prenom" name="prenom" value="{{old('prenom', $usager->prenom)}}">
            </div>
            <div class="col-xl-3">
                <br>
                <label class="form-label" for="nom">Nom du client</label>
                <input type="text" class="form-control" id="nom" name="nom" value="{{old('nom', $usager->nom)}}">
            </div>
            <div class="col-xl-2"></div>
        </div>
        <div class="row">
            <div class="col-xl-2"></div>
            <div class="col-xl-4">
                <br>
                <label class="form-label" for="email">Email de l'utilisateur</label>
                <input type="email" class="form-control" id="email" name="email" value="{{old('email', $usager->email)}}">
            </div>
            <div class="col-xl-2"></div>
        </div>
        <div class="row">
            <div class="col-xl-3"></div>
            <div class="col-xl-6">
                <br>
                <label class="form-label" for="password">le mot de passe</label>
                <input type="text" class="form-control" id="password" name="password" value="{{old('password', $usager->password)}}">
            </div>
            <div class="col-xl-3"></div>
        </div>
        <div class="row">
            <div class="col-xl-4"></div>
            <div class="col-xl-2">
                <br>
                <button  type="submit" class="btn btn-success">Modifier</button>
            </form>
            </div>
            <div class="col-xl-2">
                <br>
                <form method="POST" action="{{route('usagers.destroy', [$usager->matricule])}}">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">Supprimer</button>
                </form>
            </div>
            <div class="col-xl-4"></div>
        </div>
    </div>
@endif
@endsection