<?php

namespace App\Transformers;

use App\User;
use App\Comment;
use League\Fractal\TransformerAbstract;

class CommentTransformer extends TransformerAbstract
{
    protected $availableIncludes = ['replies'];

    public function transform(Comment $comment)
    {
        $user = User::find($comment->user_id);
        return [
            'id' => $comment->id,
            'user' => $user,
            'body' => $comment->body,
            'created_at' => $comment->created_at,
            'updated_at' => $comment->updated_at
        ];
    }

    public function includeReplies(Comment $comment)
    {
        return $this->collection($comment->replies, new CommentTransformer);
    }
}
