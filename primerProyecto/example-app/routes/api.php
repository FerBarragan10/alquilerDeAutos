<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClienteController;
use App\Http\Controllers\AutoController;
use App\Http\Controllers\VentaController;


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


route::get('/auto',[AutoController::class,'mostrarAllAutos']);
route::get('/auto/{id}',[AutoController::class,'mostrarAutoByid']);
route::post('/auto',[AutoController::class,'addAuto']);
route::delete('/auto/{id}',[AutoController::class,'deleteAutoByid']);
route::put('/auto/{id}',[AutoController::class,'updateAutoByid']);


route::get('/venta',[VentaController::class,'mostrarAllVentas']);
route::get('/venta/{id}',[VentaController::class,'mostrarVentasByid']);
route::post('/venta',[VentaController::class,'addVenta']);
route::delete('/venta/{id}',[VentaController::class,'deleteVentaByid']);
route::put('/venta/{id}',[VentaControllerdc::class,'updateVentaByid']);