@extends('layouts.app')

@section('title','Page Tuteur')

@section('contenu')

<div class="container-fluid h-100">

<p>Prenom: {{$tuteur->prenom}}</p>
<p>Nom: {{$tuteur->nom}}</p>
<p>Matricule: {{$tuteur->matricule}}</p>
<p>Em@il: {{$tuteur->email}}</p>

</div>

@endsection