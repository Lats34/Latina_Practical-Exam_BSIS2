<div class="container">
    <h1>{{ $post->title }}</h1>
    <p>{{ $post->body }}</p>
    <a href="{{ route('posts.index') }}" class="btn btn-primary">Back to Posts</a>
    @if (Auth::check())
        <a href="{{ route('posts.edit', $post->id) }}" class="btn btn-secondary">Edit Post</a>
        <form action="{{ route('posts.destroy', $post->id) }}" method="POST">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-danger">Delete Post</button>
        </form>
    @endif
</div>n@extends('layouts.app')

@section('content')
<div class="container">
    <h1>{{ $post->title }}</h1>
    <p>{{ $post->body }}</p>
    <a href="{{ route('posts.index') }}" class="btn btn-primary">Back to Posts</a>
</div>
@endsection
