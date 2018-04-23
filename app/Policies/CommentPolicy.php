<?php

namespace App\Policies;

use App\User;
use App\Comment;
use Illuminate\Auth\Access\HandlesAuthorization;

class CommentPolicy
{
    use HandlesAuthorization;

    /**
     * Create a new policy instance.
     *
     * @return void
     */
    public function delete(User $user, Comment $comment)
    {
        if ($user->id == $comment->user->id || $user->is_admin == 1) {
            return true;
        }
        return false;
    }
}
