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

    <div class="container-fluid h-100">
        <div class="row text-center h-100">
            <div class="col-2 h-100 text-start card card-conteneur p-0">

                <div class="col-12 card card-event-design text-center">
                    <h1 id="text-event "> Catégories </h1>
                </div>
            </div>
                    
            <div class="col-1"></div>
            <div class="col-6">

                <div class="row h-25">
                    <div class="col-12 card card-event-design text-center">
                        <h1 id="text-event "> Demande d'aide </h1>
                    </div>
                </div>

                <div class="row h-25">
                    <div class="col-12 card card-event-design text-center">
                    <a href="{{route('Requetes.show')}}"><h1 id="text-event "> Demande d'aide </h1></a>
                         
                    </div>
                </div>

                <div class="row h-25">
                    <div class="col-12 card card-event-design text-center">
                        <h1 id="text-event "> Demande d'aide </h1>
                    </div>
                </div>

                <div class="row h-25">
                    <div class="col-12 card card-event-design text-center">
                        <h1 id="text-event "> Demande d'aide </h1>
                    </div>
                </div>

            </div>
            <div class="col-1"></div>
            <div class="col-2">
                <div class="row h-50">
                    <div class="col-12 text-start card card-conteneur text-center p-0">

                        <div class="col-12 card card-event-design text-center">
                            <h1 id="text-event "> Tuteurs </h1>
                        </div>
                            <ul>
                                <li><a href="{{route('Tuteurs.index')}}">Tuteur 1 </a></li>
                            </ul>
                    </div>
                </div>
                <div class="row h-50">
                    <div class="col-12 text-start card card-conteneur text-center p-0">

                        <div class="col-12 card card-event-design text-center">
                            <h1 id="text-event "> Étudiants </h1>
                        </div>
                            <ul>
                                <li><a href="{{route('Etudiants.index')}}">Etudiant 1 </a></li>
                            </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
</body>
</html>