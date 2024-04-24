@extends('layouts.commentaire')

@section('title','Remuneration tuteur')

@section('contenu')

<div class="container-fluid h-100" >
    <h1>Page de commentaires</h1>

    <div class="rating">
    <h2>Rating</h2>
    <div class="stars">
        <span class="star">&#9733;</span>
        <span class="star">&#9733;</span>
        <span class="star">&#9733;</span>
        <span class="star">&#9733;</span>
        <span class="star">&#9733;</span>
    </div>
</div>

<div class="comments">
    <h2>Comments</h2>
    <textarea placeholder="Write your comment here"></textarea>
    <button onclick="submitComment()">Submit</button>
    <div class="comment-section">
        <!-- Comments will be displayed here -->
    </div>
</div>
</div>
@endsection