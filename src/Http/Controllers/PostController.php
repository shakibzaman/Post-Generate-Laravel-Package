<?php

namespace ShakibZaman\Post\Http\Controllers;

use App\Http\Controllers\Controller;
use ShakibZaman\Post\Model\Post;

class PostController extends Controller
{
    public function getPosts()
    {
<<<<<<< HEAD
        $posts=Post::all();
=======
        $posts=Post::paginate(15);
>>>>>>>  Add | Blade design
        return view("Post::post.index",compact('posts'));
    }
}
