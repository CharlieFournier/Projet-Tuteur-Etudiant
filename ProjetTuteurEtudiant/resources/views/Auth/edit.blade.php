@extends('layouts.usagers')

@section('title', "Page Profile")

@section('contenu')
<div class="p-3 text-center">
    <h1>Page de modification du profile {{$usager->matricule}},</h1>
</div>

@if(isset($usager))
<form method="post" action="{{route('usagers.update', [$usager])}}">
@csrf
@method('PATCH')
    <div class="row p-3">
        <div class=" col-4">
            <label class="form-label" for="prenom">Prénom : </label>
            <input class="form-control" type="text" id="prenom" name="prenom" value="{{old('prenom', $usager->prenom)}}">
        </div>
        <div class="col-4">
            <label class="form-label" for="nom">Nom : </label>
            <input class="form-control" type="text" id="nom" name="nom" value="{{old('nom', $usager->nom)}}">
        </div>
        <div class="col-4">
            <label class="form-label" for="nb_heures">Nombre d'heure : </label>
            <input class="form-control" type="number" id="nb_heures" name="nb_heures" min=0 max=15 value="{{old('nb_heures', $usager->nb_heures)}}">
        </div>
    </div>
    <div class="row p-3">
        <div>
            <label class="form-label" for="email">Address Courriel : </label>
            <input class="form-control" type="text" id="email" name="email" value="{{old('email', $usager->email)}}">
        </div>
        <div>
            <label class="form-label" for="password">Password : </label>
            <input class="form-control" type="password" id="password" name="password" value="{{old('password', $usager->password)}}">
        </div>
    </div>
    <div class="row p-3">
        <div class="col-6">
            <label class="form-label" for="role">Rôle : </label>
            <select name="role" id="role" type="text" class="form-control" placeholder="Veuillez choisir...">
                <option value="{{$usager->role}}">{{$usager->role}}</option>
                @foreach($roles as $roleC)
                @if($roleC->role!=$usager->role)
                    <option value="{{old('role', $roleC->role)}}">{{$roleC->role}}</option>
                @endif
                @endforeach
            </select>
        </div>
        <div class="col-6">
            <label class="form-label" for="niveau">Niveau : </label>
            <select name="niveau" id="niveau" type="text" class="form-control" placeholder="Veuillez choisir...">
                <option value="{{$usager->niveau}}">{{$usager->niveau}}</option>
                @foreach($niveaux as $niv)
                @if($niv->niveau!=$usager->niveau)
                    <option value="{{old('niveau', $niv->niveau)}}">{{$niv->niveau}}</option>
                @endif
                @endforeach
            </select>
        </div>
    </div>
    <div class="p-3 text-center">
        <button class="btn text-white" style="background-color: #092D74;" type="submit">
            Modifier
        </button>
    </div>
</form>
<div>
    <form method="POST" action="{{route('usagers.destroy', [$usager->id])}}">
    @csrf
    @method('DELETE')
        <button type="submit" class="btn btn-danger">Supprimer</button>
    </form>
</div>

@endif
@endsection