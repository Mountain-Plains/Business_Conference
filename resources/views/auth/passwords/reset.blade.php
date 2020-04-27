@extends('layout.main')
@section('title')
    Reset Password
@endsection
@section('content')
    <div id="loginbox">
        {{--@include('include.navbar')--}}
        <br>

        @if($errors->any())
            @foreach($errors->all() as $message)
                <h5 class="alert alert-danger">{{$message}}</h5>
            @endforeach
        @endif
        {{--        {{dd($token,$email)}}--}}

        {{Form::open (array ('action' => 'Auth\ResetPasswordController@reset'))}}
        {{csrf_field()}}
        <h3>Reset Password</h3>

        <div class="control-group">
            <div class="controls">
                <div class="main_input_box">
                    <span class="add-on bg_ls"><i class="icon-lock"> </i></span>
                    {{Form::email('email',$email)}}
                </div>
            </div>
        </div>

        <div class="control-group">
            <div class="controls">
                <div class="main_input_box">
                    <span class="add-on bg_lg"><i class="icon-lock"> </i></span>
                    {!! Form::password('password', ['class' => '','placeholder'=>'New Password Here']) !!}
                </div>
            </div>
        </div>

        {{Form::hidden('token',$token)}}

        <div class="control-group">
            <div class="controls">
                <div class="main_input_box">
                    <span class="add-on bg_ly"><i class="icon-lock"></i></span>
                    {!! Form::password('password_confirmation', ['class' => '','placeholder'=>'Confirm Password Here']) !!}
                </div>
            </div>
        </div>
        <div class="form-actions">
                    <span class="">
                {!! Form::submit('Reset Password', ['class' => 'btn btn-info']) !!}
        </span>
        </div>
        {!! Form::close() !!}


    </div>
@endsection
