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
                <h5>List Home Content</h5>

            </div>
            <div class="widget-content nopadding">
               @if($data->count()==0)
                    <a href="{{route('home.create')}}" class="btn btn-primary btn-mini">Create Home Content</a>
                @endif

                <table class="table table-bordered data-table">
                    <thead>
                    <tr>
                        <th>Description</th>
                        <th>Location</th>
                        <th>Time</th>
                        <th>Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($data as $dt)
                       {{--$count= $dt->count()--}}
                        <tr class="gradeC">
                            <td style="vertical-align: middle;">{!! $dt->description !!}</td>
                            <td style="vertical-align: middle;">{{$dt->Location}}</td>
                            <td style="vertical-align: middle;">{{$dt->Time}}</td>
                            <td style="text-align: center; vertical-align: middle;">
                                <a href="#myModal{{$dt->id}}" data-toggle="modal" class="btn btn-info btn-mini">View</a>
                                <a href="{{route('home.edit',$dt->id)}}" class="btn btn-primary btn-mini">Edit</a>
                            </td>
                        </tr>
                        {{--Pop Up Model for View Product--}}
                        <div id="myModal{{$dt->id}}" class="modal hide">
                            <div class="modal-header">
                                <button data-dismiss="modal" class="close" type="button">×</button>
                                <h3>{{$dt->description}}</h3>
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
    <script>
        $(".deleteRecord").click(function () {
            var id=$(this).attr('rel');
            var deleteFunction=$(this).attr('rel1');
            swal({
                title:'Are you sure?',
                text:"You won't be able to revert this!",
                type:'warning',
                showCancelButton:true,
                confirmButtonColor:'#3085d6',
                cancelButtonColor:'#d33',
                confirmButtonText:'Yes, delete it!',
                cancelButtonText:'No, cancel!',
                confirmButtonClass:'btn btn-success',
                cancelButtonClass:'btn btn-danger',
                buttonsStyling:false,
                reverseButtons:true
            },function () {
                window.location.href="/admin/"+deleteFunction+"/"+id;
            });
        });
    </script>
@endsection
