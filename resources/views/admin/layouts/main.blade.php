<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@section('title')Админка |@show</title>

    <!-- scripts -->
    @vite(['resources/sass/admin/app.scss', 'resources/js/app.js'])
</head>

<body>
    <div class="wrapper">
        <div class="header">@yield('header')</div>
        <div class="menu">@yield('menu')</div>
        <div class="body">@yield('content')</div>
    </div>
    @stack('body')
</body>
