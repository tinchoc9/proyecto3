<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Post extends Model
{
    use HasFactory;


    public function getExcerptAttribute()
    {
        return Str::limit($this->body, 200);
    }

    public function user()
    {
    	return $this->belongsTo(User::class);
    }
}
