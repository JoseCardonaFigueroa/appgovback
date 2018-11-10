<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Obra extends Model
{
    //
    protected $fillable = ['archivo', 'gaveta',
                            'expediente','no_obra',
                            'registro_de_oficios',
                            'fuente_financiera',
                            'ejercicio',
                            'descripcion_obra',
                            'localidad',
                            'municipio',
                            'contratado',
                            'modificado',
                            'no_contrato',
                            'plazo',
                            'ejecucion',
                            'asignacion',
                            'contratista',
                            'incio_programado',
                            'termino_programado',
                            'inicio_real',
                            'termino_real'
                          ];

    public function progresos()
    {
      return $this->hasMany('App\Progreso');
    }
}
