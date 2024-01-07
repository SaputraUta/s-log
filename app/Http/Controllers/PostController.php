<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Category;
use App\Models\User;

class PostController extends Controller
{
    public function index()
    {
        $title = '';
        if (request('category')) {
            $category = Category::firstWhere('slug', request('category'));
            $title = ' in ' . $category->name;
        }
        if (request('user')) {
            $user = User::firstWhere('username', request('user'));
            $title = ' by ' . $user->name;
        }
        return view('blog', ["title" => "All Posts" . $title, "posts" => Post::latest()->filter(request(['search', 'category', 'user']))->paginate(5)->withQueryString()]);
    }

    public function getDetail(Post $post)
    {
        return view('post', ["title" => "Single post", "post" => $post]);
    }
}
