@extends('layout.main')

@section('title')
    Templates
@endsection

@section('content')
    <div class="uploadcenter">
        <div class="container">
            <div class="row justify-content-center">
                <div class="card">
                    <div class="card-header"><h4>List of templates</h4></div>
                    {{--        @include('include.navbar')--}}
                    <br>
                    @if($errors->any())
                        @foreach($errors->all() as $message)
                                <h5 class="alert alert-info">{{$message}}</h5>
                        @endforeach
                    @endif
                    <div>
                        <a class="btn btn-info btn-sm"
                           href="{{action('TemplateController@create')}}">
                            <i class="fa fa-eye" aria-hidden="true"></i>+ Create New Template</a>
                    </div>

                    <table class="table table-responsive table-striped">
                        <tr>
                            <th>id</th>
                            <th>Template Name</th>
                            <th>Header Color</th>
                            <th>Header Text Color</th>
                            <th>Background Color</th>
                            <th>Primary Text Color</th>
                            <th></th>
                        </tr>
                        @foreach($templates as $template)
                            <tr>
                                <td>{{$template->id}}</td>
                                <td>{{$template->name}}</td>
                                <td>{{$template->headerColor}}</td>
                                <td>{{$template->headerTextColor}}</td>
                                <td>{{$template->backColor}}</td>
                                <td>{{$template->primaryTextColor}}
                                    @if($template == $current_template)
                                        &nbsp; &#x2714;
                                    @else

                                    @endif</td>


                                                    <td class="form-inline">
                                                        {!! Form::open(array('action' => array('TemplateController@applyTemplate',$template->id),'method'=>'POST')) !!}

                                                        {!! Form::submit('Apply Template', ['class' => 'btn btn-info btn-sm']) !!}

                                                        {!! Form::close() !!}
                                                        &nbsp;
                                                        <a class="btn btn-success btn-sm" href="{{action('TemplateController@edit',['template'=>$template->id])}}"><i
                                                                class="fa fa-eye" aria-hidden="true"></i> Edit</a>
                                                        &nbsp;
                                                        {!! Form::open(array('action' => array('TemplateController@destroy',$template->id),'method'=>'DELETE')) !!}

                                                        {!! Form::submit('Delete', ['class' => 'btn btn-danger btn-sm']) !!}

                                                        {!! Form::close() !!}
                                </td>
                            </tr>
                        @endforeach
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
