@extends('layout.adminlayout.admin_design')
@section('title','List Paper Submitted')
@section('content')
    <div id="content">
        @if(Session::has('message'))
            <div class="alert alert-success text-center" role="alert">
                <strong>Well done!</strong> {{Session::get('message')}}
            </div>
        @endif
        <div class="widget-box">
            <div class="widget-title"> <span class="icon"><i class="icon-th"></i></span>
                <h5>List Schedule</h5>
            </div>
            <div class="widget-content nopadding">
                <table class="table table-bordered data-table">
                    <thead>
                    <tr>

                        <th>Title</th>
                        <th>FirstName</th>
                        <th>Last Name</th>
                        <th>Paper</th>
                        <th>Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($data as $dt)

                        <tr class="gradeC">
                            <td style="vertical-align: middle;">{!! $dt->title !!}</td>
                            <td style="vertical-align: middle;">{!! $dt->first_name !!}</td>
                            <td style="vertical-align: middle;">{!! $dt->last_name !!}</td>
                            <td style="vertical-align: middle;">{!! $dt->paper !!}</td>
                            <td style="text-align: center; vertical-align: middle;">
                                <a href="{{route('sponsor.edit',$dt->id)}}" class="btn btn-primary btn-mini">Download</a>
                            </td>
                        </tr>

                    @endforeach
                    </tbody>
                </table>
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
