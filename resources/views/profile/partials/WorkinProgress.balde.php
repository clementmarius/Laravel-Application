<div class="grid grid-cols-1 px-4 pt-6 xl:gap-4 dark:bg-gray-900">
    <div class="mb-4 col-span-full xl:mb-2">
        <%= render "shared/dashboard_breadcrumb" %>
        <h1 class="text-xl font-semibold text-gray-900 sm:text-2xl dark:text-white">Connected sessions</h1>
    </div>
    <div class="col-span-2">
        <div class="p-4 mb-4 bg-white border border-gray-200 rounded-lg shadow-sm 2xl:col-span-2 dark:border-gray-700 sm:p-6 dark:bg-gray-800">
            <div class="flow-root">
                <h3 class="text-xl font-semibold dark:text-white">Sessions</h3>
                <ul class="divide-y divide-gray-200 dark:divide-gray-700">
                    <% @sessions.each do |session| %>
                    <li class="pt-4 pb-6">
                        <div class="flex items-center space-x-4">
                            <div class="flex-shrink-0">
                                <% if device(session.user_agent) == "desktop" %>
                                <svg class="w-6 h-6 dark:text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.75 17L9 20l-1 1h8l-1-1-.75-3M3 13h18M5 17h14a2 2 0 002-2V5a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path></svg>
                                <% else %>
                                <svg class="w-6 h-6 dark:text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 18h.01M8 21h8a2 2 0 002-2V5a2 2 0 00-2-2H8a2 2 0 00-2 2v14a2 2 0 002 2z"></path></svg>
                                <% end %>
                            </div>
                            <div class="flex-1 min-w-0">
                                <p class="text-base font-semibold text-gray-900 truncate dark:text-white">
                                    <strong>User Agent:</strong>
                                    <%= session.user_agent %>
                                </p>
                                <p class="text-sm font-normal text-gray-500 truncate dark:text-gray-400">
                                    Created at <%= session.created_at %> / IP : <%= session.ip_address %>
                                </p>
                            </div>
                            <div class="inline-flex items-center">
                                <%= button_to "Revoke", dashboard_account_session_path(session.id), method: :delete, class: "px-3 py-2 mb-3 mr-3 text-sm font-medium text-center text-gray-900 bg-white border border-gray-300 rounded-lg hover:bg-gray-100 focus:ring-4 focus:ring-primary-300 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700" %>
                            </div>
                        </div>
                    </li>
                    <% end %>

                </ul>
                <div>
                    <turbo-frame id="view_more">
                        <%= button_to "View all", dashboard_account_list_all_sessions_path, class: "text-white bg-primary-700 hover:bg-primary-800 focus:ring-4 focus:ring-primary-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-primary-600 dark:hover:bg-primary-700 dark:focus:ring-primary-800" %>
                    </turbo-frame>
                </div>
            </div>
        </div>
    </div>

</div>
