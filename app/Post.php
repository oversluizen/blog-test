<?php

namespace App;

// no use of Illuminate\Database\Eloquent\Model as we use our own Model...
class Post extends Model
{
    public function comments()
    {
        return $this->hasMany(Comment::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function addComment($body, $user_id)
    {
        $this->comments()->create([
            'body' => $body, 
            'user_id' => $user_id
        ]);
    }
}
