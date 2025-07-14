<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\Http\Requests;

class BlogController extends Controller
{
    public function getSingle($slug)
    {
        $post = Post::where('slug', '=', $slug)->first();
        if (!$post) {
            abort(404);
        }
        return view('blog.single')->withPost($post);
    }
}
