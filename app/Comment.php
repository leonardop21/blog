<?php

namespace Blog;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $fillable = [
    'post_id',
    'Comment',
    'name',
    'email'
    ];

    public function Comments() {
    	return $this->hasMany('Blog\Comment');
    }
}
