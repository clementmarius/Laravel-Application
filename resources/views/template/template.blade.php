<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite(['resources/css/app.css','resources/js/app.js'])
    <title>Document</title>
</head>
<body>

@include('shared/navbar')

<div class="my-8 py-8">
    @yield('pages')
</div>


@include('shared/footer')

<script type="text/javascript" src="{{ asset('/js/darkmode.js') }}"></script>

</body>
</html>
