<?php

namespace App\Http\Controllers\Services;

use App\Http\Controllers\Controller;
use App\Http\Requests\Services\CreateService;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    public function index(Request $request)
    {
        $clients = $request->user()
            ->clients()
            ->select('id', 'name')
            ->orderBy('name')
            ->get();
        return view('services.registerservice', compact('clients'));
    }

    public function store(CreateService $request)
    {
        $data = $request->validated();
        $request->user()->services()->create($data);
        return redirect()->route('services.create');
    }
}
