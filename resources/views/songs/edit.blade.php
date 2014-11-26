@extends('master')

@section('content')

  <h2>{{$song->title}}</h2>

  {!! Form::model($song, ['route' => ['updateSong', $song->slug], 'method' => 'PATCH']) !!}

    @include ('songs.form')

  {!! Form::close() !!}

  {!! delete_form(['deleteSong', $song->slug]) !!}

@stop
