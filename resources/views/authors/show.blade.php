@extends('layouts.app')

@section('title', 'Author Details')

@section('content')
    <div class="container my-4">
        <div class="row">
            <div class="col-md-8 offset-md-2">
                <div class="card border-0 rounded-3" style="box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);">
                    <div class="card-header bg-dark text-white">
                        <h3 class="mb-0 text-center">Author Details</h3>
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">
                            <strong>Name:</strong> <span class="text-muted">{{ $author->name }}</span>
                        </h5>
                        <h6 class="card-subtitle">
                            <strong>Email:</strong> <span class="text-muted">{{ $author->email }}</span>
                        </h6>
                        <p class="card-text">
                            <strong>Bio:</strong> <span class="text-muted">{{ $author->bio }}</span>
                        </p>
                    </div>
                    <div class="card-footer text-center">
                        <a href="{{ route('authors.index') }}" class="btn btn-outline-primary">Back to List</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

<!-- Custom CSS -->
<style>
    .card {
        margin-top: 1rem;
        max-width: 100%;
    }

    .card-title, .card-subtitle, .card-text {
        font-size: 1rem;
    }

    .card-header {
        border-radius: 0.3rem 0.3rem 0 0;
    }

    .btn-outline-primary {
        color: #0d6efd;
        border-color: rgba(13, 110, 253, 0.5);
    }

    .btn-outline-primary:hover {
        background-color: rgba(13, 110, 253, 0.1);
        color: #0d6efd;
    }
</style>
