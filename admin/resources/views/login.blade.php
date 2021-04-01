@extends('login-layout')

@section('title')
    OnlineOrd Admin
@endsection

@section('fields')
    <form method="POST" action="{{route('login')}}">
        <img class="mb-4" src="img/logo.png" alt="" width="72">
        <h1 class="h3 mb-3 fw-normal">Вхід</h1>

        <input type="email" id="inputEmail" class="form-control bottom-corners-0" placeholder="Ел. пошта" value="">
        <input type="password" id="inputPassword" class="form-control top-corners-0" placeholder="Пароль" valut="">

        <button type="submit" class="w-100 btn btn-lg btn-main mt-3">Ввійти</button>
        <p class="mt-5 mb-3 text-muted">Не маєте акаунту? <a href="/registration">Створити</a></p>
    </form>
@endsection


