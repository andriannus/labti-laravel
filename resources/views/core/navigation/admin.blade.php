<nav class="navbar navbar-inverse navbar-static-top">
	<div class="container">
	<!-- Brand and toggle get grouped for better mobile display -->
		<div class="navbar-header">
			<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1"
			aria-expanded="false">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
			<a class="navbar-brand" href="#">Administrator</a>
		</div>

	<!-- Collect the nav links, forms, and other content for toggling -->
		<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
			<ul class="nav navbar-nav">
				@if (isset($menu) && $menu == 'home')
					<li class="active">
						<a href="{{ route('admin.index') }}">
						<i class="fa fa-home"></i> Home</a>
					</li>
				@else
					<li>
						<a href="{{ route('admin.index') }}">
						<i class="fa fa-home"></i> Home</a>
					</li>
				@endif

				@if (isset($menu) && $menu == 'article')
					<li class="active">
						<a href="{{ route('admin.article') }}">
						<i class="fa fa-newspaper-o"></i> Artikel</a>
					</li>
				@else
					<li>
						<a href="{{ route('admin.article') }}">
						<i class="fa fa-newspaper-o"></i> Artikel</a>
					</li>
				@endif
			</ul>
		</div><!-- /.navbar-collapse -->
	</div><!-- /.container-fluid -->
</nav>