@extends('layouts.default')
@section('title', 'Registrar Serviço')
@section('content')
    <x-title title="Registrar Serviço" subtitle="Cadastre novos serviços no sistema" icon="bi bi-clipboard-plus" />
    <div class="container">

        <form action="{{ route('services.store') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label for="client_id" class="form-label">Cliente</label>
                <select class="form-select" id="client_id" name="client_id" required>
                    <option value="">Selecione um cliente</option>
                    @foreach ($clients as $client)
                        <option value="{{ $client->id }}">{{ $client->name }}</option>
                    @endforeach
                </select>
            </div>
            <div class="mb-3">
                <label for="equipment" class="form-label">Equipamento</label>
                <input type="text" class="form-control" id="equipment" name="equipment" required>
            </div>

            <div class="mb-3">
                <label for="entry_date" class="form-label">Data</label>
                <input type="date" class="form-control" id="entry_date" name="entry_date" required>
            </div>
            <div class="mb-3">
                <label for="defect" class="form-label">Problema</label>
                <textarea class="form-control" id="defect" name="defect" rows="3" required></textarea>
            </div>

            <button type="submit" class="btn btn-primary">Registrar Serviço</button>
        </form>
    </div>
@endsection
