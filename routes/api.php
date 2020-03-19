<?php

use App\Model\Usuario;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Symfony\Component\HttpFoundation\Response as HttpFoundationResponse;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::prefix('v1')->group(function () {
    Route::get('lista', function () {
        return Usuario::listar(10);
    });
    Route::post('cadastra', function (Request $request) {
        if (Usuario::cadastrar($request)) {
            return HttpFoundationResponse::create('', 201, []);
        } else {
            return response('falha', 400);
        }
    });
});
