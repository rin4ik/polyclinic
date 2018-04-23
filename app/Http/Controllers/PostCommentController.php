<?php

namespace App\Http\Controllers;

use App\Post;
use App\Comment;
use App\Transformers\CommentTransformer;
use App\Http\Requests\CreatePostCommentRequest;

class PostCommentController extends Controller
{
    public function index(Post $post)
    {
        return response()->json(
        fractal()->collection($post->comments()->get())
        ->parseIncludes(['replies'])
        ->transformWith(new CommentTransformer)
        ->toArray()
      );
    }

    public function create(CreatePostCommentRequest $request, Post $post)
    {
        $comment = $post->comments()->create([
            'body' => $request->body,
            'reply_id' => $request->get('reply_id', null),
            'user_id' => $request->user()->id
        ]);
        return response()->json(
            fractal()->item($comment)
            ->parseIncludes(['replies'])
            ->transformWith(new CommentTransformer)
            ->toArray()
        );
    }

    public function delete(Post $post, Comment $comment)
    {
        $this->authorize($comment);
        $comment->delete();
        return response()->json(null, 200);
    }
}
