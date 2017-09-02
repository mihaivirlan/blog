
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

@include('layouts.navbar')
@include('layouts.header')

<!-- Main Content -->
    @yield('content')
@include('layouts.footer')


