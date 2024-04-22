<?php

namespace App\View\Components;

use Closure;
use Illuminate\View\Component;
use Illuminate\Contracts\View\View;

class CustomLi extends Component
{
    /**
     * Create a new component instance.
     */
    public $text1;

    public function __construct($text1)
    {
        $this->text1 = $text1;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.custom-li');
    }
}
