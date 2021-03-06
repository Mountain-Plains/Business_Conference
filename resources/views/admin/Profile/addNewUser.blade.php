@extends('layout.adminlayout.admin_design')
@section('title','Create New User')
@section('content')
    <div id="content">
        <div class="row-fluid">
            <div class="span12">
                <div class="widget-box">
                    @if($errors->any())
                        @foreach($errors->all() as $message)
                            <div class="alert alert-danger text-center" role="alert">
                                <h4>{{$message}}</h4>
                            </div>
                        @endforeach
                    @endif
                    <div class="widget-title"><span class="icon"> <i class="icon-info-sign"></i> </span>
                        <h5>Create New User</h5>
                    </div>
                    <div class="widget-content nopadding form-horizontal">
                        {!! Form::open(array('action' => array('AdminController@addNewUser'))) !!}

                        <div class="control-group">
                            <label class="control-label">First Name:</label>
                            <div class="controls">
                                <input type="text" class="form-control-file" name="first_name" id="name"
                                       placeholder="First Name">
                                <span class="text-danger" style="color: red;"></span>
                            </div>
                        </div>

                        <div class="control-group">
                            <label class="control-label">Last Name:</label>
                            <div class="controls">
                                <input type="text" class="form-control-file" name="last_name" id="name"
                                       placeholder="Last Name">
                                <span class="text-danger" style="color: red;"></span>
                            </div>
                        </div>

                        <div class="control-group">
                            <label class="control-label">Email:</label>
                            <div class="controls">
                                <input type="text" class="form-control-file" name="email" id="name"
                                       placeholder="some@gmail.com">
                                <span class="text-danger" style="color: red;"></span>
                            </div>
                        </div>
                        <div class="control-group">
                            <label class="control-label">Password</label>
                            <div class="controls">
                                <input type="password" class="form-control-file" name="password" id="name">
                                <span class="text-danger" style="color: red;"></span>
                            </div>
                        </div>
                        <div class="controls">
                            {!! Form::submit('Save', ['class' => 'btn btn-info']) !!}
                        </div>

                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
