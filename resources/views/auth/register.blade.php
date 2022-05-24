<x-guest-layout>
    <x-auth-card>
        <x-slot name="logo">
            <a href="/">
                <img src="imagens/logoCompletaColorida.png" width="400"
                height="341" alt="logo da afel que leva a tela inicial">
            </a>
        </x-slot>

        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />

        <form method="POST" action="{{ route('register') }}">
            @csrf

            <!-- Name -->
            <div>
                <x-label for="name" :value="__('Name')" />

                <x-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required
                    autofocus />
            </div>

            <!-- Email Address -->
            <div class="mt-4">
                <x-label for="email" :value="__('Email')" />

                <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required />
            </div>

            <!-- Password -->
            <div class="mt-4">
                <x-label for="password" :value="__('Password')" />

                <x-input id="password" class="block mt-1 w-full" type="password" name="password" required
                    autocomplete="new-password" />
            </div>

            <!-- Confirm Password -->
            <div class="mt-4">
                <x-label for="password_confirmation" :value="__('Confirm Password')" />

                <x-input id="password_confirmation" class="block mt-1 w-full" type="password"
                    name="password_confirmation" required />
            </div>

            {{-- tipo usuario --}}
            <div>
                <x-label for="tipo" :value="__('Selecione o seu perfil')" />
                <select name="tipo" id="tipo" class="block mt-1 w-full" required>
                    <option value="associado">Associado</option>
                    <option value="colaborador">Colaborador</option>
                    <option value="gestor">Gestor</option>
                </select>
            </div>

             {{-- sexo --}}
             <div>
                <x-label for="sexo" :value="__('Sexo')" />
                <select name="sexo" id="sexo" class="block mt-1 w-full" required>
                    <option value="feminino">Feminino</option>
                    <option value="masculino">Masculino</option>
                </select>
            </div>

            {{-- CPF --}}
            <div>
                <x-label for="cpf" :value="__('CPF')" />

                <x-input id="cpf" class="block mt-1 w-full cpf" type="text" name="cpf" :value="old('cpf')" required/>
            </div>

            {{-- telefone --}}
            <div>
                <x-label for="telefone" :value="__('Contato')" />

                <x-input id="telefone" class="block mt-1 w-full phone" type="text" name="telefone" :value="old('telefone')"
                    required placeholder="(00) 00000-0000" />
            </div>



            {{-- cep --}}
            <div>
                <x-label for="cep" :value="__('CEP')" />

                <x-input id="cep" class="block mt-1 w-full cep" type="text" name="cep" :value="old('cep')" required/>
            </div>


            <div class="flex items-center justify-end mt-4">
                <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('login') }}">
                    {{ __('Already registered?') }}
                </a>

                <x-button class="ml-4">
                    {{ __('Register') }}
                </x-button>
            </div>
        </form>
    </x-auth-card>
</x-guest-layout>
