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
            <nav class="main-nav">
                <form method="post" action="{{route('login')}}">
                @csrf
                    <button type="submit" class="btn" style="background-color: #284886; color: white;">Projet Tutorat</button>
                </form>
            </nav>
            <nav class="sub">
                <form method="get" action="{{route('Requetes.index')}}">
                @csrf
                    <button type="submit" class="btn" style="background-color: #284886; color: white;">Acceuil</button>
                </form>
            </nav>
            <nav class="sub">
                <form method="get" action="">
                @csrf
                    <button type="submit" class="btn" style="background-color: #284886; color: white;">Page Profil</button>
                </form> 
            </nav>
            <nav class="sub">
                <form method="post" action="{{route('logout')}}">
                @csrf
                    <button type="submit" class="btn btn-danger text-dark">Logout</button>
                </form>
            </nav>
            <nav class="sub">
                <form method="get" action="{{route('usagers.index')}}">
                @csrf
                    <button type="submit" class="btn" style="background-color: #284886; color: white;">Usagers</button>
                </form> 
            </nav>
        </div>
    </nav>

    </header>
    <!-- END OF HEADER -->
    <div class="h-89">
    <div class="container-fluid h-100">
        <div class="row text-center h-100">    
            <div class="col-12">
            @yield('contenu')
            </div>
        </div>
    </div>


    </div>
    <!-- FOOTER -->
    <!-- END OF LINKS -->

    <footer class="text-center cegep1" style="padding-bottom: 4px; padding-top: 9px;">
      <p>&copy 1968-2024 Cegep de Trois-Rivières.</p>
      <p style="margin-block-end: 0em;">Charlie Fournier & Roselyne Martin & Nicolas Veilleux &copy 2024</p>
    </footer>
    
</body>
</html>