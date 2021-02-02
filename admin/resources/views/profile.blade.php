<?php
    function showPassForm() {
        $document->getElementById('passChange')->setAttribute("visibility","visible");
    }
?>

@extends('layout')

@section('title')
    Профіль
@endsection

@section('content')
    <h1 class="p-5 text-center">Ваш Профіль</h1>
    <div class="container col-md-4" style="font-size:1.4em">
        <div class="row justify-content-between">
            <p class="col-md-6 p-3">Назва Організації: </p>
            <div class="col-md-6 p-3"><input type="text" id="orgName" value="Online Order System"></div>
        </div>
        <div class="row justify-content-between">
            <p class="col-md-6 p-3">Адреса: </p>
            <div class="col-md-6 p-3"><input type="text" id="orgName" value="Львів, вул. Шевченка 246"></div>
        </div>
        <div class="row justify-content-between">
            <p class="col-md-6 p-3">Електронна Пошта: </p>
            <div class="col-md-6 p-3"><input type="text" id="orgName" value="onlineorder@gmail.com"></div>
        </div>
        <div class="row justify-content-between">
            <p class="col-md-6 p-3">Номер телефону: </p>
            <div class="col-md-6 p-3"><input type="text" id="orgName" value="0987654321"></div>
        </div>
        <div class="row justify-content-between">
            <div class="col-md-6 p-3 text-center"><button action="showPassForm()" class="btn bg-dark text-white">Змінити пароль</button></div>
            <div class="col-md-6 p-3 text-center"><button action="showPassForm()" class="btn bg-dark text-white">Підтвердити зміни</button></div>
        </div>
        
        <div id="passChange" name="passChange" class="p-3" style="font-size:0.8em">
            <label class="mt-3">Введіть старий пароль</label><br />
            <input type="text" class="mt-1" id="oldPass" name="oldPass" placeholder="Enter Old Password"><br />
            <label class="mt-3">Введіть новий пароль</label><br />
            <input type="text" class="mt-1" id="newPass" name="newPass" placeholder="Enter New Password"><br />
            <label class="mt-3">Повторіть новий пароль</label><br />
            <input type="text" class="mt-1" id="repeatPass" name="repeatPass" placeholder="Repeat New Password"><br/>
            <input class="mt-3"type="button" name="submitChange" id="submitChange" value="Змінити" />
        </div>
    </div>
@endsection
