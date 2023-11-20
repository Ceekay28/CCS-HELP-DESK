<x-guest-layout>
    <x-popmodal name="login" title="login">
        <x-validation-errors class="mb-4" lazy />

        @if (session('status'))
        <div
            class="mb-4 font-medium text-sm text-green-600 dark:text-green-400"
        >
            {{ session("status") }}
        </div>
        @endif

        <form method="POST" action="{{ route('login') }}">
            @csrf

            <div>
                <x-label for="email" value="{{ __('Email') }}" />
                <x-input
                    id="email"
                    class="block mt-1 w-full"
                    type="email"
                    name="email"
                    :value="old('email')"
                    required
                    autofocus
                    autocomplete="username"
                />
            </div>

            <div class="mt-4">
                <x-label for="password" value="{{ __('Password') }}" />
                <x-input
                    id="password"
                    class="block mt-1 w-full"
                    type="password"
                    name="password"
                    required
                    autocomplete="current-password"
                />
            </div>

            <div class="block mt-4">
                <label for="remember_me" class="flex items-center">
                    <x-checkbox id="remember_me" name="remember" />
                    <span
                        class="ms-2 text-sm text-gray-600 dark:text-gray-400"
                        >{{ __("Remember me") }}</span
                    >
                </label>
            </div>

            <div class="flex items-center justify-end mt-4">
                @if (Route::has('password.request'))
                <a
                    href="#"
                    class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800"
                    x-data
                    @click.prevent="$dispatch('open-modal',{name:'forgotpassword'})"
                >
                    {{ __("Forgot your password?") }}
                </a>
                @endif

                <x-button class="ms-4">
                    {{ __("Log in") }}
                </x-button>
            </div>
        </form>
    </x-popmodal>
</x-guest-layout>