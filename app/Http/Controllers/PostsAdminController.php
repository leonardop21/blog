<?php

namespace Blog\Http\Controllers;

// use Illuminate\Http\Request;

 use Blog\Http\Requests;
use Illuminate\Http\Request;
use Blog\Post;
// use Blog\Blog;
// use Blog\Http\Controllers\Controller;

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

  		$posts = $this->posts->paginate(10);

  		return view('admin.posts.index', compact('posts'));
  	}

  	public function Create()
  	{
  		return view('admin.posts.create');
  	}

  	public function Store(PostRequest  $request) {
  		$this->posts->create($request->all());
  		return redirect()->route('admin.posts.index');
  	}
}


