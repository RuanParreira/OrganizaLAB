@forelse ($clients as $client)
    <div
        class="flex hover:bg-(--input) items-center justify-between py-2 px-4 rounded-lg border border-(--border) hover:border-primary transition-colors shadow-sm">
        <div class="flex flex-col gap-1 w-full">
            <div class="flex justify-between">
                <p class="font-semibold text-lg">
                    {{ $client->name }}
                </p>
                <div class="flex gap-2">
                    <button type="button">
                        <i class="bi bi-pencil-square btn-editar"></i>
                    </button>
                    <form action="{{ route('clients.destroy', $client) }}" method="POST"
                        onsubmit="return confirm('Tem certeza que deseja deletar este cliente?')">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn-deletar">
                            <i class="bi bi-trash3"></i>
                        </button>
                    </form>
                </div>
            </div>
            <p class="text-base text-gray-400">
                CPF: {{ $client->cpf_cnpj }}
            </p>
            <p class="text-base text-gray-400">
                Contato: {{ $client->number }}
            </p>
        </div>
    </div>
@empty
    <div class="flex items-center justify-center py-4 col-end-3">
        <p class="text-lg text-gray-400">Nenhum cliente cadastrado.</p>
    </div>
@endforelse
