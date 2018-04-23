<?php

namespace App\Policies;

use App\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class PostPolicy
{
    use HandlesAuthorization;

    public function update(User $user, Video $video)
    {
        return $user->id === $video->channel->user_id;
    }

    public function edit(User $user, Video $video)
    {
        return $user->id === $video->channel->user_id;
    }

    public function delete(User $user, Post $post)
    {
        return $user->id === $video->channel->user_id;
    }
}
