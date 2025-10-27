<?php

namespace App\View\Components\Layouts;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class menuItem extends Component
{
    public string $href;
    public string $icon;
    public bool $active;
    public string $label;

    /**
     * Create a new component instance.
     */
    public function __construct(string $href = '#', string $icon = 'bi bi-circle', bool $active = false, string $label = '')
    {
        $this->href = $href;
        $this->icon = $icon;
        $this->active = $active;
        $this->label = $label;
    }


    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.layouts.menu-item');
    }
}
