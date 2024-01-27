<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FormularioController extends Controller
{
    public function index()
    {
        return view('formulario');
    }

    public function store(Request $request)
    {
        $request->validate([
            'flexRadioDefault1' => 'required',
        ]);

        echo 'Formulario enviado com sucesso!';
    }
}

