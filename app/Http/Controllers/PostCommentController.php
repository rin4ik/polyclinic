<?php

namespace App\Http\Controllers;

use App\Post;
use App\Transformers\CommentTransformer;
use App\Http\Requests\CreatePostCommentRequest;

class PostCommentController extends Controller
{
    public function index($post)
    {
        $post = Post::where('slug', $post)->firstOrFail();

        return response()->json(
        fractal()->collection($post->comments()->latestFirst()->get())
        ->parseIncludes(['replies'])
        ->transformWith(new CommentTransformer)
        ->toArray()
      );
    }

    public function create(CreatePostCommentRequest $request, Post $post)
    {
        $this->authorize('comment', $post);
        $comment = $video->comments()->create([
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

    public function delete(Video $video, Comment $comment)
    {
        $this->authorize($comment);
        $comment->delete();
        return response()->json(null, 200);
    }
}
