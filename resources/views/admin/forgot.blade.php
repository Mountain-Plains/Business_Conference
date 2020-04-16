@extends('layout.main')
@section('title')
    Forgot Password
@endsection
@section('content')

    <div class="container bg-dark">
        <h5>
            Forgot Password
        </h5>
        @if($errors->any())
            @foreach($errors->all() as $message)
                <h5 class="alert alert-info">{{$message}}</h5>
            @endforeach
        @endif
        {{Form::open (array ('action' => 'Auth\ForgotPasswordController@password'))}}
        {{ Form::hidden('email', $users->first()->email) }}

        <div class="controls">
            <div class="main_input_box">
                <span class="add-on bg_lo"><i class="icon-envelope"></i></span>@foreach($users as $u)
                    <tr>
                        <td>{{$u->email}}</td>
                    </tr>
                    @endforeach
                    </br>
            </div>
        </div>

        <div class="form-actions">
            <span class="pull-left">
                <a href="{{ action('AdminController@index') }}" class="flip-link btn btn-info" id="to-login">&laquo; Back to login</a>
            </span>
            &nbsp;
            <span >
                 {!! Form::submit('Send Recovery Email', ['class' => 'btn btn-success']) !!}
            </span>
        </div>
        {!! Form::close() !!}
    </div>
@endsection
