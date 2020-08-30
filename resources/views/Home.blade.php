@extends('layout/main')

@section('judul', 'Home Page')

@section('container')
<div class="container">
    <div class="row">
        <div class="col-lg-10">
            <h1 class="mt-3">Halo, {{$nama}}</h1>
        </div>
    </div>
</div>
@endsection