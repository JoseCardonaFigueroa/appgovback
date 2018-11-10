<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Progreso extends Model
{
    protected $fillable = ['fecha', 'porcentaje','dia','subtotal','obra_id'];
    public function obra()
    {
      return $this->belongsTo('App\Obra');
    }
}
