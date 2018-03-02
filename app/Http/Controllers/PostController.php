<?php

namespace App\Http\Controllers;
use App\Post;

use Illuminate\Http\Request;

class PostController extends Controller
{


    public function index()
    {
        $posts=Post::orderby('id','desc')->paginate(10);


        return view('posts.index')->with(compact('posts'));

            }



        public function show($id){

        $post=Post::find($id);


        return view('posts.show')->with(compact('post'));


    }

}
