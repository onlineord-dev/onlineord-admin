@extends('login-layout')

@section('title')
    OnlineOrd Admin
@endsection

@section('header')
    Вхід
@endsection

@section('fields')
    <input type="email" id="inputEmail" class="form-control bottom-corners-0" placeholder="Ел. пошта">
    <input type="password" id="inputPassword" class="form-control top-corners-0" placeholder="Пароль">
@endsection

@section('button-label')
    Ввійти
@endsection

@section('link')
    Не маєте акаунту? <a href="/registration">Створити</a>
@endsection
