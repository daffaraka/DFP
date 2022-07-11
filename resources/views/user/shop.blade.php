@extends('user.layout')
@section('content')
<section class="ftco-section bg-light">
  <div class="container">
    <div class="row">

      @if (count($shop) == 0)
      <div class="col md-12 row d-flex justify-content-center py-5" style="font-family: Roboto Condensed">
        <div class="col-md-7 text-center heading-section ftco-animate">
          <h1 class="center">Tidak ada product</h1>
        </div>
      </div>
      @else
          @foreach ($shop as $item)
            <div class="col-sm col-md-6 col-lg-3 ftco-animate">
              <div class="product">
            
              <a href="{{route('shop.show-product',$item->id_product)}}" class="img-prod">
                <img class="img-fluid" src="{{asset('storage/produk/foto/'.$item->foto_produk)}}" alt="Colorlib Template">
              </a>
              <div class="text py-3 px-3">
              <h3> {{$item->nama_produk}} </h3>
                <div class="d-flex">
                  <div class="pricing">
                    <p class="price">Rp.{{number_format($item->harga_produk,2)}}</span></p>
                  </div>
                </div>
                <hr>
                <p class="bottom-area d-flex">
                  <form action="{{route('cart.add-to-cart',$item->id_product)}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <button href="{{route('cart.add-to-cart',$item->id_product)}}" class="btn btn-block btn-info mb-3"  type="submit"> Add to Chart  <i class="ion-ios-add ml-2"></i></button>
                  </form>
                </p>
              </div>
            
              </div>
            </div>
          @endforeach
      @endif
  

    </div>
  </div>
</section>

<section class="ftco-section-parallax">
  <div class="parallax-img d-flex align-items-center">
    <div class="container">
      <div class="row d-flex justify-content-center py-5">
        <div class="col-md-7 text-center heading-section ftco-animate">
          <h1 class="big">Subscribe</h1>
          <h2>Subcribe to our Newsletter</h2>
          <div class="row d-flex justify-content-center mt-5">
            <div class="col-md-8">
              <form action="#" class="subscribe-form">
                <div class="form-group d-flex">
                  <input type="text" class="form-control" placeholder="Enter email address">
                  <input type="submit" value="Subscribe" class="submit px-3">
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

@endsection

 
		
	
		
	
   