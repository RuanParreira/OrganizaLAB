<?php

namespace App\Http\Controllers\Services;

use App\Http\Controllers\Controller;
use App\Models\Service;
use Illuminate\Http\Request;

class NotStartedController extends Controller
{
    public function index(Request $request)
    {
        $services = $request->user()
            ->services()
            ->where('status', 0)
            ->with('client:id,name,number')
            ->latest('entry_date')
            ->get();
        return view('services.notstarted', compact('services'));
    }

    public function updateStatus(Request $request, Service $service)
    {
        abort_unless($service->user_id === $request->user()->id, 403);

        if ((int)$service->status !== 0) {
            return redirect()
                ->route('services.notstarted')
                ->with('error', 'Transição de status inválida.');
        }

        $service->status = 1;
        $service->save();

        return redirect()->route('services.notstarted');
    }
}
