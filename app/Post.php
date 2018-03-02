<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class post extends Model
{
    public function getUrlAttribute(){   //controla que la imagen se cargue desde una web o sea un archivo local


        if (substr($this->photo,0,4)==='http'){


            return $this->photo;
        }

        return '/images/posts/' . $this->photo;
    }
}
