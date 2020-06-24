<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class PostController extends Controller
{

    public function index()
    {
        $posts = Post::all();
        return view('admin.posts.list', compact('posts'));
    }

    public function create()
    {
        return view('admin.posts.add');
    }

    public function store(Request $request)
    {
        $post = new Post();
        $post->title = $request->title;
        $post->description = $request->desc;
        $post->content = $request->content_post;
        $post->user_id = Auth::id();

        if ($request->hasFile('image')) {
            $image = $request->image;
            $path = $image->store('image','public');
            $post->image = $path;
        } else {
            $post->image = 'images/default.jpg';
        }
        $post->save();
        toastr()->success('create posts success!');
        return redirect()->route('posts.index');
    }
}
