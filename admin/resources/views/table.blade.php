@extends('layout')

@section('title')
    Столи
@endsection

@section('header')
    <div>
        Список столиків
    </div>
    <a href="/addTable" style="position: absolute; top: 0px; right: 220px;">Додати столик</a>
@endsection

@section('content')
    <?php
    try {
        if(DB::connection()->getPdo())
        {
            $tables = DB::select('SELECT * FROM tables WHERE organization_id = 439');
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
            <th scope="col">Номер</th>
            <th scope="col">Статус</th>
            <th scope="col"></th>
        </tr>
        </thead>
        <tbody>
        <?php foreach ($tables as $table):?>
        <tr>
            <th scope="row"><?=$table->ID?></th>
            <td><?=$table->tableNo?></td>
            <td><?=$table->tableStatus?></td>
            <td style="width:520px;">
                <div class="food-actions-btn-group">
                    <div class="btn-group" role="group" aria-label="actions">
                        <a href="#" class="btn btn-sm btn-main"><i class="fal fa-qrcode"></i> Переглянути QR</a>
                        <a href="#" class="btn btn-sm btn-success"><i class="fal fa-arrow-to-bottom"></i> Завантажити QR</a>
                        <a href="#" class="btn btn-sm btn-danger"><i class="fal fa-trash"></i> Видалити</a>
                    </div>
                </div>
            </td>
        </tr>
        <?php endforeach ?>
        </tbody>
    </table>
@endsection
