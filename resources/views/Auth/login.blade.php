@extends('layouts.other')
@section('title', 'Login')

@section('content')
    <main>
        <div class="flex min-h-full flex-col justify-center px-6 py-12 lg:px-8">
            <div class="sm:mx-auto sm:w-full sm:max-w-sm">
                <h2 class="mt-10 text-center text-2xl/9 font-bold tracking-tight text-white">Acesse sua conta</h2>
                @error('credentials')
                    <div class="mt-4 text-sm text-red-400 text-center">{{ $message }}</div>
                @enderror
            </div>

            <div class="mt-10 sm:mx-auto sm:w-full sm:max-w-sm">
                <x-forms.login-form />
                <p class="mt-10 text-center text-sm/6 text-gray-400">
                    Ainda não tem conta?
                    <a href="{{ route('register') }}" class="font-semibold text-violet-500 hover:text-violet-400">Crie sua
                        conta</a>
                </p>
            </div>
        </div>
    </main>
@endsection
