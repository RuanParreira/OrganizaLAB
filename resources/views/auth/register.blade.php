@extends('layouts.other')
@section('title', 'Registrar')

@section('content')
    <div class="flex min-h-full flex-col justify-center px-6 py-10 lg:px-8">
        <div class="sm:mx-auto sm:w-full sm:max-w-sm">
            <h2 class="mt-10 text-center text-2xl/9 font-bold tracking-tight text-white">Crie sua conta</h2>

            @error('registration')
                <div class="mt-4 text-sm text-red-400 text-center">{{ $message }}</div>
            @enderror
        </div>

        <div class="mt-10 sm:mx-auto sm:w-full sm:max-w-sm">
            <x-forms.register-form />

            <p class="mt-10 text-center text-sm/6 text-gray-400">
                Já tem conta?
                <a href="/login" class="font-semibold text-violet-400 hover:text-violet-300">Acesse sua conta</a>
            </p>
        </div>
    </div>
@endsection
