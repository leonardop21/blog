<?php

namespace Blog;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $fillable = [
    'post_id',
    'comment',
    'name',
    'email'
    ];

    public function comments() {
    	return $this->hasMany('App\Comment');
    }
}
