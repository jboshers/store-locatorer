  <div class="input">
    {{ Form::label('name', 'Store Name') }}
    {{ Form::text('name') }}
  </div>
  <div class="input">
    {{ Form::label('address', 'Address') }}
    {{ Form::text('address') }}
  </div>
  <div class="input">
    {{ Form::label('city', 'City') }}
    {{ Form::text('city') }}
  </div>
  <div class="input">
    {{ Form::label('state', 'State') }}
    {{ Form::states('state') }}
  </div>
  <div class="input">
    {{ Form::label('zip', 'Zip Code') }}
    {{ Form::text('zip') }}
  </div>
  <div class="input">
    {{ Form::label('lat', 'Latitude') }}
    {{ Form::text('lat') }}
  </div>
  <div class="input">
    {{ Form::label('long', 'Longitude') }}
    {{ Form::text('long') }}
  </div>
  <div class="input">
    {{ Form::label('phone', 'Contact Number') }}
    {{ Form::text('phone') }}
  </div>
  <button type='button' id="get_coords">Get Coordinates</button>
  {{ Form::submit('Save') }}