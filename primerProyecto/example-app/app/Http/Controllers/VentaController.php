<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Venta;


class VentaController extends Controller
{
    public function mostrarAllVentas(){
        return Venta::All();
    }

    public function mostrarVentaById($id){
        return Venta::find($id);
    }

    public function addVenta(Request $request){
        $Venta =new Venta();
        $Venta->precio = $request->input('precio');
        $Venta->IdAuto = $request->input('IdAuto');
        $Venta->IdCliente = $request->input('IdCliente');
        $Venta->save();
        $response = ['msg' => 'auto agregado'];
        return json_encode($response);
    }
    public function deleteVentaByid($id){
        Venta::destroy($id);
         return json_encode(['msg'=>'venta eliminada']);

    }
   
    public function updateVentaById(Request $request,$id){
     
      $precio = $request->input('precio');
        $IdAuto = $request->input('IdAuto');
        $IdCliente = $request->input('IdCliente');
     
        Venta::Where('id',$id)->update(
            ['precio'=>$marca,
             'IdAuto'=>$modelo,
             'IdCliente'=>$año
           ]
        );
        return json_encode(['msg'=>'update venta']);
    }
}
