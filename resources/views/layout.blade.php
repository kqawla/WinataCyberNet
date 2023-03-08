<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <!-- Template Main CSS File -->
    <link rel="stylesheet" type="text/css" href="{!! asset('css/style.css') !!}">

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Merriweather+Sans&family=PT+Sans&display=swap"
        rel="stylesheet">

    <title>Winata Cyber Net</title>
</head>

<body>
    <!-- NAVBAR -->
    <nav class="navbar fixed-top navbar-expand-lg shadow-sm p-3 mb-5 bg-body">
        <div class="container-fluid">
            <img src="{{ ('img/WinataLogo.png') }}" class="logo">
            <h4 class="title ms-3 mt-1">WINATA CYBER NET</h4>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto nav-pills">
                    <li class="nav-item">
                        <a class="nav-link px-3" aria-current="page" href="/">Beranda</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link px-3" href="#about-us">Tentang Kami</a>
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

    <div class="content">
        @yield('isi2')
    </div>

    
    <!-- FOOTER -->

    <div class="container-fluid">
        <div class="footer p-5">
            <div class="row ms-5">
                <div class="col-4 ms-4">
                    <p class="title">WINATA CYBER NET</p>
                    <ul class="ps-5">
                        <li href="{{ url('website/pusat') }}">Pusat Pelatihan Digital Marketing</li>
                        <li>Digital Marketing Agency</li>
                    </ul>
                </div>
                <div class="col-4 me-5">
                    <p class="footer-title">ALAMAT</p>
                    <p>Kota Wisata, Ruko Boston Square Blok RK 2, No. 38, Kel. Ciangsana, Kec. Gunung Putri, Kab. Bogor,
                        16968, Indonesia.</p>
                </div>
                <div class="col-3">
                    <p class="footer-title">KONTAK</p>
                    <div class="d-flex">
                        <img src="{{ ('img/instagram.png') }}" class="footer-img me-4" alt="">
                        <img src="{{ ('img/email.png') }}" class="footer-img me-4" alt="">
                        <img src="{{ ('img/whatsapp.png') }}" class="footer-img" alt="">
                    </div>
                    <div class="d-flex mt-3">
                        <img src="{{ ('img/facebook.png') }}" class="footer-img me-4" alt="">
                        <img src="{{ ('img/youtube.png') }}" class="footer-img" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>

    <!-- END FOOTER -->



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>
</body>
</html>