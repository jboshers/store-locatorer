<?php

class APIController extends \BaseController {

  /**
   * Display a listing of the resource.
   *
   * @return Response
   */
  public function index()
  {
    $locations =  Location::all();
    // return Response::json($locations);
    return Response::json($locations, 200, array('Content-Type' => 'application/javascript'));
    // return View::make('locations.index')->withLocations($locations);
  }

}