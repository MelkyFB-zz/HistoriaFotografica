<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TabelaPontuacao extends Model
{
    public function pontuacoes(){
    	return $this->hasMany('App\HistoricoPontuacao');
    }
}
