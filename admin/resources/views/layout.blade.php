<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <link href="css/style.css" rel="stylesheet">
</head>
<body>
<div class="d-flex" id="wrapper">
    {{--Sidebar--}}
    <div class="bg-light border" id="sidebar">
        <div class="sidebar-heading text-center">
            <img class="my-2" src="img/logo.png" alt="" width="72" height="72">
            <div class="my-2">OnlineOrd Admin</div>

        </div>
        <div class="list-group list-group-flush">
            <a href="/" class="list-group-item list-group-item-action bg-light {{str_contains(url()->current(), '/admin') ? 'current': ''}}">Головна</a>
            <a href="/profile" class="list-group-item list-group-item-action bg-light {{str_contains(url()->current(), '/profile') ? 'current': ''}}">Профіль</a>
            <a href="/menu" class="list-group-item list-group-item-action bg-light {{str_contains(url()->current(), '/menu') ? 'current': ''}}">Список Меню</a>
            <a href="/food" class="list-group-item list-group-item-action bg-light {{str_contains(url()->current(), '/food') ? 'current': ''}}">Страви</a>
        </div>

        <div class="list-group list-group-flush fixed-bottom">
            <a href="/" class="list-group-item list-group-item-action btn-exit text-white">Вихід</a>
        </div>

    </div>

    {{--Page Content--}}
    <div id="page-content">
        <div class="container-fluid text-center">
            @yield('content')
        </div>
    </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
</body>
</html>