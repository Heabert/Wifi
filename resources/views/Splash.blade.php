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
    <form class="form-horizontal" role="form" method="POST" action="{{ url('/register') }}">
        <!--Other form fields above the button-->

        </div>
        <hr>
        <div class="form-group">
            <div class="col-md-6 col-md-offset-4">
                <a href="{{ url('/auth/google') }}" class="btn btn-google"><i class="fa fa-google"></i> Google</a>
                <a href="{{ url('/auth/twitter') }}" class="btn btn-twitter"><i class="fa fa-twitter"></i> Twitter</a>
                <a href="{{ url('/auth/facebook') }}" class="btn btn-facebook"><i class="fa fa-facebook"></i> Facebook</a>
                <a href="{{ url('/auth/linkedin') }}" class="btn btn-linkedin"><i class="fa fa-linkedin"></i> Linkedin</a>
            </div>
        </div>
    </form>
@endsection
<
</body>
</html>
