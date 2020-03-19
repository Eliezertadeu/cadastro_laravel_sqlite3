<?php

namespace App\Model;

use Carbon\Carbon;
use Error;
use Exception;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class Usuario extends Model
{

    protected $connection = 'sqlite';
    protected $table = 'usuarios';

    public static function listar(int $limite)
    {
        $sql = self::select([
            "nome",
            "email",
            "data_cadastro"
        ])->limit($limite)->get();

        return $sql;
    }

    public static function cadastrar(Request $request)
    {
        try{
            return self::insert([
                "nome" => $request->input('nome'),
                "email" => $request->input('email'),
                "password" => Hash::make($request->input('password')),
                "data_cadastro" => new Carbon()
            ]);
        }catch(Exception $err){
            return $err->getMessage();
        }
    }
}
