<?php

namespace App\Http\Controllers;

use App\Http\Requests\Clients\RegisterRequest;
use App\Models\Client;
use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Support\Facades\Auth;

class ClientController extends Controller
{
    use AuthorizesRequests;

    public function index()
    {
        /** @var \App\Models\User $user */
        $user = Auth::user();

        $clients = $user->clients()
            ->select()
            ->latest('created_at')
            ->paginate(15);

        return view('clients.registerclient', compact('clients'));
    }

    public function store(RegisterRequest $request)
    {
        $data = $request->validated();
        $request->user()->clients()->create($data);
        return redirect()->route('clients');
    }


    public function destroy(Request $request, Client $client)
    {
        $this->authorize('delete', $client);

        $client->delete();

        return redirect()->route('clients')->with('success', 'Cliente deletado com sucesso!');
    }

    public function update(RegisterRequest $request, Client $client)
    {
        $this->authorize('update', $client);

        $data = $request->validated();
        $client->update($data);

        return redirect()->route('clients')->with('success', 'Cliente atualizado com sucesso!');
    }
}
