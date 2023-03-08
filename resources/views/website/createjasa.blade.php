<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Jasa</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  </head>
  <body>
    <h1>Yuk Bisa Yuk pt.2</h1>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-8">
                <div class="card">
                    <div class="card-body">
                        <form action="{{ route('simpan') }}" method="POST">
                            {{ csrf_field() }}
                            <div class="mb-3">
                              <label class="form-label">Email</label>
                              <input type="email" class="form-control" name="mail">
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Nama Lengkap</label>
                                <input type="text" class="form-control" name="nm">
                              </div>
                              <div class="mb-3">
                                <label class="form-label">Profesi</label>
                                <input type="text" class="form-control" name="prof">
                              </div>
                              <div class="mb-3">
                                <label class="form-label">Alamat Usaha/Kantor</label>
                                <input type="text" class="form-control" name="usaha">
                              </div>
                              <div class="mb-3">
                                <label class="form-label">Alamat Tempat Tinggal</label>
                                <input type="text" class="form-control" name="tinggal">
                              </div>
                              <div class="mb-3">
                                <label class="form-label">No WA/Hp</label>
                                <input type="number" class="form-control" name="wa">
                              </div>
                              <div class="mb-3">
                                <label class="form-label">Pilihan Jasa Pembuatan Konten/Akun</label>
                                <select class="form-select form-control" name="konten" >
                                    <option selected>Pilihan Konten/Akun</option>
                                    <option value="Konten">1 Konten Rp. 25.000</option>
                                    <option value="Caption">1 Caption Rp. 5.000</option>
                                    <option value="Copywriting">1 Copywriting Rp. 70.000</option>
                                    <option value="Artikel">1 Artikel Rp. 129.000</option>
                                    <option value="Upload">1 Upload Rp. 10.000</option>
                                    <option value="Video Foto Animasi">1 Video Foto Animasi untuk Tiktok dan Instagram Reels Rp. 65.0000/30 Detik</option>
                                    <option value="Video Iklan">1 Video Iklan Rp. 100.000/Menit</option>
                                    <option value="Pembuatan Website">Pembuatan Website+(Hosting & Domain) Rp. 10.000.000</option>
                                    <option value="Jasa SEO">Jasa SEO Rp. 2.500.000/Bulan</option>
                                    <option value="Pembuatan Konten Gambar/Foto">Pembuatan Konten Gambar/Foto Rp. 100.000 /Konten</option>
                                    <option value="Pembuatan Konten Video/Vlog">Pembuatan Konten Video/Vlog Rp. 1.000.000/Menit</option>
                                    <option value="Pembuatan Konten Artikel">Pembuatan Konten Artikel (1000 Kata) Rp. 100.000/Artikel</option>
                                    <option value="Lainnya">Lainnya</option>
                                </select>
                              </div>
                              <div class="mb-3">
                                <label class="form-label">Pilihan Optimasi</label>
                                <select class="form-select form-control" name="optimasi" >
                                    <option selected>Pilihan Optimasi</option>
                                    <option value="Review Sosial Media">Review Sosial Media (FB, IG, Youtube, Tiktok) Rp. 25.000/Akun</option>
                                    <option value="Review Market Place">Review Market Place (Shopee, FB Market Place, Tokopedia)Rp. 25.000/Akun</option>
                                    <option value="Posting/Tanam Blacklink">Posting/Tanam Blacklink di 20 Platform Rp. 100.000</option>
                                    <option value="Lainnya">Lainnya</option>
                                </select>
                              </div>
                              <div>
                                <label class="form-label">Pilihan Paket</label>
                                <select class="form-select form-control" name="paket" >
                                    <option selected>Pilihan Paket</option>
                                    <option value="Paket Building Sosial Media 1">Paket Building Sosial Media 1 Rp. 5.000.000/Bulan (Minimal Kontrak 6 Bulan)</option>
                                    <option value="Paket Building Sosial Media 2">Paket Building Sosial Media 2 Rp. 3.000.000/Bulan (Minimal Kontrak 6 Bulan)</option>
                                    <option value="Paket Building Website 1">Paket Building Website 1 Rp. 12.000.000/Bulan (Minimal Kontrak 3 Bulan)</option>
                                    <option value="Paket Building Website 2">Paket Building Website 2 Rp. 5.000.000/bulan (Minimal Kontrak 3 Bulan)</option>
                                    <option value="Paket Company">Paket Company (Diskon 25%) Rp. 1.440.000 (Minimal Pembelian 3 Bulan)</option>
                                    <option value="Paket Terima Beres">Paket Terima Beres (Diskon 25%) Rp. 614.250 (Minimal Pembelian 3 Bulan)</option>
                                    <option value="Paket Coba-Coba">Paket Coba-Coba (Diskon 25%) Rp. 472.500</option>
                                    <option value="Lainnya"> Lainnya</option>
                                </select>
                              </div>
                            <button type="submit" class="btn btn-primary">Simpan</button>
                          </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
  </body>
</html>