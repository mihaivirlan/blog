    <!-- Bootstrap core CSS -->
    <link href="{{asset('public/css/app.css')}}" rel="stylesheet">
    <link href="{{asset('public/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="{{asset('public/css/clean-blog.css')}}" rel="stylesheet">

@include('layouts.navbar')

    <div class="row">
        <div class="col-lg-8 col-md-10 mx-auto">
            @forelse($posts as $postare)
                <div class="post-preview">
                    <a href="{{url("news/".$postare->id)}}">
                        <h2 class="post-title">
                            {{$postare->titlu}}
                        </h2>
                        <h3 class="post-subtitle">
                            {{str_limit($postare->continut,400)}}
                        </h3>
                    </a>
                    <p class="post-meta">Posted by
                        <a href="#">{{$postare->autor}}</a>
                        on {{$postare->created_at}}</p>
                </div>
                <hr>
            @empty
                nu sunt noutati
        @endforelse
                {{ $posts->links() }}
        </div>
    </div>

    @yield('content')

    @include('layouts.footer')
