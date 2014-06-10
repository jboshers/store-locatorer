<?php

class LocationsController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$locations =  Location::all();
		return View::make('locations.index')->withLocations($locations);
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('locations.create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$input = Input::all();
		$location = new Location($input);
		if ( $location->save() )
			return Redirect::route('locations.index')->with('message', 'location created.');
		else
			return Redirect::route('locations.create')->withInput()->withErrors( $location->errors() );
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$location =  Location::find($id);
		return View::make('locations.edit')->withLocation($location);
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$input = Input::all();
		$location = Location::find($id);
		$location->fill($input);

		if ( $location->save() )
			return Redirect::route('locations.index')->with('message', 'location updated.');
		else
			return Redirect::route('locations.create')->withInput()->withErrors( $location->errors() );
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		$location =  Location::find($id);
		if ( $location->delete() )
			return Redirect::route('locations.index')->with('message', 'location deleted.');
	}

	public function ajaxTest()
	{
		return View::make('locations.ajax_test');
	}

}