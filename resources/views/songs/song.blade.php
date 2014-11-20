@extends('master')

@section('content')
<h1> Songs Page </h1>
  @foreach($songs as $song)
  <h2><a href="/songs/{{$song->id}}">{{$song->title}}</a></h2>
  @endforeach
@stop
