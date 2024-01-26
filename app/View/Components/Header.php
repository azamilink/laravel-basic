<?php

namespace App\View\Components;

use Closure;
use Illuminate\View\Component;
use Illuminate\Contracts\View\View;

// 5. Component
class Header extends Component
{
    public $name;
    public $fruits;
    /**
     * Create a new component instance.
     */
    public function __construct($name, $fruits)
    {
        $this->name = $name;
        $this->fruits = $fruits;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.header');
    }
}
