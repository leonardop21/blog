<?php

namespace Blog;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
	   protected $fillable = [
   		'title',
   		'content'
   ];

  protected $table = 'dudas';

}
