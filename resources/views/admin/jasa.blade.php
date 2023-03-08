@extends('welcome')

@section('Judul', 'Data Jasa')
@section('isi')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col">
                
                    <div class="card-body">
                        <h1>Data Jasa</h1>
                        @if ($message = Session::get('success'))
                        <div class="alert alert-success" role="alert">
                            {{ $message }}
                        </div> 
                        @endif
                        <table class="table table-responsive">
                            <thead>
                              <tr>
                                <th scope="col">No</th>
                                <th scope="col">Email</th>
                                <th scope="col">Nama Lengkap</th>
                                <th scope="col">Profesi</th>
                                <th scope="col">Alamat Usaha/Kantor</th>
                                <th scope="col">Alamat Tempat Tinggal</th>
                                <th scope="col">No WA/Hp</th>
                                <th scope="col">Pilihan Jasa Pembuatan Konten dan Akun</th>
                                <th scope="col">Pilihan Jasa Optimasi</th>
                                <th scope="col">Pilihan Paket</th>
                              </tr>
                            </thead>
                            <tbody>
                                @foreach($jasa as $item)
                              <tr>
                                <th scope="row">{{ $loop->iteration }}</th>
                                <td>{{ $item->mail }}</td>
                                <td>{{ $item->nm }}</td>
                                <td>{{ $item->prof }}</td>
                                <td>{{ $item->usaha }}</td>
                                <td>{{ $item->tinggal }}</td>
                                <td>{{ $item->wa }}</td>
                                <td>{{ $item->konten }}</td>
                                <td>{{ $item->optimasi }}</td>
                                <td>{{ $item->paket }}</td>
                                <td>
                                <form action="{{ url('delete-jasa',$item->id) }}" method="POST">
                                  @csrf
                                 @method('delete')
                                <button class="btn btn-danger">Hapus</button></form>
                            </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>

                    </div>
                

            </div>
        </div>
    </div>
       
@endsection
</html>