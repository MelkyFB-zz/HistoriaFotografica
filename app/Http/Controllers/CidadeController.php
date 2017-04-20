<?php

namespace App\Http\Controllers;

use App\Cidade;

class CidadeController extends Controller {
	public function typeahead() {
		$cidades    = Cidade::all();
		$arrCidades = [];
		foreach ($cidades as $cidade) {
			$txcid = $cidade->nome." - ".$cidade->estado()->get()->first()->estado;
			$cid   = array("id" => $cidade->id, "name" => $txcid);
			array_push($arrCidades, $cid);
		}
		return $arrCidades;
	}
}
