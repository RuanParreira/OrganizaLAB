@if ($type === 1)
    <a href="{{ $href }}"
        class="col-span-2 md:col-span-1 bg-zinc-700/40 border border-gray-400/30 rounded-xl px-6 py-3 shadow-lg shadow-black/20">
        <div class="flex items-center justify-between mb-2">
            <span class="text-gray-400">{{ $title }}</span>
            <i class="{{ $icon }} text-2xl text-violet-500"></i>
        </div>
        <p class="text-3xl font-bold">
            {{ $services->where('status', $status)->count() }}
        </p>
        <span class="text-violet-500 text-sm">
            Serviços
        </span>
    </a>
@elseif ($type === 2)
    <a href="{{ $href }}"
        class="bg-zinc-700/40 border border-gray-400/30 rounded-xl px-6 py-3 col-span-2 shadow-lg shadow-black/20">
        <div class="flex items-center justify-between mb-2">
            <span class="text-gray-400">{{ $title }}</span>
            <i class="{{ $icon }} text-2xl text-violet-500"></i>
        </div>
        <p class="text-3xl font-bold">
            {{ $clients->count() }}
        </p>
        <span class="text-violet-500 text-sm">
            Total de clientes no sistema
        </span>
    </a>
@elseif ($type === 3)
    <a href="{{ $href }}"
        class="bg-zinc-700/40 border border-gray-400/30 rounded-xl px-6 py-3 col-span-2 shadow-lg shadow-black/20">
        <div class="flex items-center justify-between mb-2">
            <span class="text-gray-400">{{ $title }}</span>
            <i class="{{ $icon }} text-2xl text-violet-500"></i>
        </div>
        <p class="text-3xl font-bold">
            {{ $services->count() }}
        </p>
        <span class="text-violet-500 text-sm">
            Serviços cadastrados no sistema
        </span>
    </a>
@elseif ($type === 4)
    <div class="bg-zinc-700/40 border border-gray-400/30 rounded-xl p-6 shadow-lg shadow-black/20">
        <h2 class="text-xl font-semibold ">
            {{ $title }}
        </h2>
        <p class="text-violet-500 text-sm mb-4">
            Os 5 serviços mais recentes cadastrados no sistema
        </p>
        <div class="space-y-2">
            @forelse ($lastServices as $service)
                <div
                    class="flex items-center justify-between p-4 bg-background rounded-lg border bg-zinc-800 border-gray-400/30">
                    <div class="w-full">
                        <p>
                            {{ $service->client->name }}
                        </p>
                        <p class="text-sm text-gray-400">
                            {{ $service->equipment }} - {{ $service->defect }}
                        </p>
                    </div>
                    <div class="flex flex-col items-center w-32 text-center">
                        <p class="text-sm text-gray-400">
                            {{ $service->entry_date->format('d/m/Y') }}
                        </p>
                        @if ($service->status === 0)
                            <span class="text-sm text-gray-500 bg-gray-300/10 px-3  rounded-full w-full">
                                Não Iniciado
                            </span>
                        @elseif ($service->status === 1)
                            <span class="text-sm text-blue-500 bg-blue-300/10 px-3 rounded-full w-full">
                                Em Progresso
                            </span>
                        @elseif ($service->status === 2)
                            <span class="text-sm text-green-500 bg-green-300/10 px-3 rounded-full w-full">
                                Pronto
                            </span>
                        @elseif ($service->status === 3)
                            <span class="text-sm text-violet-500 bg-violet-300/10 px-3 rounded-full w-full">
                                Finalizado
                            </span>
                        @endif
                    </div>

                </div>
            @empty
                <p class="text-lg text-gray-400 text-center py-8">
                    Nenhum serviço cadastrado ainda.
                </p>
            @endforelse
        </div>
    </div>
@endif
