<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Page Principal</title>
    <link rel="stylesheet" href="principal.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>

    <nav class="navbar navbar-expand-lg navbar-light cegep1 text-center">
    <div class="container-fluid">

        <a class="navbar-brand" href="#">Projet Tutorat</a>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">

        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#">Accueil</a>
            </li>
            <li class="nav-item">
            <a class="nav-link" href="#">Tuteurs</a>
            </li>
        </ul>

        </div>
        
    </div>
    </nav>
    <div class="container-fluid h-100 cegep1">
        <div class="row text-center h-100 cegep1">

                    
            <div class="col-10">

                <div class="row h-15">
                <div class="col-6 card card-event-design text-center">
                        <h1 id="text-event "> Demande d'aide </h1>
                    </div>
                    <div class="col-6 card card-event-design text-center">
                        <h1 id="text-event "> Demande d'aide </h1>
                    </div>
                </div>

                <div class="row h-15">
                <div class="col-6 card card-event-design text-center">
                        <h1 id="text-event "> Demande d'aide </h1>
                    </div>
                    <div class="col-6 card card-event-design text-center">
                        <h1 id="text-event "> Demande d'aide </h1>
                    </div>
                </div>

                <div class="row h-15">
                    <div class="col-6 card card-event-design text-center">
                        <h1 id="text-event "> Demande d'aide </h1>
                    </div>
                    <div class="col-6 card card-event-design text-center">
                        <h1 id="text-event "> Demande d'aide </h1>
                    </div>
                </div>

                <div class="row h-15">
                <div class="col-6 card card-event-design text-center">
                        <h1 id="text-event "> Demande d'aide </h1>
                    </div>
                    <div class="col-6 card card-event-design text-center">
                        <h1 id="text-event "> Demande d'aide </h1>
                    </div>
                </div>
                <div class="row h-15">
                <div class="col-6 card card-event-design text-center">
                        <h1 id="text-event "> Demande d'aide </h1>
                    </div>
                    <div class="col-6 card card-event-design text-center">
                        <h1 id="text-event "> Demande d'aide </h1>
                    </div>
                </div>
                <div class="row h-15">
                <div class="col-6 card card-event-design text-center">
                        <h1 id="text-event "> Demande d'aide </h1>
                    </div>
                    <div class="col-6 card card-event-design text-center">
                        <h1 id="text-event "> Demande d'aide </h1>
                    </div>
                </div>

            </div>
            <div class="col-2">
                <div class="row h-45">
                    <div class="col-12 text-start card card-conteneur text-center p-0">

                        <div class="col-12 card card-event-design text-center">
                            <h1 id="text-event "> Tuteurs </h1>
                        </div>
                        
                            <ul>
                            @foreach($tuteurs as $tuteur)
        
                            <a href="{{route('Tuteurs.show', [$tuteur->nom])}}"><p>{{$tuteur->prenom}} {{$tuteur->nom}}</p></a>
                                
                            @endforeach
                            </ul> 
                    </div>
                </div>
                <div class="row h-45">
                    <div class="col-12 text-start card card-conteneur text-center p-0">

                        <div class="col-12 card card-event-design text-center">
                            <h1 id="text-event "> Étudiants </h1>
                        </div>
                            <ul>
                       
                            </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
</body>
</html>