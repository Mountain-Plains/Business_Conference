@extends('layout.adminlayout.admin_design')
@section('title','List Home Content')
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
                        <th>Day</th>
                        <th>EventDate</th>
                        <th>EventStartTime</th>
                        <th>EventEndTime</th>
                        <th>Description</th>
                        <th>Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($data as $dt)

                        <tr class="gradeC">
                            <td style="vertical-align: middle;">{!! $dt->Day !!}</td>
                            <td style="vertical-align: middle;">{!! $dt->EventDate !!}</td>
                            <td style="vertical-align: middle;">{{$dt->EventStartTime}}</td>
                            <td style="vertical-align: middle;">{{$dt->EventEndTime}}</td>
                            <td style="vertical-align: middle;">{{$dt->description}}</td>
                            <td style="text-align: center; vertical-align: middle;">
                                <a href="#myModal{{$dt->id}}" data-toggle="modal" class="btn btn-info btn-mini">View</a>
                                <a href="{{route('schedule.edit',$dt->id)}}" class="btn btn-primary btn-mini">Edit</a>
                                <a href="/schedule/deleteItem/{{$dt->id}}" class="btn btn-danger btn-mini deleteRecord">Delete</a>
                            </td>
                        </tr>
                        {{--Pop Up Model for View Product--}}
                        <div id="myModal{{$dt->id}}" class="modal hide">
                            <div class="modal-header">
                                <button data-dismiss="modal" class="close" type="button">×</button>
                                <h1>Event Date: {{$dt->EventDate}}</h1>
                                <h2>Description: {{$dt->description}}</h2>
                            </div>
                        </div>
                        {{--Pop Up Model for View Product--}}
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
