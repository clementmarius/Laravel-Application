<x-app-layout>
    <div class="grid grid-cols-1 px-4 pt-6 xl:gap-4 dark:bg-gray-900">
        <div class="mb-4 col-span-full xl:mb-2">
            @include('shared.breadcrumb')

            <h1 class="text-xl font-semibold text-gray-900 sm:text-2xl dark:text-white">Showing user #{{$user->id}}</h1>
        </div>
        @include('dashboard.crud.userComponent')

        <div class="flex align-center md:flex-row flex-col gap-1">

            <a href="{{$user->id}}/edit" class="max-w-fit inline-block
            cursor-pointer text-white bg-primary-700 hover:bg-primary-800 focus:ring-4 focus:ring-primary-300
            font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-primary-600 dark:hover:bg-primary-700
            dark:focus:ring-primary-800 mb-1">{{ __('Edit this user') }}</a>

            <a href="/dashboard/crud/users" class="max-w-fit inline-block
            cursor-pointer text-white bg-primary-700 hover:bg-primary-800 focus:ring-4 focus:ring-primary-300
            font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-primary-600 dark:hover:bg-primary-700
            dark:focus:ring-primary-800 mb-1">{{ __('Back to users') }}</a>

            {{--            <%= button_to dashboard_crud_user_path(@user), method: :delete, class: "flex items-center px-3 py-2.5--}}
            {{--            text-sm font-medium text-center text-white bg-red-700 rounded-lg hover:bg-red-800 focus:ring-4--}}
            {{--            focus:ring-red-300 dark:focus:ring-red-900", form: { data: { turbo_confirm: 'Are you sure?' }, class:--}}
            {{--            "inline-block md:ml-4" } do %>--}}

            
            <a href="/dashboard/crud/users" class="flex items-center px-3 py-2.5
           text-sm font-medium text-center text-white bg-red-700 rounded-lg hover:bg-red-800 focus:ring-4--}}
         focus:ring-red-300 dark:focus:ring-red-900">
            <svg class="w-4 h-4 mr-2" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd"
                      d="M9 2a1 1 0 00-.894.553L7.382 4H4a1 1 0 000 2v10a2 2 0 002 2h8a2 2 0 002-2V6a1 1 0 100-2h-3.382l-.724-1.447A1 1 0 0011 2H9zM7 8a1 1 0 012 0v6a1 1 0 11-2 0V8zm5-1a1 1 0 00-1 1v6a1 1 0 102 0V8a1 1 0 00-1-1z"
                      clip-rule="evenodd"></path>
            </svg>
            Destroy this user
            {{--            <% end %>--}}
            </a>
        </div>

    </div>
</x-app-layout>

