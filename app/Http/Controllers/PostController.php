<?php

namespace App\Http\Controllers;

use App\Models\Post;

class PostController extends Controller
{
    public function show($slug)
    {
        //$post = \DB::table('posts')->where('slug', $slug)->first();

        return view('post', [
            'post' => Post::where('slug', $slug)->firstOrFail(),
        ]);
    }
}
