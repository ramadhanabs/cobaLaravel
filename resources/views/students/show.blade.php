@extends('layout/main')
@section('title', 'Ini halaman mahasiswa')

@section('container')

    <div class="container">
        <div class="row mt-3">
            <div class="col-md-4">
                <h1>Mahasiswa</h1>
                
                <div class="card">
                    <div class="card-header">
                        Detail Mahasiswa
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">{{$student->nama}}</h5>
                        <p class="card-text">{{$student->email}}</p>
                        <p class="card-text">{{$student->nim}}</p>
                        <a href="{{$student->id}}/edit" class="btn btn-primary">Update</a>
                        <form action="{{ $student->id }}" method="POST" class="d-inline">
                        @method('delete')
                        @csrf
                            <button type="submit" class="btn btn-danger">Delete</button>
                        </form>
                        <a href="/students" class="btn btn-primary">Kembali</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection