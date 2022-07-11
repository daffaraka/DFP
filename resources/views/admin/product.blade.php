@extends('admin.layout-admin')
@section('content-admin')

<h2>Data Produk</h2>

<table class="table table-bordered">
    <thead>
        <tr>
           
            <th>Id</th>
            <th>Nama</th>
            <th>Harga</th>
            <th>Foto</th>
            <th>Aksi</th>
        </tr>
    </thead>

<tbody>
    @foreach ($product as $p)
    <tr>
      
        <td>{{$p->id_product}}</td>
        <td>{{$p->nama_produk}}</td>
        <td>Rp.{{number_format($p->harga_produk,2)}} </td>
        <td>
            <img src="{{asset('storage/produk/foto/'.$p->foto_produk)}}" width="150" class="img-responsive center-block">
		</td>
        <td>
            
            <a href="{{route('admin.product-edit')}}" class="btn btn-warning">Ubah</a>
            <a href="{{route('admin.product-hapus',$p->id_product)}}" class="btn btn-danger">Hapus</a>
        </td> 
       
       
    </tr>
    @endforeach
    
</tbody>
</table>

<a href="{{route('admin.product-tambah')}}" class="btn btn-primary">Tambah Produk</a>
@endsection