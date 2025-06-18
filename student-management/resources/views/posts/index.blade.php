{{-- filepath: resources/views/posts/index.blade.php --}}
@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Posts</h1>
    <a href="{{ route('posts.create') }}" class="btn btn-primary mb-3">Create Post</a>
    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif
    
    @if($posts->isEmpty())
        <div class="alert alert-info">No posts found.</div>
    @else
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>Title</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach($posts as $post)
                <tr>
                    <td>{{ $post->title }}</td>
                    <td>
                        <a href="{{ route('posts.show', $post) }}" class="btn btn-info btn-sm">View</a>
                        <a href="{{ route('posts.edit', $post) }}" class="btn btn-warning btn-sm">Edit</a>
                        <form action="{{ route('posts.destroy', $post) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure you want to delete this post?')">Delete</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
        
        @if($posts->hasPages())
            <div class="d-flex justify-content-center">
                {{ $posts->links() }}
            </div>
        @endif
    @endif
</div>
@endsection