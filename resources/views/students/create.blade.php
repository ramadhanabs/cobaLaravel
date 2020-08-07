@extends('layout/main')
@section('title', 'Ini halaman mahasiswa')

@section('container')
    <div class="container">
        <div class="row mt-3">
            <div class="col-md-4">
                <h1>Mahasiswa</h1>
                
                <div class="card">
                    <div class="card-header">
                        Form Tambah Mahasiswa
                    </div>

                    <div class="card-body">
                        <form method="POST" action="/students">
                        @csrf
                            <div class="form-group">
                                <label for="nama">Nama</label>
                                <input type="text" class="form-control @error('nama') is-invalid @enderror" id="nama" name="nama" placeholder="Masukkan Nama Anda" value="{{ old('nama') }}">
                                @error('nama')
                                <div id="validationServer03Feedback" class="invalid-feedback">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="nim">NIM</label>
                                <input type="text" class="form-control @error('nim') is-invalid @enderror" id="nim" name="nim" placeholder="Masukkan NIM Anda" value="{{ old('nim') }}">
                                @error('nim')
                                <div id="validationServer03Feedback" class="invalid-feedback">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="email">Email</label>
                                <input type="email" class="form-control @error('email') is-invalid @enderror" id="email" name="email" placeholder="Masukkan Email Anda" value="{{ old('email') }}">
                                @error('email')
                                <div id="validationServer03Feedback" class="invalid-feedback">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>    
                            <div class="form-group">
                                <label for="jurusan">Pilih Jurusan</label>
                                <select class="form-control" id="jurusan" name="jurusan">
                                    <option>Teknik Industri</option>
                                    <option>Teknik Kimia</option>
                                    <option>Teknik Informatika</option>
                                    <option>Teknik Mesin</option>
                                    <option>Teknik Elektro</option>
                                </select>
                            </div>
                            <button type="submit" class="btn btn-primary">Tambah Data</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection