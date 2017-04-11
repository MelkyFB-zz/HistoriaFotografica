<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Perfil extends Model
{
    public function cidade(){
    	return $this->belongsTo('App\Cidade');
    }
    public function usuario(){
    	return $this->belongsTo('App\User','usuario_id');
    }
    public function curtidas(){
    	return $this->hasMany('App\Curtida');
    }
    public function fotos(){
    	return $this->hasMany('App\Foto');
    }
    public function pastas(){
    	return $this->hasMany('App\Pasta');
    }
    public function categorias(){
        return $this->hasMany('App\Categoria');
    }
    public function pontuacoes(){
        return $this->hasMany('App\HistoricoPontuacao');
    }
}
