@extends('layout.main')
@section('title')
    Reset Password
@endsection
@section('content')
    <div class="container bg-info">

        <br>

        @if($errors->any())
            @foreach($errors->all() as $message)
                <h5 class="alert alert-danger">{{$message}}</h5>
            @endforeach
        @endif
        <h3>Reset Password</h3>
        {{Form::open (array ((url ('reset_password_without_token'))))}}
        {{csrf_field()}}

        <div class="form-group">
            {!! Form::label('newpassword', 'New Password') !!}
            {!! Form::password('newpassword', null, ['class' => 'form-control mx-sm-3','placeholder'=>'Enter your new password here']) !!}
        </div>


        <div class="form-group">
            {!! Form::label('reenterpassword', 'Re-enter Password') !!}
            {!! Form::password('reenterpassword', ['class' => 'form-control mx-sm-3','placeholder'=>'Re-enter your new password here']) !!}
        </div>


        {!! Form::submit('Submit', ['class' => 'btn btn-secondary']) !!}

        {!! Form::close() !!}


    </div>


@endsection
