<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TareaController;

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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get("/listar",[TareaController::class,"listar"]);

Route::post("/insertar",[TareaController::class,"insertar"]);

Route::put("/modificar/{d}",[TareaController::class,"modificar"]);

Route::delete("/eliminar/{d}",[TareaController::class,"eliminar"]);