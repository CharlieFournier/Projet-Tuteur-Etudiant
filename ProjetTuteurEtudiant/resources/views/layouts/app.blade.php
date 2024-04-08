<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="{{asset('principal.css')}}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        
</head>
<body>
    <!-- HEADER -->
    <header>

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

    </header>
    <!-- END OF HEADER -->
    <div class="h-89">
    @yield('contenu')
    </div>
    <!-- FOOTER -->
    <!-- END OF LINKS -->

    <footer class="text-center cegep1" style="padding-bottom: 4px; padding-top: 9px;">
      <p>&copy 1968-2024 Cegep de Trois-Rivières.</p>
      <p style="margin-block-end: 0em;">Charlie Fournier & Roselyne Martin & Nicolas Veilleux &copy 2024</p>
    </footer>
    
</body>
</html>