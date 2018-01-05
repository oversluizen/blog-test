<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class CommentsController extends Controller
{
    public function store(Post $post)
    {
        $body=request('body');
        $user_id= $post->user_id;

        $this->validate(request(), ['body' => 'required|min:2']);
           $post->addComment($body, $user_id);

        return back();
    }
}
