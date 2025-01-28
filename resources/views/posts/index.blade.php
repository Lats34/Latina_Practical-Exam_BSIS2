@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Your Posts</h1>
    <a href="{{ route('posts.create') }}" class="btn btn-primary">Create New Post</a>
    <ul>
        @foreach($posts as $post)
            <li>
                {{ $post->title }}
                <form action="{{ route('posts.pin', $post) }}" method="POST" style="display:inline;">
                    @csrf
                    <button type="submit" class="btn btn-warning">Pin</button>
                </form>
                <form action="{{ route('posts.unpin', $post) }}" method="POST" style="display:inline;">
                    @csrf
                    <button type="submit" class="btn btn-secondary">Unpin</button>
                </form>
                <form action="{{ route('posts.archive', $post) }}" method="POST" style="display:inline;">
                    @csrf
                    <button type="submit" class="btn btn-danger">Archive</button>
                </form>
                <form action="{{ route('posts.unarchive', $post) }}" method="POST" style="display:inline;">
                    @csrf
                    <button type="submit" class="btn btn-info">Unarchive</button>
                </form>
            </li>
        @endforeach
    </ul>
</div>
@endsection
