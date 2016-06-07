<?php

namespace Blog\Http\Controllers;

use Illuminate\Http\Request;

use Blog\Http\Requests;
use Blog\Http\Controllers\Controller;

class PostsAdminController extends Controller
{

	/**
	* @var Blog

	*/ 
	private $post;


	public function __construct(Post $post)
	{
		$this->post = $post;
	}


  	public function index() {

  		$leonan-> $this->post->all();

  		return view('admin.posts.index', compact('posts'));
  	}
}
