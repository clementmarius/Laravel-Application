<section class="bg-gray-50 dark:bg-gray-900">
    <div class=" flex flex-col items-center justify-center px-6 py-8 mx-auto md:h-screen lg:py-0">
        <div class="max-w-screen-xl px-4 py-8 mx-auto lg:grid lg:gap-20 lg:py-16 lg:grid-cols-2">
            <div class="flex-col justify-between hidden mr-auto lg:flex lg:col-span-5 xl:col-span-1 xl:mb-0">
                <div class="flex pt-8">
                    <a href="/" class="flex items-center mb-6 text-2xl font-semibold text-gray-900 dark:text-white">
                    </a>
                </div>
                <div>
                    @include('components/logo')
                </div>
                <div class="flex mt-4">
                    <svg class="w-5 h-5 mr-2 text-primary-600 shrink-0" fill="currentColor" viewBox="0 0 20 20"
                         xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd"
                              d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                              clip-rule="evenodd"></path>
                    </svg>
                    <div>
                        <h3 class="mb-2 text-xl font-bold leading-none text-gray-900 dark:text-white">
                            Get started quickly
                        </h3>
                        <p class="mb-2 font-light text-gray-500 dark:text-gray-400">
                            Integrate with developer-friendly APIs or choose low-code.
                        </p>
                    </div>
                </div>
                <div class="flex pt-8">
                    <svg class="w-5 h-5 mr-2 text-primary-600 shrink-0" fill="currentColor" viewBox="0 0 20 20"
                         xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd"
                              d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                              clip-rule="evenodd"></path>
                    </svg>
                    <div>
                        <h3 class="mb-2 text-xl font-bold leading-none text-gray-900 dark:text-white">
                            Support any business model
                        </h3>
                        <p class="mb-2 font-light text-gray-500 dark:text-gray-400">
                            Host code that you don't want to share with the world in private.
                        </p>
                    </div>
                </div>
                <div class="flex pt-8">
                    <svg class="w-5 h-5 mr-2 text-primary-600 shrink-0" fill="currentColor" viewBox="0 0 20 20"
                         xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd"
                              d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                              clip-rule="evenodd"></path>
                    </svg>
                    <div>
                        <h3 class="mb-2 text-xl font-bold leading-none text-gray-900 dark:text-white">
                            Join millions of businesses
                        </h3>
                        <p class="mb-2 font-light text-gray-500 dark:text-gray-400">
                            TailRails is trusted by ambitious startups and enterprises of every
                            size.
                        </p>
                    </div>
                </div>
                <nav>
                    <ul class="flex space-x-4">
                        <li>
                            <a href="/about"
                               class="text-sm text-gray-500 hover:underline hover:text-gray-900 dark:text-gray-400 dark:hover:text-white">About</a>
                        </li>
                        <li>
                            <a href="/terms"
                               class="text-sm text-gray-500 hover:underline hover:text-gray-900 dark:text-gray-400 dark:hover:text-white">Terms
                                & Conditions</a>
                        </li>
                        <li>
                            <a href="/about#contact"
                               class="text-sm text-gray-500 hover:underline hover:text-gray-900 dark:text-gray-400 dark:hover:text-white">Contact</a>
                        </li>
                    </ul>
                </nav>
            </div>
            <x-guest-layout>
                <div
                    class="w-full sm:max-w-md mt-6 px-5 pb-5 pt-8 bg-white dark:bg-gray-800 dark:border-gray-700 shadow dark:border overflow-hidden sm:rounded-lg">

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
                                          autocomplete="username" placeholder="example@email.com"/>
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
                                          required autocomplete="new-password" placeholder="At least 12 characters"/>

                            <x-input-error :messages="$errors->get('password')" class="mt-2"/>
                        </div>


                        <!-- Remember Me -->
                        <div class="block mt-4 flex justify-between">
                            <label for="remember_me" class="inline-flex items-center">
                                <input id="remember_me" type="checkbox"
                                       class="cursor-pointer w-4 h-4 border border-gray-300 rounded bg-gray-50 focus:ring-3 focus:ring-primary-300 dark:bg-gray-700 dark:border-gray-600 dark:focus:ring-primary-600 dark:ring-offset-gray-800"
                                       name="remember">
                                <span class="ms-2 text-sm text-gray-600 dark:text-gray-300">
    {{ __('By signing up, you are creating a SaasLitDemo account, and you agree to SaasLitDemo’s') }}

    <a class="font-medium text-primary-600 dark:text-primary-500 hover:underline" href="/terms">Terms of Use </a>
    and
    <a class="font-medium text-primary-600 dark:text-primary-500 hover:underline"
       href="/terms#privacy">Privacy Policy</a>.
</span>
                            </label>
                        </div>
                        <div class="flex items-center justify-end mt-4">
                            <x-primary-button>
                                {{ __('Create an account') }}
                            </x-primary-button>
                        </div>
                        <p class="text-base font-light text-gray-500 dark:text-gray-400 mt-2">
                            Already have an account ? <a href="/sign_in"
                                                         class="font-medium text-primary-600 hover:underline dark:text-primary-500">Sign
                                in here</a>
                        </p>
                    </form>
                </div>
            </x-guest-layout>
        </div>
    </div>
</section>
