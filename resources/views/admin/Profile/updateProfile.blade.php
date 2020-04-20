@extends('layout.adminlayout.admin_design')
@section('title','Edit Template')
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
                        <h5>Edit User</h5>
                    </div>
                    <div class="widget-content nopadding form-horizontal">
                        {!! Form::open(array('action' => array('AdminController@update',$user->id),'method'=>'PUT')) !!}
                        {{csrf_field()}}
                        <div class="control-group">
                            <label class="control-label">First Name:</label>
                            <div class="controls">
                                <input type="text" class="form-control-file" name="first_name" id=""
                                       placeholder="My Template" value="{{$user->first_name}}" required>
                                <span class="text-danger" style="color: red;"></span>
                            </div>
                        </div>

                        <div class="control-group">
                            <label class="control-label">Last Name:</label>
                            <div class="controls">
                                <input type="text" class="form-control-file" name="last_name" id=""
                                       placeholder="My Template" value="{{$user->last_name}}" required>
                                <span class="text-danger" style="color: red;"></span>
                            </div>
                        </div>
                        <div class="control-group">
                            <label class="control-label">Email</label>
                            <div class="controls">
                                <input type="email" class="form-control-file" name="email" id=""
                                       placeholder="My Template" value="{{$user->email}}" required>
                                <span class="text-danger" style="color: red;"></span>
                            </div>
                        </div>


                        <div class="controls">
                            {!! Form::submit('Update User', ['class' => 'btn btn-info']) !!}
                        </div>

                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
