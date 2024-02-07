<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class profesionUsuarioController extends Controller
{
    public function index()
    {
        $R = DB::table('respuestas')
        ->join('tipo_respuestas', 'respuestas.tipo_respuesta_id', '=', 'tipo_respuestas.id')
        ->whereIn('respuestas.codigo_respuesta', [1, 7])
        ->sum('tipo_respuestas.valor_tipo_respuesta');

        $A = DB::table('respuestas')
        ->join('tipo_respuestas', 'respuestas.tipo_respuesta_id', '=', 'tipo_respuestas.id')
        ->whereIn('respuestas.codigo_respuesta', [2, 8])
        ->sum('tipo_respuestas.valor_tipo_respuesta');

        $I = DB::table('respuestas')
        ->join('tipo_respuestas', 'respuestas.tipo_respuesta_id', '=', 'tipo_respuestas.id')
        ->whereIn('respuestas.codigo_respuesta', [3, 9])
        ->sum('tipo_respuestas.valor_tipo_respuesta');

        $S = DB::table('respuestas')
        ->join('tipo_respuestas', 'respuestas.tipo_respuesta_id', '=', 'tipo_respuestas.id')
        ->whereIn('respuestas.codigo_respuesta', [4, 10])
        ->sum('tipo_respuestas.valor_tipo_respuesta');

        $E = DB::table('respuestas')
        ->join('tipo_respuestas', 'respuestas.tipo_respuesta_id', '=', 'tipo_respuestas.id')
        ->whereIn('respuestas.codigo_respuesta', [5, 11])
        ->sum('tipo_respuestas.valor_tipo_respuesta');

        $C = DB::table('respuestas')
        ->join('tipo_respuestas', 'respuestas.tipo_respuesta_id', '=', 'tipo_respuestas.id')
        ->whereIn('respuestas.codigo_respuesta', [6, 12])
        ->sum('tipo_respuestas.valor_tipo_respuesta'); 
        
        return view('profesionUsuario', ['data' => [$R, $A, $I, $S, $E, $C]]);
    }
}
