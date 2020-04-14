@extends('layout.adminlayout.admin_design')
@section('title','Edit Schedule')
@section('content')
    <div id="content">
        <div class="row-fluid">
            <div class="span12">
                <div class="widget-box">
                    <div class="widget-title"> <span class="icon"> <i class="icon-info-sign"></i> </span>
                        <h5>Add Sponsor</h5>
                    </div>
                    <div class="widget-content nopadding">
                        <form class="form-horizontal" action="{{ route('Sponsor.create.post') }}" method="POST" enctype="multipart/form-data">
                            @csrf




                            <div class="control-group{{$errors->has('Name')?' has-error':''}}">
                                <label class="control-label">Name :</label>
                                <div class="controls">
                                    <input type="text" class="form-control-file" name="Name" id="Name" aria-describedby="fileHelp", placeholder="Name">
                                    <span class="text-danger" style="color: red;"></span>
                                </div>
                            </div>



                            <div class="control-group{{$errors->has('Image')?' has-error':''}}">
                                <label class="control-label">Image :</label>
                                <div class="controls">
                                    <input type="file" class="form-control-file" name="Image" id="Image" aria-describedby="fileHelp">
                                    <small id="fileHelp" class="form-text text-muted">Please upload a valid file.</small>
                                    <span class="text-danger" style="color: red;"></span>
                                </div>
                            </div>
                            <div class="control-group">
                                <label for="control-label"></label>
                                <div class="controls">
                                    <input type="submit" value="Create" class="btn btn-success">
                                </div>
                            </div>
                            {{--<button type="submit" class="btn btn-primary">Submit</button>--}}
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
