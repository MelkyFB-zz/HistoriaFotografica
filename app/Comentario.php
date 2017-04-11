<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comentario extends Model
{
    public function avaliacoes(){
    	return $this->hasMany('App\Avaliacao');
    }
    public function foto(){
    	return $this->belongsTo('App\Foto');
    }
}
