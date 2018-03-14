<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Post;
use App\Repositories\Posts;
use App\Billing\Stripe;

class PostController extends Controller
{

    public function __construct()
    {
      $this->middleware('auth')->except(['index','show']);
    }

    public function index(Posts $posts, Stripe $stripe) {

      dd($stripe);
      /*
      $posts = Post::latest()
        ->filter(request(['month', 'year']))
        ->get();
      //dd($posts);
      */
      $posts = $posts->all();
      return view('posts.index', compact('posts'));

    }

    public function create() {
      //GET /posts/create
      return view('posts.create');
    }

    public function store() {
      //POST: /posts

      $this->validate(request(), [
        'title'=>'required|max:255|min:10',
        'body'=>'required',
      ]);

      //create a new post
      auth()->user()->publish(
        new Post(request(['title','body']))
      );

      //redirect
      return redirect('/posts');
    }
    public function show(Post $post) {
      //$post = Post::find($id);
      return view('posts.show', compact('post'));
    }

}
