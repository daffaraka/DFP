@extends('admin.layout-admin')
@section('content-admin')
<form method="post" enctype="multipart/form-data">
	<div class="form-group">
		<label>Nama Produk</label>
		<input type="text" class="form-control" name="nama" value="">
	</div>
	<div class="form-group">
		<label>Harga (Rp)</label>
		<input type="text" class="form-control" name="harga" value="">
	</div>
	<div class="form-group">
		<img src="../admin/foto_produk/" width="200">
	</div>
	<div class="form-group">
		<label>Ganti Foto Produk</label>
		<input type="file" class="form-control" name="foto">
	</div>
	<button class="btn btn-primary" name="ubah">Ubah</button>
</form>
@endsection