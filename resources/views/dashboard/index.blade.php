@extends('layouts.app')

@section('content')
<div class="container">
    <h1 class="my-4 text-center fw-bold text-dark">Dashboard</h1>

    <div class="row g-4">
        @foreach ([
            ['route' => 'authors.index', 'bg' => 'bg-warning', 'icon' => 'user-edit', 'title' => 'Total Authors', 'count' => $totalAuthors],
            ['route' => 'categories.index', 'bg' => 'bg-info', 'icon' => 'list-alt', 'title' => 'Total Categories', 'count' => $totalCategories],
            ['route' => 'posts.index', 'bg' => 'bg-success', 'icon' => 'file-alt', 'title' => 'Total Posts', 'count' => $totalPosts],
        ] as $item)
            <div class="col-md-4">
                <a href="{{ route($item['route']) }}" class="text-decoration-none">
                    <div class="card text-white {{ $item['bg'] }} shadow-sm border-0 hover-zoom">
                        <div class="card-body text-center py-5">
                            <i class="fas fa-{{ $item['icon'] }} fa-3x mb-3 opacity-75"></i>
                            <h5 class="card-title fw-semibold">{{ $item['title'] }}</h5>
                            <p class="card-text display-5 fw-bold">{{ $item['count'] }}</p>
                        </div>
                    </div>
                </a>
            </div>
        @endforeach
    </div>
</div>

<!-- Custom CSS -->
<style>
    .hover-zoom {
        transition: transform 0.3s, box-shadow 0.3s;
    }

    .hover-zoom:hover {
        transform: scale(1.06);
        box-shadow: 0 6px 15px rgba(0, 0, 0, 0.2);
    }

    .display-5 {
        font-size: 2.5rem;
    }

    .card-title {
        font-size: 1.2rem;
        font-weight: 600;
    }
</style>

<!-- FontAwesome Icons -->
<script src="https://kit.fontawesome.com/a076d05399.js"></script>
@endsection
