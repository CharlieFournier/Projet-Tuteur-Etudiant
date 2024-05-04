@extends('layouts.commentaire')

@section('title','Remuneration tuteur')

@section('contenu')


<div class="container-fluid h-100">

    <h1>Laissez nous vos commentaires!</h1>
    <div class="row h-100">
        

        <form method="post" action="{{route('commentaires.store')}}">
            @csrf
            <label>Commentaire:</label> <br>
            <textarea class="form-control" style="width:30%; height:30%;" placeholder="selon moi..."></textarea>
            <br>
            <button class="btn" style="background-color: rgba(255,192,203,0.5); border-color: black;" type="submit">
                Envoyer
                
            </button>

        </form>

    </div>
</div>

@endsection