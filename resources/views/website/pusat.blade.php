<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Winata Cyber Net</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

    <link rel="stylesheet" type="text/css" href="{!! asset('css/style.css') !!}">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Merriweather+Sans&family=PT+Sans&display=swap" rel="stylesheet">

  </head>
  <body>
    <nav class="navbar fixed-top navbar-expand-lg shadow-sm p-3 mb-5 bg-body">
        <div class="container-fluid">
            <img src="{{ ('img/WinataLogo.png') }}"  class="logo">
            <h4 class="title ms-3 mt-1">WINATA CYBER NET</h4>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto nav-pills">
                    <li class="nav-item">
                        <a class="nav-link px-3" aria-current="page" href="#">Beranda</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link px-3" href="#about">Tentang Kami</a>
                    </li>
                    <form class="d-flex ms-4" role="search">
                        <input class="form-control me-2" type="search" placeholder="Cari Disini" aria-label="Search">
                            <button class="btn" type="submit">Cari</button>
                    </form>
                </ul>
            </div>
        </div>
    </nav>

    <!-- END NAVBAR -->


    <!-- HEADER -->

    <div class="header-pusat">
        <div class="box-header-pusat p-4 position-absolute top-50 translate-middle">
            <h1 class="header-text-pusat fw-bolder ms-3 me-4 my-3">Pusat Pelatihan Digital Marketing</h1>
        </div>
    </div>

    <!-- END HEADER -->

    

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
  </body>
</html>