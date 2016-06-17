<?php

namespace Blog\Http\Controllers;
use Blog\Http\Requests\PostsRequest;

// use Illuminate\Http\Request;

use Blog\Http\Requests;
use Illuminate\Http\Request;

use Blog\Post;
use Blog\Tag;
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

  	public function Store(PostsRequest  $request) {
      /*
        Array Filter: Filtra o Array e impede que espaços em brancos sejam adicionados as tags

        Array Map -> Trim -> Explode => Vírgula: Array com o delimitador trim recebendo um explode na vírgula (,) isso cria um array de tags separados por ,

      */
      $tags = array_filter(array_map('trim', explode(',', $request->tags)));
      $tagsIds = [];
      foreach($tags as $tagName) {
        $tagsIds[] = Tag::firstOrCreate(['name'=> $tagName])->id;
      }
  	$posts = $this->posts->create($request->all());
    // Se a tag já existir no post, não faz nada, se já existir, irá criar a tag
    // $posts->tags()->sync($tagsIds);
  		return redirect()->route('admin.posts.index');
  	}

    Public function edit ($id) {
      $posts = $this->posts->find($id);
      return view('admin.posts.edit', compact('posts'));
    }

    Public function update($id, PostsRequest $request) {
        $this->posts->find($id)->update($request->all());
        return redirect()->route('admin.posts.index');
    }

    public function delete($id) {
      $this->posts->find($id)->delete();
      return redirect()->route('admin.posts.index');
    }
   

}


