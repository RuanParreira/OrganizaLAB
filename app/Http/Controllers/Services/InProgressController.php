<?php

namespace App\Http\Controllers\Services;

use App\Http\Controllers\Controller;
use App\Models\Service;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class InProgressController extends Controller
{
    public function index()
    {
        /** @var \App\Models\User $user */
        $user = Auth::user();
        $services = $user->services()
            ->where('status', 1)
            ->with('client:id,name,number')
            ->latest('entry_date')
            ->get();
        return view('services.inprogress', compact('services'));
    }

    public function updateStatus(Request $request, Service $service)
    {
        abort_unless($service->user_id === $request->user()->id, 403);

        if ((int)$service->status !== 1) {
            return redirect()
                ->route('services.inprogress')
                ->with('error', 'Transição de status inválida.');
        }

        $service->status = 2;
        $service->save();

        return redirect()->route('services.inprogress');
    }
}
