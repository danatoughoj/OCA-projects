<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    protected $table = "articles";
    public $primaryKey = 'article_id';
    public $timestamps = true;

    public function comments()
    {
        return $this->hasMany(Comment::class, 'article_id', 'article_id');
    }
}
