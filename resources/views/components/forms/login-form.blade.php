 <form action="{{ route('auth.login') }}" method="POST" class="space-y-6">
     @csrf
     <div>
         <label for="email" class="block text-sm/6 font-medium text-gray-100">Email</label>
         <div class="mt-2">
             <input id="email" type="email" name="email" value="{{ old('email') }}" required autocomplete="email"
                 class="block w-full rounded-md bg-white/5 px-3 py-1.5 text-base text-white outline-1 -outline-offset-1 outline-white/10 placeholder:text-gray-600 focus:outline-2 focus:-outline-offset-2 focus:outline-violet-600 sm:text-sm/6
                            @error('credentials')
                            border-red-400 border
                            @enderror
                            " />
         </div>
         @error('email')
             <div class="mt-2 text-sm text-red-400">{{ $message }}</div>
         @enderror
     </div>

     <div>
         <div class="flex items-center justify-between">
             <label for="password" class="block text-sm/6 font-medium text-gray-100">Senha</label>
             {{-- Se tiver rota de recuperação de senha, troque o href abaixo --}}
             <div class="text-sm">
                 <a href="#" class="font-semibold text-violet-400 hover:text-violet-300">Esqueceu a
                     senha?</a>
             </div>
         </div>
         <div class="mt-2">
             <input id="password" type="password" name="password" required autocomplete="current-password"
                 class="block w-full rounded-md bg-white/5 px-3 py-1.5 text-base text-white outline-1 -outline-offset-1 outline-white/10 placeholder:text-gray-600 focus:outline-2 focus:-outline-offset-2 focus:outline-violet-600 sm:text-sm/6
                            @error('credentials')
                            border-red-400 border
                            @enderror
                            " />
         </div>
         @error('password')
             <div class="mt-2 text-sm text-red-400">{{ $message }}</div>
         @enderror
     </div>

     <div class="flex items-center">
         <input id="remember" name="remember" type="checkbox"
             class="h-4 w-4 rounded border-white/10 bg-white/5 text-violet-600 focus:ring-violet-600" />
         <label for="remember" class="ml-3 block text-sm text-gray-200">Lembrar-me</label>
     </div>

     <div>
         <button type="submit"
             class="flex w-full justify-center rounded-md bg-violet-600 px-3 py-1.5 text-sm/6 font-semibold text-white hover:bg-violet-500 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-violet-600 cursor-pointer">
             Entrar
         </button>
     </div>
 </form>
