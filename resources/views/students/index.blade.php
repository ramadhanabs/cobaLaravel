@extends('layout/main')
@section('title', 'Ini halaman mahasiswa')

@section('container')
    <div class="container">
    @if (session('status'))
                    <!-- <div class="alert alert-success">
                        {{ session('status') }}
                    </div> -->
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        {{ session('status') }}
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                @endif
        <div class="row mt-3">
            <div class="col-md-4">
                <h1>Mahasiswa</h1>
                <a href="/students/create" class="btn btn-primary">Tambah Data</a>
                <ul class="list-group mt-3">
                    @foreach($students as $students)
                        <li class="list-group-item d-flex justify-content-between align-items-center">
                            {{$students->nama}}
                            <a href="/students/{{$students->id}}" class="badge badge-primary badge-pill">Detail</a>
                        </li> 
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
@endsection