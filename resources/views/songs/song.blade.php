@extends('master')

@section('content')
<h1> Songs Page </h1>
  @foreach($songs as $song)
  <h2>
    {!! link_to_route('oneSong', $song->title, [$song->slug]) !!}
  </h2>
  @endforeach
  <div>
    {!! link_to_route('createSong', 'Create new song') !!}
  </div>
@stop
