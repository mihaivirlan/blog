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

<nav class="navbar navbar-expand-lg navbar-grey">
    <a class="navbar-brand" href="{{url('/')}}">Blogul meu</a>
    <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive"
            aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        Menu
        <i class="fa fa-bars"></i>
    </button>
    <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
            <li>
                <a class="nav-link" href="{{url('/')}}">Home</a>
            </li>
            <li class="">
                <a class="nav-link" href="{{route('about')}}">About</a>
            </li>
            <li class="">
                <a class="nav-link" href="{{route('contact')}}">Contact</a>
            </li>

            @if (Auth::guest())
                <li class=""><a class="nav-link" href="{{ route('login') }}">Log in</a></li>
                <li class=""><a class="nav-link" href="{{ route('register') }}">Register</a></li>
            @else

                @if(auth()->user()->is_admin == 1)
                    <li class="">
                        <a class="nav-link" href="{{route('admin')}}">Administrare</a>
                    </li>
                @endif

                <li class="">

                    <a class="nav-link" href="{{ route('logout') }}"
                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                        ({{auth()->user()->name}}) Log out
                    </a>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        {{ csrf_field() }}
                    </form>
                </li>
            @endif

        </ul>
    </div>
</nav>
@include('layouts.header')
@yield('content')
<!-- Footer -->
<footer>
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-10 mx-auto">
                <ul class="list-inline text-center">
                    <li class="list-inline-item">
                        <a href="https://twitter.com/">
                  <span class="fa-stack fa-lg">
                    <i class="fa fa-circle fa-stack-2x"></i>
                    <i class="fa fa-twitter fa-stack-1x fa-inverse"></i>
                  </span>
                        </a>
                    </li>
                    <li class="list-inline-item">
                        <a href="https://www.facebook.com/Mihai Virlan">
                  <span class="fa-stack fa-lg">
                    <i class="fa fa-circle fa-stack-2x"></i>
                    <i class="fa fa-facebook fa-stack-1x fa-inverse"></i>
                  </span>
                        </a>
                    </li>
                    <li class="list-inline-item">
                        <a href="https://github.com/mihaivirlan">
                  <span class="fa-stack fa-lg">
                    <i class="fa fa-circle fa-stack-2x"></i>
                    <i class="fa fa-github fa-stack-1x fa-inverse"></i>
                  </span>
                        </a>
                    </li>
                </ul>
                <div class="logo_jos text-center">Copyright &copy; Your Website 2017</div>
            </div>
        </div>
    </div>
</footer>

<!-- Scripts -->
<script src="{{ asset('public/js/app.js') }}"></script>






