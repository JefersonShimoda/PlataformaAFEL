<x-guest-layout>
    <x-auth-card>
        <x-slot name="logo">
            <a href="/">
                <img src="imagens/logoCompletaColorida.png" width="400" height="341"
                    alt="logo da afel que leva a tela inicial">
            </a>
        </x-slot>

        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />

        <ul id="div-errors" class="ml-3 mb-4 text-sm text-red-600 hidden list-disc"></ul>

        <form method="POST" id="form-register" action="{{ route('register') }}">
            @csrf
            <div id="tela1">
                <!-- Name -->
                <div>
                    <x-label for="name" :value="__('Nome')" />

                    <x-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" autofocus />
                </div>

                <!-- Email Address -->
                <div class="mt-4">
                    <x-label for="email" :value="__('Email')" />

                    <x-input id="email" class="block mt-1 w-full" type="text" name="email" :value="old('email')" />
                </div>

                <!-- Password -->
                <div class="mt-4">
                    <x-label for="password" :value="__('Senha')" />

                    <x-input id="password" class="block mt-1 w-full" type="password" name="password"
                        autocomplete="new-password" />
                </div>

                <!-- Confirm Password -->
                <div class="mt-4">
                    <x-label for="password_confirmation" :value="__('Confirmar senha')" />

                    <x-input id="password_confirmation" class="block mt-1 w-full" type="password"
                        name="password_confirmation" />
                </div>

                {{-- tipo usuario --}}
                <div class="mt-4">
                    <x-label for="tipo" :value="__('Selecione o seu perfil')" />
                    <select name="tipo" id="tipo"
                        class="rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 block mt-1 w-full">
                        <option value=""></option>
                        <option value="associado">Associado</option>
                        <option value="colaborador">Colaborador</option>
                        <option value="gestor">Gestor</option>
                    </select>
                </div>

                <div class="flex items-center justify-end mt-4">
                    <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('login') }}">
                        {{ __('Já possui registro?') }}
                    </a>
                    <x-button class="ml-3" id="btn_tela1" type="button">
                        {{ __('Avançar') }}
                    </x-button>
                </div>
            </div>
            <div id="tela2" class="hidden">

                {{-- sexo --}}
                <div class="mt-4">
                    <x-label for="sexo" :value="__('Sexo')" />
                    <select name="sexo" id="sexo"
                        class="rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 block mt-1 w-full">
                        <option value=""></option>
                        <option value="feminino">Feminino</option>
                        <option value="masculino">Masculino</option>
                    </select>
                </div>

                {{-- CPF --}}
                <div class="mt-4">
                    <x-label for="cpf" :value="__('CPF')" />

                    <x-input id="cpf" class="block mt-1 w-full cpf" type="text" name="cpf" :value="old('cpf')" />
                </div>

                {{-- telefone --}}
                <div class="mt-4">
                    <x-label for="telefone" :value="__('Contato')" />

                    <x-input id="telefone" class="block mt-1 w-full phone" type="text" name="telefone"
                        :value="old('telefone')" placeholder="(00) 00000-0000" />
                </div>

                {{-- cep --}}
                <div class="mt-4">
                    <x-label for="cep" :value="__('CEP')" />

                    <x-input id="cep" class="block mt-1 w-full cep" type="text" name="cep" :value="old('cep')" />
                </div>

                <div id="form-associado" class="hidden">
                    {{-- CID --}}
                    <div class="mt-4">
                        <x-label for="cid" :value="__('CID')" />

                        <x-input id="cid" class="block mt-1 w-full " type="text" name="cid" :value="old('cid')"
                            placeholder="A00" />
                    </div>

                    {{-- observação --}}
                    <div class="mt-4">
                        <x-label for="obs" :value="__('Observação: ')" />

                        <x-input id="obs" class="block mt-1 w-full " type="text" name="obs" :value="old('obs')" />
                    </div>

                    {{-- data de nascimento --}}
                    <div class="mt-4">
                        <x-label for="nascimento" :value="__('Data de Nascimento')" />

                        <x-input id="nascimento" class="block mt-1 w-full date" type="text" name="nascimento"
                            :value="old('nascimento')" placeholder="DD/MM/AAAA" />
                    </div>

                    {{-- escola --}}
                    <div class="mt-4 ">
                        <x-label for="escola" :value="__('Escola')" />
                        <select name="escola" id="escola"
                            class="rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 block mt-1 w-full">
                            <option value="nfescola">Não frequenta escola</option>
                            <option value="especial">Escola Especial</option>
                            <option value="publica">Escola Pública</option>
                            <option value="particular">Escola Particular</option>
                        </select>
                    </div>
                </div>

                <div class="flex items-center justify-end mt-4">
                    <x-button
                        class="ml-3 bg-[#c0c0c0] hover:bg-[#b0b0b0] focus:bg-[#b0b0b0] focus:border-[#c0c0c0] active:bg-[#b0b0b0] active:border-[#b0b0b0]"
                        type="button" id="btn_tela2">
                        {{ __('Voltar') }}
                    </x-button>

                    <x-button class="ml-2">
                        {{ __('Registrar') }}
                    </x-button>

                </div>
            </div>
        </form>
    </x-auth-card>
</x-guest-layout>

<style>
    #auth-card {
        padding-bottom: 3rem;
    }

</style>
