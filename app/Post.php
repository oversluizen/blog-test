<?php

namespace App;

use Carbon\Carbon;
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

    public function scopeFilter($query, $filters)
    {

        if (!$filters) {
            return $query;
        }

        if ($month = $filters['month']) {
            $query->whereMonth('created_at', Carbon::parse($month)->month);
        }

        if ($year = $filters['year']) {
            $query->whereYear('created_at', $year);
        }
    
    }  


    public static function archives()
    {
        return static::selectRaw('year(created_at) year, monthname (created_at) month, count(*) published')
            ->groupBy('year', 'month')
            // ->orderByRaw('min(created_at) desc')
            ->get()
            ->toArray();;
    }
}
