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
    <div class="bg-light border-right" id="sidebar-wrapper">
        <div class="sidebar-heading">OnlineOrd Admin</div>
        <div class="list-group list-group-flush">
            <a href="/" class="list-group-item list-group-item-action bg-light">Головна</a>
            <a href="/profile" class="list-group-item list-group-item-action bg-light">Профіль</a>
            <a href="/menu" class="list-group-item list-group-item-action bg-light">Список Меню</a>
            <a href="/food" class="list-group-item list-group-item-action bg-light">Страви</a>
        </div>
    </div>{{--#sidebar-wrapper--}}


    {{--Page Content--}}
    <div id="page-content-wrapper">
        <nav class="navbar navbar-expand-lg navbar-light bg-light border-bottom">
            <ul class="navbar-nav ml-auto mt-2 mt-lg-0">
                <a href="/" class="btn btn-primary">Sign Out</a>
            </ul>
        </nav>

        <div class="container-fluid">
            @yield('content')
        </div>
    </div>{{--#page-content-wrapper--}}
</div>{{--#wrapper--}}
</body>
</html>
