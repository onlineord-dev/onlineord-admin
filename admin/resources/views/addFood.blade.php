@extends('layout')

@section('title')
    OnlineOrd Admin
@endsection

@section('header')
    Додавання нової страви
@endsection

@section('content')
    <div class="container col-md-2" style="font-size:1.4em; margin-top:10%">
    <form method="POST" action="">
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
        <select name="submenu" id="submenu">
        <?php
        $submenus = DB::select('SELECT sm.ID, sm.submenu_name FROM sub_menu sm
                                INNER JOIN menu m
                                ON sm.menu_id = m.ID
                                INNER JOIN organization o on m.Organization_id = o.ID
                                WHERE o.ID = 439');
        foreach ($submenus as $submenu):?>
            <option value="<?php echo $submenu->ID ?>"><?= $submenu->submenu_name?></option>
        <?php endforeach ?>
        </select>
        </div>
        <button type="submit" class="w-100 btn btn-lg btn-main mt-3">Створити</button>
    </form>
    </div>
@endsection
