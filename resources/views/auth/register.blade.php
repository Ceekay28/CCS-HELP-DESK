<x-guest-layout>
    <x-popmodal name="register" title="register">
        <x-validation-errors class="mb-4" />

        <form method="POST" action="{{ route('register') }}">
            @csrf

            <div class="mt-4">
                <x-label for="course" value="{{ __('Course') }}" />
                <select
                    id="course"
                    name="course"
                    class="block mt-1 w-full text-black"
                >
                    <option value="BS Computer Science">
                        BS Computer Science
                    </option>
                    <option value="BS Information Technology">
                        BS Information Technology
                    </option>
                    <option value="BS Information Systems">
                        BS Information Systems
                    </option>
                    <option value="Associate in Computer Technology">
                        Associate in Computer Technology
                    </option>
                </select>
            </div>
            <div>
                <x-label for="firstname" value="{{ __('First Name') }}" />
                <x-input
                    id="firstname"
                    class="block mt-1 w-full"
                    type="text"
                    name="firstname"
                    :value="old('first name')"
                    required
                    autofocus
                    autocomplete="firstname"
                />
            </div>
            <div class="mt-4">
                <x-label for="middlename" value="{{ __('Middle Name') }}" />
                <x-input
                    id="middlename"
                    class="block mt-1 w-full"
                    type="text"
                    name="middlename"
                    :value="old('middle name')"
                    autocomplete="middlename"
                />
            </div>
            <div class="mt-4">
                <x-label for="lastname" value="{{ __('Last Name') }}" />
                <x-input
                    id="lastname"
                    class="block mt-1 w-full"
                    type="text"
                    name="lastname"
                    :value="old('last name')"
                    required
                    autocomplete="lastname"
                />
            </div>

            <div class="mt-4">
                <x-label for="email" value="{{ __('Email') }}" />
                <x-input
                    id="email"
                    class="block mt-1 w-full"
                    type="email"
                    name="email"
                    :value="old('email')"
                    required
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
                    autocomplete="new-password"
                />
            </div>

            <div class="mt-4">
                <x-label
                    for="password_confirmation"
                    value="{{ __('Confirm Password') }}"
                />
                <x-input
                    id="password_confirmation"
                    class="block mt-1 w-full"
                    type="password"
                    name="password_confirmation"
                    required
                    autocomplete="new-password"
                />
            </div>

            @if (Laravel\Jetstream\Jetstream::hasTermsAndPrivacyPolicyFeature())
            <div class="mt-4">
                <x-label for="terms">
                    <div class="flex items-center">
                        <x-checkbox name="terms" id="terms" required />

                        <div class="ms-2">
                            {!! __('I agree to the :terms_of_service and
                            :privacy_policy', [ 'terms_of_service' => '<a
                                target="_blank"
                                href="'.route('terms.show').'"
                                class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800"
                                >'.__('Terms of Service').'</a
                            >', 'privacy_policy' => '<a
                                target="_blank"
                                href="'.route('policy.show').'"
                                class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800"
                                >'.__('Privacy Policy').'</a
                            >', ]) !!}
                        </div>
                    </div>
                </x-label>
            </div>
            @endif

            <div class="flex items-center justify-end mt-4">
                <a
                    href="#"
                    class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800"
                    x-data
                    @click.prevent="$dispatch('open-modal',{name:'login'})"
                >
                    {{ __("Already registered?") }}
                </a>

                <x-button class="ms-4">
                    {{ __("Register") }}
                </x-button>
            </div>
        </form>
    </x-popmodal>
</x-guest-layout>