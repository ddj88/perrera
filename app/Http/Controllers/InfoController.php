<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class InfoController extends Controller
{
  public function con(){
      return view('info.condicions');
  }

  public function adv(){
      return view('info.consells');
  }

  public function misio(){

      return view('info.misio');


  }

    public function instalacions(){

        return view('info.instalacions');


    }

    public function recursos(){

        return view('info.recursos');


    }

    public function equip(){

        return view('info.equip');


    }
}
