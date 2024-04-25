<x-app-layout>
    <div
        class="p-4 bg-white block sm:flex items-center justify-between border-b border-gray-200 lg:mt-1.5 dark:bg-gray-800 dark:border-gray-700">
        <div class="w-full mb-1">
            <div class="mb-4">
                @include('shared.breadcrumb')
                <h1 class="text-xl font-semibold text-gray-900 sm:text-2xl dark:text-white">All users</h1>
            </div>
            <div class="items-center justify-between block sm:flex md:divide-x md:divide-gray-100 dark:divide-gray-700">
                <div class="flex items-center mb-4 sm:mb-0">
                    {{--                <%= search_form_for @q, url: dashboard_crud_users_path, html: {class: 'sm:pr-3', "data-controller": "filters", "data-turbo-frame": "table"} do |f| %>--}}
                    <div>
                        {{--                    <%= f.label :email_cont, class: "sr-only" %>--}}
                        <div class="relative w-48 mt-1 sm:w-64 xl:w-96">
                            {{--                        <%= f.search_field :email_cont, "data-action": "filters#submit", placeholder: "Search for users", class: "bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" %>--}}
                        </div>
                    </div>
                    {{--                <% end %>--}}
                </div>
                {{--            <%= link_to "Add new user", new_dashboard_crud_user_path, id:"createUserButton", class: "text-white bg-primary-700 hover:bg-primary-800 focus:ring-4 focus:ring-primary-300 font-medium rounded-lg text-sm px-5 py-2.5 dark:bg-primary-600 dark:hover:bg-primary-700 focus:outline-none dark:focus:ring-primary-800" %>--}}
            </div>
        </div>
    </div>
    <div class="flex flex-col">
        <div class="overflow-x-auto">
            <div class="inline-block min-w-full align-middle">
                <div class="overflow-hidden shadow">
                    {{--                <%= turbo_frame_tag "table" do %>--}}
                    <table class="min-w-full divide-y divide-gray-200 table-fixed dark:divide-gray-600">
                        <thead class="bg-gray-100 dark:bg-gray-700">
                        <tr>
                            <th scope="col"
                                class="p-4 text-xs font-medium text-left text-gray-500 uppercase dark:text-gray-400">
                                {{--                            <%= sort_link(@q, :id) %>--}}
                                id
                            </th>
                            <th scope="col"
                                class="p-4 text-xs font-medium text-left text-gray-500 uppercase dark:text-gray-400">
                                {{--                            <%= sort_link(@q, :email) %>--}}
                                email
                            </th>
                            <th scope="col"
                                class="p-4 text-xs font-medium text-left text-gray-500 uppercase dark:text-gray-400">
                                {{--                            <%= sort_link(@q, :role) %>--}}
                                role
                            </th>
                            <th scope="col"
                                class="p-4 text-xs font-medium text-left text-gray-500 uppercase dark:text-gray-400">
                                {{--                            <%= sort_link(@q, :verified) %>--}}
                                verified
                            </th>
                            <th scope="col"
                                class="p-4 text-xs font-medium text-left text-gray-500 uppercase dark:text-gray-400">
                                {{--                            <%= sort_link(@q, :created_at) %>--}}
                                created at
                            </th>
                            <th scope="col"
                                class="p-4 text-xs font-medium text-left text-gray-500 uppercase dark:text-gray-400">
                                Actions
                            </th>
                        </tr>
                        </thead>
                        <tbody class="bg-white divide-y divide-gray-200 dark:bg-gray-800 dark:divide-gray-700">
                        @foreach($users as $user)
                            {{--                    <%= tag.tr id: dom_id(user), class: "hover:bg-gray-100 dark:hover:bg-gray-700" do %>--}}
                            <tr class="hover:bg-gray-100 dark:hover:bg-gray-700">
                                <td class="p-4 text-base font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                    {{--                        <%= link_to "##{user.id}", dashboard_crud_user_path(user.id) data: {turbo: false} %></td>--}}

                                    <a href="users/{{$user->id}}">
                                    <span
                                        class="font-medium text-blue-600 dark:text-blue-500 hover:underline">#<?php echo $user->id ?></span></a>
                                </td>

                                <td class="p-4 text-base font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                        <?php echo $user->email ?></td>
                                <td class="p-4 text-base font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                    @if($user->hasRole('admin'))
                                        admin
                                    @else
                                        customer
                                    @endif
                                </td>
                                <td class="p-4 text-base font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                    @if($user->verified)
                                        true
                                    @else
                                        false
                                    @endif
                                </td>

                                <td class="p-4 text-base font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                        <?php echo date_format($user->created_at, 'M d, Y') ?></td>

                                <td class="p-4 space-x-2 whitespace-nowrap">
                                    <a href="users/{{$user->id}}/edit/">
                                                            <span
                                                                {{--                                                                link_to edit_dashboard_crud_user_path(user), data: {turbo: false}, --}}
                                                                class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white rounded-lg bg-primary-700 hover:bg-primary-800 focus:ring-4 focus:ring-primary-300 dark:bg-primary-600 dark:hover:bg-primary-700 dark:focus:ring-primary-800"
                                                                do>
                                                            <svg class="w-4 h-4 mr-2" fill="currentColor"
                                                                 viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                                                <path
                                                                    d="M17.414 2.586a2 2 0 00-2.828 0L7 10.172V13h2.828l7.586-7.586a2 2 0 000-2.828z"></path>
                                                                <path fill-rule="evenodd"
                                                                      d="M2 6a2 2 0 012-2h4a1 1 0 010 2H4v10h10v-4a1 1 0 112 0v4a2 2 0 01-2 2H4a2 2 0 01-2-2V6z"
                                                                      clip-rule="evenodd"></path>
                                                            </svg>
                                                            Update
                                                            </span></a>
                                    <form action="{{ route('user.destroy', $user) }}" method="post">
                                        @csrf
                                        @method("delete")
                                        <button class="btn btn-danger">Supprimer</button>
                                    </form>

