<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Post;
use File;

class PostController extends Controller
{
    public function index()
    {
        $posts=Post::orderby('id','desc')->paginate(10);


        return view('Admin.posts.index')->with(compact('posts'));
    }


    public function  create(){



        return view('Admin.posts.create');

    }


    public function store(Request $request){

        $messages=[

            'title.required'=> 'Hace falta un nombre',
            'title.min'=>'El nombre debe tener minimo 3 caracteres',
            'description.required'=>'Hace falta una descripcion',
            'description.max'=>'Maximo 230 caracteres en la descripcion',
        ];

        $rules=[
            'title'=>'required|min:3',
            'description'=>'required|max:230',
        ];


        $this->validate($request, $rules, $messages);




        $post = new Post();
        $post->title = $request->input('title');
        $post->description = $request->input('description');


        $file = $request->file('photo');
        $path = public_path() . '/images/posts';
        $fileName = uniqid() . $file->getClientOriginalName();
        $file->move($path, $fileName);

        $post->photo = $fileName;

        $post->save();

        return redirect('/admin/posts');
    }


    public function destroyimg( $id){

        $img = Post::find($id);
        if (substr($img->photo,0,4)==="http") {
            $deleted= true;

        }else{
            $fullPath = public_path(). '/images/products/' . $img->photo;
             File::delete($fullPath);


        }


        return back();

    }


    public function edit($id){
        $post= Post::find($id);
        return view('admin.posts.edit')->with(compact('post'));
    }



    public function update(Request $request,$id){

        $messages=[

            'title.required'=> 'Hace falta un nombre',
            'title.min'=>'El nombre debe tener minimo 3 caracteres',
            'description.required'=>'Hace falta una descripcion',
            'description.max'=>'Maximo 230 caracteres en la descripcion'
        ];

        $rules=[
            'title'=>'required|min:3',
            'description'=>'required|max:230',

        ];
        $this->validate($request, $rules, $messages);


        $post = Post::find($id);
        $post->title =$request->input('title');
        $post->description = $request->input('description');

        if($request->hasfile('photo')) {
            $this->destroyimg($post->id);
            $file = $request->file('photo');
            $path = public_path() . '/images/posts';
            $fileName = uniqid() . $file->getClientOriginalName();
            $file->move($path, $fileName);

            $post->photo = $fileName;
        }

        $post->save();

        return redirect('/admin/posts');
    }





    public function destroy($id){

        $post = Post::find($id);
        $post->delete();

        return back();








    }




}
