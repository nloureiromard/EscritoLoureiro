<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tarea;

class TareaController extends Controller
{
    public function listar(Request $request){
        return Tarea::all();
    }


    public function insertar(Request $request){
        $tarea = new Tarea;
        $tarea -> titulo = $request -> post("titulo");
        $tarea -> contenido = $request -> post("contenido");
        $tarea -> estado = $request -> post("estado");
        $tarea -> autor = $request -> post("autor");

        $tarea -> save();

        return $tarea;
    }

    public function modificar(Request $request, $idTarea){
        $tarea = Tarea::findOrFail($idTarea);
        $tarea -> titulo = $request -> post("titulo");
        $tarea -> contenido = $request -> post("contenido");
        $tarea -> estado = $request -> post("estado");
        $tarea -> autor = $request -> post("autor");
        $tarea -> save();
        return $tarea;

    }

    public function eliminar(Request $request, $idTarea){
        $tarea = Tarea::findOrFail($idTarea);
        $tarea -> delete();

        return [ "mensaje" => "Tarea $idTarea eliminada."];

    }


}