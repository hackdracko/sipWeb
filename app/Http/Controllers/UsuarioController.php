<?php

namespace App\Http\Controllers;

use App\Usuario;
use Illuminate\Http\Request;

use App\Http\Requests;

class UsuarioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
    public function login(Request $request)
    {
        $userResponse = $request->user;
        $passwordResponse = $request->password;
        $user = Usuario::where('usuario', $userResponse)
                        ->where('password', $passwordResponse)
                        ->where('activo', '1')
                        ->get();
        $resultado = array();
        if($user->first()){
            $resultado["status"]="ok";
            foreach($user as $user){
                $resultado["data"][] = array(
                                "id" => $user->id,
                                "idAsesor" => $user->idAsesor,
                                "usuario" => $user->usuario,
                                "password" => $user->password,
                                "administrador" => $user->administrador,
                                "activo" => $user->activo,
                                "fechaExpiracion" => $user->fechaExpiracion
                            );
            }
            $resultado["msj"]="Si existen datos";
        }else{
            $resultado["status"]="fail";
            $resultado["data"][] = array(
                "id" => '',
                "idAsesor" => '',
                "usuario" => '',
                "password" => '',
                "administrador" => '',
                "activo" => '',
                "fechaExpiracion" => ''
            );
            $resultado["msj"]="No existen datos";
        }
        return json_encode($resultado);
    }
    public function token(){
        echo csrf_token();
    }
}
