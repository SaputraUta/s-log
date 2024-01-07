<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    public function index()
    {
        return view('blog', ["title" => "All Posts", "posts" => Post::latest()->get()]);
    }

    public function getDetail(Post $post)
    {
        return view('post', ["title" => "Single post", "post" => $post]);
    }
}
