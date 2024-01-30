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

        $rules = []; 

        for($i = 1; $i <= 60 ; $i++) {
            $rules["flexRadioDefault$i"] = 'required';
        }

        $request->validate($rules);

        echo 'Formulario enviado com sucesso!';
    }
}

