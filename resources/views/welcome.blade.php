@extends('layouts.app')

@section('content')
<div class="container">
    <!-- Navbar/Login Section -->
    <div class="d-flex justify-content-end py-4">
        @if (Route::has('login'))
            @auth
                <a href="{{ url('/posts') }}" class="btn btn-primary">Post Dashboard</a>
            @else
                <a href="{{ route('login') }}" class="btn btn-success text-white">Log in</a>
            @endauth
        @endif
    </div>

    <!-- Posts Section -->
    <div class="row">
        @foreach ($posts as $post)
            <div class="col-md-4 mb-4">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">{{ $post->title }}</h5>
                        <p class="card-text">{{ Str::limit($post->body, 100) }}</p>
                        <p class="text-muted"><small>Published: {{ $post->publication_date->format('d M, Y') }}</small></p>
                        <a href="{{ route('posts.show', $post->id) }}" class="btn btn-primary">Read More</a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>

</div>
@endsection
