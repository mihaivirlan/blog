<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'My Blog') }}</title>

    <!-- Bootstrap core CSS -->
    <link href="{{asset('public/css/app.css')}}" rel="stylesheet">
    <link href="{{asset('public/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link href="{{asset('public/vendor/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>

    <!-- Custom styles for this template -->
    <link href="{{asset('public/css/clean-blog.css')}}" rel="stylesheet">

</head>

<body>







@include('layouts.navbar')

@section('content')
@endsection
    <div class="row">
        <div class="col-lg-8 col-md-10 mx-auto">
            <p>Ai vrea sa-mi lasi un mesaj? Completeaza casetele de mai jos cu initialele necesare pentru a-mi trimite mesajul dorit!</p>
            <!-- Contact Form - Enter your email address on line 19 of the mail/contact_me.php file to make this form work. -->
            <!-- WARNING: Some web hosts do not allow emails to be sent through forms to common mail hosts like Gmail or Yahoo. It's recommended that you use a private domain email address! -->
            <!-- NOTE: To use the contact form, your site must be on a live web host with PHP! The form will not work locally! -->
            <form class="form-horizontal" method="POST" action="{{ route('contact') }}">
                {{ csrf_field() }}
                <div class="control-group">
                    <div class="form-group floating-label-form-group controls">
                        <label>Nume</label>
                        <input type="text" class="form-control" placeholder="Nume" id="name"
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
                        <input type="tel" class="form-control" placeholder="Numar telefon" id="phone"
                               required data-validation-required-message="Please enter your phone number.">
                        <p class="help-block text-danger"></p>
                    </div>
                </div>
                <div class="control-group">
                    <div class="form-group floating-label-form-group controls">
                        <label>Mesaj</label>
                        <textarea rows="5" class="form-control" placeholder="Mesaj" id="message"
                                  required data-validation-required-message="Please enter a message."></textarea>
                        <p class="help-block text-danger"></p>
                    </div>
                </div>
                <br>
                <div id="success"></div>
                <div class="form-group">
                    <button type="submit" class="btn btn-secondary">Trimite</button>
                </div>
            </form>
        </div>
    </div>

@include('layouts.footer')

<!-- Bootstrap core JavaScript -->
<script src="{{asset('public/vendor/jquery/jquery.min.js')}}"></script>
<script src="{{asset('public/vendor/popper/popper.min.js')}}"></script>
<script src="{{asset('public/vendor/bootstrap/js/bootstrap.min.js')}}"></script>

<!-- Custom scripts for this template -->
<script src="{{asset('public/js/clean-blog.min.js')}}"></script>
<link rel=" https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js">


</body>

</html>
