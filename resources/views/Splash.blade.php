<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>

    <title>Logo goes here</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet" type="text/css">
    <style>
        .login-form {

            width: 340px;

            margin: 30px auto;

        }

        .login-form form {

            margin-bottom: 15px;

            background: #f7f7f7;

            box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);

            padding: 30px;

        }

        .login-form h2 {

            margin: 0 0 15px;

        }

        .login-form .hint-text {

            color: #777;

            padding-bottom: 15px;

            text-align: center;

        }

        .form-control, .btn {

            min-height: 38px;

            border-radius: 2px;

        }

        .login-btn {

            font-size: 15px;

            font-weight: bold;

        }

        .or-seperator {

            margin: 20px 0 10px;

            text-align: center;

            border-top: 1px solid #ccc;

        }

        .or-seperator i {

            padding: 0 10px;

            background: #f7f7f7;

            position: relative;

            top: -11px;

            z-index: 1;

        }

        .social-btn .btn {

            margin: 10px 0;

            font-size: 15px;

            text-align: left;

            line-height: 24px;

        }

        .social-btn .btn i {

            float: left;

            margin: 4px 15px  0 5px;

            min-width: 15px;

        }

        .input-group-addon .fa{

            font-size: 18px;

        }
    </style>
</head>
<body>
@extends('layouts.app')

@section('content')
   <!-- <form class="form-horizontal" role="form" method="POST" action="{{ url('/register') }}">

 </div>
        <hr>


        </div>
    </form>-->
   <div class="login-form">

       <form action="/examples/actions/confirmation.php" method="post">

           <h2 class="text-center">Sign in</h2>

           <div class="text-center social-btn">

               <a href="{{ url('Auth\LoginController@redirectToProviderOne')}}" class="btn btn-primary btn-block"><i class="fa fa-facebook"></i> Sign in with <b>Facebook</b></a>

               <a href="{{ url('Auth\LoginController@redirectToProvider')}}" class="btn btn-info btn-block"><i class="fa fa-twitter"></i> Sign in with <b>Twitter</b></a>

               <a href="{{ url('Auth\LoginController@redirectToProviderTwo')}}" class="btn btn-danger btn-block"><i class="fa fa-google"></i> Sign in with <b>Google</b></a>

               <a href="{{ url('Auth\LoginController@redirectToProviderThree')}}" class="btn btn-dark btn-block"><i class="fa fa-linkedin"></i> Sign in with <b>LinkedIn</b></a>
           </div>

           <div class="or-seperator"><i>or</i></div>

           <div class="form-group">

               <div class="input-group">

                   <span class="input-group-addon"><i class="fa fa-user"></i></span>

                   <input type="text" class="form-control" name="username" placeholder="Username" required="required">

               </div>

           </div>

           <div class="form-group">

               <div class="input-group">

                   <span class="input-group-addon"><i class="fa fa-lock"></i></span>

                   <input type="password" class="form-control" name="password" placeholder="Password" required="required">

               </div>

           </div>

           <div class="form-group">

               <button type="submit" class="btn btn-success btn-block login-btn">Sign in</button>

           </div>

           <div class="clearfix">

               <label class="pull-left checkbox-inline"><input type="checkbox"> Remember me</label>

               <a href="#" class="pull-right text-success">Forgot Password?</a>

           </div>



       </form>

       <div class="hint-text small">Don't have an account? <a href="#" class="text-success">Register Now!</a></div>

   </div>
@endsection
<
</body>
</html>
