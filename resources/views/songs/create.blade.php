@extends('master')

@section('content')

  <h2>Add a new song</h2>

  {!! Form::open(['route' => 'storeSong']) !!}

    @include ('songs.form')
  
  {!! Form::close() !!}

@stop
