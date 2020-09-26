<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class PostController extends Controller
{
    public function show(Post $post){
        return view('blog-post', ['post'=> $post]);
    }

    public function create(){
        return view('admin.posts.create');
    }

    public function store(Request $request){
        auth()->user();
      dd($request->all());
    }
}
