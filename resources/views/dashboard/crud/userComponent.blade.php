<div class="col-span-2">
    <div
        class="p-4 mb-4 bg-white border border-gray-200 rounded-lg shadow-sm 2xl:col-span-2 dark:border-gray-700 sm:p-6 dark:bg-gray-800">
        <div class="grid grid-cols-6 gap-6">
            <div class="col-span-6 sm:col-span-3">
                <div class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Email:</div>
                <div class="block mb-2 text-sm text-gray-900 dark:text-white">{{$user->email}}</div>
            </div>
        </div>
        <br>
        <div class="grid grid-cols-6 gap-6">
            <div class="col-span-6 sm:col-span-3">
                <div class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Role:</div>
                <div class="block mb-2 text-sm text-gray-900 dark:text-white">@if($user->hasRole('admin'))
                        admin
                    @else
                        customer
                    @endif</div>
            </div>
        </div>
        <br>
    </div>
</div>
