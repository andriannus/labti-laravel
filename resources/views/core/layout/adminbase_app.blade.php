<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">

		<link rel="shortcut icon" type="image/x-icon" href="{{ asset('images/fav-icon.jpg') }}" />
		<title>
			@yield('title')
		</title>

		<!-- Bootstrap -->
		<link rel="stylesheet" type="text/css" href="{{ asset('bootstrap/css/bootstrap.min.css') }}">

		<!-- DataTable CSS -->
		{{-- <link rel="stylesheet" type="text/css" href="#">
		<link rel="stylesheet" type="text/css" href="#">
		<link rel="stylesheet" type="text/css" href="#"> --}}
		
		<!-- FontAwesome -->
		<link rel="stylesheet" type="text/css" href="{{ asset('font-awesome/css/font-awesome.min.css') }}">

		<!-- CSS Admin -->
		<link rel="stylesheet" type="text/css" href="{{ asset('css/admin.css') }}">
		
		<!-- jQuery -->
		<script src="{{ asset('js/jquery.min.js') }}"></script>
	</head>
	<body>
		<header>
			@include('core.navigation.admin')
		</header>

		<main>
			@yield('content')
		</main>

		

		<!-- Bootstrap -->
		<script src="{{ asset('bootstrap/js/bootstrap.min.js') }}"></script>

		<!-- DataTables -->
		{{-- <script src="#"></script>
		<script src="#"></script>
		<script src="#"></script>
		<script src="#"></script> --}}

		<!-- CKEditor -->
		<script src="{{ asset('ckeditor/ckeditor.js') }}"></script>
	</body>
</html>