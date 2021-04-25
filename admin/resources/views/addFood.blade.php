@extends('layout')

@section('title')
    OnlineOrd Admin
@endsection

@section('header')
    Додавання нової страви
@endsection

@section('content')
    <div class="container col-md-2" style="font-size:1.4em; margin-top:10%">
    <form method="POST" action="{{ route('login') }}">
        @csrf
        <div class="row justify-content-between" style="margin-top:15px">
        <label>Назва страви</label>
        <input id='name' name="name" placeholder="">
        </div>

        <div class="row justify-content-between" style="margin-top:15px">
        <label>Ціна</label>
        <input id='price' name="price" placeholder="">
        </div>

        <div class="row justify-content-between" style="margin-top:15px">
        <label>Вага</label>
        <input id='weight' name="weight" placeholder="">
        </div>

        <div class="row justify-content-between" style="margin-top:15px">
        <label>Зображення</label>
        <input id='img' name="img" placeholder="">
        </div>

        <div class="row justify-content-between" style="margin-top:15px">
        <label>Підменю</label>
        <input id='submenu' name="submenu" placeholder="">
        </div>
        <button type="submit" class="w-100 btn btn-lg btn-main mt-3">Створити</button>
    </form>
    </div>
@endsection
