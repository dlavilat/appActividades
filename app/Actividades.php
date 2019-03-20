<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Actividades extends Model
{
  protected $table = "Actividades";

  protected $fillable =
  [
    'ac_titulo',
    'ac_descripcion',
    'ac_fecha_programada',
    'categoria_id',
    'estados_id'
  ];

  public function categorias(){
    return $this->belogsTo('App\Categorias');
  }

  public function estadosActividad(){
    return $this->belogsTo('App\EstadosActividad');
  }
}
