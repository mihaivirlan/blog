@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <a class="btn btn-default float-left" href="{{route('admin')}}">Go Back</a>
                <br>
                <hr>

                <div class="panel panel-default">
                    <div class="panel-heading"> Adauga postare </div>
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

                        <form class="form-horizontal" enctype="multipart/form-data" method="POST" action="{{ route('new') }}">
                            {{ csrf_field() }}

                            <div class="form-group{{ $errors->has('titlu') ? ' has-error' : '' }}">
                                <label for="email" class="col-md-1 control-label">Titlu</label>

                                <div class="col-md-9">
                                    <input style=" word-wrap:break-word;  display:inline-block" id="titlu" type="text" class="form-control" name="titlu" value="{{ old('titlu') }}" required autofocus>

                                    @if ($errors->has('titlu'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('titlu') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>
                            <br>
                            <div class="form-group{{ $errors->has('continut') ? ' has-error' : '' }}">
                                <label for="password" class="col-md-1 control-label">Continut</label>

                                <div class="col-md-9">
                                   <textarea name="continut" style="width: 100%;height: 200px;  word-wrap:break-word;  display:inline-block">{{old("continut")}}</textarea>
                                    @if ($errors->has('continut'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('continut') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>
                            <br>
                            <div class="form-group{{ $errors->has('imagine') ? ' has-error' : '' }}">
                                <label for="imagine" class="col-md-1 control-label">Imagine</label>

                                <div class="col-md-9">
                                    <input id="imagine" type="file" class="form-control" name="imagine">

                                    @if ($errors->has('imagine'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('imagine') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>
                            <br>
                            <div class="form-group">
                                <div class="col-md-12">
                                    <button type="submit" class="btn btn-primary">
                                        Submit
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
