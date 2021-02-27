@extends('login-layout')

@section('title')
    OnlineOrd Admin
@endsection

@section('fields')
    <form method="POST" action="{{route('organization.registration')}}">
        @csrf
        <img class="mb-4" src="img/logo.png" alt="" width="72">
        <h1 class="h3 mb-3 fw-normal">Реєстрація організації</h1>

        <input type="text" id="name" class="form-control bottom-corners-0" placeholder="Назва організації">
        <input type="text" id="address" class="form-control corners-0" placeholder="Адреса">
        <input type="email" id="email" class="form-control corners-0" placeholder="Ел. пошта">
        <input type="text" id="phone" class="form-control top-corners-0 mb-1" placeholder="Номер телефону">

        <input type="password" id="password" class="form-control bottom-corners-0" placeholder="Пароль">
        <input type="password" id="passwordRepeat" class="form-control top-corners-0" placeholder="Підтвердження паролю">

        <button class="w-100 btn btn-lg btn-main mt-3" type="submit">Зареєструвати</button>
        <p class="mt-5 mb-3 text-muted">Вже маєте акаунт? <a href="/login">Ввійти</a></p>
    </form>
@endsection
