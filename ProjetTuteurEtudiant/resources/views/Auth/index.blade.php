@extends('layouts.usagers')

@section('title', "Page d'acceuil Utilisateurs")

@section('contenu')

<div class="container-fluid">
    <div class="row justify-content-center align-items-center h-100">
        <div class="col-8 scroll text-center">
            <h1>Gestion des utilisateurs</h1>
            <table class="table table-bordered" style="background-color: #284886; color: white;">
                <tr>
                    <th>Matricule</th>
                    <th>Prénom</th>
                    <th>Nom</th>
                    <th>Rôle</th>
                    <th>Niveau</th>
                    <th>Lien</th>
                </tr>
                @if(count($usagers))
                @foreach($usagers as $usager)
                <tr>
                    <td><p>{{$usager->matricule}}</p></td>
                    <td><p>{{$usager->prenom}}</p></td>
                    <td><p>{{$usager->nom}}</p></td>
                    <td><p>{{$usager->role}}</p></td>
                    <td><p>{{$usager->niveau}}</p></td>
                    <td>
                        <button style="background-color: #092D74;" type="submit" class="btn">
                            <a style="text-decoration: none;" href="{{route('usager.show', [$usager])}}">
                                Choisir
                            </a>
                        </button>
                    </td>
                </tr>
                @endforeach
                @else
                <h3>Il n'y a pas d'usagers</h3>
                @endif
            </table>
        </div>
    </div>
</div>

@endsection