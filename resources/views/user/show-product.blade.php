@extends('user.layout')
@section('content')
<section class="ftco-section bg-light" style="font-family: Roboto Condensed">
    <div class="container">
      <div class="row">
          <div class="col-md-5 border-dark ftco-animate">
            <div class="product">
              <img src="{{asset('storage/produk/foto/'.$showProduct->foto_produk)}}" class="img-thumbnail rounded shadow-md">
            </div>
          </div>

          <div class="col-md">
            <div class="card bg-light" width="18rem" >
              <div class="card-body">
                <h2 class="card-title">{{$showProduct->nama_produk}}</h2>
                <h3> Rp.{{number_format($showProduct->harga_produk,2)}} </h3>
              </div>
              <div class="card-body">
                
                <form action="{{route('cart.add-to-cart',$showProduct->id_product)}}" method="POST" enctype="multipart/form-data">
                  @csrf
                  <button href="{{route('cart.add-to-cart',$showProduct->id_product)}}" class="btn btn-block btn-info mb-3"  type="submit"> Add to Chart</button>
                </form>
                <a href="" class="btn btn-block btn-light border border-warning"> Buy Now</a>
              </div>
            </div>
          </div>
      </div>
    </div>
</section> 

@endsection