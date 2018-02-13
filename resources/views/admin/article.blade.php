@extends('core.layout.adminbase_app')

@section('content')
	<div class="container">
		<h1>Daftar Artikel</h1>

		<a class="btn btn-primary" href="{{ route('article.create') }}">Tambah Artikel</a>
		<br><br>

		<table class="table table-bordered text-center">
			<thead>
				<tr>
					<td>No.</td>
					<td>Judul</td>
					<td>Kategori</td>
					<td>Tanggal Buat</td>
					<td>Tanggal Edit</td>
					<td>Aksi</td>
				</tr>
			</thead>
			<tbody>
				@foreach ($articles as $article)
				<tr>
					<td>{{ $number++ }}</td>
					<td>{{ $article->title }}</td>
					<td>{{ $article->category }}</td>
					<td>{{ $article->created_at }}</td>
					<td>@if (isset($article->updated_at)) {{ $article->updated_at }} @else {{ '-' }} @endif</td>
					<td>
						<form action="{{ route('article.destroy', $article->id) }}" method="post">
							{{ csrf_field() }}
							{{ method_field('DELETE') }}
							<a class="btn btn-success" href="{{ route('article.edit', $article->id) }}">Ubah</a>
							<button type="submit" class="btn btn-danger">Hapus</button>
						</form>
					</td>
				</tr>
				@endforeach
			</tbody>
		</table>
	</div>
@endsection