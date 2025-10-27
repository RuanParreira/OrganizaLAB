<?php

namespace App\View\Components\Home;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class cards extends Component
{
    public string $label;
    public string $description;
    public string $icon;
    /**
     * Create a new component instance.
     */
    public function __construct(string $label, string $description, string $icon)
    {
        $this->label = $label;
        $this->description = $description;
        $this->icon = $icon;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.home.cards');
    }
}
