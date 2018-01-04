<?php

namespace App;

class Comments extends Model
{
    public function post()
    {
        return $this->belongsTo(Post::class);
    }

//
}
