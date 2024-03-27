<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <div class="container-fluid">
        <div class="row g-2 text-center">
            <div class="col-4"><div class="p-4"></div></div>
            <div class="col-4"><div class="p-4"></div></div>
            <div class="col-4"><div class="p-4"></div></div>
        </div>
        <div class="row text-center">
            <div class="col-md-2"></div>
            <div class="col-md-8 bg-warning">
                <div class="p-3">Inscription</div>
                <div class="p-3">
                    <label class="form-label" for="username">Nom d'utilisateur : </label>
                    <input class="form-control" type="text" id="username" name="username">
                </div>
                <div class="p-3">
                    <label class="form-label" for="addressCourriel">Address Courriel : </label>
                    <input class="form-control" type="text" id="addressCourriel" name="addressCourriel">
                </div>
                <div class="p-3">
                    <label class="form-label" for="motdepasse">Mot de Passe : </label>
                    <input class="form-control" type="password" id="motdepasse" name="motdepasse">
                </div>
                <div class="p-3">
                    <label class="form-label" for="confirme">Confirmation du Mot de Passe : </label>
                    <input class="form-control" type="password" id="confirme" name="confirme">
                </div>
                <div class="p-3">
                    <button class="btn btn-success" type="button">Inscription</button>
                </div>
            </div>
            <div class="col-md-2"></div>
        </div>
    </div>
</body>
</html>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>