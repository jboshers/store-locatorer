<?php

class Location extends \Eloquent {
	protected $fillable = ['name','address','city','state', 'zip', 'phone', 'lat', 'long'];
  public static $rules = array(
    'name'      => 'required|min:4',
    'address'      => 'required',
    'city'      => 'required',
    'state'      => 'required',
    'zip'      => 'required',
  );
}