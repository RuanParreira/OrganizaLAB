<a href="{{ $href }}"
    class="text-lg flex items-center gap-3 px-4 py-3 rounded-lg transition-all hover:bg-gray-400/20 {{ $active ? 'bg-violet-600/20 font-bold' : '' }}">
    <i class="{{ $icon }} {{ $active ? 'font-bold' : '' }}"></i>
    <span>{{ $label }}</span>
</a>
