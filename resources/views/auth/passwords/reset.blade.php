@extends('layout.main')
@section('title')
    Reset Password
@endsection
@section('content')
    <div class="container bg-info">
        {{--@include('include.navbar')--}}
        <br>

        @if($errors->any())
            @foreach($errors->all() as $message)
                <h5 class="alert alert-danger">{{$message}}</h5>
            @endforeach
        @endif

        <h3>Reset Password</h3>
        {{Form::open (array ('action' => 'Auth\ResetPasswordController@reset'))}}
        {{csrf_field()}}

        {{Form::hidden('token',$token)}}
        {{Form::hidden('email',$email)}}

        <div class="form-group">
            {!! Form::label('passwords', 'New Password') !!}
            {!! Form::password('password', ['class' => 'form-control mx-sm-3','placeholder'=>'New Password Here']) !!}
        </div>

        <div class="form-group">
            {!! Form::label('passwords', 'Confirm Password') !!}
            {!! Form::password('password_confirmation', ['class' => 'form-control mx-sm-3','placeholder'=>'Confirm Password Here']) !!}
        </div>

        {!! Form::submit('Submit', ['class' => 'btn btn-secondary']) !!}

        {!! Form::close() !!}
    </div>
@endsection
