@extends('layouts.app')
@section('head')
@section('title', 'Registrasi Peserta')
@section('content')

    <div class="row">
        <div class="col-lg-15 col-md-12 col-12 col-sm-12">
            <div class="card">
                <div class="card-header">
                    <h4>Registrasi</h4>
                </div>

                <div class="card-body">
                    <form action="{{ route('peserta.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('post')
                        <div class="form-group">
                            <label>No Registrasi</label>
                            <input type="number" name="noreg" value="{{ rand(1, 99999) }}" readonly class="form-control">
                        </div>
                        <div class="form-group">
                            <label>Nama</label>
                            <input type="text" name="nama" placeholder="Masukan Nama" required class="form-control">
                        </div>
                        <div class="form-group">
                            <div class="form-group">
                                <label>jenis Kelamin</label>
                                <select class="form-control" name="jk">
                                    <option selected disabled>Silahkan Pilih Jenis Kelamin</option>
                                    <option value="Perempuan">Perempuan</option>
                                    <option value="Laki Laki">Laki Laki</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Alamat</label>
                            <textarea class="form-control" name="alamat" placeholder="Masukan Alamat"></textarea>
                        </div>
                        <div class="form-group">
                            <div class="form-group">
                                <label>Agama</label>
                                <select class="form-control" name="agama">
                                    <option selected disabled>Silahkan Pilih Agama</option>
                                    <option value="Islam">Islam</option>
                                    <option value="Kristen">Kristen</option>
                                    <option value="Katolik">Katolik</option>
                                    <option value="Hindu">Hindu</option>
                                    <option value="Budha">Budha</option>
                                </select>
                            </div>
                        </div>

                        <div class="form-group">
                            <label>Asal Sekolah</label>
                            <input type="text" name="asal_sekolah" placeholder="Masukan Asal Sekolah" required
                                class="form-control">
                        </div>

                        <div class="form-group">
                            <div class="form-group">
                                <label>Jurusan</label>
                                <select class="form-control" name="jurusan">
                                    <option selected disabled>Silahkan Pilih Jurusan</option>
                                    <option value="RPL">Rekayasa Perangkat Lunak</option>
                                    <option value="MMD">Multi Media</option>
                                    <option value="BDP">Bisnis Daring Pemasaran</option>
                                    <option value="TKJ">Teknik Komputer Jaringan</option>
                                    <option value="TBG">Tata Boga</option>
                                    <option value="OTKP">Perkantoran</option>
                                    <option value="HTL">Perhotelan</option>
                                </select>
                            </div>
                        </div>

                        <div class="form-group">
                            <button type="submit" class="btn btn-primary ">
                                Submit
                            </button>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>

@endsection
@section('script')
@endsection
