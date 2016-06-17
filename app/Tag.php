<?php

namespace Blog;

use Illuminate\Database\Eloquent\Model;
use Blog\Tag;

class Tag extends Model

{    protected $fillable = [
    	'name'
    ];
       protected $table = 'tags';

    public function blogs() {
    	return $this>belongsToMany('App\Blog', 'tags');
    }
}
