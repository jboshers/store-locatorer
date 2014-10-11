@extends('layout')

@section('content')
<h3 style="float: right;">Total Locations: {{count($locations)}}</h3>
 <table>
    <thead>
      <td>Store Number</td>
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
    @foreach ($locations as $index => $location)
      <tr>
        <td>{{$index}}</td>
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