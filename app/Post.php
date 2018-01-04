<?php

namespace App;

// no use of Illuminate\Database\Eloquent\Model as we use our own Model...
class Post extends Model
{
    public function comments()
    {
        return $this->hasMany(Comments::class);
    }
}
