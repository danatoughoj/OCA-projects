<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $table = "comments";
    public $primaryKey = 'comment_id';
    public $timestamps = true;

    public function users()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function articles()
    {
        return $this->belongsTo(Article::class, 'article_id');
    }
}
