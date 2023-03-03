<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <link rel="stylesheet" type="text/css" href="{!! asset('css/style.css') !!}">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Merriweather+Sans&family=PT+Sans&display=swap" rel="stylesheet">

    <title>Winata Cyber Net</title>
</head>

<body>
    <!-- NAVBAR -->

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
    <div class="header">
        <div class="box-header p-5 position-absolute top-50 translate-middle">
            <h1 class="header-text fw-bolder ms-3 me-4 mb-3">Pusat Pelatihan <br>Digital Marketing & <br>Enterpreneurship</h1>
            <p class="header-text-2 fw-light mb-4">Raih Mimpimu Menjadi Enterpreneur Sukses</p>
            <button class="header-btn ms-3 mb-3">Segera Bergabung</button>
        </div>
    </div>

    <!-- END HEADER -->

    <!-- WHY US -->

    <div class="container-fluid">
        <div class="why-us mt-5 mb-4 mx-2">
            <div class="row">
                <div class="col-3">
                    <center>
                    <div class="why-us-card ps-4 pe-4">
                        <img src="{{ ('img/integritas.png') }}" class="why-us-img mb-3" alt="">
                        <p class="fw-bold">INTEGRITAS</p>
                        <p>Mengutamakan kejujuran, kehandalan, menjunjung tinggi setiap komitmen dan mengerjakan sesuatu dengan penuh konsisten.</p>
                    </div>
                    </center>
                </div>
                <div class="col-3">
                <center>
                    <div class="why-us-card ps-2 pe-4 pb-2">
                        <img src="{{ ('img/kompeten.png') }}" class="why-us-img mb-3" alt="">
                        <p class="fw-bold">KOMPETEN</p>
                        <p>Menjalankan pekerjaan secara professional didukung personil yang qualified untuk mencapai hasil terbaik.</p>
                    </div>
                    </center>
                </div>
                <div class="col-3"><center>
                    <div class="why-us-card ps-2 pe-4 pb-2">
                        <img src="{{ ('img/inovatif.png') }}" class="why-us-img mb-3" alt="">
                        <p class="fw-bold">INOVATIF & KREATIF</p>
                        <p>Konsisten melakukan perbaikan dan pembaruan servis untuk meningkatkan nilai tambah bisnis pelanggan.</p>
                    </div>
                    </center></div>
                <div class="col-3"><center>
                    <div class="why-us-card-2 ps-2 pe-4">
                        <img src="{{ ('img/customer.png') }}" class="why-us-img mb-3" alt="">
                        <p class="fw-bold">CUSTOMER FOCUS</p>
                        <p>Selalu mencurahkan perhatian kepada pelanggan secara  konsisten dengan memenuhi harapan yang diinginkan mereka.</p>
                    </div>
                    </center></div>
            </div>
        </div>
    </div>

    <!-- END WHY US -->

    <!-- DIVISI -->

    <div class="container-fluid">
    <div class="divisi mb-5">
        <div class="row">
            <div class="col-4">
                <h4 class="title-divisi">Pusat Pelatihan Digital Marketing</h4>
                <p>Winata Cyber Net membuka peluang untuk kalian yang ingin menguasai digital marketing dan menjadi calon pengusaha online sukses di era digital ini.</p>
            </div>
            <div class="col-4">
                <img src="{{ ('img/divisi-img.jpg') }}" class="divisi-img" alt="">
            </div>
            <div class="col-4 ps-5">
                <h4 class="title-divisi-2">Digital Marketing Agency</h4>
                <p>Dengan strategi yang Winata Cyber Net miliki, kami dapat melakukan pemasaran online produk anda sehingga dapat menaikan omset Anda.</p></div>
        </div>
    </div>
    </div>

    <!-- END DIVISI -->

    <div class="container-fluid">
        <div class="review">
            <h3 class="review-title">Apa Kata Mereka yang Memilih Winata Cyber Net ?</h3>
            <div class="row">
                <div class="col-3">
                    <div class="profil">
                        
                    </div>
                </div>
                <div class="col-3">
                    f
                </div>
                <div class="col-3">
                    n
                </div>
            </div>
        </div>
    </div>

    <!-- KLIEN -->

    <div class="container-fluid">
        <div class="klien mb-5">
        <h3 class="klien-title">Klien Winata Cyber Net</h3>
        <center>
        <div class="klien-box">
            <img src="{{ ('img/raka-tour.webp') }}" class="klien-img"
             alt="">
             <img src="{{ ('img/manakib.webp') }}" class="klien-img"
             alt="">
             <img src="{{ ('img/harmoni.webp') }}" class="klien-img"
             alt="">
             <img src="{{ ('img/happyplay.png') }}" class="klien-img"
             alt="">
        </div>
        <div class="klien-box-2">
            <img src="{{ ('img/mody.webp') }}" class="klien-img"
             alt="">
             <img src="{{ ('img/vets.webp') }}" class="klien-img"
             alt="">
             <img src="{{ ('img/ipland.webp') }}" class="klien-img"
             alt="">
        </div>
        </center>
        </div>
    </div>

    <!-- FOOTER -->
    <div class="container-fluid">
        <div class="footer p-5">
            <div class="row ms-5">
                <div class="col-4 ms-4"><p class="title">WINATA CYBER NET</p>
                    <ul class="ps-5">
                        <li>Pusat Pelatihan Digital Marketing</li>
                        <li>Digital Marketing Agency</li>
                    </ul></div>
                <div class="col-4 me-5">
                    <p class="footer-title">ALAMAT</p>
                    <p>Kota Wisata, Ruko Boston Square Blok RK 2, No. 38, Kel. Ciangsana, Kec. Gunung Putri, Kab. Bogor, 16968, Indonesia.</p>
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