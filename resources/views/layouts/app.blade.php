<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])

    </head>
    <body class="bg-gray-50 dark:bg-gray-900">


            @include('dashboard.navigation')

            <div class="flex pt-16 overflow-hidden bg-gray-50 dark:bg-gray-900">
                @include('components/sidebar-dashboard')
                <div class="fixed inset-0 z-10 hidden bg-gray-900/50 dark:bg-gray-900/90" id="sidebarBackdrop"></div>
                <div id="main-content" class="relative h-full overflow-y-auto bg-gray-50 lg:ml-64 dark:bg-gray-900">
                    <main>
{{--                        <div id="flash" class="relative z-50">--}}
{{--                            <%= render "shared/flash" %>--}}
{{--                        </div>--}}
                        {{$slot}}
                    </main>
                </div>
            </div>




        <script>
            // On page load or when changing themes, best to add inline in `head` to avoid FOUC
            if (localStorage.getItem('color-theme') === 'dark' || (!('color-theme' in localStorage) && window.matchMedia('(prefers-color-scheme: dark)').matches)) {
                document.documentElement.classList.add('dark');
            } else {
                document.documentElement.classList.remove('dark')
            }
        </script>
        <script type="text/javascript" src="{{ asset('/js/darkmode.js') }}"></script>

    </body>
</html>
