<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Static_page extends Model
{

    protected $fillable = [
        'title',
        'body',
        'published_at'
    ];

}
