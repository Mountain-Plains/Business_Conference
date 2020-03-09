@extends('layout.main')
@section('title')
    Create Template
@endsection
@section('content')
    <div class="container">
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
        <h4>Create Template</h4>
        {!! Form::open(array('action' => array('TemplateController@store'))) !!}

         <div class="form-group">
             {!! Form::label('name', 'Template Name') !!}
             {!! Form::text('name', null, ['class' => 'form-control','placeholder'=>'My Template']) !!}
         </div>

         <div class="form-group">
             {!! Form::label('headerColor', 'Header Color (HEX Color Code)') !!}
             {!! Form::text('headerColor', null, ['class' => 'form-control','placeholder'=>'#12ABFF']) !!}
         </div>

        <div class="form-group">
            {!! Form::label('headerTextColor', 'Header Text Color (HEX Color Code)') !!}
            {!! Form::text('headerTextColor', null, ['class' => 'form-control','placeholder'=>'#12ABFF']) !!}
        </div>

        <div class="form-group">
            {!! Form::label('footerColor', 'Footer Color (HEX Color Code)') !!}
            {!! Form::text('footerColor', null, ['class' => 'form-control','placeholder'=>'#12ABFF']) !!}
        </div>

        <div class="form-group">
            {!! Form::label('footerTextColor', 'Footer Text Color (HEX Color Code)') !!}
            {!! Form::text('footerTextColor', null, ['class' => 'form-control','placeholder'=>'#12ABFF']) !!}
        </div>

        <div class="form-group">
            {!! Form::label('backColor', 'Background Color (HEX Color Code)') !!}
            {!! Form::text('backColor', null, ['class' => 'form-control','placeholder'=>'#12ABFF']) !!}
        </div>

        <div class="file-upload-wrapper">
            {{--}}<input type="file" id="input-file-now" class="file-upload" />--}}

        <div class="form-group">
            {!! Form::label('logo', 'Logo') !!}
            {!! Form::text('logo', null, ['class' => 'form-control','placeholder'=>'Image URL']) !!}
        </div>
        </div>

        <div class="form-group">
            {!! Form::label('bgImage', 'Background Image ') !!}
            {!! Form::text('bgImage', null, ['class' => 'form-control','placeholder'=>'Image URL']) !!}
        </div>

         {!! Form::submit('Save', ['class' => 'btn btn-info']) !!}

         {!! Form::close() !!}

    </div>
@endsection
