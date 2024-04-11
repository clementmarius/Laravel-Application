<div class="grid grid-cols-1 px-4 pt-6 xl:gap-4 dark:bg-gray-900">
    <div class="mb-4 col-span-full xl:mb-2">
        <%= render "shared/dashboard_breadcrumb" %>
        <h1 class="text-xl font-semibold text-gray-900 sm:text-2xl dark:text-white">Edit Password</h1>
    </div>
    <div class="col-span-2">
        <div class="p-4 mb-4 bg-white border border-gray-200 rounded-lg shadow-sm 2xl:col-span-2 dark:border-gray-700 sm:p-6 dark:bg-gray-800">
            <h3 class="mb-4 text-xl font-semibold dark:text-white">Password information</h3>
            <%= form_with(url: dashboard_account_password_path, method: :patch) do |form| %>
            <% if @user.errors.any? %>
            <div class="p-4 mb-4 text-sm text-red-800 rounded-lg bg-red-50 dark:bg-gray-800 dark:text-red-400">
                <h2><%= pluralize(@user.errors.count, "error") %> prohibited this user from being saved:</h2>
                <ul>
                    <% @user.errors.each do |error| %>
                    <li class="font-medium"><%= error.full_message %></li>
                    <% end %>
                </ul>
            </div>
            <% end %>
            <div class="grid grid-cols-6 gap-6">
                <div class="col-span-6 sm:col-span-3">
                    <%= form.label :password_challenge, 'Current password', class: "block mb-2 text-sm font-medium text-gray-900 dark:text-white" %>
                    <%= form.password_field :password_challenge, required: true, autofocus: true, class: "shadow-sm bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" %>
                </div>
                <div class="col-span-6 sm:col-span-3">
                    <%= form.label :password, "New password", class: "block mb-2 text-sm font-medium text-gray-900 dark:text-white" %>
                    <%= form.password_field :password, "data-popover-target" => "popover-password", "data-popover-placement" => "bottom", required: true, autocomplete: "new-password", class: "bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" %>
                    <p class="text-xs font-normal text-gray-500 dark:text-gray-400">12 characters minimum, with lower and upper case, at least a digit and a special character.</p>
                </div>
                <div class="col-span-6 sm:col-span-3">
                    <%= form.label :password_confirmation, "Confirm new password", class: "block mb-2 text-sm font-medium text-gray-900 dark:text-white" %>
                    <%= form.password_field :password_confirmation, required: true, autocomplete: "new-password", class: "shadow-sm bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" %>
                </div>
                <div class="col-span-6 sm:col-full">
                    <%= form.submit "Save all", class: "cursor-pointer text-white bg-primary-700 hover:bg-primary-800 focus:ring-4 focus:ring-primary-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-primary-600 dark:hover:bg-primary-700 dark:focus:ring-primary-800" %>
                </div>
            </div>
            <% end %>
        </div>
    </div>

</div>
