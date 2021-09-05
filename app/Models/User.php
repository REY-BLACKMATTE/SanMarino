<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use DB;
use Log;
use App\Models\Direccion;


class User extends Authenticatable
{
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public static function guardarDatosUsuario(Request $request)
    {
        //dd($request);
        //$input    = json_decode($request->data);
        /*$cel      = $input->celular;
      $quitar   = array("(", ")", "-");
      $celular  = str_replace($quitar, "", $cel);
      $tel      = $input->telefono;
      $telefono = str_replace($quitar, "", $tel);
      $message  = "";
      $elementos = 0;
      $ctz      = $input->idPersona;*/

        try {
            DB::beginTransaction();
            /*if($input->typeEdition == 0){
           $persona                = new Citizen;
        } elseif($input->typeEdition = 1){
           $persona                = Citizen::find($input->idPersona);
        }*/
            $user                   = new User;
            $user->usuario_id       = $request->usuarioModal;
            $user->email            = $request->correoModal;
            $user->name             = $request->nombreModal;
            $user->apellido_paterno = $request->apellidoPModal;
            $user->apellido_materno = $request->apellidoMModal;
            $user->password         = Hash::make($request->contraseñaModal);
            $user->password_confirm = Hash::make($request->contraseñaConfirmarModal);
            $user->estatus          = $request->estatusModal;
            $user->created_user     = Auth::user()->id;

            //$user->fotoPerfil       = $input->fotoPerfil;

            $user->save();


            $id = $user->id;

            $direccion = new Direccion;
            $direccion->id_usuario            = $user->id;
            $direccion->calle                 = $request->calleModal;
            $direccion->numero_exterior       = $request->numExteriorModal;
            $direccion->numero_interior       = $request->numInteriorModal;

            $direccion->save();
            DB::commit();
            /*if($input->typeEdition == 0){
           $id = $persona->id;
           $message = response()->json(['success'=>$id,'redirect'=> session('urlFilter')]);
         } else {
           $message = response()->json(['success'=>$input->idPersona,'redirect'=> session('urlFilter')]);
         }*/
            //  $message = response()->json(['success'=>$id]);
            $response = "Usuario registrado correctamente.";
        } catch (\Exception $e) {
            DB::rollback();
            Log::info($e);
            $response = "error";
        }

        return $response;
    }

    public static function listarUsuarios(Request $request)
    {

        $user->usuario_id       = $request->usuarioModal;

        $users = DB::table('users')
            ->select(DB::raw('id, usuario_foto, usuario_id, name, apellido_paterno, apellido_materno, email, estatus'))
            ->get();
        return $users;
    }
}
