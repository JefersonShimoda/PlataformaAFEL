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
                <x-label for="name" :value="__('Nome')" />

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
                <x-label for="password" :value="__('Senha')" />

                <x-input id="password" class="block mt-1 w-full" type="password" name="password" required
                    autocomplete="new-password" />
            </div>

            <!-- Confirm Password -->
            <div class="mt-4">
                <x-label for="password_confirmation" :value="__('Confirmar senha')" />

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

            {{-- CID --}}
            <div>
            <x-label for="cid" :value="__('CID')" />

            <x-input id="cid" class="block mt-1 w-full " type="text" name="cid" :value="old('cid')"
                required placeholder="A00" />
            </div>

            {{-- observação --}}
            <div>
            <x-label for="obs" :value="__('Observação: ')" />

            <x-input id="obs" class="block mt-1 w-full " type="text" name="obs" :value="old('obs')" />
            </div>

            {{-- data de nascimento --}}
            <div>
            <x-label for="nascimento" :value="__('Data de Nascimento')" />

            <x-input id="nascimento" class="block mt-1 w-full date" type="text" name="nascimento" :value="old('nascimento')"
                required placeholder="DD/MM/AAAA" />
            </div>

            {{-- escola --}}
            <div>
                <x-label for="escola" :value="__('Escola')" />
                <select name="escola" id="escola" class="block mt-1 w-full" required>
                    <option value="nfescola">Não frequenta escola</option>
                    <option value="especial">Escola Especial</option>
                    <option value="publica">Escola Pública</option>
                    <option value="particular">Escola Particular</option>
                </select>
            </div>

            <div class="flex items-center justify-end mt-4">
                <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('login') }}">
                    {{ __('Ja possui registro?') }}
                </a>

                <x-button class="ml-4">
                    {{ __('Registrar') }}
                </x-button>
            </div>
        </form>
    </x-auth-card>
</x-guest-layout>
