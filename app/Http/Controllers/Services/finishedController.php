<?php

namespace App\Http\Controllers\Services;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class finishedController extends Controller
{
    public function index(Request $request)
    {
        $services = $request->user()
            ->services()
            ->where('status', 3)
            ->with('client:id,name,number')
            ->latest('entry_date')
            ->get();
        return view('services.finished', compact('services'));
    }
}
