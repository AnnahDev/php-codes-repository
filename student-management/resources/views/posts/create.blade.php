{{-- filepath: resources/views/posts/create.blade.php --}}
@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Create Post</h1>
    <form action="{{ route('posts.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="title" class="form-label">Title</label>
            <input type="text" id="title" name="title" class="form-control" required>
        </div>
        <div class="mb-3">
            <label for="content" class="form-label">Content</label>
            <textarea id="content" name="content" class="form-control" rows="5" required></textarea>
        </div>
        <button type="submit" class="btn btn-success">Create</button>
    </form>
</div>
@endsection
