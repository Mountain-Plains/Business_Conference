@extends('layout.main')
@section('title')
    Edit HomePage
@endsection
@section('content')

    <div class="uploadcenter">
        <div class="container">
            <div class="row justify-content-center">
                <div class="card">
                    <div class="card-header">Home page Creation </div>

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

                        <form action="{{url('/home-edit/update',$Home->id) }}" method="post" enctype="multipart/form-data">
                            <input type="hidden" name="_token" value="{{csrf_token()}}">
                            {{method_field("PUT")}}
                            <div class="form-group">
                                <textarea class="form-control" id="summary-ckeditor" name="description"><?=$Home->description?></textarea>
                            </div>

                            <div class="form-group">
                                <input type="text" class="form-control-file" name="Location" id="Location" aria-describedby="fileHelp", placeholder="Location" value="{{$Home->Location}}">
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control-file" name="Time" id="Location" aria-describedby="fileHelp", placeholder="Time" value="{{$Home->Time}}">
                            </div>
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
