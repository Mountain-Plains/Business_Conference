@extends('layout.adminlayout.admin_design')
@section('title','Edit Sponsor')
@section('content')
    <div id="content">
        <div class="row-fluid">
            <div class="span12">
                <div class="widget-box">
                    <div class="widget-title"> <span class="icon"> <i class="icon-info-sign"></i> </span>
                        <h5>Edit Sponsor</h5>
                    </div>
                    <div class="widget-content nopadding">
                       <form class="form-horizontal" action="{{url('/sponsor-edit/update',$sponsor->id) }}" method="post" enctype="multipart/form-data">
                            <input type="hidden" name="_token" value="{{csrf_token()}}">
                            {{method_field("PUT")}}
                            <div class="control-group{{$errors->has('Image')?' has-error':''}}">
                                <label class="control-label">Name :</label>
                                <div class="controls">
                                    <input type="text" class="form-control-file" name="Name" id="Name" aria-describedby="fileHelp", placeholder="Name" value="{{$sponsor->Name}}">
                                    <span class="text-danger" style="color: red;"></span>
                                </div>
                            </div>

                            <div class="control-group{{$errors->has('Image')?' has-error':''}}">
                                <label class="control-label">Image :</label>
                                <div class="controls">
                                    <input type="file" class="form-control-file" name="Image" id="Image" aria-describedby="fileHelp" value="{{$sponsor->Image}}"></p>
                                    <small id="fileHelp" class="form-text text-muted">Please upload a valid file.</small>
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
