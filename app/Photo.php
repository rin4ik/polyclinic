<?php

namespace App;

use Image;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class Photo extends Model
{
    protected $fillable = [
      'image'
    ];

    public function uploadImage($image)
    {
        if ($image == null) {
            return;
        }
        $fileId = uniqid(true);
        $image->move(
                public_path() . '/uploads/',
             $fileId
        );
        $path = public_path() . '/uploads/' . $fileId;

        $fileName = $fileId . '.png';
        Image::make($path)->encode('png')->save();

        if (Storage::disk('s3')->put($fileName, fopen($path, 'r+'))) {
            \File::delete($path);
        }
        $this->image = $fileName;
        $this->save();
    }

    public function getImage()
    {
        if ($this->image == null) {
            return '/images/noimage.jpg';
        }
        return config('poliklinika.buckets.images') . '/' . $this->image;
    }
}
