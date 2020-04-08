@extends('layout.main')
@section('title')
    Edit Ticket
@endsection
@section('content')

    <div class="uploadcenter">
        <div class="container">
            <div class="row justify-content-center">
                <div class="card">
                    <div class="card-header">Edit Ticket Creation </div>

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

                        <form action="{{url('/Ticket-edit/update',$Ticket->id) }}" method="post" enctype="multipart/form-data">
                            <input type="hidden" name="_token" value="{{csrf_token()}}">
                            {{method_field("PUT")}}

                            <div class="form-group">
                                <input type="text" class="form-control-file" name="URL" id="Location" aria-describedby="fileHelp", placeholder="URL of the Ticket" value="{{$Ticket->URL}}">
                            </div>
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
