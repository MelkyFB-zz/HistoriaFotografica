<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{
    public function fotos(){
    	return $this->belongsToMany('App\Foto','categorias_fotos');
    }
}
