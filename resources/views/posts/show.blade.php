@extends('layouts.app')

@section('title', $post->title)

@section('content')
<div class="container mt-5"> <!-- Added top margin -->
    <div class="card mb-4">
        <div class="card-body">
            <h2 class="card-title">{{ $post->title }}</h2>
            <p class="text-muted">Published on {{ $post->created_at->format('d M, Y') }}</p>
            <p class="card-text">{{ $post->body }}</p>

            <a href="{{ route('posts.index') }}" class="btn btn-secondary">Back to Posts</a>
        </div>
    </div>
</div>
@endsection
