<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\Http\Requests;

class BlogController extends Controller
{
    public function getIndex() {
        $posts = Post::orderBy('id', 'desc')->paginate(10);
        return view('blog.index')->withPosts($posts);
    }

    public function getSingle($slug)
    {
        $post = Post::where('slug', '=', $slug)->first();
        return view('blog.single')->withPost($post);
    }
}
