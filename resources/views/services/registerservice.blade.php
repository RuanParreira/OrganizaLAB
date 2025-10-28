@extends('layouts.default')
@section('title', 'Registrar Serviço')
@section('content')
    <x-title title="Registrar Serviço" subtitle="Cadastre novos serviços no sistema" icon="bi bi-clipboard-plus" />

    <div class="flex justify-center items-center">
        <form action="{{ route('services.store') }}" method="POST" autocomplete="off" class="space-y-6 w-full max-w-md">
            @csrf
            <div>
                <label for="client" class="block text-sm/6 font-medium text-gray-100">Cliente</label>
                <select name="client_id" id="client"
                    class="mt-2 block w-full rounded-md bg-(--input) px-3 py-2 text-base text-white outline-1 -outline-offset-1 outline-white/10 placeholder:text-gray-600 focus:outline-2 focus:-outline-offset-2 focus:outline-violet-600 sm:text-sm/6
                    @error('client_id')
                        border-red-400 border
                    @enderror
                    ">
                    <option class="bg-(--input)" value="">Selecione um cliente</option>
                    @foreach ($clients as $client)
                        <option class="bg-(--input)" value="{{ $client->id }}">{{ $client->name }}</option>
                    @endforeach
                </select>
                @error('client_id')
                    <div class="mt-2 text-sm text-red-400">{{ $message }}</div>
                @enderror
            </div>

            <div>
                <label for="equipment" class="block text-sm/6 font-medium text-gray-100">Equipamento</label>
                <div class="mt-2">
                    <input id="equipment" type="text" name="equipment" value="{{ old('equipment') }}"
                        autocomplete="equipment"
                        class="block w-full rounded-md bg-(--input) px-3 py-1.5 text-base text-white outline-1 -outline-offset-1 outline-white/10 placeholder:text-white focus:outline-2 focus:-outline-offset-2 focus:outline-violet-600 sm:text-sm/6  @error('equipment')
                            border-red-400 border
                            @enderror"
                        placeholder="Ex: Notebook Dell, Smartphone Samsung..." />
                </div>
                @error('equipment')
                    <div class="mt-2 text-sm text-red-400">{{ $message }}</div>
                @enderror
            </div>

            <div>
                <label for="entry_date" class="block text-sm/6 font-medium text-gray-100">Data</label>
                <div class="mt-2">
                    <input id="entry_date" type="date" name="entry_date"
                        value="{{ old('entry_date', now()->toDateString()) }}"
                        class="block w-full rounded-md bg-(--input) px-3 py-1.5 text-base text-white outline-1 -outline-offset-1 outline-white/10 placeholder:text-white focus:outline-2 focus:-outline-offset-2 focus:outline-violet-600 sm:text-sm/6
                            @error('entry_date')
                            border-red-400 border
                            @enderror
                            " />
                </div>
                @error('entry_date')
                    <div class="mt-2 text-sm text-red-400">{{ $message }}</div>
                @enderror
            </div>

            <div>
                <label for="defect" class="block text-sm/6 font-medium text-gray-100">Defeito</label>
                <div class="mt-2">
                    <textarea id="defect" name="defect" rows="3" placeholder="Descreva o problema reportado pelo cliente..."
                        class="block w-full rounded-md bg-(--input) px-3 py-1.5 text-base text-white outline-1 -outline-offset-1 outline-white/10 placeholder:white focus:outline-2 focus:-outline-offset-2 focus:outline-violet-600 sm:text-sm/6 @error('defect')
                            border-red-400 border
                            @enderror">{{ old('defect') }}</textarea>
                </div>
                @error('defect')
                    <div class="mt-2 text-sm text-red-400">{{ $message }}</div>
                @enderror
            </div>
            <div>
                <button type="submit"
                    class="flex w-full justify-center rounded-md bg-violet-600 px-3 py-1.5 text-sm/6 font-semibold text-white hover:bg-violet-500 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-violet-600 cursor-pointer">
                    Registrar
                </button>
            </div>
        </form>

    </div>
@endsection
