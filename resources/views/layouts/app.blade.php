<!DOCTYPE html>
{{--<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">--}}
<html lang="ru">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>@yield('title-block')</title>
    <link rel="stylesheet" href="/css/normalize.css">
    <link rel="stylesheet" href="/css/fonts.css">
    <link rel="stylesheet" href="{{ mix('/css/app.css') }}">
    <link rel="stylesheet" href="/assets/nouislider/nouislider.css">
</head>
<body>
@yield('content')
<script src="/js/jquery-3.5.1.min.js"></script>
<script src="/assets/nouislider/nouislider.js"></script>
<script src="/js/app.js"></script>
<script src="/js/script.js"></script>
</body>
</html>
