@extends('layout')

@section('content')
<h2>Edit Location</h2>
{{ Form::model($location, array('method' => 'PUT','route' => array('locations.update', $location->id))) }}
  @include('locations._form')
{{ Form::close() }}
@stop