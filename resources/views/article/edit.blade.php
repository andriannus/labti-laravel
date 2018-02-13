@extends('core.layout.adminbase_app')

@section('title')
	Edit Artikel - Cicak-World.co
@endsection

@section('content')
	<div class="container">
		<div class="col-md-8 col-md-offset-2">
			<h1 class="text-center">Edit Artikel</h1>
			<hr>
			<form method="POST" action="{{ route('article.update', $article->id) }}">
				{{ csrf_field() }}
				{{ method_field('PATCH') }}
				<div class="form-group">
					<label>Judul</label>
					<input type="text" class="form-control" placeholder="Masukkan judul" name="title" value="{{ $article->title }}"  required>
				</div>
				<div class="form-group">
					<label>Kategori</label>
					<select name="category" class="form-control">
						<option value="cicak tembok" @if ($article->category == 'cicak tembok') {{ 'selected' }} @endif>Cicak Tembok</option>
						<option value="cicak kayu" @if ($article->category == 'cicak kayu') {{ 'selected' }} @endif>Cicak Kayu</option>
						<option value="cicak gula" @if ($article->category == 'cicak gula') {{ 'selected' }} @endif>Cicak Gula</option>
						<option value="cicak batu" @if ($article->category == 'cicak batu') {{ 'selected' }} @endif>Cicak Batu</option>
						<option value="cicak terbang" @if ($article->category == 'cicak terbang') {{ 'selected' }} @endif>Cicak Terbang</option>
					</select>
				</div>
				<div class="form-group">
					<label>Isi</label>
					<div id="loading" class="text-center">
						<i class="fa fa-spin fa-spinner fa-5x"></i>
					</div>
					<textarea id="editor" class="form-control" placeholder="Masukkan isi artikel" rows="5" name="content" style="display: none;">{{ $article->content }}</textarea>
				</div>
				<div class="form-group">
					<button class="btn btn-success" type="submit">Submit</button>
					<a class="btn btn-danger" href="#">Back</a>
				</div>
			</form>
		</div>
	</div>

	<script type="text/javascript">
		$(document).ready(function(){
			ClassicEditor
				.create(document.querySelector('#editor'), {
					toolbar: [ 'headings', 'bold', 'italic', 'link', 'bulletedList', 'numberedList', 'blockQuote', 'undo', 'redo']
				})
				.then(editor => {
					console.log(Array.from( editor.ui.componentFactory.names()));
				})
				.catch(error => {
					console.log(error);
				});

			$('#loading').hide();
		})
	</script>
@endsection