<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Obra extends Model
{
    //
    public function progresos()
    {
      return $this->hasMany('App\Progreso');
    }
}
