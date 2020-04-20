@extends('layout.main')
@section('title')
    Sponsor of a Conference
@endsection
@section('content')
    @foreach($data as $sponsor)

        <div class="row">
            <div class="col-lg-6">
                <img src="{{url('Uploads/sponosr',$sponsor->Image)}}" alt="" title="">
            </div>
            <div class="col-lg-6 pt-4 pt-lg-0 content">
                <h3>About Us</h3>
                <p class="font-italic">{{$sponsor->Name}}</p>
            </div>
            <a href="/sponsor-edit/edit/{{$sponsor->id}}">Edit</a>
            <a href="/sponsor/deleteItem/{{$sponsor->id}}">Delete</a>
        </div>
    @endforeach
@endsection

