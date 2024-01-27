<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class pregunta extends Component
{
    /**
     * Create a new component instance.
     */

    public $questionNumber; 
    public $questionText;
    public $name; 

    public function __construct($questionNumber, $questionText, $name)
    {
        $this->questionNumber = $questionNumber;
        $this->questionText = $questionText;
        $this->name = $name;
    }   
    

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.pregunta');
    }
}
