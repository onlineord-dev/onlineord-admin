<?php
    function showPassForm() {
        $document->getElementById('passChange')->setAttribute("visibility","visible");
    }
?>

@extends('layout')

@section('title')
    Профіль
@endsection

@section('header')
    Профіль організації
@endsection

@section('content')
    <div class="container col-md-4" style="font-size:1.4em; margin-top:15%">
        <div class="row justify-content-between">
            <p class="col-md-6 p-3">Назва Організації: </p>
            <div class="col-md-6 p-3"><input type="text" id="orgName" class="form-control" value="Online Order System"></div>
        </div>
        <div class="row justify-content-between">
            <p class="col-md-6 p-3">Адреса: </p>
            <div class="col-md-6 p-3"><input type="text" id="orgName" class="form-control" value="Львів, вул. Шевченка 246"></div>
        </div>
        <div class="row justify-content-between">
            <p class="col-md-6 p-3">Електронна Пошта: </p>
            <div class="col-md-6 p-3"><input type="text" id="orgName" class="form-control" value="onlineorder@gmail.com"></div>
        </div>
        <div class="row justify-content-between">
            <p class="col-md-6 p-3">Номер телефону: </p>
            <div class="col-md-6 p-3"><input type="text" id="orgName" class="form-control" value="0987654321"></div>
        </div>
        <div class="row justify-content-between">
            <div class="col-md-6 p-3 text-center"><button action="showPassForm()" class="btn bg-dark text-white">Змінити пароль</button></div>
            <div class="col-md-6 p-3 text-center"><button action="showPassForm()" class="btn bg-dark text-white">Підтвердити зміни</button></div>
        </div>
        <!--
                <div id="passChange" name="passChange" class="p-3" style="font-size:0.8em">
                    <label class="mt-3">Введіть старий пароль</label><br />
                    <input type="text" class="mt-1 form-control" id="oldPass" name="oldPass" placeholder="Enter Old Password"><br />
                    <label class="mt-3">Введіть новий пароль</label><br />
                    <input type="text" class="mt-1 form-control" id="newPass" name="newPass" placeholder="Enter New Password"><br />
                    <label class="mt-3">Повторіть новий пароль</label><br />
                    <input type="text" class="mt-1 form-control" id="repeatPass" name="repeatPass" placeholder="Repeat New Password"><br/>
                    <input class="mt-3 btn btn-dark"type="button" name="submitChange" id="submitChange" value="Змінити" />
                </div>
        -->
    </div>
@endsection
