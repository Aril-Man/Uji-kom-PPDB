@extends('layouts.app')
@section('head')
@section('title', 'Data Peserta Registrasi')
@section('content')
    <section class="section">
        <div class="section-header">
            <h1>Data Peserta Registrasi</h1>
        </div>
        @if (Session::has('success'))
            <div class="alert alert-success alert-has-icon">
                <div class="alert-icon"><i class="far fa-lightbulb"></i></div>
                <div class="alert-body alert-dismissible fade show" role="alert">
                    <div class="alert-title">Success</div>
                    {{ Session::get('success') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            </div>
        @endif
        <div class="row">
            <div class="col-lg-15 col-md-12 col-12 col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Data Peserta Registrasi</h4>
                    </div>
                    <div class="card-body">
                        <div class="card">
                            <div class="card-body">
                                <table class="table" id="data">
                                    <thead>
                                        <tr>
                                            <th scope="col">#</th>
                                            <th scope="col">No Registrasi</th>
                                            <th scope="col">Nama</th>
                                            <th scope="col">jenis Kelamin</th>
                                            <th scope="col">Alamat</th>
                                            <th scope="col">Agama</th>
                                            <th scope="col">Asal Sekolah</th>
                                            <th scope="col">Minat Jurusan</th>
                                            <th scope="col">Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($peserta as $p)
                                            <tr>
                                                <td>{{ $loop->iteration }}</td>
                                                <td>{{ $p->noreg }}</td>
                                                <td>{{ $p->nama }}</td>
                                                <td>{{ $p->jk }}</td>
                                                <td>{{ $p->alamat }}</td>
                                                <td>{{ $p->agama }}</td>
                                                <td>{{ $p->asal_sekolah }}</td>
                                                <td>{{ $p->jurusan }}</td>
                                                <td class="d-flex">
                                                    <form action="{{ route('peserta.delete', $p->id) }}" method="POST"
                                                        class="d-inline">
                                                        @csrf
                                                        @method('delete')
                                                        <button class="btn btn-danger"
                                                            onclick="return confirm('Yakin Mau diHapus?')">Hapus</button>
                                                    </form>
                                                    <a href="{{ route('peserta.edit', $p->id) }}"
                                                        class="btn btn-warning">Edit</a>
                                                    <a href="{{ route('peserta.cetak', $p->id) }}"
                                                        class="btn btn-success">Cetak</a>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
@section('script')
    <script type="text/javascript">
        $(document).ready(function() {
            $('#data').DataTable();
        });
    </script>
@endsection
