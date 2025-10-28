@extends('layouts.default')
@section('title', 'Clients')
@section('content')
    <x-title title="Registrar Cliente" subtitle="Cadastre novos clientes no sistema" icon="bi bi-person-plus" size="3xl" />
    <div class="bg-(--foreground) border border-(--border) rounded-xl px-6 py-4 shadow-lg">
        <div class="mb-4">
            <h3 class="text-xl font-semibold ">
                Novo Cliente
            </h3>
            <span class="text-violet-500 text-sm">Preencha os dados do cliente para cadastrá-lo no sistema</span>
        </div>
        <form action="{{ route('clients.store') }}" method="POST" autocomplete="off" class="space-y-4">
            @csrf
            <div class="flex gap-4">
                <div class="grid md:grid-cols-3 gap-4 w-full">
                    <div>
                        <label for="name">
                            Nome
                        </label>
                        <input type="text" name="name" id="name"
                            class="input-default @error('name')
                            border-red-500
                        @enderror"
                            placeholder="Digite o nome completo" value="{{ old('name') }}">
                        @error('name')
                            <span class="text-red-500 text-sm">{{ $message }}</span>
                        @enderror
                    </div>
                    <div>
                        <label for="cpf_cnpj">
                            CPF ou CNPJ
                        </label>
                        <input type="text" name="cpf_cnpj" id="cpf_cnpj"
                            class="input-default @error('cpf_cnpj')
                            border-red-500
                        @enderror"
                            placeholder="Digite o CPF ou CNPJ" value="{{ old('cpf_cnpj') }}">
                        @error('cpf_cnpj')
                            <span class="text-red-500 text-sm">{{ $message }}</span>
                        @enderror
                    </div>
                    <div>
                        <label for="number">
                            Contato
                        </label>
                        <input type="text" name="number" id="number"
                            class="input-default @error('number')
                            border-red-500
                        @enderror"
                            placeholder="Telefone, WhatsApp" value="{{ old('number') }}">
                        @error('number')
                            <span class="text-red-500 text-sm">{{ $message }}</span>
                        @enderror
                    </div>
                </div>
                <div>
                    <label for="submit"></label> <br>
                    <button type="submit"
                        class="bg-violet-600 text-white rounded-lg hover:bg-violet-700 transition-all py-2 mt-1 w-42 cursor-pointer flex gap-2 justify-center items-center">
                        <i class="bi bi-person-plus"></i>
                        Cadastrar Cliente
                    </button>
                </div>
            </div>
        </form>
    </div>
    <div class="bg-(--foreground) border border-(--border) rounded-xl p-6 shadow-lg">
        <div class="flex items-center justify-between mb-4">
            <h3 class="text-xl font-semibold">
                Clientes Cadastrados
            </h3>
            <div class="relative">
                <i class="bi bi-search icon-input"></i>
                <input type="text" class="input-default-icon" placeholder="Buscar por nome ou CPF/CNPJ">
            </div>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">
            <x-clients.cards :clients="$clients" />
        </div>
        <!-- Adicione esta linha para mostrar os links de paginação -->
        <div class="mt-4">
            {{ $clients->links() }}
        </div>
    </div>
@endsection
