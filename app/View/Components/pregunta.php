<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class pregunta extends Component
{

    public $codigo_pregunta; 
    public $titulo_pregunta;
 

    public function __construct($codigo_pregunta, $titulo_pregunta)
    {
        $this->codigo_pregunta = $codigo_pregunta;
        $this->titulo_pregunta = $titulo_pregunta;

    }   
    

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.pregunta');
    }
}
