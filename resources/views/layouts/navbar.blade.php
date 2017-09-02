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
            <li class="selected">
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