@extends('core.layout.adminbase_app')

@section('content')
	<div class="container">
		<div class="jumbotron text-center">
			<h1>Selamat Datang di</h1>
			<h1>Admin Cicak World</h1>
			<hr>
			<a href="{{ route('admin.article') }}" class="btn btn-lg btn-default">Menuju Artikel <i class="fa fa-arrow-right"></i></a>
		</div>
	</div>
@endsection