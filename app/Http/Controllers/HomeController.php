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
        $posts = Post::with('category', 'user')->where('slug', '!=', 'vrach')->latest()->get();

        return view('pages.index', compact('posts'));
    }

    public function news()
    {
        $posts = Post::with('category', 'user')->where('slug', '!=', 'vrach')->latest()->paginate(10);
        return view('pages.news', compact('posts'));
    }

    public function show($category, Post $post)
    {
        $post->load('category', 'user');
        return view('pages.show', compact('post'));
    }
}
