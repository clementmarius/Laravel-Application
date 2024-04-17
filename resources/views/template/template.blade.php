<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" href="{{ asset('favicon.ico') }}">
    @vite(['resources/css/app.css','resources/js/app.js'])
    <title>@yield('title') | SaasLit</title>
</head>
<body>

@include('shared/navbar')

<div class="mt-8 py-8 bg-white dark:bg-gray-900">
    @yield('pages')
</div>


@include('shared/footer')

<script type="text/javascript" src="{{ asset('/js/darkmode.js') }}"></script>

</body>
</html>
