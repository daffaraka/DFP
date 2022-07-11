@extends('admin.layout-admin')
@section('content-admin')
<h2>Tambah Produk</h2>

<form method="post" enctype="multipart/form-data" action="{{route('admin.product-store')}}">
	@csrf
	<div class="form-group">
		<label>Nama</label>
		<input type="text" class="form-control" name="nama_produk">
	</div>
	<div class="form-group">
		<label>Harga(Rp)</label>
		<input type="number" class="form-control" name="harga_produk">
	</div>
	<div class="form-group">
		<label>Foto</label>
		<input type="file" class="form-control" name="foto_produk">
	</div>
	<button class="btn btn-primary" name="save">Simpan</button>
</form>

@endsection