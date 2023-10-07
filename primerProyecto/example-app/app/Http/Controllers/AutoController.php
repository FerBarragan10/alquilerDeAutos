<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Auto;


class AutoController extends Controller
{
    public function mostrarAllAutos(){
        return Auto::All();
    }

    public function mostrarAutoById($id){
        return Auto::find($id);
    }

    public function addAuto(Request $request){
        $auto =new Auto();
        $auto->marca = $request->input('marca');
        $auto->modelo = $request->input('modelo');
        $auto->año = $request->input('año');
        $auto->color = $request->input('color');
        $auto->precio = $request->input('precio');
        $auto->save();
        $response = ['msg' => 'auto agregado'];
        return json_encode($response);
    }
    public function deleteAutoByid($id){
        Auto::destroy($id);
         return json_encode(['msg'=>'auto eliminado']);

    }
   
    public function updateAutoById(Request $request,$id){
     
      $marca = $request->input('marca');
        $modelo = $request->input('modelo');
        $año = $request->input('año');
        $color = $request->input('color');
        $precio = $request->input('precio');
        Auto::Where('id',$id)->update(
            ['marca'=>$marca,
             'modelo'=>$modelo,
             'año'=>$año,
             'color'=>$color,
             'precio'=>$precio]
        );
        return json_encode(['msg'=>'update Auto']);
    }
}
