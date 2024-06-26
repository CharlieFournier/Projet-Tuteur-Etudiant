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

    <nav class="navbar navbar-expand-lg navbar-light cegep1 text-center" style="color: #FFFFFF;">
        <div class="container-fluid">

            <a class="navbar-brand" style="color: #FFFFFF;" href="{{route('login')}}">Projet Tutorat</a>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">

                <ul class="navbar-nav me-auto mb-2 mb-lg-0">

                    <li class="nav-item">
                        <a class="nav-link active" style="color: #FFFFFF;" aria-current="page" href="{{route('Requetes.index')}}">Accueil</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" style="color: #FFFFFF;" href="#">Tuteurs</a>
                    </li>

                    <li class="nav-item">
                        <form method="get" action="{{route('Demandes.index')}}">
                        @csrf
                            <button type="submit" style="color: #FFFFFF;" class="btn">liste des demandes</button>
                        </form>
                    </li>

                    <li class="nav-item">
                        <form method="get" action="{{route('Demandes.create')}}">
                        @csrf
                            <button type="submit" style="color: #FFFFFF;" class="btn">Faire une demande</button>
                        </form>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" style="color: #FFFFFF;" href="{{route('usagers.update', [$Usager->matricule])}}">Profil</a>
                    </li>

                    <li class="nav-item justify-content-end">
                        <form method="post" action="{{route('logout')}}">
                        @csrf
                            <button type="submit" class="btn btn-danger">Logout</button>
                        </form>
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

    <footer class="text-center cegep1" style="padding-bottom: 3px; padding-top: 6px; color: #FFFFFF;">
      <p>&copy 1968-2024 Cegep de Trois-Rivières.</p>
      <p style="margin-block-end: 0em;">Charlie Fournier & Roselyne Martin & Nicolas Veilleux &copy 2024</p>
    </footer>
    
</body>
</html>