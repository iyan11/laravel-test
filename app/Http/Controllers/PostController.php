<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PostController extends Controller
{

    public function index()
    {
        $posts = Post::all();
        $storage = Storage::disk('public');
        return view('web.post.index', ['posts' => $posts, 'storage' => $storage]);
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
            'image' =>  'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'body' => 'required',
        ]);

        $image = $request->file('image');
        $imagePath = $image->store('images', 'public');

        $post = new Post();
        $post->title = $request->title;
        $post->description = $request->description;
        $post->image = $imagePath;
        $post->body = $request->body;
        $post->setCreatedAt('now');
        $post->setUpdatedAt('now');
        $post->save();

        return redirect()->route('post.index');
    }


    public function show(Post $post)
    {
        $storage = Storage::disk('public');
        return view('web.post.show', ['post' => $post, 'storage' => $storage]);
    }
}
