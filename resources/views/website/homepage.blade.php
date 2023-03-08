@extends('layout')

@section('isi2')
    <!-- HEADER -->
    <div class="header">
        <div class="box-header p-5 position-absolute top-50 translate-middle">
            <h1 class="header-text fw-bold me-3">Pusat Pelatihan<br>Digital Marketing &
                <br>Enterpreneurship</h1>
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
                            <p class="why-us-text">Mengutamakan kejujuran, kehandalan, menjunjung tinggi setiap komitmen
                                dan mengerjakan sesuatu dengan penuh konsisten.</p>
                        </div>
                    </center>
                </div>
                <div class="col-3">
                    <center>
                        <div class="why-us-card ps-2 pe-4 pb-2">
                            <img src="{{ ('img/kompeten.png') }}" class="why-us-img mb-3" alt="">
                            <p class="fw-bold">KOMPETEN</p>
                            <p class="why-us-text">Menjalankan pekerjaan secara professional didukung personil yang
                                qualified untuk mencapai hasil terbaik.</p>
                        </div>
                    </center>
                </div>
                <div class="col-3">
                    <center>
                        <div class="why-us-card ps-2 pe-4 pb-2">
                            <img src="{{ ('img/inovatif.png') }}" class="why-us-img mb-3" alt="">
                            <p class="fw-bold">INOVATIF & KREATIF</p>
                            <p class="why-us-text">Konsisten melakukan perbaikan dan pembaruan servis untuk meningkatkan
                                nilai tambah bisnis pelanggan.</p>
                        </div>
                    </center>
                </div>
                <div class="col-3">
                    <center>
                        <div class="why-us-card-2 ps-2 pe-4">
                            <img src="{{ ('img/customer.png') }}" class="why-us-img mb-3" alt="">
                            <p class="fw-bold">CUSTOMER FOCUS</p>
                            <p class="why-us-text">Selalu mencurahkan perhatian kepada pelanggan secara konsisten dengan
                                memenuhi harapan yang diinginkan mereka.</p>
                        </div>
                    </center>
                </div>
            </div>
        </div>
    </div>

    <!-- END WHY US -->

    <!-- ABOUT US -->

    <div class="container-fluid">
        <div class="about-us mx-5 mb-3" id="about-us">
            <h3 class="about-title mb-4 mt-2">Tentang Kami</h3>
            <p class="my-4"><strong>Winata Cyber Net</strong> didirikan pada tanggal 13 Juli 2019. Winata Cyber Net
                tidak hanya berfokus
                pada pemasaran produk dengan berbasis digital saja, namun turut mengembangkan layanan jasa pelatihan
                serta pemberdayaan untuk masyarakat umum, seperti :</p>
            <ul class="list-about">
                <li>Pelatihan dan Konsultasi Pemasaran Online.</li>
                <li>Workshop Kelas Bisnis Online secara offline maupun online dengan media yang sangat lengkap serta
                    terupdate.</li>
                <li>Pusat Magang Bisnis Online untuk umum.</li>
                <li>Tempat Praktek Kerja Lapangan (PKL) / PSG / Praktek Kerja Industri SMK.</li>
                <li>Pelatihan Pengelola Siswa Magang / PKL / PSG.</li>
                <li>Digital Marketing Agency, meliputi Jasa Pembuatan, Pengelolaan dan Optimasi media pemasaran online
                    (Sosial Media, Web, Marketplace, dll).</li>
            </ul>
        </div>
    </div>

    <!--END ABOUT US  -->

    <!-- VISI MISI -->

    <div class="container-fluid">
        <div class="visi-misi mb-5">
            <h3 class="title-2">Visi Misi</h3>
            <div class="visi-content d-flex my-5">
                <div class="visi-content-1 ps-4 me-4">
                    <p>Menjadi Perusahaan yang bergerak di bidang Digital Marketing, meliputi Pelatihan & Kursus, Uji
                        Kompetensi BNSP, Pemasaran Produk dan menyediakan Jasa Pemasaran Online bagi mitra usaha yang
                        membutuhkan dengan mengedepankan kualitas, kepuasan pelanggan dan kerjasama yang saling
                        menguntungkan dengan seluruh mitra usaha.</p>
                    <p class="visi-content-2 mt-5 pt-2">VISI</p>
                </div>
                <div class="visi-content-1 ps-4">
                    <p>Menjalankan usaha yang bergerak di bidang Digital Marketing, meliputi Pelatihan & Kursus, Uji
                        Kompetensi BNSP, Pemasaran Produk dan menyediakan Jasa Pemasaran Online bagi mitra usaha yang
                        membutuhkan. Perusahaan akan terus berkembang mengikuti perkembangan teknologi digital dengan
                        dukungan tenaga professional, terdidik, berpengalaman, memiliki integritas yang berorientasi
                        kepada kualitas dan kepuasan pelanggan.</p>
                    <p class="visi-content-2">MISI</p>
                </div>
            </div>
        </div>
    </div>
    </div>

    <!-- END VISI MISI -->

    <!-- TIM -->

    <div class="container-fluid">
        <h3 class="title-2 mb-3">Tim Winata Cyber Net</h3>
        <div class="tim d-flex mb-5 mx-5">
            <div class="ceo mt-4">
                <center>
                    <img src="{{ ('img/nursjamsiah.webp') }}" class="tim-img" alt="">
                    <h5 class="tim-text mt-3">Nursjamsiah, Ir</h5>
                    <p>Direktur Utama / Pembimbing Utama</p>
                </center>
            </div>
            <div class="hrd mt-5 pt-5">
                <center>
                    <img src="{{ ('img/fadli.png') }}" class="tim-img" alt="">
                    <h5 class="tim-text mt-3">Fadli Jihad Dahana Setiawan, SE, CSA</h5>
                    <p>Kepala Personalia</p>
                </center>
            </div>
            <div class="pembimbing-1 mt-4">
                <center>
                    <img src="{{ ('img/aprianto.png') }}" class="tim-img" alt="">
                    <h5 class="tim-text mt-3">Aprianto</h5>
                    <p>Supervisor Social Media & Koordinator Pembimbing PKL</p>
                </center>
            </div>
            <div class="pembimbing-2 mt-5 pt-5">
                <center>
                    <img src="{{ ('img/rian.png') }}" class="tim-img" alt="">
                    <h5 class="tim-text mt-3">Rian Maulana</h5>
                    <p>Supervisor Marketplace & Pembimbing PKL</p>
                </center>
            </div>
        </div>

        <!-- END TIM -->


        <!-- DIVISI -->

        <div class="container-fluid">
            <div class="divisi d-flex mb-5">
                <div class="divisi-1">
                    <h4 class="title-divisi">Pusat Pelatihan Digital Marketing</h4>
                    <p>Winata Cyber Net membuka peluang untuk kalian yang ingin menguasai digital marketing dan
                        menjadi calon pengusaha online sukses di era digital ini.</p>
                </div>
                <div class="divisi-2">
                    <img src="{{ ('img/divisi-img.jpg') }}" class="divisi-img" alt="">
                </div>
                <div class="divisi-1">
                    <h4 class="title-divisi-2">Digital Marketing Agency</h4>
                    <p>Dengan strategi yang Winata Cyber Net miliki, kami dapat melakukan pemasaran online produk
                        anda sehingga dapat menaikan omset Anda.</p>
                </div>
            </div>
        </div>

        <!-- END DIVISI -->

        <div class="container-fluid">
            <h3 class="review-title">Apa Kata Mereka yang Memilih Winata Cyber Net ?</h3>
            <div class="review d-flex mt-5">
                <div class="review-1 mb-5">
                    <div class="profil d-flex">
                        <img src="{{ ('img/sugeng.png') }}" class="review-img" alt="">
                        <div class="nama ms-3">
                            <p class="fw-bold">Sugeng Riyanto</p>
                            <div class="rating d-flex mb-3">
                                <img src="{{ ('img/rating.png') }}" class="rating-img" alt="">
                                <img src="{{ ('img/rating.png') }}" class="rating-img" alt="">
                                <img src="{{ ('img/rating.png') }}" class="rating-img" alt="">
                                <img src="{{ ('img/rating.png') }}" class="rating-img" alt="">
                                <img src="{{ ('img/rating.png') }}" class="rating-img" alt="">
                            </div>
                            <p class="rating-text">Guru Pembimbing Prakerin SMK Bina Mandiri Multimedia</p>
                            <p>Sangat menarik dan bermanfaat bagi peserta prakerin dalam pengembangan skill. Semoga
                                terus menjadi pencerah untuk masyarakat.</p>
                        </div>
                    </div>
                </div>
                <div class="review-1 mb-5">
                    <div class="profil d-flex">
                        <img src="{{ ('img/endah.png') }}" class="review-img" alt="">
                        <div class="nama ms-3">
                            <p class="fw-bold">Endah Kurniadarmi</p>
                            <div class="rating d-flex mb-3">
                                <img src="{{ ('img/rating.png') }}" class="rating-img" alt="">
                                <img src="{{ ('img/rating.png') }}" class="rating-img" alt="">
                                <img src="{{ ('img/rating.png') }}" class="rating-img" alt="">
                                <img src="{{ ('img/rating.png') }}" class="rating-img" alt="">
                                <img src="{{ ('img/rating.png') }}" class="rating-img" alt="">
                            </div>
                            <p class="rating-text">Peserta Sertifikasi Kompetensi Digital Marketing BNSP dan Pembentukan
                                Tim Digital</p>
                            <p>Alhamduliĺah semakin merasa Profesional dalam bekerja. Terima kasih Winata Cyber Net.</p>
                        </div>
                    </div>
                </div>
                <div class="review-2 mb-5">
                    <div class="profil d-flex">
                        <img src="{{ ('img/ridhwan.png') }}" class="review-img" alt="">
                        <div class="nama ms-3">
                            <p class="fw-bold">Ridhwan Dwi Putra</p>
                            <div class="rating d-flex mb-3">
                                <img src="{{ ('img/rating.png') }}" class="rating-img" alt="">
                                <img src="{{ ('img/rating.png') }}" class="rating-img" alt="">
                                <img src="{{ ('img/rating.png') }}" class="rating-img" alt="">
                                <img src="{{ ('img/rating.png') }}" class="rating-img" alt="">
                                <img src="{{ ('img/rating.png') }}" class="rating-img" alt="">
                            </div>
                            <p class="rating-text">Peserta Prakerin SMK Taruna Bhakti Jurusan TKJ Batch 3</p>
                            <p>Tempat PKL pertama saya dan Terbaik menurut saya, tidak hanya tempat yang nyaman namun
                                suasana kekeluargaannya begitu berasa. Terimakasih.</p>
                        </div>
                    </div>
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
                    <img src="{{ ('img/raka-tour.webp') }}" class="klien-img" alt="">
                    <img src="{{ ('img/manakib.webp') }}" class="klien-img" alt="">
                    <img src="{{ ('img/harmoni.webp') }}" class="klien-img" alt="">
                    <img src="{{ ('img/happyplay.png') }}" class="klien-img" alt="">
                </div>
                <div class="klien-box-2">
                    <img src="{{ ('img/mody.webp') }}" class="klien-img" alt="">
                    <img src="{{ ('img/vets.webp') }}" class="klien-img" alt="">
                    <img src="{{ ('img/ipland.webp') }}" class="klien-img" alt="">
                </div>
            </center>
        </div>
    </div>
    @endsection
