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
                    <div>
                        <a class="btn btn-info btn-sm"
                           href="{{action('TemplateController@create')}}">
                            <i class="fa fa-eye" aria-hidden="true"></i>+ Create New Template</a>
                    </div>

                    <table class="table table-responsive table-striped">
                        <tr>
                            <th>id</th>
                            <th>Template</th>
                            <th>Header Color</th>
                            <th>Header Text Color</th>
                            <th>Background Color</th>
                            <th>Primary Text Color</th>
                        </tr>
                        @foreach($templates as $template)
                            <tr>
                                <td>{{$template->id}}</td>
                                <td>{{$template->name}}</td>
                                <td>{{$template->headerColor}}</td>
                                <td>{{$template->headerTextColor}}</td>
                                <td>{{$template->backColor}}</td>
                                <td>{{$template->primaryTextColor}}</td>
                                                    <td><a class="btn btn-info btn-sm" href="{{action('TemplateController@applyTemplate',['id'=>$template->id])}}"><i
                                                                class="fa fa-eye" aria-hidden="true"></i> Apply Template</a>
                                                        <a class="btn btn-success btn-sm" href="{{action('TemplateController@edit',['id'=>$template->id])}}"><i
                                                                class="fa fa-eye" aria-hidden="true"></i> Edit</a>
                                                        <a class="btn btn-danger btn-sm" href="{{action('TemplateController@destroy',['id'=>$template->id])}}"><i
                                                                class="fa fa-eye" aria-hidden="true"></i> Delete</a>
                                </td>
                            </tr>
                        @endforeach
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
