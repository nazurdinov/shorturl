<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Shorturl extends Model
{
    protected $fillable = [
        'slug', 'link',
    ];
}
