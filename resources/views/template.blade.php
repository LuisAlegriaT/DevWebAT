<html>
    <head>
    <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Diario Laravel</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script> 
    </head>
    <body class="p-3 mb-2 bg-dark text-white">
        <nav class="navbar navbar-expand-lg navbar-light bg-light p-3 mb-2 bg-white text-dark">
            <div class="container-fluid">
                <a class="navbar-brand" href="/">Acesorios Vilchiz</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">

                <ul class="navbar-nav">
                   <!-- <li class="nav-item">
                        <a class="nav-link {{request()->routeIs('arts')? 'text-secondary fw-bold text-uppercase':''}}" aria-current="page" href={{route('arts')}}>Articulos</a>
                    </li>
-->
                    <li class="nav-item">
                        <a class="nav-link {{request()->routeIs('promo')? 'text-secondary fw-bold text-uppercase':''}}" href={{route('promo')}}>Promociones</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link {{request()->routeIs('reseñas')? 'text-secondary fw-bold text-uppercase':''}}" href="/reseñas">Reseñas</a>
                    </li>

                    <li class="nav-item">
                </ul>
                </div>
            </div>
        </nav>

        @yield('main')

        <br><br><br><br><br><br><br><br><br>
        <div class="bg-secondary bg-gradient text-center" role="alert">
            Vilchiz Company
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    </body>
</html>