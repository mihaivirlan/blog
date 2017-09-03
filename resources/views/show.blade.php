@extends('layouts.post')

@section('content')
    <a class="btn btn-danger col-md-offset-2" href="{{route('news')}}">Go Back</a>
    <br>
    <hr>
    <br>
    <!-- Page Header -->
    <header width="100px" class="masthead " style= "background-image: url('{{asset('public/images/posts/'.$postare->imagine)}}')">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-10 mx-auto">
                    <div class="post-heading">
                        <h2>{{$postare->titlu}}</h2>
                        <hr style="border: 1px solid">
                        <h4 class="subheading">{{str_limit($postare->continut,400)}}</h4>
                            Postat de
                            <a class="btn btn-primary" href="https://github.com/mihaivirlan">{{$postare->autor}}</a>
                        <div class="btn btn-success"> pe: {{$postare->created_at}}</div>
                            <hr style="border: 1px solid">
                    </div>
                </div>
            </div>
        </div>
    </header>

    <!-- Post Content -->
    <article>
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-10 mx-auto">
                    {{$postare->continut}}
                </div>
            </div>
        </div>
    </article>
<hr>
<br>
    <button class="btn btn-default col-md-0 col-md-offset-3"><a href="#"> Back to top</a></button>
@endsection






