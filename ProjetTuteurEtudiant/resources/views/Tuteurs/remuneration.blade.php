@extends('layouts.rendezvous')

@section('title','Remuneration tuteur')

@section('contenu')

<div class="container-fluid h-100" >
    <div class="row text-center">
        <div class="col-md-2 h-100">
        </div> 
        <div class="col-md-8 h-100">
            <div class="row h-100">
                <div class="col-md-6 text-start">
                    <h1> Bonjour |Tuteur| </h1>
                </div>
                <div class="col-md-6 text-end">
                </div>
            </div>

            <div class="pt-5">
                <h1><u>Liste des rencontres effectuées</u></h1>
                <div class="row h-100">
                <div class="col-md-6 text-start">
                </div>
                <div class="col-md-6 text-end">
                    <h5>Nombre d'heures total: 3.5h
                </div>
            

                <!-- ||||||||||||||||||||||||||||||||||||||||||||| -->
            <table>
    <thead>
        <tr>
            <th>Nom étudiant</th>
            <th>Date</th>
            <th>Nombre d'heures</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>Alice Adam</td>
            <td>2024-02-11</td>
            <td>1.5</td>
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