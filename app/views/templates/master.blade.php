<!DOCTYPE html>
<html>
<head>
	<title>Enterpise</title>
	<link rel="stylesheet" type="text/css" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/main.css') }}">
</head>
<body>
<script src="//ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script>
//  $(window).load(function() {
//     $("#loader").fadeOut("slow");
//  }) 
</script>

<!-- <div id="loader">
  <center>
    <img src="{{ asset('assets/img/ajax-loader.gif') }}">
    <p>Enterprise is gathering data...</p>
  </center>
</div> -->

<div class="container app-container">
	<div class="row">
		<div class="col-xs-12"><h1>Starship Enterprise</h1></div>
		<br><br>
	</div>
	@section('content')

  @show	
</div>


<script type="text/javascript" src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js"></script>
</body>
</html>