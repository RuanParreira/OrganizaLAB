@extends('layouts.other')
@section('title', 'Bem-vindo ao OrganizaLab')
@section('content')
    <main class="bg-zinc-950">
        <x-home.header />
        <section id="hero" class="h-[calc(100vh-5rem)] -scroll-mt-[-5.1rem]">
            <x-home.hero />
        </section>
        <section id="features"
            class="bg-zinc-900/80 bg-linear-to-t to-zinc-950/80 from-zinc-900 py-20 px-6 -scroll-mt-[-5.1rem]">
            <x-home.features />
        </section>
        <section id="about"
            class="py-20 px-6 bg-linear-to-b from-zinc-900/80 to-zinc-900 via-violet-950/60 -scroll-mt-[-5.1rem]">
            <x-home.about />
        </section>
        <section id="contact" class="bg-zinc-900/80 py-20 -scroll-mt-[-5.1rem]">
            <x-home.contact />
        </section>
        <x-home.footer />
    </main>
@endsection
