@extends('layout')

@section('title')
    OnlineOrd Admin
@endsection

@section('header')

        <div>Список страв</div>
        <a href="/addFood" style="margin-left:20px;">Додати страву</a>

@endsection

@section('content')
        <?php
        try {
            if(DB::connection()->getPdo())
            {
                $foods = DB::select('SELECT * FROM food');
            }
        }
        catch (Exception $e) { ?>
            <div class="card border-danger m-3 text-white bg-danger">
                <div class="card-header">
                    Неможливо підключитись до БД
                </div>
                <div class="card-body">
                    <p class="card-text">Виникла помилка при підключенні до бази даних OnlineOrd Admin.</p>
                </div>
            </div>
        <?php
        }
        ?>
            <table class="table table-striped table-hover table-bordered mb-0">
                <thead class="table-secondary">
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Price</th>
                    <th scope="col">Name</th>
                    <th scope="col">Submenu</th>
                    <th scope="col">Image</th>
                    <th scope="col">Weight</th>
                    <th scope="col"></th>
                    <th scope="col"></th>
                </tr>
                </thead>
                <tbody>
                <?php foreach ($foods as $food): ?>
                    <tr>
                        <th scope="row"><?=$food->ID?></th>
                        <td><?=$food->Price?></td>
                        <td><?=$food->Name?></td>
                        <td><?=$food->Submenu_id?></td>
                        <td><?=$food->Image?></td>
                        <td><?=$food->weight?></td>
                        <td style="width:110px"><a href="{{route('food-update',$food->ID)}}"><button class="w-100 btn btn-lg btn-main mt-3">Редагувати</button></a></td>
                        <td style="width:110px;"><a href="{{route('food-delete',$food->ID)}}"><button class="w-100 btn btn-lg mt-3 btn-danger">Видалити</button></a></td>
{{--                        <th scope="row"><?=$food->ID?></th>--}}
{{--                        <td><?=$food->Email?></td>--}}
{{--                        <td><?=$food->Name?></td>--}}
{{--                        <td><?=$food->Surname?></td>--}}
{{--                        <td><?=$food->Passwords?></td>--}}
{{--                        <td><?=$food->Phone_number?></td>--}}
                    </tr>
                <?php endforeach ?>
                </tbody>
            </table>
@endsection
