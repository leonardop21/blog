<?php

namespace Blog;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    protected $fillable = [
    	'name'
    ];

    public function blogs() {
    	return $this0>belongsToMany('App\Blog', 'blogs_tags');
    }
}
