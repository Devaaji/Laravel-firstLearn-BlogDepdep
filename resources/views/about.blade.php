
@extends('layouts.main')


@section('container')
<h1>Halaman About</h1>
<div>
    <h2>Nama : {{ $nama }}</h2>
    <h2>Email : {{ $email }}</h2>
</div>
@endsection