<?php

namespace App\Http\Controllers\Admin;

use App\Animal;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AnimalController extends Controller
{


    public function index(){

        $animals= Animal::paginate(10);

        return view('Admin.animals.index')->with(compact('animals'));


    }
}
