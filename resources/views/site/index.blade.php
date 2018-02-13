@extends('core.layout.base_app')

@section('title')
	Cicak-World.co
@endsection

@section('content')
	<div class="content">
		<div class="wrap">
			<div id="main" role="main">
			<ul id="tiles">
				<!-- These are our grid blocks -->
				@foreach ($articles as $article)
					<li id="post-article" data="{{ $article->id }}">
						@if ($article->category == 'cicak tembok')
							<img src="{{ asset('images/cicak/cicak-tembok.png') }}" width="282" height="auto">
						@elseif ($article->category == 'cicak kayu')
							<img src="{{ asset('images/cicak/cicak-kayu.png') }}" width="282" height="auto">
						@elseif ($article->category == 'cicak gula')
							<img src="{{ asset('images/cicak/cicak-gula.png') }}" width="282" height="auto">
						@elseif ($article->category == 'cicak batu')
							<img src="{{ asset('images/cicak/cicak-batu.png') }}" width="282" height="auto">
						@else
							<img src="{{ asset('images/cicak/cicak-terbang.png') }}" width="282" height="auto">
						@endif

						<div class="post-info">
							<div class="post-basic-info">
								<h3><a href="{{ route('article.show', $article->id)}}">{{ $article->title }}</a></h3>
								<span><a href="#"><i class="fa fa-tag"></i> {{ $article->category }}</a></span>
								@if (strlen(strip_tags($article->content)) < 100)
									<p>{{ strip_tags($article->content) }}</p>
								@else
									<p>{{ substr(strip_tags($article->content), 0, 99).'...' }}</p>
								@endif
							</div>
						</div>
					</li>
				@endforeach
				<!-- End of grid blocks -->
			</ul>
			</div>
		</div>
	</div>

	<script>
		$(document).ready(function(){
			$('li#post-article').click(function(){
				var id = $(this).attr('data');
				location.href = '{{ url('article') }}' + '/' + id;
			})
		})
	</script>
@endsection