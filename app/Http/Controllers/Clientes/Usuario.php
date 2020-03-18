<?php

namespace App\Http\Controllers\Clientes;

use App\Http\Controllers\Controller;
use App\Model\Usuario as ModelUsuario;
use Illuminate\Http\Request;

class Usuario extends Controller
{
    public function cadastrar()
    {
        return view('usuarios.cadastros');
    }

    public function salvar(Request $request)
    {
        $request->validate([
            "nome" => "required|min:5",
            "email" => "required|email",
            "password" => "required|min:5"
        ]);

        ModelUsuario::cadastrar($request);

        dd($request->all());
    }
}
