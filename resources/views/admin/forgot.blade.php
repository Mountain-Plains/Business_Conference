@extends('layout.main')
@section('title')
    Forgot Password
@endsection
@section('content')

    <h5>
        Forgot Password
    </h5>
    @if($errors->any())
        @foreach($errors->all() as $message)
            <h5 class="alert alert-danger">{{$message}}</h5>
        @endforeach
    @endif

    {{Form::open (array ('action' => 'Auth\ForgotPasswordController@password'))}}

    {{ Form::hidden('email', $users->first()->email) }}

    @foreach($users as $u)
        <tr>
            <td>{{$u->email}}</td>
        </tr>
    @endforeach
    </br>

    {!! Form::submit('Submit', ['class' => 'btn btn-secondary']) !!}

    {!! Form::close() !!}

@endsection