@extends('layout.adminlayout.admin_design')
@section('title','Edit Schedule')
@section('content')
    <div id="content">
        <div class="row-fluid">
            <div class="span12">
                <div class="widget-box">
                    <div class="widget-title"> <span class="icon"> <i class="icon-info-sign"></i> </span>
                        <h5>Edit Schedule</h5>
                    </div>
                    <div class="widget-content nopadding">
                        <form class="form-horizontal" action="{{url('/schedule-edit/update',$schedule->id) }}" method="post" name="basic_validate" id="basic_validate" novalidate="novalidate">
                            <input type="hidden" name="_token" value="{{csrf_token()}}">
                            {{method_field("PUT")}}
                            <div class="control-group{{$errors->has('Day')?' has-error':''}}">
                                <label class="control-label">Day :</label>
                                <div class="controls">
                                    <input type="text" class="form-control-file" name="Day" id="Day" aria-describedby="fileHelp", placeholder="Day" value="{{$schedule->Day}}">
                                    <span class="text-danger" style="color: red;"></span>
                                </div>
                            </div>
                            <div class="control-group{{$errors->has('EventDate')?' has-error':''}}">
                                <label class="control-label">EventDate :</label>
                                <div class="controls">
                                    <input type="text" class="form-control-file" name="EventDate" id="datepicker" aria-describedby="fileHelp", placeholder="EventDate" value="{{$schedule->EventDate}}">
                                    <span class="text-danger" style="color: red;"></span>
                                </div>
                            </div>

                            <div class="control-group{{$errors->has('EventStartTime')?' has-error':''}}">
                                <label class="control-label">EventStartTime :</label>
                                <div class="controls">
                                    <input type="text" class="form-control-file" name="EventStartTime" id="timepicker" aria-describedby="fileHelp", placeholder="Event Start Time" value="{{$schedule->EventStartTime}}">
                                    <span class="text-danger" style="color: red;"></span>
                                </div>
                            </div>
                            <div class="control-group{{$errors->has('EventEndTime')?' has-error':''}}">
                                <label class="control-label">EventEndTime :</label>
                                <div class="controls">
                                    <input type="text" class="form-control-file" name="EventEndTime" id="timepickers" aria-describedby="fileHelp", placeholder="Event End Time" value="{{$schedule->EventEndTime}}">
                                    <span class="text-danger" style="color: red;"></span>
                                </div>
                            </div>
                            <div class="control-group{{$errors->has('description')?' has-error':''}}">
                                <label class="control-label">Description :</label>
                                <div class="controls">
                                    <input type="text" class="form-control-file" name="description" id="description" aria-describedby="fileHelp", placeholder="Description"value="{{$schedule->description}}" >
                                    <span class="text-danger" style="color: red;"></span>
                                </div>
                            </div>
                            <div class="control-group">
                                <label for="control-label"></label>
                                <div class="controls">
                                    <input type="submit" value="Update" class="btn btn-success">
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('jsblock')
    <script src="{{asset('JS/backend_js/jquery.min.js')}}"></script>
    <script src="{{asset('JS/backend_js/jquery.ui.custom.js')}}"></script>
    <script src="{{asset('JS/backend_js/bootstrap.min.js')}}"></script>
    <script src="{{asset('JS/backend_js/jquery.uniform.js')}}"></script>
    <script src="{{asset('JS/backend_js/select2.min.js')}}"></script>
    <script src="{{asset('JS/backend_js/jquery.dataTables.min.js')}}"></script>
    <script src="{{asset('JS/backend_js/matrix.js')}}"></script>
    <script src="{{asset('JS/backend_js/matrix.tables.js')}}"></script>
    <script src="{{asset('JS/backend_js/matrix.popover.js')}}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.js"></script>
@endsection
