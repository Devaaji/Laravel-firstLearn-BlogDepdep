@extends('layouts.main')


@section('container')

    <h1 class="text-center mb-4">{{ $title }}</h1>


    {{-- Searching --}}
    <div class="row justify-content-center">
        <div class="col-md-6">
            <form action="/posts">
                @if (request('category'))
                    <input type="hidden" name="category" value="{{ request('category') }}">
                @endif
                @if (request('author'))
                    <input type="hidden" name="author" value="{{ request('author') }}">
                @endif
                <div class="input-group mb-5">
                    <input type="text" class="form-control" placeholder="Search ..." name="search"
                        value="{{ request('search') }}">
                    <button class="btn btn-outline-secondary" type="submit">Cari</button>
                </div>
            </form>
        </div>
    </div>

    @if ($posts->count())
        <div class="card mb-3">

            @if ($posts[0]->image)
                <div style="max-height: 400px; overflow: hidden;">
                    <img src="{{ asset('storage/' . $posts[0]->image) }}" class="card-img-top"
                        alt="{{ $posts[0]->category->name }}">
                </div>
            @else
                <img src="https://source.unsplash.com/1200x400/?{{ $posts[0]->category->name }}" class="card-img-top"
                    alt="{{ $posts[0]->category->name }}">

            @endif
            <div class="card-body text-center">
                <a href="/posts/{{ $posts[0]->slug }}" class="text-decoration-none text-dark">
                    <h3 class="card-title">{{ $posts[0]->title }}</h3>
                </a>
                <p>By. <a href="/posts?author={{ $posts[0]->author->username }}">{{ $posts[0]->author->name }}</a> in
                    <a href="/posts?category={{ $posts[0]->category->slug }} "
                        class="text-decoration-none">{{ $posts[0]->category->name }}</a>
                    <small class="text-muted">{{ $posts[0]->created_at->diffForHumans() }}</small>
                </p>
                <p class="card-text">{{ $posts[0]->excerpt }}</p>
                <a href="/posts/{{ $posts[0]->slug }}" class="text-decoration-none btn btn-primary">Read more...</a>
            </div>
        </div>


        <div class="container">
            <div class="row justify-content-center">
                @foreach ($posts->skip(1) as $post)
                    <div class="col-md-4 mb-3">
                        <div class="card">
                            <div class="position-absolute bg-info p-1">
                                <a href="/posts?category={{ $post->category->slug }}">
                                    {{ $post->category->name }}
                                </a>
                            </div>

                            @if ($post->image)
                                <div style="max-height: 350px; overflow: hidden">
                                    <img src="{{ asset('storage/' . $post->image) }}"
                                    class="card-img-top" alt="{{ $post->category->name }}">
                                </div>
                            @else
                                <img src="https://source.unsplash.com/500x400/?{{ $post->category->name }}"
                                    class="card-img-top" alt="{{ $post->category->name }}">
                            @endif

                            <div class="card-body">
                                <a href="/posts/{{ $post->slug }}" class="text-decoration-none">
                                    <h5 class="card-title">{{ $post->title }}</h5>
                                </a>
                                <p>By. <a
                                        href="/posts?author={{ $post->author->username }}">{{ $post->author->name }}</a>
                                    <small class="text-muted">{{ $posts[0]->created_at->diffForHumans() }}</small>
                                </p>
                                <p class="card-text">{{ $post->excerpt }}</p>
                                <a href="/posts/{{ $post->slug }}" class="btn btn-primary">Read more...</a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    @else
        <p class="text-center fs-4">No Post Found.</p>
    @endif

    <div class="d-flex justify-content-center">
        {{ $posts->links() }}
    </div>

@endsection
