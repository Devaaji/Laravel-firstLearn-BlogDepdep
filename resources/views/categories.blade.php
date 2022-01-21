

@extends('layouts.main')


@section('container')
<h1 class="text-center py-5">Post Categories</h1>

<div class="container">

    <div class="row justify-content-center">
            @foreach ($categories as $category)
            <div class="col-md-4 text-center">
                <a href="/posts?category={{ $category->slug }}">
                <div class="card bg-dark text-white">
                    <img src="https://source.unsplash.com/500x400/?{{ $category->name }}" class="card-img" alt="...">
                    <div class="card-img-overlay d-flex align-items-center ">
                      <h5 class="card-title text-center flex-fill p-2" style="background-color: rgba(0, 0, 0, 0.7)">{{ $category->name }}</h5>
                    </div>
                </div>
                </a>
            </div>
            @endforeach
        </div>
    </div>

@endsection

