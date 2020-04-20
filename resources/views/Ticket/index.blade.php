@extends('layout.main')
@section('title')
  Ticket of Conference
@endsection
@section('content')
@foreach($data as $ev)
    <iframe src="{{$ev->URL}}" scrolling="no"></iframe>
@endforeach
@endsection
