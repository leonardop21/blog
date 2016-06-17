<?php

namespace Blog;

use Illuminate\Database\Eloquent\Model;
use Blog\Tag;



class Post extends Model
{
	   protected $fillable = [
   		'title',
   		'content'
   ];


  protected $table = 'dudas';



   public function Tag() {
      return $this->belongsToMany(Tag::class);

    }

   public function getTagListAttribute() {
   	// Exibe todas as tags em lista separadas por vírgula
   	$tag = $this->tag()->lists('name')->all();
   	return implode(', ', $tag);
   	   }

}

