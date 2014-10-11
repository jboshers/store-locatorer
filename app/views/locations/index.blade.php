@extends('layout')

@section('content')
<h1>Total Locations: {{$locations.allcount}}</h1>
 <table>
    <thead>
      <td>Name</td>
      <td>Address</td>
      <td>City</td>
      <td>State</td>
      <td>Zip</td>
      <td>Phone Number</td>
      <td>Latitude</td>
      <td>Longitude</td>
      <td>Actions</td>
    </thead>
    @foreach ($locations as $location)
      <tr>
        <td>{{$location -> name}}</td>
        <td>{{$location -> address}}</td>
        <td>{{$location -> city}}</td>
        <td>{{$location -> state}}</td>
        <td>{{$location -> zip}}</td>
        <td>{{$location -> phone}}</td>
        <td>{{$location -> lat}}</td>
        <td>{{$location -> long}}</td>
        <td>
          {{ link_to_route('locations.edit', "Edit", $location->id) }}
          {{ link_to_route('locations.destroy', 'Delete', $location->id, ['data-method'=>'delete']) }}
        </td>
      </tr>
    @endforeach
  </table>
@stop