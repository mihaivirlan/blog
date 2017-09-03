<!-- Bootstrap core CSS -->
<link href="{{asset('public/css/app.css')}}" rel="stylesheet">
<link href="{{asset('public/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">

<!-- Custom styles for this template -->
<link href="{{asset('public/css/clean-blog.css')}}" rel="stylesheet">

@include('layouts.navbar')

@section('content')
@endsection
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading"> Administrare </div>
                    <div class="col-md-offset-4 panel-body">
                        <a class="btn btn-success" href="{{route('new')}}"> Adauga postare </a>
                        <a class="btn btn-primary" href="{{route('admin_posts')}}"> Total postari </a>

                    </div>
                </div>
            </div>
        </div>
    </div>

