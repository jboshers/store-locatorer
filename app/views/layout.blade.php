<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Pacha Soap Locations!</title>
  <link rel=stylesheet href="//cdn.datatables.net/1.10.3/css/jquery.dataTables.min.css" type="text/css" media="screen" >
  {{ HTML::style('css/style.css') }}
</head>
<body>
  @if (Session::get('message'))
    <div class="alert">
      {{ Session::get('message') }}
    </div>
  @endif
  <div class="wrapper">
    <header>
      <h1>Locations</h1>
      {{ link_to_route('locations.create', 'Create Location', '' , array('class'=>'create_btn')) }}
    </header>
    @yield('content')
  </div>
  <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
  <script src="//cdn.datatables.net/1.10.3/js/jquery.dataTables.min.js"></script>
  {{ HTML::script('js/helper_delete.js') }}
  <script>
  $('#stores').DataTable();
  $('.alert').delay(2000).fadeOut();
  $('#get_coords').on('click', function(){
    var street = $('#address').val();
    var city = $('#city').val();
    var state = $('#state').val();
    var zip = $('#zip').val();
    var address = street+" "+city+" "+state+" "+zip;
    $.ajax({
      url:"http://maps.googleapis.com/maps/api/geocode/json?address="+address+"&sensor=false",
      type: "POST",
      success:function(res){
         $('#lat').val(res.results[0].geometry.location.lat);
         $('#long').val(res.results[0].geometry.location.lng);
      }
    });
  });
  </script>
</body>
</html>