@extends('layouts.app')

@section('content')

    <div class="row">
        <div class=" page_about col-lg-8 col-md-10 mx-auto">
            Ai vrea sa-mi lasi un mesaj? Completeaza casetele de mai jos cu initialele necesare pentru a-mi trimite mesajul dorit!
             <hr>
            <br>
            <form class="form-horizontal" method="POST" action="{{ route('contact') }}">
                {{ csrf_field() }}
                <div class="control-group">
                    <div class="form-group floating-label-form-group controls">
                        <label>Nume</label>
                        <input type="text" class="form-control" placeholder="Nume" id="nume"
                               required data-validation-required-message="Please enter your name.">
                        <p class="help-block text-danger"></p>
                    </div>
                </div>
                <div class="control-group">
                    <div class="form-group floating-label-form-group controls">
                        <label>Email</label>
                        <input type="email" class="form-control" placeholder="Email" id="email"
                               required data-validation-required-message="Please enter your email address.">
                        <p class="help-block text-danger"></p>
                    </div>
                </div>
                <div class="control-group">
                    <div class="form-group floating-label-form-group controls">
                        <label>Numar telefon</label>
                        <input type="tel" class="form-control" placeholder="Numar telefon" id="numar_telefon"
                               required data-validation-required-message="Please enter your phone number.">
                        <p class="help-block text-danger"></p>
                    </div>
                </div>
                <div class="control-group">
                    <div class="form-group floating-label-form-group controls">
                        <label>Mesaj</label>
                        <textarea rows="5" class="form-control" placeholder="Mesaj" id="mesaj"
                                  required data-validation-required-message="Please enter a message."></textarea>
                        <p class="help-block text-danger"></p>
                    </div>
                </div>
                <br>
                <div id="success"></div>
                <div class="form-group">
                    <button type="submit" class=" pull-left btn btn-danger">Trimite</button>
                    <br>
                    <hr>
                </div>
            </form>
        </div>
    </div>
@endsection



