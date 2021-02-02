@extends('login-layout')

@section('title')
    OnlineOrd Admin
@endsection

@section('header')
    Реєстрація організації
@endsection

@section('fields')
    <input type="text" id="inputEmail" class="form-control bottom-corners-0" placeholder="Назва організації">
    <input type="text" id="inputPassword" class="form-control corners-0" placeholder="Адреса">
    <input type="email" id="inputEmail" class="form-control corners-0" placeholder="Ел. пошта">
    <input type="text" id="inputEmail" class="form-control top-corners-0 mb-1" placeholder="Номер телефону">

    <input type="password" id="inputPassword" class="form-control bottom-corners-0" placeholder="Пароль">
    <input type="password" id="inputPassword" class="form-control top-corners-0" placeholder="Підтвердження паролю">
@endsection

@section('button-label')
    Зареєструвати
@endsection

@section('link')
    Вже маєте акаунт? <a href="/login">Ввійти</a>
@endsection
