@extends('layouts.default')
@section('title', 'Registrar Serviço')
@section('content')
    <x-title title="Serviços - Não Iniciados" subtitle="Lista de serviços que ainda não foram iniciados" icon="bi bi-clock" />
    <div class="grid grid-cols-4">
        @foreach ($services as $service)
            <div class="flex flex-col gap-1 p-4 mb-4 border border-gray-300 rounded">
                <span>
                    {{ $service->client->name }} — {{ $service->equipment }}
                </span>
                <span>
                    {{ $service->client->number }}
                </span>
                <span>
                    {{ $service->defect }}
                </span>
                <span>
                    {{ $service->entry_date }}
                </span>
                <form action="{{ route('services.start', $service) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <button type="submit" class="px-4 py-2 text-white bg-blue-500 rounded hover:bg-blue-600">
                        Iniciar Serviço
                    </button>
                </form>
            </div>
        @endforeach
    </div>
@endsection
