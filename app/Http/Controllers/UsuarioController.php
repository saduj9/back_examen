<?php

namespace App\Http\Controllers;

use App\usuario;
use App\traits\ApiResponser;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;

class UsuarioController extends Controller
{
    use ApiResponser;
    public $usuario;

    public function __construct()
    {
        $this->usuario = new usuario();
        $this->tabla = $this->usuario->getTable();
    }

    public function ListarUsuarios(Request $request){

        $user = usuario::where('estadousuario','A')->get();

        return $this->successResponse($user, Response::HTTP_CREATED);
    }

}