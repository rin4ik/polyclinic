<?php

namespace App\Http\Controllers;

use App\Post;

class HomeController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = Post::with('category', 'user')->latest()->get();

        return view('pages.index', compact('posts'));
    }

    public function news()
    {
        $posts = Post::with('category', 'user')->latest()->paginate(1);
        return view('pages.news', compact('posts'));
    }
}
