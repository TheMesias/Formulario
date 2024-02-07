<?php

namespace App\Http\Controllers;

use App\Models\Respuesta;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class FormularioController extends Controller
{
    public function index()
    {
        $preguntas = DB::select('select * from preguntas where activo_pregunta = 1');
        $tipo_respuestas = DB::select('select * from tipo_respuestas');
        return view('formulario', ['preguntas' => $preguntas], ['tipo_respuestas' => $tipo_respuestas]);
    }

    public function store(Request $request)
    {

        $rules = []; 

        $rules = [
            'nombre' => 'required',
            'apellido' => 'required',
            'celular' => 'required|numeric|digits:10',
        ];

        for($i = 1; $i <= 12 ; $i++) {
            $rules["respuesta_IPPJ_$i"] = 'required';
        }

        $request->validate($rules);


        // Guardar las respuestas
        for($i = 1; $i <= 12 ; $i++) {
            $respuesta = new Respuesta;
            $respuesta->codigo_respuesta = $i;
            $respuesta->pregunta_id = $request->input("pregunta_id_IPPJ_$i");
            $respuesta->tipo_respuesta_id = $request->input("respuesta_IPPJ_$i");
            $respuesta->nombre = $request->input("nombre");
            $respuesta->apellido = $request->input("apellido");
            $respuesta->celular = $request->input("celular");
            $respuesta->save();
        } 

        return redirect()->route('profesionUsuario');
    }
}

