@extends('layouts.app')

@section('content')
<div class="container">
    <div class="d-flex justify-content-end py-4">
        @if (Route::has('login'))
            @auth
                <a href="{{ url('/posts') }}" class="btn btn-primary">Post Dashboard</a>
            @else
                <a href="{{ route('login') }}" class="btn btn-success text-white">Log in</a>
            @endauth
        @endif
    </div>
    @if(session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif
    <div class="row justify-content-center">
        <div class="col-md-8">
            <!-- Post Details -->
            <div class="card">
                <div class="card-body">
                    <h2 class="card-title">{{ $post->title }}</h2>
                    <p class="text-muted"><small>Published on: {{ $post->publication_date->format('d M, Y') }}</small></p>
                    <p class="card-text">{{ $post->body }}</p>
                    <hr>
                    <a href="{{ route('home') }}" class="btn btn-secondary">Back to Posts</a>
                </div>
            </div>

            <!-- Comments Section -->
            <div class="mt-4">
                <h4>Comments ({{ $post->comments->count() }})</h4>

                <!-- Display Comments -->
                @foreach($post->comments as $comment)
                    <div class="border p-3 mb-2 rounded">
                        <strong>{{ $comment->user_name }}</strong>
                        <p>{{ $comment->content }}</p>
                        <small class="text-muted">{{ $comment->created_at->diffForHumans() }}</small>
                    </div>
                @endforeach
            </div>

            <!-- Add a Comment Form -->

            <div class="mt-4">
                <h4>Add a Comment</h4>
                <form action="{{route('comments.store',['post'=>$post->id])}}" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label for="user_name" class="form-label">Your Name</label>
                        <input type="text" class="form-control @error('user_name') is-invalid @enderror" name="user_name" required>
                        @error('user_name')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="content" class="form-label">Comment</label>
                        <textarea class="form-control @error('content') is-invalid @enderror" name="content" rows="3" required></textarea>
                        @error('content')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>

                    <button type="submit" class="btn btn-primary">Submit Comment</button>
                </form>

            </div>
        </div>
    </div>
</div>
@endsection
