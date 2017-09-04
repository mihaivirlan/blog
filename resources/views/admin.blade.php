@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading"> Administrare </div>
                    <div class="text-center panel-body">
                        <a class="btn btn-success" href="{{route('new')}}"> Adauga postare </a>
                        <a class="btn btn-primary" href="{{route('admin_posts')}}"> Total postari </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection