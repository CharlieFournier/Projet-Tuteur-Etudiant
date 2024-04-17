@extends('layouts.app')

@section('title','Page Accueil')

@section('contenu')
    <div class="container-fluid h-100">
        <div class="row text-center h-100">  
            <div class="col-10">

                <div class="row h-15">
                <div class="col-6 card card-event-design text-center">
                        <h1 id="text-event "> Demande d'aide </h1>
                    </div>
                    <div class="col-6 card card-event-design text-center">
                        <h1 id="text-event "> Demande d'aide </h1>
                    </div>
                </div>

                <div class="row h-15">
                <div class="col-6 card card-event-design text-center">
                        <h1 id="text-event "> Demande d'aide </h1>
                    </div>
                    <div class="col-6 card card-event-design text-center">
                        <h1 id="text-event "> Demande d'aide </h1>
                    </div>
                </div>

                <div class="row h-15">
                    <div class="col-6 card card-event-design text-center">
                        <h1 id="text-event "> Demande d'aide </h1>
                    </div>
                    <div class="col-6 card card-event-design text-center">
                        <h1 id="text-event "> Demande d'aide </h1>
                    </div>
                </div>

                <div class="row h-15">
                <div class="col-6 card card-event-design text-center">
                        <h1 id="text-event "> Demande d'aide </h1>
                    </div>
                    <div class="col-6 card card-event-design text-center">
                        <h1 id="text-event "> Demande d'aide </h1>
                    </div>
                </div>

                <div class="row h-15">
                <div class="col-6 card card-event-design text-center">
                        <h1 id="text-event "> Demande d'aide </h1>
                    </div>
                    <div class="col-6 card card-event-design text-center">
                        <h1 id="text-event "> Demande d'aide </h1>
                    </div>
                </div>

                <div class="row h-15">
                <div class="col-6 card card-event-design text-center">
                        <h1 id="text-event "> Demande d'aide </h1>
                    </div>
                    <div class="col-6 card card-event-design text-center">
                        <h1 id="text-event "> Demande d'aide </h1>
                    </div>
                </div>

            </div>
            <div class="col-2">
                <div class="row h-50">
                    <div class="col-12 text-start card card-conteneur text-center p-0">

                        <div class="col-12 card card-event-design text-center">
                            <h1 id="text-event"> Tuteurs </h1>
                        </div>
                        
                        <ul>
                            @foreach($tuteurs as $tuteur)
        
                                <a href="{{route('Tuteurs.show', [$tuteur->matricule])}}"><p>{{$tuteur->prenom}} {{$tuteur->nom}}</p></a>
                                
                            @endforeach
                        </ul> 

                    </div>
                </div>
                <div class="row h-50">
                    <div class="col-12 text-start card card-conteneur text-center p-0">

                        <div class="col-12 card card-event-design text-center">
                            <h1 id="text-event "> Étudiants </h1>
                        </div>
                            <ul>
                            @foreach($etudiants as $etudiant)
        
                                <a href="{{route('Etudiants.show', [$etudiant->matricule])}}"><p>{{$etudiant->prenom}} {{$etudiant->nom}}</p></a>
                                
                            @endforeach
                            </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
 
@endsection
