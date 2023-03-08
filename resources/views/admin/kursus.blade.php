@extends('welcome')
@section('judul','Data Kursus')
@section('isi')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col">
                <div class="card-body">
                    <h1>Data Kursus</h1>
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
                                <th scope="col">Pilihan Kursus</th>
                                
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($kursus as $item)
                            <tr>
                                <th scope="row">{{ $loop->iteration }}</th>
                                <td>{{ $item->email }}</td>
                                <td>{{ $item->nama }}</td>
                                <td>{{ $item->profesi }}</td>
                                <td>{{ $item->alamatusaha }}</td>
                                <td>{{ $item->alamattinggal }}</td>
                                <td>{{ $item->notelp }}</td>
                                <td>{{ $item->kursus }}</td>
                                <td>
                                <form action="{{ url('delete-kursus',$item->id) }}" method="POST">
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