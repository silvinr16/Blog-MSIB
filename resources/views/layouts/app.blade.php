<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title', 'Blog MSIB')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <style>
        /* Full height for body and minimal height for main content */
        body, html { height: 100%; }
        body { display: flex; flex-direction: column; min-height: 100vh; }
        
        /* Footer styling */
        footer { background-color: rgb(15, 15, 15); color: white; }

        /* Navbar link hover effect */
        .navbar-nav .nav-link {
            color: rgba(255, 255, 255, 0.8); /* Initial color with slight transparency */
            transition: color 0.3s ease, transform 0.2s ease;
        }

        /* Hover effect on navbar links */
        .navbar-nav .nav-link:hover,
        .navbar-nav .nav-link.active {
            color: #ffffff; /* Fully opaque white on hover or active */
            transform: scale(1.05); /* Slight zoom effect */
        }

        /* Remove underline and maintain minimalistic look */
        .navbar-nav .nav-link {
            text-decoration: none;
        }
    </style>
</head>
<body>
    <header>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">Blog MSIB</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item"><a class="nav-link {{ request()->is('dashboard') ? 'active' : '' }}" href="{{ route('dashboard') }}">Home</a></li>
                        <li class="nav-item"><a class="nav-link {{ request()->is('authors*') ? 'active' : '' }}" href="{{ route('authors.index') }}">Authors</a></li>
                        <li class="nav-item"><a class="nav-link {{ request()->is('categories*') ? 'active' : '' }}" href="{{ route('categories.index') }}">Category</a></li>
                        <li class="nav-item"><a class="nav-link {{ request()->is('posts*') ? 'active' : '' }}" href="{{ route('posts.index') }}">Post</a></li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>

    <main class="container mt-4">
        @if (session('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                {{ session('success') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
            </div>
        @elseif (session('error'))
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                {{ session('error') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
            </div>
        @endif
        @yield('content')
    </main>

    <footer class="text-center mt-auto py-2">
        <p class="mb-0">&copy; 2024 Blog MSIB. All rights reserved.</p>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
