<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Categorias extends Model
{
    protected $table = "Categorias";

    protected $fillable = ['ca_descripcion'];

    public function actividades(){
      return $this->hasMany('App\Actividades');
    }
}
