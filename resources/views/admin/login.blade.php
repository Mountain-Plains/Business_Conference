<!DOCTYPE html>
<html lang="en">

<head>
    <title>Mountain Plains  Admin</title><meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="{{asset('css/backend_css/bootstrap.min.css')}}" />
    <link rel="stylesheet" href="{{asset('css/backend_css/bootstrap-responsive.min.css')}}" />
    <link rel="stylesheet" href="{{asset('css//backend_css/matrix-login.css')}}" />
    <link href="{{asset('fonts/backend_fonts/css/font-awesome.css')}}" rel="stylesheet" />
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700,800' rel='stylesheet' type='text/css'>

</head>
<body>
        {{--@include('include.navbar')--}}
        <br>

        @if($errors->any())
            @foreach($errors->all() as $message)
                <h5 class="alert alert-danger">{{$message}}</h5>
            @endforeach
        @endif

        <h3>Admin Login</h3>
        {{Form::open (array ('action' => 'AdminController@logincheck'))}}
        {{csrf_field()}}

        <div class="form-group">
            {!! Form::label('email', 'Email') !!}
            {!! Form::email('email', null, ['class' => 'form-control mx-sm-3','placeholder'=>'Enter your email address']) !!}
        </div>


        <div class="form-group">
            {!! Form::label('password', 'Password') !!}
            {!! Form::password('password', ['class' => 'form-control mx-sm-3','placeholder'=>'Admin Password Here']) !!}
        </div>

        <div class="form-group">
            <h5><a href="{{ action('Auth\ForgotPasswordController@forgot') }}" class="label-agree-term">Forget Password</a></h5>
        </div>

        {!! Form::submit('Submit', ['class' => 'btn btn-secondary']) !!}

        {!! Form::close() !!}
    </div>


    <script src="{{asset('JS/backend_js/jquery.min.js')}}"></script>
    <script src="{{asset('JS/backend_js/matrix.login.js')}}"></script>
</body>

</html>
