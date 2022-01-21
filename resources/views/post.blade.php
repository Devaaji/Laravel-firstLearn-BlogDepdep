@extends('layouts.main')

@section('container')

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">

                <h1>{{ $post->title }}</h1>
                <p>By. <a href="/posts?author={{ $post->author->username }}">
                        {{ $post->author->username }}</a> in
                    <a href="/posts?category={{ $post->category->slug }}">
                        {{ $post->category->name }}</a>
                </p>

                @if ($post->image)
                    <div style="max-height: 400px; overflow: hidden;">
                        <img src="{{ asset('storage/' . $post->image) }}" class="img-fluid mb-4"
                            alt="{{ $post->category->name }}">
                    </div>
                @else
                    <img src="https://source.unsplash.com/1200x400/?{{ $post->category->name }}" class="img-fluid mb-4"
                        alt="{{ $post->category->name }}">
                @endif

                {!! $post->body !!}
                <div class="mt-3">
                    <a href="/posts">Back to Posts</a>
                </div>
            </div>
        </div>
    </div>

@endsection
