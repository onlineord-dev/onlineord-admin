@extends('login-layout')

@section('title')
    OnlineOrd Admin
@endsection

@section('fields')
    <form method="POST" action="{{ route('login') }}">
        @csrf

        <img class="mb-4" src="img/logo.png" alt="" width="72">
        <h1 class="h3 mb-3 fw-normal">Вхід</h1>


        <input id="email" type="email" placeholder="Ел. пошта" class="form-control bottom-corners-0 @error('email') is-invalid @enderror" name="email" required autocomplete="username" autofocus>
        @error('email')
        <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
        @enderror


        <input id="password" type="password" placeholder="Пароль" class="form-control bottom-corners-0 @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
        @error('password')
        <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
        @enderror


        <button type="submit" class="w-100 btn btn-lg btn-main mt-3">Ввійти</button>
        <p class="mt-5 mb-3 text-muted">Не маєте акаунту? <a href="/register">Створити</a></p>
    </form>
@endsection


