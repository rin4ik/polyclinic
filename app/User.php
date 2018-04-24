<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable,SoftDeletes;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function posts()
    {
        return $this->hasMany(Post::class);
    }

    public function comments()
    {
        return $this->morphMany(Comment::class, 'commentable')->where('reply_id', null);
    }
    public static function add($fields)
    {
        $user = new static;
        $user->fill($fields);
        $user->password = \Hash::make($fields['password']);
        $user->save();
        return $user;
    }

    public static function edit($fields)
    {
        $user = new static;
        $user->fill($fields);
        $user->password = bcrypt($fields['password']);
        $user->save();
    }

    public function remove()
    {
        if ($this->avatar != null) {
            Storage::delete('uploads/' . $this->avatar);
        }
        $this->delete();
    }

}
