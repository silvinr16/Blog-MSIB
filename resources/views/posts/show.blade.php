@extends('layouts.app')

@section('title', $post->title . ' - Blog MSIB')

@section('content')
<div class="container mt-4">
    <div class="row">
        <!-- Perlebar ukuran card -->
        <div class="col-md-10 offset-md-1"> 
            <h2 class="text-center mb-4">Post Detail</h2>
            <div class="card shadow-lg mb-4">
                <div class="card-body d-flex align-items-center mb-3">
                    @if ($post->image)
                        <img src="{{ asset('storage/' . $post->image) }}" class="img-thumbnail me-3" alt="{{ $post->title }}" style="width: 100px; height: auto;">
                    @endif
                    <div>
                        <h1 class="display-5">{{ $post->title }}</h1>
                        <p class="text-muted mb-0">
                            <small>
                                Posted on {{ $post->created_at->format('F d, Y') }} in 
                                <strong>{{ $post->category->name }}</strong> by 
                                <strong>{{ $post->author->name }}</strong>
                            </small>
                        </p>
                    </div>
                </div>
                <hr>
                <div class="card-body">
                    <div class="card-text mb-4">
                        {!! nl2br(e($post->content)) !!}
                    </div>
                    <hr>
                    <div class="d-flex justify-content-center">
                        <a href="{{ route('posts.index') }}" class="btn btn-outline-primary">Back to Home</a>
                        @auth
                            @if (Auth::id() === $post->author_id)
                                <a href="{{ route('posts.edit', $post->id) }}" class="btn btn-outline-warning ms-2">Edit Post</a>
                            @endif
                        @endauth
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Custom CSS for styling -->
<style>
    .card {
        border: none;
    }
    .img-thumbnail {
        border: none;
        object-fit: cover;
    }
    .display-5 {
        font-size: 2rem;
        font-weight: bold;
        color: #333;
    }
    .card-body p, .card-body h1 {
        color: #2e2e2e;
    }
    .card-text {
        line-height: 1.7;
    }
    h2 {
        font-size: 2rem;
        font-weight: 600;
        color: #202020;
    }
</style>
@endsection
