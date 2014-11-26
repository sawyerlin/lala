@extends('master')

@section('content')
  <h2> {{$song->title}} </h2>
  
  @if ($song->lyrics)
    <article class="lyrics">
      {!! nl2br($song->lyrics) !!}
    </article>
  @endif
  
  <div>
    {!! link_to_route('editSong', 'Edit', [$song->slug]) !!}
  </div>
  <div>
    {!! link_to_route('allSongs', 'Go back home') !!}
  </div>
@stop
