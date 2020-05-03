@extends('layout.main')
@section('title')
    Admin Login
@endsection
@section('content')
    <div id="loginbox">
        @if($errors->any())
            @foreach($errors->all() as $message)
                <h5 class="alert alert-danger">{{$message}}</h5>
            @endforeach
        @endif

        {{Form::open (array ('action' => 'AdminController@loginCheck'))}}
        {{csrf_field()}}
        <h3>Admin Login</h3>
        <div class="control-group">
            <div class="controls">
                <div class="main_input_box">
                    <span class="add-on bg_lg"><i class="icon-user"> </i></span>
                    {!! Form::email('email', null, ['class' => '','placeholder'=>'Enter your email address']) !!}
                </div>
            </div>
        </div>
        <div class="control-group">
            <div class="controls">
                <div class="main_input_box">
                    <span class="add-on bg_ly"><i class="icon-lock"></i></span>
                    {!! Form::password('password', ['class' => '','placeholder'=>'Admin Password Here']) !!}
                </div>
            </div>
        </div>
        <div class="form-actions">
            <span class="pull-left">
                <a href="{{route('password.request')}}"
                   class="btn btn-info btn-sm">Forgot Password?</a>
            </span>
            <span class="pull-right">
                {!! Form::submit('Login', ['class' => 'btn btn-sm btn-success']) !!}
        </span>
        </div>
        {!! Form::close() !!}

    </div>
@endsection
