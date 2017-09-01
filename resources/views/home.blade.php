@extends('layouts.blog')

@section('content')
    <div class="row">
        <div class="col-lg-8 col-md-10 mx-auto">

            @forelse($posts as $postare)
                <div class="post-preview">
                    <a href="{{url("news/".$postare->id)}}">
                        <h5 class="post-title">
                            {{$postare->titlu}}
                        </h5>
                        <hr>
                        <h3 class="post-subtitle">
                            {{str_limit($postare->continut,100)}}
                        </h3>
                    </a>
                    <p class="post-meta">Postat de catre:<br>
                        <a href="#">{{$postare->autor}}</a>
                        on {{$postare->created_at}}</p>
                </div>
                <hr>
            @empty
                nu sunt noutati
            @endforelse

            <!-- Pager -->
            <div class="clearfix">
                <a class="btn btn-default float-right" href="{{route('news')}}">Mai multe postari >></a>
            </div>
        </div>
    </div>
@endsection