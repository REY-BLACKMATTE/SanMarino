<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Providers\RouteServiceProvider;
use DB;
use App\Models\TipoPago;
use Log;

class PagosController extends Controller
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
        return view('pagos');
    }


    public function crearPago(Request $request)
    {
        $tipoPago       = TipoPago::all();
       

        return view('altapago')
            ->with('tiposPago', $tipoPago);
    }


}
