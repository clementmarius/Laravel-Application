<div class="grid grid-cols-1 px-4 pt-6 xl:gap-4 dark:bg-gray-900">
    <div class="mb-4 col-span-full xl:mb-2">
        <%= render "shared/dashboard_breadcrumb" %>
        <h1 class="text-xl font-semibold text-gray-900 sm:text-2xl dark:text-white">Edit email</h1>
    </div>
    <div class="col-span-2">
        <div class="p-4 mb-4 bg-white border border-gray-200 rounded-lg shadow-sm 2xl:col-span-2 dark:border-gray-700 sm:p-6 dark:bg-gray-800">
            <div class="mb-4">
                <% if Current.user.verified? %>
                <h2 class="text-lg font-bold dark:text-white">Change your email</h2>
                <% else %>
                <h2 class="text-lg font-bold dark:text-white">Verify your email</h2>
                <p class="mt-2 text-base text-gray-900 dark:text-white">
                    <span class="mt-2 text-base text-gray-900 dark:text-white">We sent a verification email to the address below. Check that email and follow those instructions to confirm it's your email address.</span>
                </p>
                <p class="my-4">
                    <span class="mt-2 text-base text-gray-900 dark:text-white"><%= Current.user.email %></span>
                    <span class="mt-2 text-base text-gray-900 dark:text-white"><%= Current.user.email %></span>
                </p>
                <p class="mt-2"><%= button_to "Re-send verification email", identity_email_verification_path, class: "text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800" %></p>
                <% end %>
            </div>
            <% if Current.user.verified? %>
            <%= form_with(url: dashboard_account_email_path, method: :patch) do |form| %>
            <div class="grid grid-cols-6 gap-6">
                <div class="col-span-6 sm:col-span-3">
                    <%= form.label :email, "New email", class: "block mb-2 text-sm font-medium text-gray-900 dark:text-white" %>
                    <%= form.email_field :email, required: true, autofocus: true, class: "shadow-sm bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" %>
                </div>
                <div class="col-span-6 sm:col-span-3">
                    &nbsp;
                </div>
                <div class="col-span-6 sm:col-span-3">
                    <%= form.label :password_challenge, class: "block mb-2 text-sm font-medium text-gray-900 dark:text-white" %>
                    <%= form.password_field :password_challenge, required: true, autocomplete: "current-password", class: "shadow-sm bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" %>
                </div>
                <div class="col-span-6 sm:col-full">
                    <%= form.submit "Save changes", class: "cursor-pointer text-white bg-primary-700 hover:bg-primary-800 focus:ring-4 focus:ring-primary-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-primary-600 dark:hover:bg-primary-700 dark:focus:ring-primary-800" %>
                </div>
            </div>
            <% end %>
            <% end %>

        </div>
    </div>

</div>
