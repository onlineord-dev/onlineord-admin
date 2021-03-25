@extends('login-layout')

@section('title')
    OnlineOrd Admin
@endsection


@section('fields')
    <form method="POST" action="{{route('organization.login')}}">
        @csrf
        <img class="mb-4" src="img/logo.png" alt="" width="72">
        <h1 class="h3 mb-3 fw-normal">Вхід</h1>

        <input type="email" id="email" class="form-control bottom-corners-0" placeholder="Ел. пошта">
        @error('email')
        <div class="alert alert-danger">{{message}}</div>
        @enderror
        <input type="password" id="password" class="form-control top-corners-0" placeholder="Пароль">
        @error('password')
        <div class="alert alert-danger">{{message}}</div>
        @enderror

        <button class="w-100 btn btn-lg btn-main mt-3" type="submit">Ввійти</button>
        <p class="mt-5 mb-3 text-muted">Не маєте акаунту? <a href="/registration">Створити</a></p>
    </form>
@endsection



