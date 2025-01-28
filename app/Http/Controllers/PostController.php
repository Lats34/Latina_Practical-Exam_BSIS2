<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::where('user_id', Auth::id())->get();
        return view('posts.index', compact('posts'));
    }

    public function create()
    {
        $posts = Post::where('user_id', Auth::id())->get(); 
        return view('posts.create', compact('posts')); 
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'body' => 'required',
        ]);

        Post::create([
            'title' => $request->title,
            'body' => $request->body,
            'user_id' => Auth::id(),
        ]);

        return redirect()->route('posts.index');
    }

    public function show(Post $post)
    {
        return view('posts.show', compact('post'));
    }

    public function edit(Post $post)
    {
        return view('posts.edit', compact('post'));
    }

    public function update(Request $request, Post $post)
    {
        $request->validate([
            'title' => 'required',
            'body' => 'required',
        ]);

        $post->update($request->only('title', 'body'));

        return redirect()->route('posts.index');
    }

    public function destroy(Post $post)
    {
        $post->delete();
        return redirect()->route('posts.index');
    }

    public function pin(Post $post)
    {
        $post->is_pinned = true;
        $post->save();
        return redirect()->route('posts.index');
    }

    public function unpin(Post $post)
    {
        $post->is_pinned = false;
        $post->save();
        return redirect()->route('posts.index');
    }

    public function archive(Post $post)
    {
        $post->is_archived = true;
        $post->save();
        return redirect()->route('posts.index');
    }

    public function unarchive(Post $post)
    {
        $post->is_archived = false;
        $post->save();
        return redirect()->route('posts.index');
    }
}
