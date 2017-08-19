@extends('layouts.post')

@section('content')

    <!-- Page Header -->
    <header class="masthead" style="background-image: url('{{asset('public/images/posts/'.$postare->imagine)}}')">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-10 mx-auto">
                    <div class="post-heading">
                        <h1>{{$postare->titlu}}</h1>
                        <h2 class="subheading">{{str_limit($postare->continut,100)}}</h2>
                        <span class="meta">Posted by
                <a href="#">{{$postare->autor}}</a>
                on {{$postare->created_at}}</span>
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

@endsection



