@extends('layout')

@section('isi2')
    <!-- HEADER -->
    <center>
        <div class="header-form">
            <div class="box-header-form opacity-75 position-absolute start-50 translate-middle">
            </div>
        </div>
    </center>
    <!-- END HEADER -->

    <!-- BOOK -->
    <center>
        <div class="box-book">
            <form action="{{ route('simpan-kursus') }}" method="POST" class="form py-4">
                {{ csrf_field() }}
                <div class="box-book1 d-flex">
                    <div>
                        <label class="form-label">Pilihan Kursus</label>
                        <select class="form-select form-control" name="kursus">
                            <option selected>Pilihan Kursus</option>
                            <option value="Winata Cyber Net with SEO">Winata Cyber Net with SEO Rp. 3.000.000</option>
                            <option value="Magang Guru Produktif">Magang Guru Produktif Rp. 6.000.000</option>
                            <option value="Membentuk Tim Digital & PKL SMK">Membentuk Tim Digital & PKL SMK Rp.
                                1.000.000</option>
                            <option value="Pelatihan UMKM">Pelatihan UMKM Rp. 750.000</option>
                            <option value="Pemetaan Potensi dan Strategi Bisnis">Pemetaan Potensi dan Strategi Bisnis
                                Rp. 4.000.000</option>
                            <option value="Uji Sertifikasi BNSP">Uji Sertifikasi BNSP Rp. 1.500.000</option>
                        </select>
                    </div>
                </div>

                <div class="box-form">
                    <div class="mb-3 mx-3">
                        <label class="form-label">Email</label>
                        <input type="text" class="form-control" name="email">
                    </div>
                    <div class="mb-3 mx-3">
                        <label class="form-label">Nama</label>
                        <input type="text" class="form-control" name="nama">
                    </div>
                    <div class="mb-3 mx-3">
                        <label class="form-label">Profesi</label>
                        <input type="text" class="form-control" name="profesi">
                    </div>
                    <div class="mb-3 mx-3">
                        <label class="form-label">Alamat Usaha/Kantor</label>
                        <input type="text" class="form-control" name="alamatusaha">
                    </div>
                    <div class="mb-3 mx-3">
                        <label class="form-label">Alamat Tempat Tinggal</label>
                        <input type="text" class="form-control" name="alamattinggal">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">No WA/Hp</label>
                        <input type="number" class="form-control" name="notelp">
                    </div>
                    <button type="submit" class="btn-kursus mb-3 px-4">Daftar Sekarang</button>
                </div>
            </form>
        </div>
    </center>
    <!-- END BOOK -->
@endsection
