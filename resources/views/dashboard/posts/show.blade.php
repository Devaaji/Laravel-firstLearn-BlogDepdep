@extends('dashboard.layouts.main')

@section('container')
    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">

        <div class="container">
            <div class="row">
                <div class="col-md-8">

                    <h1>{{ $post->title }}</h1>

                    <a href="/dashboard/posts" class="btn btn-success my-4"><span data-feather="arrow-left"></span> Back to
                        my post</a>
                    <a href="/dashboard/posts/{{ $post->slug }}/edit" class="btn btn-warning my-4"><span
                            data-feather="edit"></span> Edit</a>

                    <form action="/dashboard/posts/{{ $post->slug }}" method="post" class="d-inline">
                        @method('delete')
                        @csrf
                        <button class="btn btn-danger my-4 border-0 "
                            onclick="return confirm('Are you sure delete this post?')"><span
                                data-feather="trash-2"></span>Delete</button>
                    </form>

                    @if ($post->image)
                        <div style="max-height: 350px; overflow: hidden;">
                            <img src="{{ asset('storage/' . $post->image) }}" class="img-fluid mb-4"
                                alt="{{ $post->category->name }}">
                        </div>
                    @else
                        <img src="https://source.unsplash.com/1200x400/?{{ $post->category->name }}" class="img-fluid mb-4"
                            alt="{{ $post->category->name }}">
                    @endif


                    {!! $post->body !!}
                    <div class="mt-5">
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection
