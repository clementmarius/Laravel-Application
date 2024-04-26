<x-app-layout>
<div class="grid grid-cols-1 px-4 pt-6 xl:gap-4 dark:bg-gray-900">
    <div class="mb-4 col-span-full xl:mb-2">
        @include('shared.breadcrumb')
        <h1 class="text-xl font-semibold text-gray-900 sm:text-2xl dark:text-white">Editing user</h1>
    </div>
     @include('/dashboard/crud/formUserEdit', ['user' => $user])
</div>
</x-app-layout>
