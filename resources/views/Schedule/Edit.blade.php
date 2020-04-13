@extends('layout.main')
@section('title')
    Create a schedule
@endsection
@section('content')

    <div class="uploadcenter">
        <div class="container">
            <div class="row justify-content-center">
                <div class="card">
                    <div class="card-header">Mountain Plain Paper Submission</div>

                    <div class="card-body">
                        @if ($message = Session::get('success'))

                            <div class="alert alert-success alert-block">

                                <button type="button" class="close" data-dismiss="alert">×</button>

                                <strong>{{ $message }}</strong>

                            </div>
                        @endif

                        @if (count($errors) > 0)
                            <div class="alert alert-danger">
                                <strong>Whoops!</strong> There were some problems with your input.<br><br>
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif

                        <form action="{{url('/schedule-edit/update',$schedule->id) }}" method="POST" enctype="multipart/form-data">
                            <input type="hidden" name="_token" value="{{csrf_token()}}">
                            {{method_field("PUT")}}
                            <div class="form-group">
                                <input type="text" class="form-control-file" name="Day" id="Day" aria-describedby="fileHelp", placeholder="Day" value="{{$schedule->Day}}">
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control-file" name="EventDate" id="datepicker" aria-describedby="fileHelp", placeholder="EventDate" value="{{$schedule->EventDate}}">
                            </div>

                            <div class="form-group">
                                <input type="text" class="form-control-file" name="EventStartTime" id="timepicker" aria-describedby="fileHelp", placeholder="Event Start Time" value="{{$schedule->EventStartTime}}">
                            </div>

                            <div class="form-group">
                                <input type="text" class="form-control-file" name="EventEndTime" id="timepickers" aria-describedby="fileHelp", placeholder="Event End Time" value="{{$schedule->EventEndTime}}">

                            </div>

                            <div class="form-group">
                                <input type="text" class="form-control-file" name="description" id="description" aria-describedby="fileHelp", placeholder="Description"value="{{$schedule->description}}" >
                            </div>


                            <button type="submit" class="btn btn-primary">Submit</button>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection



