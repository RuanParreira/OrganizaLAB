<?php

namespace App\Http\Controllers\Services;

use App\Http\Controllers\Controller;
use App\Models\Service;
use Illuminate\Http\Request;

class readyController extends Controller
{
    public function index(Request $request)
    {
        $services = $request->user()
            ->services()
            ->where('status', 2)
            ->with('client:id,name,number')
            ->latest('entry_date')
            ->get();
        return view('services.ready', compact('services'));
    }

    public function updateStatus(Request $request, Service $service)
    {
        abort_unless($service->user_id === $request->user()->id, 403);

        if ((int)$service->status !== 2) {
            return redirect()
                ->route('services.ready')
                ->with('error', 'Transição de status inválida.');
        }

        $service->status = 3;
        $service->save();

        return redirect()->route('services.ready');
    }
}
