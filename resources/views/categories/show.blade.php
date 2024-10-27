@extends('layouts.app')

@section('content')
    <div class="container my-4">
        <div class="row">
            <div class="col-md-8 offset-md-2">
                <h2 class="mb-4 text-center text-dark">Category Details</h2>

                <div class="card border-0 rounded-3" style="box-shadow: 0 4px 12px rgba(0, 0, 0, 0.15);">
                    <div class="card-header bg-dark text-white">
                        <h4 class="mb-0">{{ $category->name }}</h4>
                    </div>
                    <div class="card-body">
                        <h5 class="card-title text-dark">Description</h5>
                        <p class="card-text text-muted">{{ $category->description ?? 'No description available for this category.' }}</p>
                        <hr class="my-4">

                        <div class="text-center">
                            <a href="{{ route('categories.index') }}" class="btn btn-outline-primary shadow" style="padding: 0.5rem 1.5rem;">
                                Back to Categories
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Custom CSS for styling -->
    <style>
        .card {
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.15);
        }
        .card-header {
            border-radius: 0.25rem 0.25rem 0 0;
        }
        .card-body hr {
            border-inline: 1px solid #ddd;
        }
        .btn-outline-primary {
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            transition: box-shadow 0.2s ease;
        }
        .btn-outline-primary:hover {
            box-shadow: 0 6px 12px rgba(0, 0, 0, 0.2);
        }
    </style>
@endsection
