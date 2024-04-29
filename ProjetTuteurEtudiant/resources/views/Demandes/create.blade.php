@extends('layouts.app')

@section('title','Page Accueil')

@section('contenu')

<div class="container-fluid col-8">
    <div class="p-3 text-center">
        <h1>Faire une demande pour un tuteur</h1><hr/>
    </div>

    <form method="post" action="{{route('usagers.store')}}">
    @csrf
        <div class="row p-3">
            <div class="col-4">
                @if($tuteurs != null)
                <label for="tuteur_id" class="form-label">Choisir le tuteur: </label>
                <select name="tuteurs" id="tuteur_id" class="form-control">
                    @foreach ($tuteurs as $tuteur)
                        <option value="{{$tuteur->id}}">{{$tuteur->prenom}} {{$tuteur->nom}}</option>
                    @endforeach
                </select>
                @endif
            </div>
            <div class="col-4"></div>
            <div class="col-4">
                <label for="id" class="form-label">Numero de la demande: #</label>
            </div>
        </div>
        <div class="row p-3">
            
        </div>
        <div class="row p-3">
            <div class="col-6">
                <label for="objet" class="form-label">Inscrire l'objet de la demande</label>
                <input class="form-control" type="text" id="objet" name="objet" placeholder="Demande d'aide en mathématique">
            </div>
        </div>
        <div class="row p-3">
            <div class="col-12">
                <label for="commentaire" class="form-label">Inscrire un commentaire spécifiant la demande</label>
                <input class="form-control" type="text" id="commentaire" name="commentaire" placeholder="Bonjour, j'aimerais...">
            </div>
        </div>
        <div class="row p-3">
            <div class="col-4">
                <label for="matieres" class="form-label">Choisir la matière: </label>
                <select name="matieres" id="matieres" class="form-control">
                    @foreach ($matieres as $matiere)
                        <option value="{{$matiere->id}}">{{$matiere->nom_matiere}}</option>
                    @endforeach
                </select>
            </div>
            <div class="col-4">
                <label for="temps_requis" class="form-label">Temps requis (1 à 3 heures): </label>
                <input class="form-control" type="number" id="temps_requis" name="temps_requis" value="1" min="1" max="3">
            </div>
            <div class="col-4">
                <label for="periode" class="form-label">Choisir votre période disponible: </label>
                <input class="form-control" type="datetime-local" id="periode" name="periode">
            </div>
        </div>
        <div class="p-3 text-center">
            <button class="btn" style="background-color: rgba(255,192,203,0.5); border-color: black;" type="submit">
                Envoyer
            </button>
            <br>
        </div>
    </form>
</div>
@endsection