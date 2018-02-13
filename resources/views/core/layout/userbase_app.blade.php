<!DOCTYPE HTML>
<html>
	<head>
		<title>
			@yield('title')
		</title>

		<!-- Bootstrap CSS -->
		<link rel="stylesheet" type="text/css" href="{{ asset('bootstrap/css/bootstrap.min.css') }}">

		<!-- Fontawesome -->
		<link rel="stylesheet" type="text/css" href="{{ asset('font-awesome/css/font-awesome.min.css') }}">

		<!-- CSS -->
		<link rel="stylesheet" type="text/css" href="{{ asset('css/style2.css') }}">

		<!-- jQuery -->
		<script src="{{ asset('js/jquery.min.js') }}"></script>
	</head>
	<body>

		<main>
			<!-- Load content -->
			@yield('content')
		</main>

		<!-- Bootstrap JS -->
		<script src="{{ asset('bootstrap/js/bootstrap.min.js') }}"></script>
	</body>
</html>