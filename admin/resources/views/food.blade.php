@extends('layout')

@section('title')
    OnlineOrd Admin
@endsection

@section('header')
    Cписок страв
@endsection

@section('content')
    <div class="container text-center">
        <?php
        try {
            if(DB::connection()->getPdo())
            {
                echo "<h4>Successfully connected to the database => "
                    .DB::connection()->getDatabaseName(). "</h4>";

                $users = DB::select('SELECT * FROM users');
                foreach ($users as $user) {
//                    dd($user);
                    echo $user->Name;
                }

            }
        }
        catch (Exception $e) {
            echo "Unable to connect";
        }
        ?>
    </div>
@endsection
