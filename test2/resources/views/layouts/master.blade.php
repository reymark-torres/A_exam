<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<!--Let browser know website is optimized for mobile-->
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
	<title>@yield('title')</title>
	<!--Import Google Icon Font-->
  <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	 <!-- Compiled and minified CSS -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.6/css/materialize.min.css">

  {{-- My custom style --}}
  <link rel="stylesheet" type="text/css" href="{{ asset('css/app.css') }}">
</head>
<body>
	@include('../includes.header')

	<div class="container">
		@yield('content')
	</div>

	<!--Import jQuery before materialize.js-->
  <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
	<!-- Compiled and minified JavaScript -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.6/js/materialize.min.js"></script>

  <script type="text/javascript" src="{{ asset('js/all.js') }}"></script>
</body>
</html>