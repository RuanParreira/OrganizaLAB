<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class title extends Component
{
    public string $title;
    public ?string $subtitle;
    public string $icon;
    public string $size;
    public function __construct(string $title, ?string $subtitle = null, string $icon, string $size = '3xl')
    {
        $this->title = $title;
        $this->subtitle = $subtitle;
        $this->icon = $icon;
        $this->size = $size;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.title');
    }
}
