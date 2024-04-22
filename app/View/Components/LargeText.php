<?php

namespace App\View\Components;

use Closure;
use Illuminate\View\Component;
use Illuminate\Contracts\View\View;

class LargeText extends Component
{
    /**
     * Create a new component instance.
     */
    public $text1;
    public $text2;
    public $text3;

    public function __construct($text1 = "", $text2 = "", $text3 = "")
    {
        $this->text1 = $text1;
        $this->text2 = $text2;
        $this->text3 = $text3;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.large-text');
    }
}
