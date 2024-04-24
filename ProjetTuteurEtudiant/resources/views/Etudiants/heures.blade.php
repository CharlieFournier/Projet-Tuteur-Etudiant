@extends('layouts.rendezvous')

@section('title','Remuneration tuteur')

@section('contenu')

<div class="container-fluid h-100" >
    <div class="row text-center h-100">
        <div class="col-md-2 h-100">
        </div> 
        <div class="col-md-8 h-100">
            <div class="row">
                <div class="col-md-6 text-start">
                    <h1> Bonjour |Etudiant| </h1>
                </div>
                <div class="col-md-6 text-end">
                </div>

                <div class="pt-5">
                    <h1><u>Liste des rendez-vous</u></h1>
                    <div class="row h-100">
                        <div class="col-md-6 text-start">
                        </div>
                        <div class="col-md-6 text-end">
                            <h5> Heure disponible: 00h </h5>
                        </div>

                <!-- ||||||||||||||||||||||||||||||||||||||||||||| -->
                <table>
    <thead>
        <tr>
            <th>Nom du tuteur</th>
            <th>Date</th>
            <th>Nombre d'heures</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>Alexandra Jaques</td>
            <td>2024-01-09</td>
            <td>1.3</td>
        </tr>
        <tr>
            <td>Bernard Tortue</td>
            <td>2023-11-26</td>
            <td>2</td>
        </tr>
        <tr>
            <td>Bob Cheveux</td>
            <td>2023-12-07</td>
            <td>2</td>
        </tr>
        <tr>
            <td>Bob Cheveux</td>
            <td>2023-12-07</td>
            <td>2</td>
        </tr>
        <tr>
            <td>Bob Cheveux</td>
            <td>2023-12-07</td>
            <td>2</td>
        </tr>
        <tr>
            <td>Bob Cheveux</td>
            <td>2023-12-07</td>
            <td>2</td>
        </tr>
    </tbody>
</table>
<!-- ||||||||||||||||||||||||||||||||||||||||||||| -->

                </div>

            </div>
        </div>
        <div class="col-md-2 h-100">
        </div> 
    </div>
</div>

@endsection