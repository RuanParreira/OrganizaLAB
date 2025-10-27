@extends('layouts.default')
@section('title', 'Dashboard')
@section('content')
    <x-title title="Dashboard" subtitle="Visão geral dos seus serviços" icon="bi bi-graph-up" />
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-4">
        <x-dashboard.cards href="{{ route('services.notstarted') }}" title="Não Iniciados" :status="0" icon="bi bi-clock"
            :type="1" />
        <x-dashboard.cards href="{{ route('services.inprogress') }}" title="Em Progresso" :status="1"
            icon="bi bi-play-circle" :type="1" />
        <x-dashboard.cards href="{{ route('services.ready') }}" title="Prontos" :status="2" icon="bi bi-check2-circle"
            :type="1" />
        <x-dashboard.cards href="{{ route('services.finished') }}" title="Finalizados" :status="3"
            icon="bi bi-archive" :type="1" />
        <x-dashboard.cards href="{{ route('clients') }}" title="Clientes Cadastrados" icon="bi bi-people"
            :type="2" />
        <x-dashboard.cards href="{{ route('services.create') }}" title="Total de Serviços" icon="bi bi-folder2-open"
            :type="3" />
    </div>
    <x-dashboard.cards title="Últimos Serviços" :type="4" />

@endsection
