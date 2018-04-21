<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
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

    public function getImage()
    {
        if ($this->image == null) {
            return '/uploads/noimage.png';
        }
        return '/uploads/' . $this->image;
    }
}
