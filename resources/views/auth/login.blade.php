<section class="bg-gray-50 dark:bg-gray-900">
    <div class="flex flex-col items-center justify-center px-6 py-8 mx-auto md:h-screen lg:py-0">

        <x-guest-layout>
            <!-- Session Status -->
            <div
                class="w-full sm:max-w-md mt-6 px-8 pb-5 pt-7 bg-white dark:bg-gray-800 dark:border-gray-700 shadow dark:border overflow-hidden sm:rounded-lg ">


                <x-auth-session-status class="mb-4 " :status="session('status')"/>

                <h1 class=" text-xl font-bold leading-tight tracking-tight text-gray-900 md:text-2xl dark:text-white">
                    Sign in to your account
                </h1>
                <form method="POST" action="{{ route('login') }}" class=" space-y-4 md:space-y-6">
                    @csrf

                    <!-- Email Address -->
                    <div>
                        <x-input-label for="email" :value="__('Email')"
                                       class="block mb-2 text-sm font-medium text-gray-900 dark:text-white"/>
                        <x-text-input id="email"
                                      class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                      type="email" name="email" :value="old('email')" required autofocus
                                      autocomplete="username"/>
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
                                      required autocomplete="current-password"/>

                        <x-input-error :messages="$errors->get('password')" class="mt-2"/>
                    </div>

                    <!-- Remember Me -->
                    <div class="block mt-4 flex justify-between">
                        <label for="remember_me" class="inline-flex items-center">
                            <input id="remember_me" type="checkbox"
                                   class="cursor-pointer w-4 h-4 border border-gray-300 rounded bg-gray-50 focus:ring-3 focus:ring-primary-300 dark:bg-gray-700 dark:border-gray-600 dark:focus:ring-primary-600 dark:ring-offset-gray-800"
                                   name="remember">
                            <span class="ms-2 text-sm text-gray-600 dark:text-gray-300">{{ __('Remember me') }}</span>
                        </label>
                        @if (Route::has('password.request'))
                            <a class="text-sm font-medium text-primary-600 hover:underline dark:text-primary-500"
                               href="{{ route('password.request') }}">
                                {{ __('Forgot your password?') }}
                            </a>
                        @endif
                    </div>
                    <div class="flex items-center justify-end mt-4">


                        <x-primary-button>
                            {{ __('Sign in') }}
                        </x-primary-button>
                    </div>
                    <p class="text-base font-light text-gray-500 dark:text-gray-400">
                        Don’t have an account yet? <a href="#"
                                                      class="font-medium text-primary-600 hover:underline dark:text-primary-500">Sign
                            up</a>
                    </p>
                </form>
            </div>
        </x-guest-layout>

    </div>

</section>



