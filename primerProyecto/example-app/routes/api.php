<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClienteController;
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
//aca se forman todas las rutas con la cual vamos a ser llamados desde postman y/o frontend

route::get('/cliente',[ClienteController::class,'index']);
route::get('/cliente/{id}',[ClienteController::class,'mostrarClienteByid']);
route::post('/cliente',[ClienteController::class,'addCliente']);
route::delete('/cliente/{id}',[ClienteController::class,'deleteClienteByid']);
route::put('/cliente/{id}',[ClienteController::class,'updateClienteByid']);