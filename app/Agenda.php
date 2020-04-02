<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Agenda extends Model
{
    public function scopeBuscarpor($query, $tipo, $buscar){
      if(($tipo) && ($buscar) ){
          return $query->where($tipo,'like',"%$buscar%");
      }  
    }

    /*public function scopeApellidos($query, $apellidos){
        if($apellidos){
            return $query->where('apellidos','like',"%$apellidos%");
        }  
      }*/
}
