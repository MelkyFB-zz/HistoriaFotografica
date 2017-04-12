<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

use App\Foto;
use App\User;
use App\Perfil;
use App\Estado;

class FotoController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index(){
    	$user = Auth::user();
    	$estados = Estado::all();
    	return view('subirfoto',compact('user','estados'));
    }
    public function subirfoto(Request $request){
    	if($request->file('arquivo_foto')->isValid()){
            $foto
             = $request->file('arquivo_foto')->store('public/images/'.date('Ymd'));
         }
    }
}
