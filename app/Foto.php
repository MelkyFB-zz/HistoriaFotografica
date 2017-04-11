<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Foto extends Model
{
    public function perfil(){
    	return $this->belongsTo('App\Perfil');
    }
    public function comentarios(){
    	return $this->hasMany('App\Comentario');
    }
    public function avaliacoes(){
    	return $this->hasMany('App\Avaliacao');
    }
    public function categorias(){
    	return $this->belongsToMany('App\Categoria','categorias_fotos');
    }
    public function pasta(){
        return $this->belongsTo('App\Pasta');
    }
    public function cidade(){
        return $this->belongsTo('App\Cidade');
    }
}
