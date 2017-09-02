

    <!-- Bootstrap core CSS -->
    <link href="{{asset('public/css/app.css')}}" rel="stylesheet">
    <link href="{{asset('public/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link href="{{asset('public/vendor/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>

    <!-- Custom styles for this template -->
    <link href="{{asset('public/css/clean-blog.css')}}" rel="stylesheet">

@include('layouts.navbar')
@yield('content')
<hr>
<a class="btn btn-default float-left" href="{{route('news')}}">Go Back</a>
<button type="button" class=" button_type pull-right"><a href="#"> Back to top<i class="fa fa-chevron-up"></i> </a></button>

<!-- Footer -->
@include('layouts.footer')

