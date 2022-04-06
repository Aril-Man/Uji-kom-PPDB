@extends('layouts.app')
@section('head')
@section('title', 'Edit Peserta')
@section('content')

    <div class="row">
        <div class="col-lg-15 col-md-12 col-12 col-sm-12">
            <div class="card">
                <div class="card-header">
                    <h4>Edit Peserta</h4>
                </div>
                <div class="card-body">
                    <form action="{{ route('admin.update', $peserta->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('patch')
                        <div class="form-group">
                            <label>No Registrasi</label>
                            <input type="number" name="noreg" value="{{ $peserta->noreg }}" disabled
                                class="form-control">
                        </div>
                        <div class="form-group">
                            <label>Nama</label>
                            <input type="text" name="nama" placeholder="Masukan Nama!" value="{{ $peserta->nama }}"
                                class="form-control">
                        </div>
                        <div class="form-group">
                            <div class="form-group">
                                <label>jenis Kelamin</label>
                                <select class="form-control" name="jk">
                                    <option selected disabled>{{ $peserta->jk }}</option>
                                    <option value="P">Perempuan</option>
                                    <option value="L">Laki Laki</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Alamat</label>
                            <textarea class="form-control" name="alamat" placeholder="Masukan Alamat!">{{ $peserta->alamat }}</textarea>
                        </div>
                        <div class="form-group">
                            <div class="form-group">
                                <label>Agama</label>
                                <select class="form-control" name="agama">
                                    <option selected disabled>{{ $peserta->agama }}</option>
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
                            <input type="text" name="asal_sekolah" placeholder="Masukan Asal Sekolah!"
                                class="form-control" value="{{ $peserta->asal_sekolah }}">
                        </div>

                        <div class="form-group">
                            <div class="form-group">
                                <label>Jurusan</label>
                                <select class="form-control" name="jurusan">
                                    <option selected disabled>{{ $peserta->jurusan }}</option>
                                    <option value="RPL">Rekayasa Perangkat Lunak</option>
                                    <option value="MMD">Multi Media</option>
                                    <option value="BDP">Bisnis Daring Pemasaran</option>
                                    <option value="TKJ">Teknik Komputer Jaringan</option>
                                    <option value="TBG">Tata Boga</option>
                                    <option value="OTKP">Perkantoran</option>
                                </select>
                            </div>
                        </div>

                        <div class="form-group">
                            <button type="submit" class="btn btn-warning ">
                                Update
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
