<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function getAllPost()
    {
        $posts = Post::paginate(5);
        return view('blog.all', compact('posts'));
    }
}
