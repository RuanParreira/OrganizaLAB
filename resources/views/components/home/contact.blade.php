<div class="px-[4%] md:px-0">
    <h2 class="text-3xl font-bold text-center mb-12">
        Fale Conosco
    </h2>
    <form action="#" method="POST" class="mx-auto max-w-xl" autocomplete="off">
        <div class="flex flex-col gap-x-8 gap-y-6">
            <div>
                <label for="first-name" class="block text-sm/6 font-semibold text-white">Nome</label>
                <div class="mt-2.5">
                    <input id="first-name" type="text" name="first-name" autocomplete="given-name"
                        class="block w-full rounded-md bg-white/5 px-3.5 py-2 text-base text-white outline-1 -outline-offset-1 outline-white/10 placeholder:text-gray-600 focus:outline-2 focus:-outline-offset-2 focus:outline-violet-600" />
                </div>
            </div>
            <div>
                <label for="email" class="block text-sm/6 font-semibold text-white">Email</label>
                <div class="mt-2.5">
                    <input id="email" type="email" name="email" autocomplete="email"
                        class="block w-full rounded-md bg-white/5 px-3.5 py-2 text-base text-white outline-1 -outline-offset-1 outline-white/10 placeholder:text-gray-600 focus:outline-2 focus:-outline-offset-2 focus:outline-violet-600" />
                </div>
            </div>
            <div>
                <label for="message" class="block text-sm/6 font-semibold text-white">Mensagem</label>
                <div class="mt-2.5">
                    <textarea id="message" name="message" rows="4"
                        class="block w-full rounded-md bg-white/5 px-3.5 py-2 text-base text-white outline-1 -outline-offset-1 outline-white/10 placeholder:text-gray-600 focus:outline-2 focus:-outline-offset-2 focus:outline-violet-600"></textarea>
                </div>
            </div>
        </div>
        <div class="mt-10">
            <button type="submit"
                class="block w-full rounded-md bg-violet-600 px-3.5 py-2.5 text-center text-sm font-semibold text-white shadow-xs hover:bg-violet-500 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-violet-600 cursor-pointer">Enviar
                Mensagem</button>
        </div>
    </form>
</div>
