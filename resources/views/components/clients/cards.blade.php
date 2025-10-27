@forelse ($clients as $client)
    <div
        class="flex bg-zinc-800 items-center justify-between py-2 px-4 bg-background rounded-lg border border-gray-400/30 hover:border-primary transition-colors">
        <div class="flex flex-col gap-1 w-full">
            <div class="flex justify-between">
                <p class="font-semibold text-lg">
                    {{ $client->name }}
                </p>
                <div class="flex gap-2">
                    <button type="button">
                        <i
                            class="bi bi-pencil-square text-lg text-violet-400 hover:text-violet-500 rounded-lg transition-all cursor-pointer flex justify-center items-center"></i>
                    </button>
                    <form action="{{ route('clients.destroy', $client) }}" method="POST"
                        onsubmit="return confirm('Tem certeza que deseja deletar este cliente?')">
                        @csrf
                        @method('DELETE')
                        <button type="submit"
                            class="font-normal text-red-400 hover:text-red-500 text-lg rounded-lg transition-all cursor-pointer flex justify-center items-center">
                            <i class="bi bi-trash"></i>
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
