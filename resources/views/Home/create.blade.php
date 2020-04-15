@extends('layout.main')
@section('title')
    Create Homepage
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

                        <form action="{{ route('home.create.post') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label>About Us</label>
                                <textarea class="form-control" id="summary-ckeditor" name="description"></textarea>
                            </div>

                            <div class="form-group">
                                <input type="text" class="form-control-file" name="Location" id="Location" aria-describedby="fileHelp", placeholder="Location">
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control-file" name="Time" id="Location" aria-describedby="fileHelp", placeholder="Time">
                            </div>
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
