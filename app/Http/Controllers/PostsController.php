<?php

namespace Blog\Http\Controllers;

use Illuminate\Http\Request;

use Blog\Http\Requests;
use Blog\Http\Controllers\Controller;
use Blog\Post;
use Blog\blog;
use Blog\relaxe;

class PostsController extends Controller
{
    public function index() {
    	$posts = \Blog\Post::all();
    	return view('posts.index', compact('posts'));
    }

    public function duda() {
    	$dudas = \Blog\Duda::all();
    	return view('posts.duda', compact('dudas'));
    }

    public function blog() {
    	$blogs = \Blog\Blog::all();
    	return view('posts.blog', compact('blogs'));
    }

    public function relaxe() {
        $relaxes = \Blog\Relaxe::all();
        return view('posts.relaxe', compact('relaxes'));
    }
}
