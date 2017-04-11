<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Intervention\Image\ImageManager;

use App\Estado;
use App\User;

class PerfilController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function perfil(){
    	$user = Auth::user();
    	$estados = Estado::all();
    	$perfil = $user->perfil()->get()->first();
    	return view('perfil',compact('user','estados','perfil'));
    }
    public function update(Request $request){
    	$nome = $request->input('nome');
    	$sobrenome = $request->input('sobrenome');
    	$email = $request->input('email');
    	$bio = $request->input('bio');
    	$password = $request->input('senha');
    	$user = Auth::user();
    	$perfil = $user->perfil()->get()->first();
    	if(!empty($password)){
			if(bcrypt($password)!=$user->password)
				$user->password = bcrypt($password);
		}
		$user->email = $email;
		$user->name = $nome." ".$sobrenome;
		$user->save();
		$perfil->nome = $nome;
		$perfil->sobrenome = $sobrenome;
		$perfil->bio = $bio;
		$perfil->save();
		return redirect('/verperfil/me/');
    }
    public function verPerfil($id){
        if($id=='me')
            $user = Auth::user();
        else
            $user = User::find($id);
        $perfil = $user->perfil()->get()->first();
        $estados = Estado::all();
        return view('verperfil',compact('user','perfil','estados'));
    }
    public function perfilfoto(){
        $user = Auth::user();
        $perfil = $user->perfil()->get()->first();
        $estados = Estado::all();
        return view('perfilfoto',compact('user','perfil','estados'));
    }
    public function atualizarfoto(Request $request){
        $user = Auth::user();
        $perfil = $user->perfil()->get()->first();
        if($request->file('arquivo_foto')->isValid()){
            $foto = $request->file('arquivo_foto')->store('public/images');
            Image::make($foto)->resize(200, 200)->save($foto);
            $perfil->caminho_foto = "/storage/".substr($foto,6);
            $perfil->save();
        }
        return redirect('/verperfil/me/');
    }
}
