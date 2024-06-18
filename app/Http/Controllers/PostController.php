<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{

    public function index()
    {
        $posts = Post::all();
        return view('web.post.index', compact('posts'));
    }

    public function create()
    {
        return view('web.post.create');
    }

    public function store(Request $request)
    {
        $result = $request->validate([
            'title' => 'required',
            'description' => 'required',
            'body' => 'required',
        ]);

        $post = new Post();
        $post->title = $request->title;
        $post->description = $request->description;
        $post->body = $request->body;
        $post->setCreatedAt('now');
        $post->setUpdatedAt('now');
        $post->save();

        return redirect()->route('post.index');
    }
}
