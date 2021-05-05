@extends('layout')

@section('title')
    OnlineOrd Admin
@endsection

@section('header')
    Ваші меню
@endsection

@section('content')
    <?php
    try {
        if(DB::connection()->getPdo())
        {
            $menus = DB::select('SELECT m.ID, m.Title, m.Description
                                    FROM menu m
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
    <?php foreach ($menus as $menu):?>
    <div class="card shadow-sm m-5">
        <div class="card-body">
            <div class="row mb-5">
                <div class="col">
                    <h1 class="card-title mb-5 display-3"><?= $menu->Title?></h1>
                    <p class="m-0 text-muted">Опис</p>
                    <p class="card-text lead"><?= $menu->Description?></p>
                </div>
                <div class="col">
                    <a href="#" class="btn btn-main float-end"><i class="fal fa-pencil"></i> Редагувати меню</a>
                </div>
            </div>
            <a href="#" class="btn btn-secondary"><i class="fal fa-plus"></i> Додати підменю</a>

            <div class="accordion my-3" id="submenusAccordion">
                <?php
                $submenus = DB::select('SELECT ID, submenu_name FROM sub_menu WHERE menu_id ='.$menu->ID);
                foreach ($submenus as $submenu):?>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="h{{$menu->ID.$submenu->ID}}">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#c{{$menu->ID.$submenu->ID}}" aria-expanded="false" aria-controls="c{{$menu->ID.$submenu->ID}}">
                                <?= $submenu->submenu_name?>
                            </button>
                        </h2>
                        <div id="c{{$menu->ID.$submenu->ID}}" class="accordion-collapse collapse" aria-labelledby="h{{$menu->ID.$submenu->ID}}" data-bs-parent="#submenusAccordion">
                            <div class="accordion-body p-0">
                                <?php
                                $foods = DB::select('SELECT f.ID, f.Price, f.Name, sm.submenu_name, f.Image, f.weight
                                    FROM food f
                                    INNER JOIN sub_menu sm on f.Submenu_id = sm.ID
                                    INNER JOIN menu m on sm.menu_id = m.ID
                                    INNER JOIN organization o on m.Organization_id = o.ID
                                    WHERE f.Submenu_id ='.$submenu->ID);
                                ?>
                                <table class="table table-striped table-hover table-bordered mb-0">
                                    <thead class="table-secondary">
                                    <tr>
                                        <th scope="col">ID</th>
                                        <th scope="col">Назва</th>
                                        <th scope="col">Опис</th>
                                        <th scope="col">Ціна</th>
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
                            </div>
                        </div>
                    </div>
                <?php endforeach;?>
            </div>
        </div>
    </div>
    <?php endforeach;?>
@endsection
