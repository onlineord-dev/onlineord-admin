@extends('layout')

@section('title')
    OnlineOrd Admin
@endsection

@section('header')
    Додавання нової страви
@endsection

@section('content')
    <div class="container col-md-2" style="font-size:1.4em; margin-top:10%">
    <form method="POST" action="">
        @csrf
        <div class="row justify-content-between" style="margin-top:15px">
        <label>Назва підменю</label>
        <input id='name' name="name" placeholder="">
        </div>

        <button type="submit" class="w-100 btn btn-lg btn-main mt-3">Створити</button>
    </form>
    </div>
@endsection
