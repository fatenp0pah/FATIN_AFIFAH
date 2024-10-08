<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class NavLink extends Component
{
    public $active;

    public function __construct($active = false)
    {
        $this->active = $active;
    }

    public function render(): View|Closure|string
    {
        return view('components.nav-link');
    }
}
