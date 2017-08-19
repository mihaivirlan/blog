@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading"> Add Post  </div>
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

                        <table>
                            <tr>
                                <td>Actiuni</td>
                                <td>Titlu</td>
                            </tr>

                            @forelse($posts as $postare)

                                <tr>
                                    <td style="padding-right: 10px;">
                                        <a class="btn btn-success" href="{{url('admin/posts/edit/'.$postare->id)}}"> editare </a>
                                        <a class="btn btn-warning" href="{{url('admin/posts/remove/'.$postare->id)}}"> sterge </a>
                                    </td>
                                    <td>{{$postare->titlu}}</td>
                                </tr>

                            @empty

                                <td colspan="2">nu sunt noutati</td>
                            @endforelse

                        </table>


                        {{ $posts->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>



@endsection
