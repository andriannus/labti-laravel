@extends('core.layout.adminbase_app')

@section('title')
	Tambah Artikel - Cicak-World.co
@endsection

@section('content')
	<div class="container">
		<div class="col-md-8 col-md-offset-2">
			<h1 class="text-center text-danger margin-bottom-md">Tambah Artikel</h1>
			<hr>
			<form method="POST" action="{{ route('article.store') }}">
				{{ csrf_field() }}
				<div class="form-group">
					<label>Judul</label>
					<input type="text" class="form-control" placeholder="Masukkan judul" name="title" required>
				</div>
				<div class="form-group">
					<label>Kategori</label>
					<select name="category" class="form-control">
						<option value="cicak-tembok">Cicak Tembok</option>
						<option value="cicak-kayu">Cicak Kayu</option>
						<option value="cicak-gula">Cicak Gula</option>
						<option value="cicak-batu">Cicak Batu</option>
						<option value="cicak-terbang">Cicak Terbang</option>
					</select>
				</div>
				<div class="form-group">
					<label>Isi</label>
					<div id="loading" class="text-center">
						<i class="fa fa-spin fa-spinner fa-5x"></i>
					</div>
					<textarea id="editor" class="form-control" placeholder="Masukkan isi artikel" rows="5" name="content" style="display: none;"></textarea>
				</div>
				<div class="form-group">
					<button class="btn btn-success" type="submit">
						<i class="fa fa-check"></i> Submit
					</button>
					<a class="btn btn-danger" href="{{ route('article.index') }}">
						<i class="fa fa-arrow-left"></i> Back
					</a>
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