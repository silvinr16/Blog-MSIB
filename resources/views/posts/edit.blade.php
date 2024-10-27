@extends('layouts.app')

@section('title', 'Update Post')

@section('content')
    <h1>Update Post</h1>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('posts.update', $post->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <div class="form-group">
            <label for="title">Title</label>
            <input type="text" name="title" id="title" value="{{ old('title', $post->title) }}" class="form-control">
        </div>
        
        <div class="form-group">
            <label for="content">Content</label>
            <textarea name="content" id="content" class="form-control">{{ old('content', $post->content) }}</textarea>
        </div>

        <div class="form-group">
            <label for="category">Category</label>
            <select name="category_id" class="form-control">
                <option value="">Choose</option>
                @foreach ($categories as $category)
                    <option value="{{ $category->id }}" {{ $post->category_id == $category->id ? 'selected' : '' }}>
                        {{ $category->name }}
                    </option>
                @endforeach
            </select>
        </div>

        <div class="form-group">
            <label for="author">Author</label>
            <select name="author_id" class="form-control">
                <option value="">Choose</option>
                @foreach ($authors as $author)
                    <option value="{{ $author->id }}" {{ $post->author_id == $author->id ? 'selected' : '' }}>
                        {{ $author->name }}
                    </option>
                @endforeach
            </select>
        </div>

        <div class="form-group">
            <label for="image">Upload Image</label>
            <input type="file" name="image" class="form-control">
            @if ($post->image)
                <img src="{{ asset('storage/' . $post->image) }}" alt="Post Image" class="img-thumbnail mt-2" width="150">
            @endif
        </div>

        <input type="hidden" name="is_published" value="0">
        <div class="form-check">
            <input type="checkbox" name="is_published" class="form-check-input" id="isPublished" value="1" {{ old('is_published', $post->is_published ?? false) ? 'checked' : '' }}>
            <label class="form-check-label" for="isPublished">Publish</label>
        </div>

        <div class="d-flex mt-3">
            <button type="submit" class="btn btn-primary me-2">Update</button>
            <a href="{{ route('posts.index') }}" class="btn btn-outline-secondary">Back</a>
        </div>
    </form>
@endsection
