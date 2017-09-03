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

                        <div class="col-md-12 col-md-offset-4">
                            <table>
                            <tr>
                                <td><h4><b>Actiuni postare</h4></td></div>
                            <td class="pull-right"><h4><b>Titlu postare</h4></td>


                            </tr>

                            @forelse($posts as $postare)
                                <tr>
                                    <td style="padding-right: 10px;">
                                        <br>
                                        <a class="btn btn-success" href="{{url('admin/posts/edit/'.$postare->id)}}"> Editeaza </a>
                                        <a class="btn btn-warning" href="{{url('admin/posts/remove/'.$postare->id)}}"> Sterge </a>
                                        <br><br>
                                    </td>
                                    <td>{{$postare->titlu}}</td>
                                </tr>
                            @empty
                                <td colspan="2">Nu sunt noutati</td>
                            @endforelse
                            </table>
                        </div>

                        {{ $posts->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
