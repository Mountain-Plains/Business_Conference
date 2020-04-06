@extends('layout.main')
@section('title')
    Detail Schedule of Conference
@endsection
@section('content')
    @foreach($data as $scheduledata)
      <table>
          <th>{{$scheduledata->EventStartTime}} + "-"+ {{$scheduledata->EventEndTime}}</th>
          <td>{{$scheduledata->description}}</td>
      </table>

    @endforeach

@endsection
