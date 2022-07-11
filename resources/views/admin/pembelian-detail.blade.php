@extends('admin.layout-admin')
@section('content-admin')
<h2>Detail Pembelian</h2>


<div class="row">
  <div class="col-md-4">
	<p></p>
    <strong>Purchase Number: id_pembelian</strong><br>
    Date: tanggal pembelian<br>
    Total: Rp. 9999999
  </div>
  <div class="col-md-4">
    <h3>Pembeli: </h3>
    <strong>nama pelanggan</strong> <br>
    <p>
	    telepon pelanggan <br>
	    email pelanggan
    </p>
  </div>
  <div class="col-md-4">
    <h3>Pengiriman: </h3>
    <strong>nama kota</strong><br>
    Ongkos Kirim: Rp.5000000 <br>
    Alamat Pengiriman: alamat pengiriman
  </div>
</div>

<table class="table table-bordered">
	<thead>
		<tr>
			<th>No</th>
			<th>Produk</th>
			<th>Harga</th>
			<th>Jumlah</th>
			<th>Subtotal</th>
		</tr>
	</thead>
	<tbody>
		
		<tr>
			<td>nomor</td>
			<td>nama produk</td>
			<td>harga produk</td>
			<td>jumlah</td>
			<td>
				harga produk * jumlah
			</td>
		</tr>
		

	</tbody>
</table>
@endsection