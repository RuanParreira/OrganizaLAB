@extends('layouts.default')
@section('title', 'Profile Edit')

@section('content')
    <h1>Editar Perfil</h1>
    <form action="{{ route('profile.update') }}" method="POST">
        @csrf
        @method('PUT')
        <div>
            <label for="name">Name:</label>
            <input type="text" id="name" name="name" value="{{ $user->name }}">
        </div>
        <div>
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" value="{{ $user->email }}">
        </div>
        <div>
            <label for="password">Password:</label>
            <input type="password" id="password" name="password">
        </div>
        <button type="submit">Salvar</button>
    </form>
    <form method="POST" action="{{ route('profile.destroy') }}">
        @csrf
        @method('DELETE')

        <p>Tem certeza que deseja excluir sua conta? Essa ação é irreversível.</p>

        <label for="password">Confirme sua senha</label>
        <input id="password" name="password" type="password" required>
        @error('password')
            <span class="text-red-600">{{ $message }}</span>
        @enderror

        <button type="submit" class="btn btn-danger">Excluir conta</button>
    </form>
@endsection
