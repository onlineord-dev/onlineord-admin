@extends('layout')

@section('title')
    OnlineOrd Admin
@endsection

@section('header')
    Редагування страви
@endsection

@section('content')
    <div class="container col-md-2" style="font-size:1.4em; margin-top:10%">
    <form method="POST" action="">
        @csrf
        <div class="row justify-content-between" style="margin-top:15px">
        <label>Назва страви</label>
        <input id='name' value="{{$data->Name}}" name="name" placeholder="">
        </div>

        <div class="row justify-content-between" style="margin-top:15px">
        <label>Ціна</label>
        <input id='price' value="{{$data->Price}}" name="price" placeholder="">
        </div>

        <div class="row justify-content-between" style="margin-top:15px">
        <label>Вага</label>
        <input id='weight' value="{{$data->weight}}" name="weight" placeholder="">
        </div>

        <div class="row justify-content-between" style="margin-top:15px">
        <label>Зображення</label>
        <input id='img' name="img" value="{{$data->Image}}" placeholder="">
        </div>

        <div class="row justify-content-between" style="margin-top:15px">
        <label>Підменю</label>
        <input id='submenu' name="submenu" value="{{$data->Submenu_id}}" placeholder="">
        </div>
        <button type="submit" class="w-100 btn btn-lg btn-main mt-3">Підтвердити</button>
    </form>
    </div>
@endsection
