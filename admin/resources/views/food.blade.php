@extends('layout')

@section('title')
    OnlineOrd Admin
@endsection

@section('content')
    <div class="container text-center">
        <h1 class="p-5">Cписок страв</h1>
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
    </div>
@endsection
