@extends('layouts.default')
@section('title', 'Profile')
@section('content')
    <h1>Profile</h1>
    <p>Name: {{ $user->name }}</p>
    <p>Email: {{ $user->email }}</p>
    <a href="{{ route('profile.edit') }}">Editar Perfil</a>
@endsection
