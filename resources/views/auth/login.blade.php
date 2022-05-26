    <x-guest-layout>
        <x-auth-card>
            <x-slot name="logo">
                <div class="w-full sm:max-w-md mt-6 px-6 py-4 overflow-hidden sm:rounded-lg content-end">
                    <p class="text-5xl text-center">Associação das Famílias Especiais de Londrina</p><br>
                    <p class="text-xl text-center">A AFEL surgiu em outubro de 2016 após varias mães se
                        reunirem para reivindicar fraldas. Visamos dar suporte as famílias das pessoas com
                        necessidades especiais.
                    </p>
                </div>
            </x-slot>

            <!-- Session Status -->
            <x-auth-session-status class="mb-4" :status="session('status')" />

            <!-- Validation Errors -->
            <x-auth-validation-errors class="mb-4" :errors="$errors" />

            <form method="POST" action="{{ route('login') }}">
                @csrf

                <!-- Email Address -->
                <div>
                    <x-label for="email" :value="__('Email')" />

                    <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required
                        autofocus />
                </div>

                <!-- Password -->
                <div class="mt-4">
                    <x-label for="password" :value="__('Senha')" />

                    <x-input id="password" class="block mt-1 w-full" type="password" name="password" required
                        autocomplete="current-password" />
                </div>

                <!-- Remember Me -->
                <div class="block mt-4">
                    <label for="remember_me" class="inline-flex items-center">
                        <input id="remember_me" type="checkbox"
                            class="rounded border-gray-300 text-indigo-600 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
                            name="remember">
                        <span class="ml-2 text-sm text-gray-600">{{ __('Lembrar-me') }}</span>
                    </label>
                </div>

                <div class="flex items-center justify-end mt-4">
                    @if (Route::has('password.request'))
                        <a class="underline text-sm text-gray-600 hover:text-gray-900"
                            href="{{ route('password.request') }}">
                            {{ __('Esqueceu a senha ?') }}
                        </a>
                    @endif
                    <x-button class="ml-3">
                        {{ __('Entrar') }}
                    </x-button>
                </div>
            </form>
        </x-auth-card>
    </x-guest-layout>
