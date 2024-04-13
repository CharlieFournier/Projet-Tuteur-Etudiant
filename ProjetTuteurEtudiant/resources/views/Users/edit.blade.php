<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Creation</title>
    <link rel="stylesheet" href="Connexion.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
@if(isset($user))
<form method="post" action="{{route('usagers.update', [$usager])}}">
    @csrf 
    @method('PATCH')
    <div class="container-fluid text-center">
    <div class="row">
            <div class="col-xl-2"></div>
            <div class="col-xl-8">
                <h1>Formulaire pour ajouter un utilisateur</h1>
            </div>
            <div class="col-xl-2"></div>
        </div>
        <div class="row">
            <div class="col-xl-2"></div>
            <div class="col-xl-2">
                <br>
                <label class="form-label" for="matricule">Matricule</label>
                <input type="text" class="form-control" id="matricule" placeholder="Yousouf8" name="matricule" value="{{old('matricule', $usager->matricule)}}">
            </div>
            <div class="col-xl-3">
                <br>
                <label class="form-label" for="prenom">Prénom du client</label>
                <input type="text" class="form-control" id="prenom" placeholder="Prénom du client" name="prenom" value="{{old('prenom', $usager->prenom)}}">
            </div>
            <div class="col-xl-3">
                <br>
                <label class="form-label" for="nom">Nom du client</label>
                <input type="text" class="form-control" id="nom" placeholder="Nom de la personne" name="nom" value="{{old('nom', $usager->nom)}}">
            </div>
            <div class="col-xl-2"></div>
        </div>
        <div class="row">
            <div class="col-xl-2"></div>
            <div class="col-xl-4">
                <br>
                <label class="form-label" for="email">Email de l'utilisateur</label>
                <input type="email" class="form-control" placeholder="patate@hotmail.com" id="email" name="email" value="{{old('email', $usager->email)}}">
            </div>
            <div class="col-xl-2"></div>
        </div>
        <div class="row">
            <div class="col-xl-3"></div>
            <div class="col-xl-6">
                <br>
                <label class="form-label" for="pwd">le mot de passe</label>
                <input type="text" class="form-control" id="pwd" placeholder="inscrire votre password" name="pwd" value="{{old('password', $usager->password)}}">
            </div>
            <div class="col-xl-3"></div>
        </div>
        <div class="row">
            <div class="col-xl-4"></div>
            <div class="col-xl-2">
                <br>
                <button  type="submit" class="btn btn-success">Modifier</button>
            </form>
            </div>
            <div class="col-xl-2">
                <br>
                <form method="POST" action="{{route('usagers.destroy', [$usager->id])}}">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">Supprimer</button>
                </form>
            </div>
            <div class="col-xl-4"></div>
        </div>
    </div>
@endif
</body>
@endsection