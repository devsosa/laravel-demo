<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class productosController extends Controller
{
    public function index(){
        //echo "Hola Mundo desde el Controller";
        return view('productos');
    }
    
    public function crear(){
        return view('crear');
    }

    public function dataForm(Request $request){
        return $request->input('txtName');
    }

    public function mostrar(){
        echo "Metodo mostrar";
    }
}
