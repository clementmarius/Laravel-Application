<table  id="usersTable" class="min-w-full divide-y divide-gray-200 table-fixed dark:divide-gray-600">
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
                                                                     viewBox="0 0 20 20"
                                                                     xmlns="http://www.w3.org/2000/svg">
                                                                    <path
                                                                        d="M17.414 2.586a2 2 0 00-2.828 0L7 10.172V13h2.828l7.586-7.586a2 2 0 000-2.828z"></path>
                                                                    <path fill-rule="evenodd"
                                                                          d="M2 6a2 2 0 012-2h4a1 1 0 010 2H4v10h10v-4a1 1 0 112 0v4a2 2 0 01-2 2H4a2 2 0 01-2-2V6z"
                                                                          clip-rule="evenodd"></path>
                                                                </svg>
                                                            Update
                                                            </span>
                </a>

                <button data-controller="deleter" data-deleter-prover-outlet=".js-prover"
                        data-deleter-actualid="<%= user.id %>"
                        data-action="mouseover->deleter#changeDeletionId focus->deleter#changeDeletionId"
                        type="button" id="deleteUserButton"
                        data-drawer-target="drawer-delete-user-default"
                        data-drawer-show="drawer-delete-user-default"
                        aria-controls="drawer-delete-user-default" data-drawer-placement="right"
                        class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-red-700 rounded-lg hover:bg-red-800 focus:ring-4 focus:ring-red-300 dark:focus:ring-red-900">
                    <svg class="w-4 h-4 mr-2" fill="currentColor" viewBox="0 0 20 20"
                         xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd"
                              d="M9 2a1 1 0 00-.894.553L7.382 4H4a1 1 0 000 2v10a2 2 0 002 2h8a2 2 0 002-2V6a1 1 0 100-2h-3.382l-.724-1.447A1 1 0 0011 2H9zM7 8a1 1 0 012 0v6a1 1 0 11-2 0V8zm5-1a1 1 0 00-1 1v6a1 1 0 102 0V8a1 1 0 00-1-1z"
                              clip-rule="evenodd"></path>
                    </svg>
                    Delete item

                    <template id="delete-tplt" data-deleter-target="tplt">
                        <form action="{{ route('user.destroy', $user) }}" method="post"
                              class="inline-flex">
                            @csrf
                            @method("delete")
                            <button
                                class="text-white bg-red-600 hover:bg-red-800 focus:ring-4 focus:ring-red-300 font-medium rounded-lg text-sm inline-flex items-center px-3 py-2.5 text-center mr-2 dark:focus:ring-red-900">
                                Yes, Delete User #{{$user->id}}
                            </button>
                        </form>
                    </template>
            </td>
        </tr>
    @endforeach
    </tbody>
</table>
