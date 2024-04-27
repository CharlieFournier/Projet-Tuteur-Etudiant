@extends('layouts.commentaire')

@section('title','Remuneration tuteur')

@section('contenu')

<div class="container-fluid h-100" >
    <h1>Laissez nous vos commenaires!</h1>

    <div class="rating">
    <h2>Évaluation</h2>
    <div class="stars">
        <span class="star">&#9733;</span>
        <span class="star">&#9733;</span>
        <span class="star">&#9733;</span>
        <span class="star">&#9733;</span>
        <span class="star">&#9733;</span>
    </div>
</div>

<div class="comments">
    <h2>Commentaires</h2>
    <textarea placeholder="Écrivez vos commentaires ici"></textarea>
    <button onclick="submitComment()">Soumettre</button>
    <div class="comment-section mt-3">
        <!-- Comments will be displayed here -->
    </div>
</div>
</div>
@endsection