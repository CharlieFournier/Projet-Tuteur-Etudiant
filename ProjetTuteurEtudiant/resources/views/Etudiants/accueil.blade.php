@extends('layouts.app')

@section('title','Page Etudiant')

@section('contenu')

<div class="container-fluid h-100">

<p>Prenom: {{$etudiant->prenom}}</p>
<p>Nom: {{$etudiant->nom}}</p>
<p>Matricule: {{$etudiant->matricule}}</p>
<p>Em@il: {{$etudiant->email}}</p>

</div>

@endsection