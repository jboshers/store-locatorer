<!DOCTYPE html>
<html>
  <head>
    <title>Map Example</title>
    <meta charset="UTF-8">
      {{ HTML::style('css/map.css') }}
  </head>

  <body>

    <div id="store-locator-container">
      <div id="page-header">
        <h1>Map Test</h1>
      </div>

      <div id="form-container">
        <form id="user-location" method="post" action="#">
            <div id="form-input">
              <label for="address">Enter Address or Zip Code:</label>
              <input type="text" id="address" name="address" />
             </div>

            <button id="submit" type="submit">Submit</button>
        </form>
      </div>

      <div id="map-container">
        <div id="loc-list">
            <ul id="list"></ul>
        </div>
        <div id="map"></div>
      </div>
    </div>

    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    {{ HTML::script('js/handlebars-1.0.0.min.js') }}
    <script src="http://maps.google.com/maps/api/js?sensor=false"></script>
    {{ HTML::script('js/store_locator.js') }}
      <script>

        $(function() {
          $('#map-container').storeLocator({'dataType': 'json', 'dataLocation': '/api/getLocations'});
        });

      </script>

  </body>
</html>