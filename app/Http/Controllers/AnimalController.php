<?php

namespace App\Http\Controllers;

use App\Animal;
use Illuminate\Http\Request;
use PhpParser\Node\Stmt\Return_;

class AnimalController extends Controller
{
    public function show($id){

        $animal=Animal::find($id);


        Return view('animals.show')->with(compact('animal'));


    }

    public function gossos() {

        $animals = Animal::where('type','perro')->paginate(9);


        return view('animals.gossos')->with(compact('animals'));



    }


    public function gats() {

        $animals = Animal::where('type','gato')->paginate(9);


        return view('animals.gats')->with(compact('animals'));



    }
}
