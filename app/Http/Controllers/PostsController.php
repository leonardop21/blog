<?php

namespace Blog\Http\Controllers;

use Illuminate\Http\Request;

use Blog\Http\Requests;
use Blog\Http\Controllers\Controller;
use Blog\Post;
use Blog\blog;
use Blog\relaxe;
use Blog\animal;
use Blog\leonan;

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
        $relaxes = \Blog\relaxe::all();
        return view('posts.relaxe', compact('relaxes'));
    }

        public function animal() {
        $animals = \Blog\animal::all();
        return view('animal.animal', compact('animals'));
    }

    public function leonan() {
        $leonans = \Blog\leonan::all();
        return view('leonan.leonan', compact('leonans'));
    }


}
