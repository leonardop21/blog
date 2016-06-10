<?php

namespace Blog\Http\Controllers;

use Illuminate\Http\Request;

use Blog\Http\Requests;
use Blog\Post;
use Blog\Blog;
use Blog\Http\Controllers\Controller;

class PostsAdminController extends Controller
{

	/**
	* @var Posts

	*/ 
	private $posts;


	public function __construct(Post $posts)
	{
		$this->posts = $posts;
	}


  	public function index() {

  		$posts = $this->posts->paginate(5);

  		return view('admin.posts.index', compact('posts'));
  	}
}


