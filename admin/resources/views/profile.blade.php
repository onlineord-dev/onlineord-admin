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
    <?php
            $organization = DB::table('organization')->where('ID', 439)->first()
    ?>
    <form method="POST" action="{{route('profile-update')}}">
        @csrf
    <div class="container col-md-4" style="font-size:1.4em; margin-top:15%">
        <div class="row justify-content-between">
            <p class="col-md-6 p-3">Назва Організації: </p>
            <div class="col-md-6 p-3"><input type="text" id="orgName" class="form-control" value="{{$organization->Name}}"></div>
        </div>
        <div class="row justify-content-between">
            <p class="col-md-6 p-3">Адреса: </p>
            <div class="col-md-6 p-3"><input type="text" id="orgAddress" class="form-control" value="{{$organization->Address}}"></div>
        </div>
        <div class="row justify-content-between">
            <p class="col-md-6 p-3">Електронна Пошта: </p>
            <div class="col-md-6 p-3"><input type="text" id="orgemail" class="form-control" value="{{$organization->email}}"></div>
        </div>
        <div class="row justify-content-between">
            <p class="col-md-6 p-3">Номер телефону: </p>
            <div class="col-md-6 p-3"><input type="text" id="orgPhone_number" class="form-control" value="{{$organization->Phone_number}}"></div>
        </div>
        <div class="row justify-content-between">
            <div class="col-md-6 p-3 text-center"><button type="submit" class="btn bg-dark text-white">Підтвердити зміни</button></div>
        </div>
    </div>
    </form>
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

@endsection
