<?php

namespace App\View\Components\Dashboard;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;
use Illuminate\Support\Facades\Auth;

class cards extends Component
{
    public ?string $href;
    public string $title;
    public ?int $status;
    public ?string $icon;
    public int $type;

    /**
     * Create a new component instance.
     */
    public function __construct(
        ?string $href,
        string $title,
        ?string $icon,
        int $type,
        ?int $status = null
    ) {
        $this->href = $href;
        $this->title = $title;
        $this->status = $status;
        $this->icon = $icon;
        $this->type = $type;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        /** @var \App\Models\User $user */
        $user = Auth::user();

        $services = $user->services()
            ->select('id', 'status')
            ->get();

        $clients = $user->clients()
            ->select('id', 'name')
            ->orderBy('name')
            ->get();

        $lastServices = $user->services()
            ->with('client:id,name')
            ->latest('created_at')
            ->take(5)
            ->get();

        return view('components.dashboard.cards', compact('services', 'clients', 'lastServices'));
    }
}
