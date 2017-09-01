<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'My Blog') }}</title>

    <!-- Bootstrap core CSS -->
    <link href="{{asset('public/css/app.css')}}" rel="stylesheet">
    <link href="{{asset('public/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link href="{{asset('public/vendor/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>

    <!-- Custom styles for this template -->
    <link href="{{asset('public/css/clean-blog.css')}}" rel="stylesheet">

</head>

<body>

@include('layouts.navbar')
@yield('content')
<hr>
<a class="btn btn-default float-left" href="{{route('news')}}">Go Back</a>
<button type="button" class=" button_type pull-right"><a href="#"> Back to top<i class="fa fa-chevron-up"></i> </a></button>


<!-- Footer -->
@include('layouts.footer')

<!-- Bootstrap core JavaScript -->
<script src="{{asset('public/vendor/jquery/jquery.min.js')}}"></script>
<script src="{{asset('public/vendor/popper/popper.min.js')}}"></script>
<script src="{{asset('public/vendor/bootstrap/js/bootstrap.min.js')}}"></script>

<!-- Custom scripts for this template -->
<script src="{{asset('public/js/clean-blog.min.js')}}"></script>
<link rel=" https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js">

</body>

</html>

