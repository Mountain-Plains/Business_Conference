@extends('layout.main')
@section('title')
    Sponsor Create
@endsection
@section('content')

    <div class="uploadcenter">
        <div class="container">
            <div class="row justify-content-center">
                <div class="card">
                    <div class="card-header">Create and Upload Sponsor for event</div>

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

                        <form action="{{ route('Sponsor.create.post') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <input type="text" class="form-control-file" name="Name" id="Name" aria-describedby="fileHelp", placeholder="Name">
                            </div>

                            <div class="form-group">
                                <input type="file" class="form-control-file" name="Image" id="Image" aria-describedby="fileHelp">
                                <small id="fileHelp" class="form-text text-muted">Please upload a valid file.</small>
                            </div>

                            <button type="submit" class="btn btn-primary">Submit</button>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

