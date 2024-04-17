<x-app-layout>

    <div class="grid grid-cols-1 px-4 pt-6 xl:gap-4 dark:bg-gray-900">
        <div class="mb-4 col-span-full xl:mb-2">
            @include('shared.breadcrumb')

            <h2 class="text-xl font-semibold text-gray-900 sm:text-2xl dark:text-white">
                {{ __('Edit email') }}
            </h2>
        </div>


        <div class="col-span-2">
            <div
                class="p-4 mb-4 bg-white border border-gray-200 rounded-lg shadow-sm 2xl:col-span-2 dark:border-gray-700 sm:p-6 dark:bg-gray-800">
                <div class="mb-4">
                    {{--                    //if current user verified--}}
                    <h2 class="text-lg font-bold dark:text-white">Change your email</h2>
                    {{--                    <% else %>--}}
                    {{--                    <h2 class="text-lg font-bold dark:text-white">Verify your email</h2>--}}
                    <p class="mt-2 text-base text-gray-900 dark:text-white">
                        <span class="mt-2 text-base text-gray-900 dark:text-white">We sent a verification email to the address below. Check that email and follow those instructions to confirm it's your email address.</span>
                    </p>
                    <p class="my-4">
                        <span class="mt-2 text-base text-gray-900 dark:text-white">
{{--                            <%= Current.user.email %>--}}
                        </span>
                    </p>
                    <p class="mt-2">
                        {{--                        <%= button_to "Re-send verification email", identity_email_verification_path, class: "text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800" %>--}}
                    </p>
                    {{--                    <% end %>--}}
                </div>
                {{--                <% if Current.user.verified? %>--}}
                {{--                <%= form_with(url: dashboard_account_email_path, method: :patch) do |form| %>--}}


                <form id="send-verification" method="post" action="{{ route('verification.send') }}">
                    @csrf
                </form>
                <div class="grid grid-cols-6 gap-6">
                    <div class="col-span-6 sm:col-span-3">
                        <form method="post" action="{{ route('profile.update') }}" class="mt-6 space-y-6">
                            @csrf
                            @method('patch')

                            <div class="col-span-6 sm:col-span-3">
                                <x-input-label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white"
                                               for="email" :value="__('New email')"/>
                                <x-text-input id="email" name="email" type="email"
                                              class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                                              :value="old('email', $user->email)" required autocomplete="username"/>
                                <x-input-error class="mt-2" :messages="$errors->get('email')"/>


                                @if ($user instanceof \Illuminate\Contracts\Auth\MustVerifyEmail && ! $user->hasVerifiedEmail())
                                    <div>
                                        <p class="text-sm mt-2 text-gray-800">
                                            {{ __('Your email address is unverified.') }}

                                            <button form="send-verification"
                                                    class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                                                {{ __('Click here to re-send the verification email.') }}
                                            </button>
                                        </p>

                                        @if (session('status') === 'verification-link-sent')
                                            <p class="mt-2 font-medium text-sm text-green-600">
                                                {{ __('A new verification link has been sent to your email address.') }}
                                            </p>
                                        @endif
                                    </div>
                                @endif
                            </div>

                            <div class="col-span-6 sm:col-span-3">
                                <x-input-label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white"
                                               for="name" :value="__('Name')"/>
                                <x-text-input id="name" name="name" type="text"
                                              class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                                              :value="old('name', $user->name)" required autofocus autocomplete="name"/>
                                <x-input-error class="mt-2" :messages="$errors->get('name')"/>
                            </div>

                            {{--                            <div class="col-span-6 sm:col-span-3">--}}
                            {{--                                <x-input-label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white"--}}
                            {{--                                               for="password" :value="__('Password')"/>--}}
                            {{--                                <x-text-input id="password" name="password" type="password"--}}
                            {{--                                              class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"--}}
                            {{--                                />--}}
                            {{--                            </div>--}}

                            {{--                            <div>--}}
                            {{--                                <x-input-label for="update_password_current_password" :value="__('Current Password')" />--}}
                            {{--                                <x-text-input id="update_password_current_password" name="current_password" type="password" class="mt-1 block w-full" autocomplete="current-password" />--}}
                            {{--                                <x-input-error :messages="$errors->updatePassword->get('current_password')" class="mt-2" />--}}
                            {{--                            </div>--}}


                            <div class="col-span-6 sm:col-full">
                                <x-primary-button>{{ __('Save changes') }}</x-primary-button>

                                @if (session('status') === 'profile-updated')
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

                {{--                <% end %>--}}
                {{--                <% end %>--}}
            </div>
        </div>
    </div>

</x-app-layout>
