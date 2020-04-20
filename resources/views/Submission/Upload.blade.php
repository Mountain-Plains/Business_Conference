@extends('layout.main')
@section('title')
    Paper submission for review
@endsection
@section('content')

    @if(session()->has('message'))
        <div class="alert alert-success">
            {{ session()->get('message') }}
        </div>
    @endif
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

                        <form action="{{ route('file.upload.post') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <input type="text" class="form-control-file" name="title" id="title" aria-describedby="fileHelp", placeholder="Title">
                            </div>

                            <div class="form-group">
                                <input type="text" class="form-control-file" name="firstName" id="firstName" aria-describedby="fileHelp", placeholder="First Name">
                            </div>

                            <div class="form-group">
                                <input type="text" class="form-control-file" name="lastName" id="lastName" aria-describedby="fileHelp", placeholder="Last Name">

                            </div>

                            <div class="form-group">
                                <input type="hidden" class="form-control-file" name="isReviewed" id="isReviewed" aria-describedby="fileHelp", placeholder="Is Reviewed" value="0">
                            </div>

                            <div class="form-group">
                                <input type="file" class="form-control-file" name="paper" id="paper" aria-describedby="fileHelp">
                                <small id="fileHelp" class="form-text text-muted">Please upload a valid file.</small>
                            </div>

                          <p>  <div class="g-recaptcha" data-sitekey="{{ env('RECAPTCHA_SITE_KEY') }}"></div></p>

                            <button type="submit" class="btn btn-primary">Submit</button>

                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

