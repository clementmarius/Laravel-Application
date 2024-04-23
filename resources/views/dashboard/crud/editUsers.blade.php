<x-app-layout>
<div class="grid grid-cols-1 px-4 pt-6 xl:gap-4 dark:bg-gray-900">
    <div class="mb-4 col-span-full xl:mb-2">
        @include('shared.breadcrumb')
        <h1 class="text-xl font-semibold text-gray-900 sm:text-2xl dark:text-white">Editing user</h1>
    </div>
    <%= render "form", user: @user %>


    <div class>
        <%= link_to "Show this user", dashboard_crud_user_path(@user), class: "px-3 py-2 mb-3 mr-3 text-sm font-medium text-center text-gray-900 bg-white border border-gray-300 rounded-lg hover:bg-gray-100 focus:ring-4 focus:ring-primary-300 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700" %>
        <%= link_to "Back to users", dashboard_crud_users_path, class: "px-3 py-2 mb-3 mr-3 text-sm font-medium text-center text-gray-900 bg-white border border-gray-300 rounded-lg hover:bg-gray-100 focus:ring-4 focus:ring-primary-300 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700" %>
    </div>
</div>
</x-app-layout>
