<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use App\Http\Requests\PostRequest;

class PostController extends Controller
{
    public function index(Post $post) //インポートしたPostをインスタンス化して$postとして使用
    {
        
        return view('posts.index')->with(['posts' => $post->getPaginateByLimit(3)]);
    }
    
    public function show(Post $post)
    {
        return view('posts.show')->with(['post' => $post]);
    }
     public function create(Post $post)
     {
        return view('posts.create');
     }
     public function store(Post $post, PostRequest $request)
     {
        $input = $request['post'];
        $post->fill($input)->save();
        return redirect('/posts/' . $post->id);
     }
}

