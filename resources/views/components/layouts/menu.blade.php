<aside
    class="fixed top-0 left-0 hidden h-full w-[16rem] flex-col transition-all duration-300 lg:flex
bg-zinc-900 border-r border-gray-400/30">
    <a href="{{ route('dashboard') }}" class="p-6 border-b border-gray-400/30 flex items-center gap-2">
        <img src="{{ asset('favicon.ico') }}" alt="OrganizaLAB Logo" class="h-8">
        <h1 class="text-xl font-bold">
            OrganizaLAB
        </h1>
    </a>
    <nav class="flex-1 p-4 space-y-2">
        <x-layouts.menu-item href="{{ route('dashboard') }}" icon="bi bi-columns-gap" :active="request()->routeIs('dashboard')"
            label="Dashboard" />
        <x-layouts.menu-item href="{{ route('clients') }}" icon="bi bi-person-plus" :active="request()->routeIs('clients')"
            label="Registrar Clientes" />
        <x-layouts.menu-item href="{{ route('services.create') }}" icon="bi bi-plus-circle" :active="request()->routeIs('services.create')"
            label="Cadastrar Serviços" />
        <x-layouts.menu-item href="{{ route('services.notstarted') }}" icon="bi bi-clock" :active="request()->routeIs('services.notstarted')"
            label="Não Começou" />
        <x-layouts.menu-item href="{{ route('services.inprogress') }}" icon="bi bi-play-circle" :active="request()->routeIs('services.inprogress')"
            label="Em Progresso" />
        <x-layouts.menu-item href="{{ route('services.ready') }}" icon="bi bi-check2-circle" :active="request()->routeIs('services.ready')"
            label="Prontos" />
        <x-layouts.menu-item href="{{ route('services.finished') }}" icon="bi bi-archive" :active="request()->routeIs('services.finished')"
            label="Finalizados" />
    </nav>
    <div class="p-4 border-t border-gray-400/30 space-y-2">
        <x-layouts.menu-item href="{{ route('profile') }}" icon="bi bi-person" :active="request()->routeIs('profile', 'profile.edit')" label="Perfil" />
        <form method="POST" action="{{ route('auth.logout') }}">
            @csrf
            <button type="submit"
                class="w-full text-left text-lg flex items-center gap-3 px-4 py-3 rounded-lg transition-all text-sidebar-foreground hover:bg-sidebar-accent/50 cursor-pointer hover:bg-gray-400/20">
                <i class="bi bi-box-arrow-right"></i>
                <span>Sair</span>
            </button>
        </form>
    </div>
</aside>
