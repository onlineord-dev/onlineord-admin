@extends('layout')

@section('title')
    OnlineOrd Admin
@endsection

@section('header')
    Редагування страви
@endsection

@section('content')
    <div class="container" style="font-size:1.4em; margin-top:10%">
        <div class="row">
            <div class="col-md-6 col-11 mx-auto">
                <form method="POST" action="{{route('food-update-submit', $data->ID)}}">
                    @csrf
                    <div class="row">
                        <div class="col-4">
                            <label class="col-form-label">Назва страви</label>
                        </div>
                        <div class="col">
                            <input id='name' class="form-control" value="{{$data->Name}}" name="name" placeholder="">
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-4">
                            <label class="col-form-label">Ціна</label>
                        </div>
                        <div class="col">
                            <input id='price' value="{{$data->Price}}" name="price" placeholder="" class="form-control">
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-4">
                            <label class="col-form-label">Вага</label>
                        </div>
                        <div class="col">
                            <input id='weight' value="{{$data->weight}}" name="weight" placeholder="" class="form-control">
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-4">
                            <label class="col-form-label">Зображення</label>
                        </div>
                        <div class="col">
                            <input id='image' name="image" value="{{$data->Image}}" placeholder="" class="form-control">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-4">
                            <label class="col-form-label">Підменю</label>
                        </div>
                        <div class="col">
                            <select name="submenu" id="submenu" class="form-control">
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
                    </div>
                    <div class="text-end">
                        <button type="submit" class="btn btn-main mt-3">Підтвердити</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
