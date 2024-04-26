<x-app-layout>

    <div class="grid grid-cols-1 px-4 pt-6 xl:gap-4 dark:bg-gray-900">
        <header>
            <div class="mb-4 col-span-full xl:mb-2">
                @include('shared.breadcrumb')

                <h1 class="text-xl font-semibold text-gray-900 sm:text-2xl dark:text-white">
                    {{ __('Edit Password') }}
                </h1>
            </div>
        </header>

        <div class="col-span-2">
            <div
                class="p-4 mb-4 bg-white border border-gray-200 rounded-lg shadow-sm 2xl:col-span-2 dark:border-gray-700 sm:p-6 dark:bg-gray-800">
                <form method="post" action="{{ route('password.update') }}" class="mt-6 space-y-6">
                    @csrf
                    @method('put')

                    <h3 class="mb-4 text-xl font-semibold dark:text-white">Password information</h3>
                    <div class="grid grid-cols-6 gap-6">
                        <div class="col-span-6 sm:col-span-3">
                            <x-input-label for="update_password_current_password" :value="__('Current Password')"
                                           class="block mb-2 text-sm font-medium text-gray-900 dark:text-white"/>
                            <x-text-input id="update_password_current_password" name="current_password" type="password"
                                          class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                                          autocomplete="current-password"/>
                            <x-input-error :messages="$errors->updatePassword->get('current_password')" class="mt-2"/>
                        </div>

                        <div class="col-span-6 sm:col-span-3">
                            <x-input-label for="update_password_password" :value="__('New Password')"
                                           class="block mb-2 text-sm font-medium text-gray-900 dark:text-white"/>
                            <x-text-input id="update_password_password" name="password" type="password"
                                          class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                                          autocomplete="new-password"/>
                            <x-input-error :messages="$errors->updatePassword->get('password')" class="mt-2"/>
                        </div>

                        <div class="col-span-6 sm:col-span-3">
                            <x-input-label for="update_password_password_confirmation" :value="__('Confirm Password')"
                                           class="block mb-2 text-sm font-medium text-gray-900 dark:text-white"/>
                            <x-text-input id="update_password_password_confirmation" name="password_confirmation"
                                          type="password"
                                          class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                                          autocomplete="new-password"/>
                            <x-input-error :messages="$errors->updatePassword->get('password_confirmation')"
                                           class="mt-2"/>
                        </div>

                        <div class="col-span-6 sm:col-full">
                            <x-primary-button>{{ __('Save all') }}</x-primary-button>

                            @if (session('status') === 'password-updated')
                                <p
                                    x-data="{ show: true }"
                                    x-show="show"
                                    x-transition
                                    x-init="setTimeout(() => show = false, 2000)"
                                    class="text-sm text-gray-600"
                                >{{ __('Saved.') }}</p>
                            @endif
                        </div>
                </form>
            </div>


        </div>

    </div>

    {{--    </div>--}}

</x-app-layout>
