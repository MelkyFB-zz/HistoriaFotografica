<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pasta extends Model
{
    public function perfil(){
    	return $this->belongsTo('App\Perfil');
    }
    public function fotos(){
    	return $this->hasMany('App\Foto');
    }
}
