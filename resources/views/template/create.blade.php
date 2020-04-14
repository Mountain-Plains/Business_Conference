@extends('layout.adminlayout.admin_design')
@section('title','Create Template')
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
                        <h5>Create New Template</h5>
                    </div>
                    <div class="widget-content nopadding form-horizontal">
                        {!! Form::open(array('action' => array('TemplateController@store'))) !!}

                        <div class="control-group">
                            <label class="control-label">Template Name:</label>
                            <div class="controls">
                                <input type="text" class="form-control-file" name="name" id="name"
                                       placeholder="My Template">
                                <span class="text-danger" style="color: red;"></span>
                            </div>
                        </div>
                        <div class="control-group">
                            <label class="control-label">Navbar Color:</label>
                            <div class="controls">
                                <input type="color" class="form-control-file" name="headerColor" id="headerColor"
                                       value="#ffffff">
                                <span class="text-danger" style="color: red;"></span>
                            </div>
                        </div>

                        <div class="control-group">
                            <label class="control-label">Navbar Text Color:</label>
                            <div class="controls">
                                <input type="color" class="form-control-file" name="headerTextColor"
                                       id="headerTextColor" value="#000000">
                                <span class="text-danger" style="color: red;"></span>
                            </div>
                        </div>

                        <div class="control-group">
                            <label class="control-label">Background Color:</label>
                            <div class="controls">
                                <input type="color" class="form-control-file" name="backColor" id="backColor"
                                       value="#135790">
                                <span class="text-danger" style="color: red;"></span>
                            </div>
                        </div>

                        <div class="control-group">
                            <label class="control-label">Primary Text Color:</label>
                            <div class="controls">
                                <input type="color" class="form-control-file" name="primaryTextColor"
                                       id="primaryTextColor" value="#000000">
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
