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
            $foto_caminho = $request->file('arquivo_foto')->store('public/images/'.date('Ymd'));
            $foto = new Foto();
            $foto->hash_foto = sha1_file(storage_path()."/app/".$foto_caminho);
            $foto->caminho_foto = "/storage/".substr($foto_caminho, 6);
            $try_foto = Foto::find('hash_foto','=',$foto->hash_foto)->get();
            if(count($try_foto)){
                Storage::delete("public/".substr($foto->caminho_foto, 10));
                $foto->caminho_foto = $try_foto->caminho_foto;
            }
         }  
    }
}
