@extends('user.layout')
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- @TODO: replace SET_YOUR_CLIENT_KEY_HERE with your client key -->
    <script type="text/javascript"
      src="https://app.sandbox.midtrans.com/snap/snap.js"
      data-client-key="SB-Mid-client-0rjpbIxnKF4OkuGQ"></script>
    <!-- Note: replace with src="https://app.midtrans.com/snap/snap.js" for Production environment -->
  </head>
@section('content')

{{-- <section class="ftco-section bg-light">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
               
                <div class="card mb-3">
                    <div class="row">
                        @foreach ($cartList as $c)

                        
                          @if ($c->status_pembayaran_cart == 'belum_dibayar')
                            <div class="col-md-12 rounded">
                              <div class="row">
                                  <div class="col-md-4 p-3">
                                      <img src="{{asset('storage/produk/foto/'.$c->foto_produk_cart)}}" height="179px;" class="img-responsive center-block rounded-start" alt="...">
                                  </div>
                                  <div class="col-md-8">
                                      <div class="card-body pl-0">
                                      <h5 class="card-title">{{$c->nama_produk}}</h5>
                                      <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                                      </div>
                                      <h3>Rp. {{number_format($c->harga_produk_cart,2)}}</h3>
                                  <a href="{{route('cart.getPembayaran',$c->id_cart)}}">
                                    <button class="btn btn-info">Bayar Sekarang!</button> 
                                  </a>
                                  </div>
                              </div>
                              <br>
                            </div>
                            
                          @elseif ($c->status_pembayaran_cart == 'dibayar')
                          <div class="col-md-12 rounded bg-info text-dark">
                            <div class="row">
                                <div class="col-md-4 p-3">
                                    <img src="{{asset('storage/produk/foto/'.$c->foto_produk_cart)}}" height="179px;" class="img-responsive center-block rounded-start" alt="...">
                                </div>
                                <div class="col-md-8">
                                    <div class="card-body pl-0">
                                    <h5 class="card-title">{{$c->nama_produk}}</h5>
                                    <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                                    </div>
                                <a href="{{route('cart.getPembayaran',$c->id_cart)}}">
                                  <button class="btn btn-warning">Bayar Sekarang!</button> 
                                </a>
                                </div>
                            </div>
                            <br>
                          </div>

                          @elseif(count($c) == 0)
                          <div class="col-md-12 rounded bg-info text-dark">
                            <div class="row">
                              <h1> Belum ada data</h1>
                            </div>
                          </div>
                          
                          @endif

                        @endforeach
                     
                    </div>
                  </div>
                    </div>
                
            </div>
        </div>
    </div>
</section> --}}

<section class="ftco-section ftco-cart">
  <div class="container">
    <div class="row">

      @if (count($cartList) == 0)
      <div class="col-md-12 text-center heading-section ftco-animate">
        <h1 class="center">Kosong</h1>
      </div>

      @else
      <div class="col-md-12 ftco-animate">
        <div class="cart-list">
          <table class="table">
            <thead class="thead-primary">
              <tr class="text-center">
                <th>Gambar </th>
                <th>Product</th>
                <th>Price</th>
                <th>Status belanja</th>
                <th>Action</th>
                <th> </th>
              </tr>
            </thead>
            <tbody>
              @foreach ($cartList as $c)
              <tr class="text-center">
               
                  <td><img class="img-fluid" src="{{asset('storage/produk/foto/'.$c->foto_produk_cart)}}" width="150"></td>

                  <td class="product-name">
                    <h3>{{$c->nama_produk}}</h3>
                    <p>Kualitas terbaik</p>
                  </td>
                  
                  <td class="price">{{number_format($c->harga_produk_cart,2)}}</td>
                  <td> 
                    @if ($c->status_pembayaran_cart == 'belum_dibayar')
                       <div class="alert alert-danger">Belum di bayar</div>
                    @endif
                  </td>
                  
                  <td>
                    <a href="{{route('cart.getPembayaran',$c->id_transaksi)}}" class="btn btn-info border border-primary mb-3"> Bayar sekarang </a> <br>
                    <a href="{{route('cart.hapus',$c->id_transaksi)}}" class="btn btn-danger btn-xs">Delete</a></td>
               
              </tr><!-- END TR-->
              @endforeach
            </tbody>
          </table>



          <p class="text-center"><a href="shop.php" class="btn btn-default">Continue Shopping</a></p>
          <p class="text-center"><a href="checkout.php" class="btn btn-primary py-3 px-4">Proceed to Checkout</a></p>
          @endif
      

        </div>
      </div>
    </div>
  </div>
</section>

@endsection