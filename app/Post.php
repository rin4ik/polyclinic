<?php

namespace App;

use Image;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;
use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\SoftDeletes;

class Post extends Model
{
    use Sluggable,SoftDeletes;
    protected $fillable = [
        'title', 'content', 'image', 'user_id', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    /**
     * Return the sluggable configuration array for this model.
     *
     * @return array
     */
    public function sluggable()
    {
        return [
                'slug' => [
                    'source' => 'title'
                ]
            ];
    }

    public function getRouteKeyName()
    {
        return 'slug';
    }

    public function comments()
    {
        return $this->morphMany(Comment::class, 'commentable')->where('reply_id', null);
    }

    public function getCategoryTitle()
    {
        if ($this->category != null) {
            return $this->category->title;
        }
        return 'Kategoriyasi yoq';
    }
    
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
    
        $fileName =$fileId . '.png';
        Image::make($path)->encode('png')->resize(750,450)->save();
       

        if (Storage::disk('s3')->put($fileName, fopen($path, 'r+'))) {
            \File::delete($path);
        } 
        $this->image = $fileName;
        $this->save();
        
    } 
    public function setCategory($id)
    {
        if ($id == null) {
            return;
        }
        $this->category_id = $id;
        $this->save();
    }

    public static function add($fields)
    {
        $post = new static;
        $post->fill($fields);
        $post->user_id = auth()->id();
        $post->category_id = $fields['category_id'];
        $post->save();
        return $post;
    }

    public function getImage()
    {
        if ($this->image == null) {
            return '/images/noimage.jpg';
        }
        return config('poliklinika.buckets.images') . '/' .  $this->image;
  
    }
}
