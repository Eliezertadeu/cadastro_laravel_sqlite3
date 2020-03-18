<?php

namespace App\Model;

use Carbon\Carbon;
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
        DB::enableQueryLog();
        self::select([
            "id",
            "nome",
            "email",
            "password",
            "data_cadastro"
        ])->limit($limite);
        dd(DB::getQueryLog());
    }

    public static function cadastrar(Request $request)
    {
        DB::enableQueryLog();
        self::insert([
            "nome" => $request->input('nome'),
            "email" => $request->input('email'),
            "password" => Hash::make($request->input('password')),
            "data_cadastro" => new Carbon()
        ]);
        dd(DB::getQueryLog());
    }
}
