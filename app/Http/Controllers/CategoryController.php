<?php

namespace App\Http\Controllers;

use App\Post;
use App\Category;

class CategoryController extends Controller
{
    public function show($category)
    {
        $category = Category::where('slug', $category)->first();
        $posts = Post::where('category_id', $category->id)->paginate(10);
        $posts->load('category', 'user');
        return view('pages.news', compact('posts'));
    }
}
