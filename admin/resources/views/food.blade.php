@extends('layout')

@section('title')
    OnlineOrd Admin
@endsection

@section('content')
    <h1>Cписок страв</h1>
    <?php
        if(DB::connection()->getPdo())
        {
            echo "Successfully connected to the database => "
                .DB::connection()->getDatabaseName();
        }
    ?>
@endsection
