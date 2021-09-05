<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use DB;
use Log;
use App\Providers\RouteServiceProvider;
use Illuminate\Contracts\Session\Session as SessionSession;
use Illuminate\Support\Facades\Auth;
use Session;

class UsuarioController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('usuarios');
    }

    //Guardamos la info por ajax
    public function guardarUsuario(Request $request){
        //dd($request);
        $response = User::guardarDatosUsuario( $request );

        //return response()->json(['result'=>$response]); p
        Session::flash('success', $response);
        //$sqlSelect = "SELECT * FROM usuarios ORDER BY id DESC";

        $data = User::listarUsuarios();
        return view('usuarios')->with('users', $data);
    }

    public function listarUsuarios(Request $request)
    {
        $data = User::listarUsuarios($request);
        return view('usuarios')->with('usuarios', $data);
    }
}
