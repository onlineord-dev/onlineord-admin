@extends('layout')

@section('title')
    OnlineOrd Admin
@endsection

@section('header')

        <div>Список страв</div>
        <a href="/addFood" style="position: absolute; top: 0px; right: 220px;">Додати страву</a>

@endsection

@section('content')
        <?php
        try {
            if(DB::connection()->getPdo())
            {
                $foods = DB::select('SELECT f.ID, f.Price, f.Name, sm.submenu_name, f.Image, f.weight
                                    FROM food f
                                    INNER JOIN sub_menu sm on f.Submenu_id = sm.ID
                                    INNER JOIN menu m on sm.menu_id = m.ID
                                    INNER JOIN organization o on m.Organization_id = o.ID
                                    WHERE o.ID = 439');
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
                    <th scope="col">Назва</th>
                    <th scope="col">Опис</th>
                    <th scope="col">Ціна</th>
                    <th scope="col">Категорія</th>
                    <th scope="col">Зображення</th>
                    <th scope="col">Вага</th>
                    <th scope="col"></th>
                </tr>
                </thead>
                <tbody>
                <?php foreach ($foods as $food):?>
                    <tr>
                        <th scope="row"><?=$food->ID?></th>
                        <td><?=$food->Name?></td>
                        <td></td>
                        <td><?=$food->Price?></td>
                        <td><?=$food->submenu_name?></td>
                        <td style="width:200px;"><?=$food->Image?></td>
                        <td><?=$food->weight?></td>
                        <td style="width:220px;">
                            <div class=" food-actions-btn-group">
                                <div class="btn-group" role="group" aria-label="actions">
                                    <a href="{{route('food-update',$food->ID)}}" class="btn btn-sm btn-main">Редагувати</a>
                                    <a href="{{route('food-delete',$food->ID)}}" class="btn btn-sm btn-danger">Видалити</a>
                                </div>
                            </div>
                        </td>
                    </tr>
                <?php endforeach ?>
                </tbody>
            </table>
@endsection
