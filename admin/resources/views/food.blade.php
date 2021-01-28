@extends('layout')

@section('title')
    OnlineOrd Admin
@endsection

@section('content')
    <h1>Cписок страв</h1>
    <?php
        try {
            if(DB::connection()->getPdo())
            {
                echo "Successfully connected to the database => "
                    .DB::connection()->getDatabaseName();
            }
        }
        catch (Exception $e) {
            echo "Unable to connect";
        }
    ?>
@endsection
