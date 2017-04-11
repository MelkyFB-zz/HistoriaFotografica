<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Estado;
use App\Cidade;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //$this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if(Auth::check()){
            $user = Auth::user();;
            if(!empty($request->input('cidade')))
                $cidade_selecionada = Cidade::find($request->input('cidade'))->get()->first();
            else
                return redirect('/?cidade=1');
        }

        $estados = Estado::all();
        return view('home',compact('estados','cidade_selecionada','user'));
    }
}
