<?php

namespace App\View\Components\Clients;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\Component;

class cards extends Component
{

    public $clients;
    /**
     * Create a new component instance.
     */
    public function __construct($clients)
    {
        $this->clients = $clients;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {

        return view('components.clients.cards');
    }
}
