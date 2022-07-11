@extends('admin.layout-admin')
@section('content-admin')
<h2>Data Pembelian</h2>

<table class="table table-bordered">
	<thead>
		<tr>
            <th>Id</th>
			<th>Nama Pelanggan</th>
			<th>Tanggal</th>
			<th>Total</th>
			<th>Aksi</th>
		</tr>
	</thead>
	<tbody>
		
		<tr>
            <td>id pembelian</td>
			<td>nama pelanggan</td>
			<td>tanggal pembelian</td>
			<td>total pembelian</td>
			<td>
            <a href="{{route('admin.pembelian-detail')}}"class="btn btn-info">D   etail</a>
			</td>
		</tr>
		

	</tbody>
</table>
@endsection