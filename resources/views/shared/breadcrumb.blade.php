<nav class="flex mb-5" aria-label="Breadcrumb">
    <ol class="inline-flex items-center space-x-1 text-sm font-medium md:space-x-2">
        <li class="inline-flex items-center">
            <a href="/" class="inline-flex items-center text-gray-700 hover:text-primary-600 dark:text-gray-300 dark:hover:text-white">
                <svg class="w-5 h-5 mr-2.5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M10.707 2.293a1 1 0 00-1.414 0l-7 7a1 1 0 001.414 1.414L4 10.414V17a1 1 0 001 1h2a1 1 0 001-1v-2a1 1 0 011-1h2a1 1 0 011 1v2a1 1 0 001 1h2a1 1 0 001-1v-6.586l.293.293a1 1 0 001.414-1.414l-7-7z"></path></svg>
                Home
            </a>
        </li>
        @if($_SERVER['REQUEST_URI'] == '/dashboard')
        <li>
            <div class="flex items-center">
                <svg class="w-6 h-6 text-gray-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"></path></svg>
                <span class="ml-1 text-gray-400 md:ml-2 dark:text-gray-500" aria-current="page">Dashboard</span>
            </div>
        </li>
        @elseif( str_contains($_SERVER['REQUEST_URI'],'/dashboard/'))
        <li>
            <div class="flex items-center">
                <svg class="w-6 h-6 text-gray-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"></path></svg>
                <a href="/dashboard" class="ml-1 text-gray-700 hover:text-primary-600 md:ml-2 dark:text-gray-300 dark:hover:text-white">Dashboard</a>
            </div>
        </li>
        @endif
        @if($_SERVER['REQUEST_URI'] == '/dashboard/account')

        <li>
            <div class="flex items-center">
                <svg class="w-6 h-6 text-gray-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"></path></svg>
                <span class="ml-1 text-gray-400 md:ml-2 dark:text-gray-500" aria-current="page">Account</span>
            </div>
        </li>
        @elseif(str_contains($_SERVER['REQUEST_URI'],'/dashboard/account'))
        <li>
            <div class="flex items-center">
                <svg class="w-6 h-6 text-gray-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"></path></svg>
                <a href="/dashboard/account" class="ml-1 text-gray-700 hover:text-primary-600 md:ml-2 dark:text-gray-300 dark:hover:text-white">Account</a>
            </div>
        </li>
        @endif
        @if(str_contains($_SERVER['REQUEST_URI'],'/dashboard/account/email/edit'))
        <li>
            <div class="flex items-center">
                <svg class="w-6 h-6 text-gray-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"></path></svg>
                <span class="ml-1 text-gray-400 md:ml-2 dark:text-gray-500" aria-current="page">Edit email</span>
            </div>
        </li>
        @endif
        @if(str_contains($_SERVER['REQUEST_URI'],'/dashboard/account/password/edit'))
        <li>
            <div class="flex items-center">
                <svg class="w-6 h-6 text-gray-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"></path></svg>
                <span class="ml-1 text-gray-400 md:ml-2 dark:text-gray-500" aria-current="page">Edit password</span>
            </div>
        </li>
        @endif
        @if(str_contains($_SERVER['REQUEST_URI'],'/dashboard/account/profile'))
        <li>
            <div class="flex items-center">
                <svg class="w-6 h-6 text-gray-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"></path></svg>
                <span class="ml-1 text-gray-400 md:ml-2 dark:text-gray-500" aria-current="page">Profile</span>
            </div>
        </li>
        @endif
        @if(str_contains($_SERVER['REQUEST_URI'],'/dashboard/account/sessions'))
        <li>
            <div class="flex items-center">
                <svg class="w-6 h-6 text-gray-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"></path></svg>
                <span class="ml-1 text-gray-400 md:ml-2 dark:text-gray-500" aria-current="page">Sessions</span>
            </div>
        </li>
        @endif
        @if($_SERVER['REQUEST_URI'] == '/dashboard/crud')
        <li>
            <div class="flex items-center">
                <svg class="w-6 h-6 text-gray-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"></path></svg>
                <span class="ml-1 text-gray-400 md:ml-2 dark:text-gray-500" aria-current="page">Crud</span>
            </div>
        </li>
        @elseif(str_contains($_SERVER['REQUEST_URI'],'/crud/'))
        <li>
            <div class="flex items-center">
                <svg class="w-6 h-6 text-gray-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"></path></svg>
                <a href="/dashboard/crud" class="ml-1 text-gray-700 hover:text-primary-600 md:ml-2 dark:text-gray-300 dark:hover:text-white">Crud</a>
            </div>
        </li>
        @endif
        @if($_SERVER['REQUEST_URI'] == '/dashboard/crud/articles')
        <li>
            <div class="flex items-center">
                <svg class="w-6 h-6 text-gray-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"></path></svg>
                <span class="ml-1 text-gray-400 md:ml-2 dark:text-gray-500" aria-current="page">Articles</span>
            </div>
        </li>
        @elseif(str_contains($_SERVER['REQUEST_URI'],'/crud/articles'))
        <li>
            <div class="flex items-center">
                <svg class="w-6 h-6 text-gray-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"></path></svg>
                <a href="/dashboard/crud/articles" class="ml-1 text-gray-700 hover:text-primary-600 md:ml-2 dark:text-gray-300 dark:hover:text-white">Articles</a>
            </div>
        </li>
        @endif
{{--        <% if request.path.match?(/\/dashboard\/crud\/articles\/\d+/) && !request.path.include?('edit')  %>--}}
{{--        <li>--}}
{{--            <div class="flex items-center">--}}
{{--                <svg class="w-6 h-6 text-gray-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"></path></svg>--}}
{{--                <span class="ml-1 text-gray-400 md:ml-2 dark:text-gray-500" aria-current="page">#<%= request.path.match(/\/dashboard\/crud\/articles\/(\d+)/)&.[](1) %></span>--}}
{{--            </div>--}}
{{--        </li>--}}
{{--        <% elsif request.path.match?(/\/dashboard\/crud\/articles\/\d+/) %>--}}
{{--        <li>--}}
{{--            <div class="flex items-center">--}}
{{--                <svg class="w-6 h-6 text-gray-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"></path></svg>--}}
{{--                <a href="/dashboard/crud/articles/<%= request.path.match(/\/dashboard\/crud\/articles\/(\d+)/)&.[](1) %>" class="ml-1 text-gray-700 hover:text-primary-600 md:ml-2 dark:text-gray-300 dark:hover:text-white">#<%= request.path.match(/\/dashboard\/crud\/articles\/(\d+)/)&.[](1) %></a>--}}
{{--            </div>--}}
{{--        </li>--}}
{{--        <% end %>--}}
{{--        <% if request.path.match?(/\/dashboard\/crud\/articles\/\d+\/edit/)  %>--}}
{{--        <li>--}}
{{--            <div class="flex items-center">--}}
{{--                <svg class="w-6 h-6 text-gray-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"></path></svg>--}}
{{--                <span class="ml-1 text-gray-400 md:ml-2 dark:text-gray-500" aria-current="page">Edit article</span>--}}
{{--            </div>--}}
{{--        </li>--}}
{{--        <% end %>--}}
        @if($_SERVER['REQUEST_URI'] == '/dashboard/crud/users')
        <li>
            <div class="flex items-center">
                <svg class="w-6 h-6 text-gray-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"></path></svg>
                <span class="ml-1 text-gray-400 md:ml-2 dark:text-gray-500" aria-current="page">Users</span>
            </div>
        </li>
        @elseif(str_contains($_SERVER['REQUEST_URI'],'/crud/users'))
        <li>
            <div class="flex items-center">
                <svg class="w-6 h-6 text-gray-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"></path></svg>
                <a href="/dashboard/crud/users" class="ml-1 text-gray-700 hover:text-primary-600 md:ml-2 dark:text-gray-300 dark:hover:text-white">Users</a>
            </div>
        </li>
        @endif
{{--        <% if request.path.match?(/\/dashboard\/crud\/users\/\d+/) && !request.path.include?('edit')  %>--}}
{{--        <li>--}}
{{--            <div class="flex items-center">--}}
{{--                <svg class="w-6 h-6 text-gray-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"></path></svg>--}}
{{--                <span class="ml-1 text-gray-400 md:ml-2 dark:text-gray-500" aria-current="page">#<%= request.path.match(/\/dashboard\/crud\/users\/(\d+)/)&.[](1) %></span>--}}
{{--            </div>--}}
{{--        </li>--}}
{{--        <% elsif request.path.match?(/\/dashboard\/crud\/users\/\d+/) %>--}}
{{--        <li>--}}
{{--            <div class="flex items-center">--}}
{{--                <svg class="w-6 h-6 text-gray-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"></path></svg>--}}
{{--                <a href="/dashboard/crud/users/<%= request.path.match(/\/dashboard\/crud\/users\/(\d+)/)&.[](1) %>" class="ml-1 text-gray-700 hover:text-primary-600 md:ml-2 dark:text-gray-300 dark:hover:text-white">#<%= request.path.match(/\/dashboard\/crud\/users\/(\d+)/)&.[](1) %></a>--}}
{{--            </div>--}}
{{--        </li>--}}
{{--        <% end %>--}}
{{--        <% if request.path.match?(/\/dashboard\/crud\/users\/\d+\/edit/)  %>--}}
{{--        <li>--}}
{{--            <div class="flex items-center">--}}
{{--                <svg class="w-6 h-6 text-gray-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"></path></svg>--}}
{{--                <span class="ml-1 text-gray-400 md:ml-2 dark:text-gray-500" aria-current="page">Edit user</span>--}}
{{--            </div>--}}
{{--        </li>--}}
{{--        <% end %>--}}
    </ol>
</nav>
