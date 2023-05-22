<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cliente;

class ClienteController extends Controller
{
    public function index(){
        return Cliente::All();
    }

    public function mostrarClienteById($id){
        return Cliente::find($id);
    }

    public function addCliente(Request $request){
        $cliente =new Cliente();
        $cliente->nombre = $request->input('nombre');
        $cliente->apellido = $request->input('apellido');
        $cliente-> direccion = $request->input('direccion');
        $cliente->telefono = $request->input('telefono');
        $cliente->email = $request->input('email');
        $cliente->save();
        $response = ['msg' => 'cliente agregado'];
        return json_encode($response);
    }
    public function deleteClienteByid($id){
         Cliente::destroy($id);
         return json_encode(['msg'=>'cliente eliminado']);

    }
   
    public function updateClienteById(Request $request,$id){
      $nombre = $request->input('nombre');
        $apellido = $request->input('apellido');
        $direccion = $request->input('direccion');
        $telefono = $request->input('telefono');
        $email = $request->input('email');
        Cliente::Where('id',$id)->update(
            ['nombre'=>$nombre,
             'apellido'=>$apellido,
             'direccion'=>$direccion,
             'telefono'=>$telefono,
             'email'=>$email]
        );
        return json_encode(['msg'=>'update cliente']);
    }
}
