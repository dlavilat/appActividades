<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class EstadosActividad extends Model
{
    protected $table = "EstadosActividad";

    protected $fillable = ['es_descripcion'];

    public function actividades(){
      return $this->hasMany('App\Actividades');
    }
}
