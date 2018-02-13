@extends('core.layout.base_app')

@section('title')
	{{ $article->title }} - Cicak-World.co
@endsection

@section('content')
	<div class="content">
		<div class="wrap">
			<div class="single-page">
				<div class="single-page-artical">
					<div class="artical-content">
						<h3>{{ $article->title }}</h3>
						<hr>
							{!! $article->content !!}
					</div>
					<div class="share-artical">
						<ul>
							<li><a href="#"><i class="fa fa-facebook-square"></i> Facebook</a></li>
							<li><a href="#"><i class="fa fa-twitter-square"></i> Twitter</a></li>
							<li><a href="#"><i class="fa fa-google-plus-square"></i> Google+</a></li>
						</ul>
					</div>
					<div class="clear"> </div>
				</div>
			</div>
		</div>
	</div>
@endsection