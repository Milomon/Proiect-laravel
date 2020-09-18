<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;
use App\Post;
use App\Category;
use App\Comments;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
       // $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
 public function index()
    {

        $posts = Post::paginate(3);
        $categories= Category::all();

        return view('front/home', compact('posts','categories'));


    }

    
  public function post($id){


        $post = Post::findOrFail($id);
        $categories=Category::all();
        $comments = $post->comments()->whereIsActive(1)->get();
  
       
        return view('post', compact('post','comments','categories'));


    }

    public function category($id){

        $category=Category::find($id);

        return view('category')->with('category',$category)
                               ->with('title',$category->name)
                               ->with('categories',Category::take(5)->get());

        }

}
