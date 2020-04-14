@extends('layout.adminlayout.admin_design')
@section('title','Edit Home Content')
@section('content')
<div id="content">
    <div class="row-fluid">
        <div class="span12">
            <div class="widget-box">
                <div class="widget-title"> <span class="icon"> <i class="icon-info-sign"></i> </span>
                    <h5>Edit Home Content</h5>
                </div>
                <div class="widget-content nopadding">
                    <form class="form-horizontal" action="{{url('/admin/home-edit/update',$Home->id) }}" method="post" name="basic_validate" id="basic_validate" novalidate="novalidate">
                        <input type="hidden" name="_token" value="{{csrf_token()}}">
                        {{method_field("PUT")}}
                        <div class="control-group{{$errors->has('description')?' has-error':''}}">
                            <label class="control-label">Description :</label>
                            <div class="controls">
                                <textarea class="form-control" id="summary-ckeditor" name="description"><?=$Home->description?></textarea>
                            </div>
                        </div>
                        <div class="control-group{{$errors->has('Location')?' has-error':''}}">
                            <label class="control-label">Location :</label>
                            <div class="controls">
                                <input type="text" name="Location" id="Location" value="{{$Home->Location}}" required>
                                <span class="text-danger" style="color: red;"></span>
                            </div>
                        </div>

                        <div class="control-group{{$errors->has('Time')?' has-error':''}}">
                            <label class="control-label">Time :</label>
                            <div class="controls">
                                <input type="text" name="Time" id="Time" value="{{$Home->Time}}" required>
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