{{--                                    <button data-controller="deleter" data-deleter-prover-outlet=".js-prover"--}}
{{--                                            data-deleter-actualid="<%= user.id %>"--}}
{{--                                            data-action="mouseover->deleter#changeDeletionId focus->deleter#changeDeletionId"--}}
{{--                                            type="button" id="deleteUserButton"--}}
{{--                                            data-drawer-target="drawer-delete-user-default"--}}
{{--                                            data-drawer-show="drawer-delete-user-default"--}}
{{--                                            aria-controls="drawer-delete-user-default" data-drawer-placement="right"--}}
{{--                                            class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-red-700 rounded-lg hover:bg-red-800 focus:ring-4 focus:ring-red-300 dark:focus:ring-red-900">--}}
{{--                                        <svg class="w-4 h-4 mr-2" fill="currentColor" viewBox="0 0 20 20"--}}
{{--                                             xmlns="http://www.w3.org/2000/svg">--}}
{{--                                            <path fill-rule="evenodd"--}}
{{--                                                  d="M9 2a1 1 0 00-.894.553L7.382 4H4a1 1 0 000 2v10a2 2 0 002 2h8a2 2 0 002-2V6a1 1 0 100-2h-3.382l-.724-1.447A1 1 0 0011 2H9zM7 8a1 1 0 012 0v6a1 1 0 11-2 0V8zm5-1a1 1 0 00-1 1v6a1 1 0 102 0V8a1 1 0 00-1-1z"--}}
{{--                                                  clip-rule="evenodd"></path>--}}
{{--                                        </svg>--}}
{{--                                        Delete item--}}
{{--                                    --}}{{--                            <template data-deleter-target="tplt">--}}
{{--                                    --}}{{--                                <%= button_to "Yes, Delete User ##{user.id}", dashboard_crud_user_path("#{user.id}"), method: :delete, data: {turbo: false}, form_class: "js-deletion-form", class: "text-white bg-red-600 hover:bg-red-800 focus:ring-4 focus:ring-red-300 font-medium rounded-lg text-sm inline-flex items-center px-3 py-2.5 text-center mr-2 dark:focus:ring-red-900" %>--}}
{{--                                    --}}{{--                            </template>--}}
{{--                                    </button>--}}
                                </td>
                            </tr>
                        @endforeach
                        {{--                    <% end %>--}}
                        {{--                    <% end %>--}}
                        </tbody>
                    </table>
                    {{--                <% end %>--}}
                </div>
            </div>
        </div>
    </div>
    <div
        class="sticky bottom-0 right-0 items-center w-full p-4 bg-white border-t border-gray-200 sm:flex sm:justify-between dark:bg-gray-800 dark:border-gray-700">
        <div class="flex items-center mb-4 sm:mb-0">
            {{--        <% if @pagy.prev.present? %>--}}
            {{--        <%= button_to dashboard_crud_users_path,--}}
            {{--        params: { page: @pagy.prev },--}}
            {{--        method: :get,--}}
            {{--        class: "inline-flex justify-center p-1 text-gray-500 rounded cursor-pointer hover:text-gray-900 hover:bg-gray-100 dark:hover:bg-gray-700 dark:hover:text-white",--}}
            {{--        "data-turbo-stream": true do %>--}}
            <svg class="w-7 h-7" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd"
                      d="M12.707 5.293a1 1 0 010 1.414L9.414 10l3.293 3.293a1 1 0 01-1.414 1.414l-4-4a1 1 0 010-1.414l4-4a1 1 0 011.414 0z"
                      clip-rule="evenodd"></path>
            </svg>
            {{--        <% end %>--}}
            {{--        <% end %>--}}
            {{--        <% if @pagy.next.present? %>--}}
            {{--        <%= button_to dashboard_crud_users_path,--}}
            {{--        params: { page: @pagy.next },--}}
            {{--        method: :get,--}}
            {{--        class: "inline-flex justify-center p-1 text-gray-500 rounded cursor-pointer hover:text-gray-900 hover:bg-gray-100 dark:hover:bg-gray-700 dark:hover:text-white",--}}
            {{--        "data-turbo-stream": true do %>--}}
            <svg class="w-7 h-7" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd"
                      d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
                      clip-rule="evenodd"></path>
            </svg>
            {{--        <% end %>--}}
            {{--        <% end %>--}}
            {{--        <%= raw pagy_info(@pagy)  %>--}}
        </div>
        <div class="flex items-center space-x-3">
            {{--        <% if @pagy.prev.present? %>--}}
            {{--        <%= button_to dashboard_crud_users_path,--}}
            {{--        params: { page: @pagy.prev },--}}
            {{--        method: :get,--}}
            {{--        class: "inline-flex items-center justify-center flex-1 px-3 py-2 text-sm font-medium text-center text-white rounded-lg bg-primary-700 hover:bg-primary-800 focus:ring-4 focus:ring-primary-300 dark:bg-primary-600 dark:hover:bg-primary-700 dark:focus:ring-primary-800",--}}
            {{--        "data-turbo-stream": true do %>--}}
            <svg class="w-5 h-5 mr-1 -ml-1" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd"
                      d="M12.707 5.293a1 1 0 010 1.414L9.414 10l3.293 3.293a1 1 0 01-1.414 1.414l-4-4a1 1 0 010-1.414l4-4a1 1 0 011.414 0z"
                      clip-rule="evenodd"></path>
            </svg>
            Previous
            {{--        <% end %>--}}
            {{--        <% end %>--}}
            {{--        <% if @pagy.next.present? %>--}}
            {{--        <%= button_to dashboard_crud_users_path,--}}
            {{--        params: { page: @pagy.next },--}}
            {{--        method: :get,--}}
            {{--        class: "inline-flex items-center justify-center flex-1 px-3 py-2 text-sm font-medium text-center text-white rounded-lg bg-primary-700 hover:bg-primary-800 focus:ring-4 focus:ring-primary-300 dark:bg-primary-600 dark:hover:bg-primary-700 dark:focus:ring-primary-800",--}}
            {{--        "data-turbo-stream": true do %>--}}
            Next
            <svg class="w-5 h-5 ml-1 -mr-1" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd"
                      d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
                      clip-rule="evenodd"></path>
            </svg>
            {{--        <% end %>--}}
            {{--        <% end %>--}}
        </div>
    </div>
    <!-- Delete User Drawer -->
    <div id="drawer-delete-user-default"
         class="fixed top-0 right-0 z-40 w-full h-screen max-w-xs p-4 overflow-y-auto transition-transform translate-x-full bg-white dark:bg-gray-800"
         tabindex="-1" aria-labelledby="drawer-label" aria-hidden="true">
        <h5 id="drawer-label"
            class="inline-flex items-center text-sm font-semibold text-gray-500 uppercase dark:text-gray-400">Delete
            item</h5>
        <button type="button" data-drawer-dismiss="drawer-delete-user-default"
                aria-controls="drawer-delete-user-default"
                class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 absolute top-2.5 right-2.5 inline-flex items-center dark:hover:bg-gray-600 dark:hover:text-white">
            <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"
                 xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd"
                      d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                      clip-rule="evenodd"></path>
            </svg>
            <span class="sr-only">Close menu</span>
        </button>
        <svg class="w-10 h-10 mt-8 mb-4 text-red-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"
             xmlns="http://www.w3.org/2000/svg">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                  d="M12 8v4m0 4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
        </svg>
        <h3 class="mb-6 text-lg text-gray-500 dark:text-gray-400">Are you sure you want to delete this user?</h3>
        <div class="flex">
            <div data-controller="prover" class="js-prover">
            </div>
            <button type="button" data-drawer-dismiss="drawer-delete-user-default"
                    aria-controls="drawer-delete-user-default"
                    class="text-gray-900 bg-white hover:bg-gray-100 focus:ring-4 focus:ring-primary-300 border border-gray-200 font-medium inline-flex items-center rounded-lg text-sm px-3 py-2.5 text-center dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700 dark:focus:ring-gray-700">
                <span>No, cancel</span>
            </button>
        </div>
    </div>
</x-app-layout>
