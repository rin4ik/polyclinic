<?php

namespace App\Http\Controllers\Admin;

use App\Photo;
use App\Http\Controllers\Controller;
use Symfony\Component\HttpFoundation\Request;

class PhotoController extends Controller
{
    public function index()
    {
        $photos = Photo::all();
        return view('admin.photos.index', compact('photos'));
    }

    public function create()
    {
        return view('admin.photos.create');
    }

    public function store(Request $request)
    {
        request()->validate([
            'image' => 'nullable|image',
        ]);
        $post = new Photo;
        $post->uploadImage($request->file('image'));
        return redirect()->route('photos.index')->with('flash', 'Yangilik qoshildi!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Photo $photo)
    {
        $photo->delete();
        return redirect()->back()->with('flash', 'Yangilik uchirildi!');
    }
}
