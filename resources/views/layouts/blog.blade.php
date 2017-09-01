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
    <link href="{{asset('public/css/style.css')}}" rel="stylesheet">
    <link href="{{asset('public/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">


    <!-- Custom fonts for this template -->
    <link href="{{asset('public/vendor/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Bitter:bold">
    <!-- Custom styles for this template -->
    <link href="{{asset('public/css/clean-blog.css')}}" rel="stylesheet">

</head>

<body>
@include('layouts.navbar')
<!-- Page Header -->
<header class="masthead" style="height: 400px; background-image: url('{{asset('public/images/home-bg.jpg')}}')">
    <div class="head_style container">
        <div class="row">
            <div class="col-lg-12 col-md-2 mx-auto">
                <div class="site-heading">
                    <h2>Blogul meu</h2>
                    <span class="subheading">Acesta este un blog personalizat</span>
                </div>
            </div>
        </div>
    </div>
</header>

<!-- Main Content -->
    @yield('content')

@include('layouts.footer')
<!-- Bootstrap core JavaScript -->
<script src="{{asset('public/vendor/jquery/jquery.min.js')}}"></script>
<script src="{{asset('public/vendor/popper/popper.min.js')}}"></script>
<script src="{{asset('public/vendor/bootstrap/js/bootstrap.min.js')}}"></script>
<link rel=" https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js">
<!-- Custom scripts for this template -->
<script src="{{asset('public/js/clean-blog.min.js')}}"></script>

</body>
</html>

