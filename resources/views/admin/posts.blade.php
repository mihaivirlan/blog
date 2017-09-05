@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <a class="btn btn-default float-left" href="{{route('admin')}}">Go Back</a>
                <br>
                <hr>
                <div class="panel panel-default">
                    <div class="panel-heading"> Total postari  </div>
                    <div class="panel-body">

                        @if (session('message'))
                            <div class=" alert
                            @if(session('success') == true) alert-success
                              @elseif(session('success') == false) alert-error
                            @endif">
                                <ul>
                                    <li>{{ session('message') }}</li>
                                </ul>
                            </div>
                        @endif

                        <div class="col-md-6 col-md-offset-3">
                            <table class="text-center">
                            <tr class="text-center">
                                <td class="text-center"><h4><b>Actiuni postare</h4></td>
                                 <td class="text-center"><h4><b>Titlu postare</h4></td>
                        </div>

                            @forelse($posts as $postare)
                                <tr>
                                    <td style="text-align: center">
                                        <br>
                                        <a class="btn btn-success" href="{{url('admin/posts/edit/'.$postare->id)}}"> Editeaza </a>
                                        <a class="btn btn-danger" href="{{url('admin/posts/remove/'.$postare->id)}}"> Sterge </a>
                                        <br><br>
                                    </td>
                                    <td style="width:20px; word-wrap:break-word" class="text-center">{{$postare->titlu}}</td>
                                </tr>
                            @empty
                                <td colspan="6">Nu sunt noutati</td>
                            @endforelse
                            </table>
                            <hr class="col-md-12" style=" word-wrap: break-word">
                                <div class="col-md-offset-4"> {{ $posts->links() }}</div>
                        </div>


                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
