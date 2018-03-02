<?php

namespace App\Http\Controllers\Admin;

use App\Animal;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use File;

class AnimalController extends Controller
{


    public function index(){

        $animals= Animal::paginate(10);

        return view('Admin.animals.index')->with(compact('animals'));


    }


    public function create(){
        return view('admin.animals.create');
    }


    public function store(Request $request){

        $messages=[

            'name.required'=> 'Hace falta un nombre',
            'name.min'=>'El nombre debe tener minimo 3 caracteres',
            'description.required'=>'Hace falta una descripcion',
            'description.max'=>'Maximo 230 caracteres en la descripcion',
            'gender.required'=>'seleciona un genero',
            'breed.required'=>'Debes introducir una raza',
            'born.required'=>'introduce una fecha de nacimiento',
            'entry.required'=>'introduce una fecha de entrada'
        ];

        $rules=[
            'name'=>'required|min:3',
            'description'=>'required|max:230',
        ];


        $this->validate($request, $rules, $messages);

        $animal = new Animal();
        $animal->name = $request->input('name');
        $animal->description = $request->input('description');
        $animal->gender = $request->input('gender');
        $animal->breed = $request->input('breed');
        $animal->born = $request->input(('born'));
        $animal->entry = $request->input('entry');
        $animal->type = $request->input('type');

        $file = $request->file('photo');
        $path = public_path('/images/animals');
        $filename = uniqid().$file->getClientOriginalName();
        $file->move($path,$filename);
        $animal->photo = $filename;

        $animal->save();

        return redirect('/admin/animals');

    }

    public function destroyimg($id){

        $img = Animal::find($id);
        if  (substr($img->photo,0,4)==="http"){

        }else{

            $fullpath = public_path('/images/animals/').$img->photo;
            File::delete($fullpath);
        }

        return back();
    }

    public function edit($id){
        $animal = Animal::find($id);
        return view('admin.animals.edit')->with(compact('animal'));

    }


    public function update(Request $request,$id){

        $messages=[
            'name.required'=> 'Hace falta un nombre',
            'name.min'=>'El nombre debe tener minimo 3 caracteres',
            'description.required'=>'Hace falta una descripcion',
            'description.max'=>'Maximo 230 caracteres en la descripcion',
            'gender.required'=>'seleciona un genero',
            'breed.required'=>'Debes introducir una raza',
            'born.required'=>'introduce una fecha de nacimiento',
            'entry.required'=>'introduce una fecha de entrada'
        ];

        $rules=[
            'name'=>'required|min:3',
            'description'=>'required|max:230',
        ];

        $this->validate($request, $rules, $messages);

        $animal = Animal::find($id);
        $animal->name = $request->input('name');
        $animal->description = $request->input('description');
        $animal->gender = $request->input('gender');
        $animal->breed = $request->input('breed');
        $animal->born = $request->input(('born'));
        $animal->entry = $request->input('entry');
        $animal->type = $request->input('type');

        if($request->hasfile('photo')) {
            $this->destroyimg($animal->id);
            $file = $request->file('photo');
            $path = public_path() . '/images/animals';
            $fileName = uniqid() . $file->getClientOriginalName();
            $file->move($path, $fileName);

            $animal->photo = $fileName;
        }
        $animal->save();

        return redirect('/admin/animals');

    }

    public function destroy($id){
        $animal = Animal::find($id);
        $animal->delete();

        return back();

    }
}

