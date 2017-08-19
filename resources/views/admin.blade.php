@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading"> Administrare </div>
                    <div class="panel-body">
                        <a class="btn btn-success" href="{{route('new')}}"> Add post </a>
                        <a class="btn btn-primary" href="{{route('admin_posts')}}"> All posts </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
