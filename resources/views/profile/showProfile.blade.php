<x-app-layout>
    <div class="grid grid-cols-1 px-4 pt-6 xl:gap-4 dark:bg-gray-900">
        <div class="mb-4 col-span-full xl:mb-2">
            @include('shared.breadcrumb')
            <h1 class="text-xl font-semibold text-gray-900 sm:text-2xl dark:text-white">Profile</h1>
        </div>
        <div class="col-span-2">
            <div
                class="p-4 mb-4 bg-white border border-gray-200 rounded-lg shadow-sm 2xl:col-span-2 dark:border-gray-700 sm:p-6 dark:bg-gray-800">
                <h2 class="mb-4 text-xl font-semibold dark:text-white">Login and email status</h2>
{{--                <div class="">--}}
                    <div class="mb-1">
                        <span
                            class="text-base text-gray-900 dark:text-white"> <?php echo 'Currently logged as ' . auth()->user()->email ?></span>

                    </div>
                    <div class="mb-6">
                        @if(auth()->user()->verified)
                            <span class="text-base text-gray-900 dark:text-white">Your email is verified</span>
                        @else
                            <span class="text-base text-gray-900 dark:text-white">Your email is not yet verified, please check your mailbox. </span>
                        @endif
                    </div>
                    <a href="{{ route('logout') }}"
                       class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800"
                       onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
{{--                </div>--}}
            </div>
        </div>
        <div class="col-span-2">
            <div
                class="p-4 mb-4 bg-white border border-gray-200 rounded-lg shadow-sm 2xl:col-span-2 dark:border-gray-700 sm:p-6 dark:bg-gray-800">
                <h2 class="mb-4 text-xl font-semibold dark:text-white">Delete account</h2>
                <div class="">
                    <div class="mb-1">
                        <span class="text-base text-gray-900 dark:text-white">Delete your account and all associated data.</span>
                    </div>
                    <div class="mb-6">
                        <span class="text-base text-gray-900 dark:text-white">This action cannot be undone. Please be certain.</span>
                    </div>

                    <form method="post" action="{{ route('profile.destroy', $user) }}">
                        @csrf
                        @method("delete")
                        <button
                            class="text-white bg-red-600 hover:bg-red-800 focus:ring-4 focus:ring-red-300 font-medium rounded-lg text-sm inline-flex items-center px-3 py-2.5 text-center mr-2 dark:focus:ring-red-900">
                            Yes, Delete My Account
                        </button>
                    </form>

{{--                    <form action="{{ route('profile.destroy', $user }}" method="post" class="inline-flex">--}}
{{--                        @csrf--}}
{{--                        @method("delete")--}}
{{--                        <button onclick="return confirm('Are you sure ?')"--}}
{{--                                class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-red-700 rounded-lg hover:bg-red-800 focus:ring-4 focus:ring-red-300 dark:focus:ring-red-900 ml-3">--}}
{{--                            <svg class="w-4 h-4 mr-2" fill="currentColor" viewBox="0 0 20 20"--}}
{{--                                 xmlns="http://www.w3.org/2000/svg">--}}
{{--                                <path fill-rule="evenodd"--}}
{{--                                      d="M9 2a1 1 0 00-.894.553L7.382 4H4a1 1 0 000 2v10a2 2 0 002 2h8a2 2 0 002-2V6a1 1 0 100-2h-3.382l-.724-1.447A1 1 0 0011 2H9zM7 8a1 1 0 012 0v6a1 1 0 11-2 0V8zm5-1a1 1 0 00-1 1v6a1 1 0 102 0V8a1 1 0 00-1-1z"--}}
{{--                                      clip-rule="evenodd"></path>--}}
{{--                            </svg>--}}
{{--                            Destroy this user--}}
{{--                        </button>--}}
{{--                    </form>--}}

                    <div class="max-w-xl">

                    </div>

                </div>
            </div>
        </div>
    </div>
</x-app-layout>
