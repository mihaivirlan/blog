@extends('layouts.app')

@section('content')

    <div class="row noutati">
        <div class="col-lg-8 col-md-10 mx-auto">
            @forelse($posts as $postare)
                <div class="post-preview">
                    <a href="{{url("news/".$postare->id)}}">
                        <h3 style="word-wrap:break-word" class="post-title">
                            {{$postare->titlu}} <a class="btn btn-danger col-md-offset-0" href="{{url("news/".$postare->id)}}">Read more</a>
                            <hr>
                        </h3st>
                        <h4 style="word-wrap:break-word" class="post-subtitle">
                            {{str_limit($postare->continut,400)}}
                        </h4>
                    </a>

                    <h5>Postat de
                    <a class="btn btn-primary" href="https://github.com/mihaivirlan">{{$postare->autor}}</a>
                    <div class="btn btn-success"> pe: {{$postare->created_at}}</div>
                </div>
                <hr>
                <br>
            @empty
                <div class="text-center">nu sunt noutati</div>>
        @endforelse
                {{ $posts->links() }}
        </div>
    </div>
    <br>
    <button class="btn btn-default col-md-0 col-md-offset-2"><a href="#">Mergi sus</a></button>
    <hr>

@endsection

