<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>

    <title>Logo goes here</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet" type="text/css">
    <style>

    </style>
</head>
<body>
@extends('layouts.app')

@section('content')
        <div class="row">

            <form class="col s12" >
                <div class="row">
                    <div class="input-field col s12">
                        <input id="password" type="password" class="validate" placeholder='password'>
                    </div>
                </div>

                <div class="row">
                        <div class="input-field col s12">
                        <input id="email" type="email" class="validate" placeholder='email'>
                    </div>
                    <button type='submit' onclick='signUp()' class='btn brn-primary'>Submit</button>
                </div>
            </form>
    </div>
@endsection
<
</body>
</html>
