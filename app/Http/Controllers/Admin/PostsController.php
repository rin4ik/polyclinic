<?php

namespace App\Http\Controllers;

use App\Post;

class PostsController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = Post::latest();
        return view('pages.index');
    }
}
