<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Post;
use App\Models\Author;

class DashboardController extends Controller
{
    // Fungsi untuk menampilkan halaman dashboard
    public function index()
    {
        $totalCategories = Category::count();
    $totalPosts = Post::count();
    $totalAuthors = Author::count();

    return view('dashboard.index', compact('totalCategories', 'totalPosts', 'totalAuthors'));
    }   
}
