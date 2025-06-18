{{-- filepath: resources/views/posts/show.blade.php --}}
@extends('layouts.app')

@section('content')
<div class="container">
    <h1 class="mb-3">{{ $post->title }}</h1>
    <p class="mb-4">{{ $post->content }}</p>
    <a href="{{ route('posts.index') }}" class="btn btn-secondary">Back</a>
</div>
@endsection
