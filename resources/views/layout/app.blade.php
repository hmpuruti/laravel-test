<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no"/>
    <title>@yield('title', 'Laravel Test')</title>

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">


    <link rel="stylesheet" href="{{asset('assets/css/main.css')}}"/>
    <noscript>
        <link rel="stylesheet" href="{{asset('assets/css/noscript.css')}}"/>
    </noscript>

</head>
<body class="is-preload">
@yield('content')
</body>
</html>
