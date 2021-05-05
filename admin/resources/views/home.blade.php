@extends('layout')

@section('title')
    OnlineOrd Admin
@endsection

@section('header')
    Головна сторінка
@endsection

@section('content')
    <h1 class="p-5 text-center display-1">Ласкаво просимо до OnlineOrd Admin</h1>
    <div class="row justify-content-center">
        <div class="col-3">
            <div class="card">
                <div class="card-body">
                    <div class="mb-3">
                        <i class="fal fa-user fa-2x circle-icon"></i> Заповніть дані про заклад
                    </div>
                    <div class="mb-3">
                        <i class="fal fa-utensils fa-2x circle-icon"></i> Створіть меню
                    </div>
                    <div class="mb-3">
                        <i class="fal fa-soup fa-2x circle-icon"></i> Додайте страви
                    </div>
                    <div>
                        <i class="fal fa-qrcode fa-2x circle-icon"></i> Роздрукуйте QR-код
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
