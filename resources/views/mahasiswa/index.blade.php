@extends('layout/main')
@section('title', 'Ini halaman mahasiswa')

@section('container')
    <div class="container">
        <div class="row mt-3">
            <div class="col">
                <h1>Mahasiswa</h1>
                <table class="table">
                    <thead class="thead-dark">
                        <tr>
                            <th scope="col">No</th>
                            <th scope="col">Nama</th>
                            <th scope="col">Jurusan</th>
                            <th scope="col">NIM</th>
                            <th scope="col">Email</th>
                            <th scope="col">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                    @foreach($mahasiswa as $a)
                    <tr>
                        <th scope="row">{{$loop->iteration}}</th>
                        <td>{{$a->nama}}</td>
                        <td>{{$a->jurusan}}</td>
                        <td>{{$a->nim}}</td>
                        <td>{{$a->email}}</td>
                        <td>
                            <a href="" class="badge badge-success">Update</a>
                            <a href="" class="badge badge-danger">Delete</a>
                        </td>
                    </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection