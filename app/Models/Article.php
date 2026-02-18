<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    protected $fillable = [
        'title',
        'slug',
        'category',
        'excerpt',
        'body',
        'published_at',
    ];

    protected $dates = [
        'published_at',
    ];
}

