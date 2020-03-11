@extends('layout.main')
@section('title')
    Admin Login
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
<<<<<<< HEAD
        <h3>Admin Login</h3>
        {{Form::open (array ('action' => 'AdminController@logincheck'))}}
        {{csrf_field()}}
=======
        <h4>Admin Login</h4>
       {{-- {!! Form::open(array('action' => array('CityController@store'))) !!}
>>>>>>> origin/dev

        <div class="form-group">
            {!! Form::label('email', 'Email') !!}
            {!! Form::email('email', null, ['class' => 'form-control mx-sm-3','placeholder'=>'Enter your email address']) !!}
        </div>


        <div class="form-group">
            {!! Form::label('password', 'Password') !!}
            {!! Form::password('password', ['class' => 'form-control mx-sm-3','placeholder'=>'Admin Password Here']) !!}
        </div>


        {!! Form::submit('Submit', ['class' => 'btn btn-secondary']) !!}

        {!! Form::close() !!}


    </div>
@endsection
