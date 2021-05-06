<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/tallesairan/FA5PRO/css/all.css">
    <link href="{{ URL::asset('css/style.css') }}" rel="stylesheet">
</head>
<body>
<div class="d-flex" id="wrapper">
    {{--Sidebar--}}
    <div class="bg-light border" id="sidebar">
        <div class="sidebar-heading text-center">
            <img class="my-2" src="{{ URL::asset('img/logo.png') }}" alt="" width="72" height="72">
            <div class="my-2">OnlineOrd Admin</div>

        </div>
        <div class="list-group list-group-flush">
            <a href="/home" class="list-group-item list-group-item-action bg-light {{str_contains(url()->current(), '/home') ? 'current': ''}}"><i class="fal fa-home"></i> Головна</a>
            <a href="/profile" class="list-group-item list-group-item-action bg-light {{str_contains(url()->current(), '/profile') ? 'current': ''}}"><i class="fal fa-user"></i> Профіль</a>
            <a href="/menu" class="list-group-item list-group-item-action bg-light {{str_contains(url()->current(), '/menu') ? 'current': ''}}"><i class="fal fa-utensils"></i> Меню</a>
            <a href="/food" class="list-group-item list-group-item-action bg-light {{str_contains(url()->current(), '/food') ? 'current': ''}}"><i class="fal fa-soup"></i> Страви</a>
            <a href="/table" class="list-group-item list-group-item-action bg-light {{str_contains(url()->current(), '/table') ? 'current': ''}}"><i class="fal fa-qrcode"></i> Столи</a>
        </div>

        <div class="list-group list-group-flush fixed-bottom">
            <a href="/logout" class="list-group-item list-group-item-action btn-exit text-white"><i class="fal fa-door-open"></i> Вихід</a>
        </div>

    </div>

    {{--Page Content--}}
    <div id="page-content">
        <nav class="navbar navbar-expand-lg navbar-light bg-light border-bottom px-3">
            <p class="mb-0"><strong>@yield('header')</strong></p>
        </nav>

        <div class="container-fluid align-items-center px-0" id="main">
            @yield('content')
        </div>
    </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
</body>
</html>
