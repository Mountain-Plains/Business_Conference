@extends('layout.adminlayout.admin_design')
@section('title','List Templates')
@section('content')
    <div id="content">
        <div class="widget-box">
            <div class="widget-title"><span class="icon"><i class="icon-th"></i></span>
                <h5>List Templates</h5>
            </div>
            @if($errors->any())
                @foreach($errors->all() as $message)
                    @if($message == "Cannot delete! Atleast one template is required in database.")
                        <div class="alert alert-danger text-center" role="alert">
                            <h4>{{$message}}</h4>
                        </div>
                    @else
                        <div class="alert alert-info text-center" role="alert">
                            <h4>{{$message}}</h4>
                        </div>
                    @endif
                @endforeach
            @endif
            <div style="vertical-align: middle;">
                <a href="{{route('template.create')}}"
                   class="btn btn-success btn-mini">+ Create New Template</a>
            </div>
            <div class="widget-content nopadding">
                <table class="table table-bordered data-table">
                    <thead>
                    <tr>
                        <th>id</th>
                        <th>Template Name</th>
                        <th>Navbar Color</th>
                        <th>Navbar Text Color</th>
                        <th>Background Color</th>
                        <th>Primary Text Color</th>
                        <th>Actions</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($templates as $template)
                        <tr class="gradeC">
                            <td style="vertical-align: middle;">{{$template->id}}</td>
                            <td style="vertical-align: middle;">{{$template->name}}@if($template == $current_template)
                                    &nbsp; <strong>&#x2714;</strong>
                                @else

                                @endif
                            </td>
                            <td style="vertical-align: middle;" bgcolor="{{$template->headerColor}}"></td>
                            <td style="vertical-align: middle;" bgcolor="{{$template->headerTextColor}}"></td>
                            <td style="vertical-align: middle;" bgcolor="{{$template->backColor}}"></td>
                            <td style="vertical-align: middle;" bgcolor="{{$template->primaryTextColor}}"></td>
                            <td style="vertical-align: middle; text-align: center">
                                <div class="form-inline">
                                    <a class="btn btn-success btn-mini"
                                       href="#applyModal{{$template->id}}" data-toggle="modal"><i
                                            class="fa fa-eye" aria-hidden="true"></i> Apply Template</a>
                                    <a class="btn btn-warning btn-mini"
                                       href="{{action('TemplateController@edit',['template'=>$template->id])}}"><i
                                            class="fa fa-eye" aria-hidden="true"></i> Edit</a>
                                    <a class="btn btn-danger btn-mini"
                                       href="#deleteModal{{$template->id}}" data-toggle="modal"> Delete
                                    </a>
                                </div>
                            </td>
                        </tr>
                        {{--Pop Up Model for Delete Template--}}
                        <div class="modal fade" id="deleteModal{{$template->id}}" tabindex="-1" role="dialog"
                             aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                        <h4 class="modal-title" id="exampleModalLabel">Delete "{{$template->name}}" template?</h4>

                                    </div>

                                    <div class="modal-footer">

                                        {!! Form::open(array('action' => array('TemplateController@destroy',$template->id),'method'=>'DELETE')) !!}

                                        {!! Form::submit('Delete Template', ['class' => 'btn btn-danger btn-sm']) !!}

                                        {!! Form::close() !!}

                                        <button type="button" class="btn btn-info" data-dismiss="modal">Cancel
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        {{--Pop Up Model for Delete Template--}}

                        {{--Pop Up Model for Apply Template--}}
                        <div class="modal fade" id="applyModal{{$template->id}}" tabindex="-1" role="dialog"
                             aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                        <h4 class="modal-title" id="exampleModalLabel">Apply "{{$template->name}}" template?</h4>
                                    </div>

                                    <div class="modal-footer">

                                        {!! Form::open(array('action' => array('TemplateController@applyTemplate',$template->id),'method'=>'POST')) !!}

                                        {!! Form::submit('Apply Template', ['class' => 'btn btn-success btn-sm']) !!}

                                        {!! Form::close() !!}

                                        <button type="button" class="btn btn-info" data-dismiss="modal">Cancel
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        {{--Pop Up Model for Apply Template--}}
                    @endforeach
                    </tbody>
                </table>
                <div class="pagination"> {{$templates->links()}}</div>
            </div>
        </div>
    </div>

@endsection
