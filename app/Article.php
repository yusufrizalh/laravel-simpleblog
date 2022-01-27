<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    // properties untuk mass assignment
    protected $fillable = ['category_id', 'title', 'slug', 'body'];

    public function category() {
        return $this->belongsTo(Category::class);
    }
}
