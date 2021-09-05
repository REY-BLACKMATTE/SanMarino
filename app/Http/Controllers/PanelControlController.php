<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use App\Http\Controllers\ConnectionMasterController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Session;
use PDO;
use Exception;

class PanelControlController extends Controller
{
  /**
   * Display a listing of the resource.
   *
   * @return \Illuminate\Http\Response
   */
   public function __construct()
  {
    $this->middleware('auth');
  }

  /**
   * Show the application dashboard to the user.
   *
   * @return Response
   */

  public function index()
  {
         return view('catalogos.admin.panelControl');
  }

   public static function ejecutar($conn, $sql)
   {
       $data = $conn->query($sql)->fetchAll(PDO::FETCH_OBJ);
       return $data;
   }

   public function setTheme(Request $request){

     $conn = ConnectionMasterController::conexionMasterDB(Session::get('email'), Session::get('password_AD'));
     if (is_string($conn)) {
         return view('layouts.errors')->with('error', $conn);
     } else {
         try {



           $conn = ConnectionMasterController::conexionMasterDB(Session::get('email'),Session::get('password_AD'));
           if(is_string($conn)){
             return view('layouts.errors')->with('error', $conn);
           }
           $conn->beginTransaction();

           $colorSelected = $request->input('dataColor');
           $id = Session::get('id');

           $updateTheme = "UPDATE usuarios set skin = '{$colorSelected}' where id = {$id}";

           $dataUpdate = $conn->query($updateTheme);
           $conn->commit();

           $cadena = explode("@",$colorSelected);

           Session::put('aside', $cadena[0]);
           Session::put('nav', $cadena[1]);
           Session::put('sello', $cadena[2]);

           return response()->json(
             [
               'message' => 'La configuración ha sido aplicada correctamente',
               'status' => 200,
               'type' => 'success'
             ]
           );

         } catch (\Exception $e) {
           $conn->rollBack();
           $code = $e->getMessage();
           return response()->json(
             [
               'message' => $code,
               'status' => 500,
               'type' => 'error'
             ]
           );
         }
     }
   }

  }
