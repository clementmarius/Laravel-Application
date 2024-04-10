<x-app-layout>

    <div class="grid grid-cols-1 px-4 pt-6 xl:gap-4 dark:bg-gray-900">
        <div class="mb-4 col-span-full xl:mb-2">
            <header>
                <h2 class="text-xl font-semibold text-gray-900 sm:text-2xl dark:text-white">
                    {{ __('Edit email') }}
                </h2>
            </header>
        </div>


        <div class="col-span-2">
            <div class="p-4 mb-4 bg-white border border-gray-200 rounded-lg shadow-sm 2xl:col-span-2 dark:border-gray-700 sm:p-6 dark:bg-gray-800">
                <div class="mb-4">
                    {{--                    //if current user verified--}}
                    <h2 class="text-lg font-bold dark:text-white">Profile</h2>
                    {{--                    <% else %>--}}
                    <p class="mt-2 text-base text-gray-900 dark:text-white">
                        <span class="mt-2 text-base text-gray-900 dark:text-white">Login and Email status</span>
                    </p>
                    <div class="mb-1">
                        <span
                            class="text-base text-gray-900 dark:text-white"> <?php echo 'Currently logged as ' . get_current_user() ?></span><br>

                        <span
                            class="text-base text-gray-900 dark:text-white"> <?php echo 'Currently logged as ' . auth()->user()->email ?></span>

                    <p class="my-4">
                        <span class="mt-2 text-base text-gray-900 dark:text-white">
{{--                            <%= Current.user.email %>--}}
                        </span>
                    </p>
                    <p class="mt-2">
                    </p>
                </div>


                <div class="grid grid-cols-6 gap-6">

                    </div>

                </div>

            </div>
        </div>
    </div>

</x-app-layout>
