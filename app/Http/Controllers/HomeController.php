<?php

namespace App\Http\Controllers;

use App\Estado;
use App\Cidade;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller {
	/**
	 * Create a new controller instance.
	 *
	 * @return void
	 */
	public function __construct() {
		//$this->middleware('auth');
	}

	/**
	 * Show the application dashboard.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function index(Request $request) {
		$cidade_selecionada = "";
		if ($request->input('cidade')) {
			if(Cidade::find($request->input('cidade')))
				$cidade_selecionada = Cidade::find($request->input('cidade'));
		}
		if (Auth::check()) {
			$user = Auth::user();
		}
		$estados = Estado::all();
		return view('home', compact('estados', 'user','cidade_selecionada'));
	}
}
