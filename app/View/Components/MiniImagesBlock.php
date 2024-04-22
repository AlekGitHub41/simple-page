<?php

namespace App\View\Components;

use Closure;
use Illuminate\View\Component;
use Illuminate\Contracts\View\View;

class MiniImagesBlock extends Component
{
    public $text1;
    public $text2;

    /**
     * Create a new component instance.
     */

    public function __construct($text1 = "", $text2 = "")
    {
        $this->text1 = $text1;
        $this->text2 = $text2;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.mini-images-block');
    }
}
