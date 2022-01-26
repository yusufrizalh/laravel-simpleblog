<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    // properties untuk mass assignment
    protected $fillable = ['title', 'slug', 'body'];
}
