@extends('layout.main')
@section('title')
    Home| Mountain Plains
@endsection
@section('content')
    @foreach($data as $datas)
        <h1>{!! $datas->Title!!}</h1>
        <h6>{!! $datas->body !!}</h6>
        <a href="/home-edit/edit/{{$datas->id}}">Edit</a>
    @endforeach

@endsection
