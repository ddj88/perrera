<?php

namespace App\Http\Controllers;

use App\Animal;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;



    public function index(){

        $animals=Animal::paginate(9);


        Return view('index')->with(compact('animals'));

    }

}
