<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;

class Category extends Model
{
    use Sluggable;
    protected $fillable = [
        'title',
    ];

    public function getRouteKeyName()
    {
        return 'slug';
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
}
