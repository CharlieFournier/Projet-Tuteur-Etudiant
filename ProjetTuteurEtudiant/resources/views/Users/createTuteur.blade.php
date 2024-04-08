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
    <div class="container-fluid h-100 ">
        <div class="row justify-content-center align-items-center h-100 ">
            <div class="col-6 blanc" style="border-radius: 20px;">
                <div class="p-3 text-center"><h1>Inscription</h1><hr/></div>
                <form method="post" action="{{}}">
                    @csrf
                    <div class="row p-3">
                        <div class="col-4">
                            <label class="form-label" for="matricule">Matricule : </label>
                            <input class="form-control" type="text" id="matricule" name="matricule">
                        </div>
                        <div class=" col-4">
                            <label class="form-label" for="prenom">Prénom : </label>
                            <input class="form-control" type="text" id="prenom" name="prenom">
                        </div>
                        <div class="col-4">
                            <label class="form-label" for="nom">Nom : </label>
                            <input class="form-control" type="text" id="nom" name="nom">
                        </div>
                    </div>
                    <div class="row p-3">
                        <div>
                            <label class="form-label" for="addressCourriel">Address Courriel : </label>
                            <input class="form-control" type="text" id="addressCourriel" name="addressCourriel">
                        </div>
                        <div class="">
                            <label class="form-label" for="motdepasse">Mot de Passe : </label>
                            <input class="form-control" type="password" id="motdepasse" name="motdepasse">
                        </div>
                        <div class="">
                            <label class="form-label" for="confirme">Confirmation du Mot de Passe : </label>
                            <input class="form-control" type="password" id="confirme" name="confirme">
                        </div>
                    </div>
                    <div class="row p-3">
                        <div class="col-4">
                            <label class="form-label" for="grade">Grade : </label>
                            <input class="form-control" type="text" id="grade" name="grade">
                        </div>
                        <div class="col-4">
                            <label class="form-label" for="matiere">Matière : </label>
                            <input class="form-control" type="text" id="matiere" name="matiere">
                        </div>
                        <div class="col-4">
                            <label class="form-label" for="nb_heures">Nombre d'heure : </label>
                            <input class="form-control" type="text" id="nb_heures" name="nb_heures">
                        </div>
                    </div>
                    <div class="p-3 text-center">
                        <button class="btn" style="background-color: rgba(255,192,203,0.5); border-color: black;" type="button">S'inscrire</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>