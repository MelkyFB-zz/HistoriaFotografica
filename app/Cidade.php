<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cidade extends Model
{
    public function estado(){
    	return $this->belongsTo('App\Estado');
    }
    public function perfis(){
    	return $this->hasMany('App\Perfil');
    }
    public function curtidas(){
    	return $this->hasMany('App\Curtida');
    }
}
