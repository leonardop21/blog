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

   public function tags() {
   	return $this->belongsToMany('App\Tag', 'blogs_tags');
   }

}
