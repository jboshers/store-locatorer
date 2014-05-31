@extends('layout')

@section('content')
<h2>New Location</h2>
{{ Form::open(array(new Location,'route' => 'locations.store')) }}
  @include('locations._form')
{{ Form::close() }}
@stop