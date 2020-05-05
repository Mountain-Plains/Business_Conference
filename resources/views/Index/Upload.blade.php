    <div class="uploadcenter">
        <div class="container">
            <div class="row justify-content-center">
                <!--<div class="card">
                    <div class="card-header">Mountain Plain Paper Submission</div>

                    <div class="card-body">-->
		    <div class="col-xs-12" align="center">
			<p>Submit a paper to be reviewed for presentation at the conference.</p>
			<p>Ensure that document upload has author information removed.</p>
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


                            <div class="g-recaptcha" data-sitekey="6LcS9vIUAAAAAM9Sq43tVX_AzW2rr8HsOt480uNC">
                                @if($errors->has('g-recaptcha-response'))
                                    <span class="invalid-feedback" style="display: block">
                                    <strong>{{$errors->first('g-recaptcha-response')}}</strong>
                                </span>
                                @endif
                            </div>
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </form>
                <script src="https://www.google.com/recaptcha/api.js"></script>
                    <!--</div>
                </div>-->
		</div>
            </div>
        </div>
    </div>

