<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\Comment;

class CommentsController extends Controller
{
    public function store(Post $post, Comment $comment)
    {
        $body=request('body');
        $user_id= auth()->user()->id;

        $this->validate(request(), ['body' => 'required|min:2']);
           $post->addComment($body, $user_id);

        return back();
    }
}
