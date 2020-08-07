@extends('layout/main')
@section('title', 'Ini halaman about')

@section('container')
    <div class="container">
        <div class="row mt-3">
            <div class="col">
                <h1>About Me!</h1>
                <h3>Nama saya, {{$nama}} </h3>
            </div>
        </div>
    </div>
@endsection