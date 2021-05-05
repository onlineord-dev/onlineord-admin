@extends('login-layout')

@section('title')
    OnlineOrd Admin
@endsection

@section('fields')
    <form method="POST" action="{{route('register')}}">
        @csrf

        <img class="mb-4" src="img/logo.png" alt="" width="72">
        <h1 class="h3 mb-3 fw-normal">Реєстрація організації</h1>


        <input id="name" type="text" placeholder="Назва організації" class="form-control bottom-corners-0 @error('name') is-invalid @enderror" name="name" required autocomplete="name" autofocus>
        @error('name')
        <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
        @enderror


        <input id="email" type="email" placeholder="Ел. пошта" class="form-control bottom-corners-0 @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">
        @error('email')
        <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
        @enderror


        <input type="text" id="address" name="address" class="form-control corners-0" placeholder="Адреса">
        <input type="text" id="phone_number" name="phone_number" class="form-control top-corners-0 mb-1" placeholder="Номер телефону">


        <input id="password" placeholder="Пароль" type="password" class="form-control bottom-corners-0 @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
        @error('password')
        <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
        @enderror


        <input id="password-confirm" placeholder="Підтвердження паролю" type="password" class="form-control bottom-corners-0" name="password_confirmation" required autocomplete="new-password">

        <button type="submit" class="w-100 btn btn-lg btn-main mt-3">Зареєструвати</button>
        <p class="mt-5 mb-3 text-muted">Вже маєте акаунт? <a href="/login">Ввійти</a></p>
    </form>
@endsection
