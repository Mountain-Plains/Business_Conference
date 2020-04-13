@extends('layout.main')
@section('title')
    Create Template
@endsection
@section('content')
    <div class="uploadcenter">
        <div class="container">
            <div class="row justify-content-center">
                <div class="card">
                    <div class="card-header"><h4>Create Template</h4></div>

                    {{--@include('include.navbar')--}}
                    <br>
                    @if($errors->any())
                        @foreach($errors->all() as $message)
                            @if($message == 'Template Saved Successfully')
                                <h5 class="alert alert-success">{{$message}}</h5>
                            @else
                                <h5 class="alert alert-danger">{{$message}}</h5>
                            @endif
                        @endforeach
                    @endif

                    {!! Form::open(array('action' => array('TemplateController@store'))) !!}

                    <div class="form-group">
                        {!! Form::label('name', 'Template Name:') !!}
                        {!! Form::text('name', null, ['class' => 'form-control','placeholder'=>'My Template']) !!}
                    </div>

                    <div class="form-group">
                        {!! Form::label('headerColor', 'Header Color : ') !!}
                        {!! Form::color('headerColor', "#FFFFFF", ['class' => 'form-group']) !!}
                    </div>

                    <div class="form-group">
                        {!! Form::label('headerTextColor', 'Header Text Color: ') !!}
                        {!! Form::color('headerTextColor', "#000000", ['class' => 'form-group']) !!}
                    </div>

                    <div class="form-group">
                        {!! Form::label('backColor', 'Background Color:') !!}
                        {!! Form::color('backColor', "#12ABFF", ['class' => 'form-group']) !!}
                    </div>

                    <div class="form-group">
                        {!! Form::label('primaryTextColor', 'Primary Text Color: ') !!}
                        {!! Form::color('primaryTextColor', "#000000", ['class' => 'form-group']) !!}
                    </div>


{{--                    <div class="file-upload-wrapper">--}}
{{--                        <div class="form-group">--}}
{{--                            {!! Form::label('logo', 'Logo: ') !!}--}}
{{--                            <input type="file" class="form-control-file" name="logo" id="logo" aria-describedby="fileHelp">--}}
{{--                            <small id="fileHelp" class="form-text text-muted">Please upload file formatted jpeg, png, jpg, gif, svg.</small>--}}
{{--                        </div>--}}
{{--                    </div>--}}

{{--                        <div class="form-group">--}}
{{--                            {!! Form::label('logo', 'Logo') !!}--}}
{{--                            {!! Form::text('logo', null, ['class' => 'form-control','placeholder'=>'Image URL']) !!}--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{----}}
{{--                    <div class="form-group">--}}
{{--                        {!! Form::label('bgImage', 'Background Image ') !!}--}}
{{--                        {!! Form::text('bgImage', null, ['class' => 'form-control','placeholder'=>'Image URL']) !!}--}}
{{--                    </div>--}}

                    {!! Form::submit('Save', ['class' => 'btn btn-info']) !!}

                    {!! Form::close() !!}

                </div>
            </div>
        </div>
    </div>
@endsection
