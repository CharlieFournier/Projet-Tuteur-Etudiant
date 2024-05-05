@extends('layouts.app')

@section('title','Page Accueil')

@section('contenu')

<div class="container-fluid">
    <div class="row justify-content-center align-items-center h-100">
        <div class="col-8 scroll text-center">
            <h1>Gestion des demandes</h1>
            <table class="table table-bordered" style="background-color: #284886; color: white;">
                <tr>
                    <th>Objet</th>
                    <th>commentaire</th>
                    <th>Temps requis</th>
                    <th>Periode</th>
                    <th>Date de creation</th>
                </tr>
                @if(count($demandes))
                @foreach($demandes as $demande)
                <tr>
                    <td><p>{{$demande->objet}}</p></td>
                    <td><p>{{$demande->commentaire}}</p></td>
                    <td><p>{{$demande->temps_requis}}</p></td>
                    <td><p>{{$demande->periode}}</p></td>
                    <td><p>{{$demande->created_at}}</p></td>
                    <td>
                        <form method="POST" action="{{route('demandes.destroy', [$demande->id])}}">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Supprimer</button>
                        </form>
                    </td>
                </tr>
                @endforeach
                @else
                <h3>Il n'y a pas de demandes</h3>
                @endif
            </table>
        </div>
    </div>
</div>

@endsection