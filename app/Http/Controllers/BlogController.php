<?php

namespace Blog;

use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
   protected $fillable = [
        'title',
        'content'
   ];

   public function comments(){
    return $this->hasMany('App\Comment');
   }

   public function tag() {

    return $this->belongsToMany('App\Tag', 'tag');
   }

}

class PostsAdmin extends Model
{
    protected $table = 'Posts';

}