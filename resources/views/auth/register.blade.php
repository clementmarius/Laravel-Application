<x-guest-layout>
    <h1 class=" text-xl font-bold leading-tight tracking-tight text-gray-900 md:text-2xl dark:text-white">
        Create your free account
    </h1>
    <form method="POST" action="{{ route('register') }}">
        @csrf

        <!-- Email Address -->
        <div class="mt-4">
            <x-input-label for="email" :value="__('Email')"
                           class="block mb-2 text-sm font-medium text-gray-900 dark:text-white"/>
            <x-text-input id="email"
                          class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                          type="email" name="email" :value="old('email')" required
                          autocomplete="username" placeholder="example@email.com" />
            <x-input-error :messages="$errors->get('email')" class="mt-2"/>
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Password')"
                           class="block mb-2 text-sm font-medium text-gray-900 dark:text-white"/>

            <x-text-input id="password"
                          class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                          type="password"
                          name="password"
                          required autocomplete="new-password" placeholder="At least 12 characters" />

            <x-input-error :messages="$errors->get('password')" class="mt-2"/>
        </div>


        <!-- Remember Me -->
        <div class="block mt-4 flex justify-between">
            <label for="remember_me" class="inline-flex items-center">
                <input id="remember_me" type="checkbox"
                       class="cursor-pointer w-4 h-4 border border-gray-300 rounded bg-gray-50 focus:ring-3 focus:ring-primary-300 dark:bg-gray-700 dark:border-gray-600 dark:focus:ring-primary-600 dark:ring-offset-gray-800"
                       name="remember">
                <span class="ms-2 text-sm text-gray-600 dark:text-gray-300">{{ __('By signing up, you are creating a SaasLitDemo account, and you agree to SaasLitDemo’s') }}<a
                        class="font-medium text-primary-600 dark:text-primary-500 hover:underline" href="/terms"> Terms of Use</a> <span
                        class="ms-2 text-sm text-gray-600 dark:text-gray-300"> and</span> <a
                        class="font-medium text-primary-600 dark:text-primary-500 hover:underline"
                        href="/terms#privacy">Privacy Policy</a>.</span>
            </label>

        </div>
        <div class="flex items-center justify-end mt-4">


            <x-primary-button>
                {{ __('Create an account') }}
            </x-primary-button>
        </div>
        <p class="text-base font-light text-gray-500 dark:text-gray-400">
            Already have an account ? <a href="/sign_in"
                                         class="font-medium text-primary-600 hover:underline dark:text-primary-500">Sign
                in here</a>
        </p>
    </form>
</x-guest-layout>
