<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Progreso extends Model
{
    public function obra()
    {
      return $this->belongsTo('App\Obra');
    }
}