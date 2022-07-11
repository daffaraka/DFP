<!DOCTYPE html>
<html lang="en">
  <head>
    <title>E-Meubel Bojonegoro</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link href="https://fonts.googleapis.com/css?family=Lato:100,300,400,700,900" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto+Condensed:300,400,700" rel="stylesheet">

    <link rel="stylesheet" href="{{asset('css/user/css/open-iconic-bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/user/css/animate.css')}}">
    
    <link rel="stylesheet" href="{{asset('css/user/css/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/user/css/owl.theme.default.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/user/css/magnific-popup.css')}}">

    <link rel="stylesheet" href="{{asset('css/user/css/aos.css')}}">

    <link rel="stylesheet" href="{{asset('css/user/css/ionicons.min.css')}}">

    <link rel="stylesheet" href="{{asset('css/user/css/bootstrap-datepicker.css')}}">
    <link rel="stylesheet" href="{{asset('css/user/css/jquery.timepicker.css')}}">

    
    <link rel="stylesheet" href="{{asset('css/user/css/flaticon.css')}}">
    <link rel="stylesheet" href="{{asset('css/user/css/icomoon.css')}}">
    <link rel="stylesheet" href="{{asset('css/user/css/style.css')}}">
  </head>
  <body>

	@include('user.partials.header')
		
	<div class="hero-wrap js-fullheight" style="background-image: url({{asset('css/user/meubel/bg_home.jpg')}});">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text js-fullheight align-items-center justify-content-center">
        	<h3 class="v">E-Meubel Bojonegoro</h3>
        	<h3 class="vr">Since - 2019</h3>
          <div class="col-md-11 ftco-animate text-center">
            <h1 style="text-shadow: #000 2px 5px 2px">E-Meubel</h1>
            <h2 style="text-shadow: #000 2px 3px 2px"><span>Furniture terbaik untuk rumah anda </span></h2>
          </div>
          <div class="mouse">
						<a href="#" class="mouse-icon">
							<div class="mouse-wheel"><span class="ion-ios-arrow-down"></span></div>
						</a>
					</div>
        </div>
      </div>
    </div>

    <div class="goto-here"></div>
    
	
    <section class="ftco-section ftco-product">
    	<div class="container">
    		<div class="row justify-content-center mb-3 pb-3">
          <div class="col-md-12 heading-section text-center ftco-animate">
          	<h1 class="big">Trending</h1>
            <h2 class="mb-4">Trending</h2>
          </div>
        </div>
    		<div class="row">
    			<div class="col-md-12">
    				<div class="product-slider owl-carousel ftco-animate">
    					<div class="item">
		    				<div class="product">
		    					<a href="{{route('shop')}}" class="img-prod"><img class="img-fluid" src="{{asset('css/user/meubel/foto_produk/produk1.jpg')}}" alt="Colorlib Template">
		    					</a>
		    					<div class="text pt-3 px-3">
		    						<h3><a href="{{route('shop')}}">Nike Air Vapormax Flyknit</a></h3>
		    						<div class="d-flex">
		    							<div class="pricing">
			    							<p class="price"><span>Rp1.240.000</span></p>
			    						</div>
		    						</div>
		    					</div>
		    				</div>
	    				</div>
	    				<div class="item">
		    				<div class="product">
		    					<a href="{{route('shop')}}" class="img-prod"><img class="img-fluid" src="{{asset('css/user/meubel/foto_produk/produk2.jpg')}}" alt="Colorlib Template"></a>
		    					<div class="text pt-3 px-3">
		    						<h3><a href="{{route('shop')}}">Nike Air Vapormax Plus Sneakers In Blue</a></h3>
		    						<div class="d-flex">
		    							<div class="pricing">
				    						<p class="price"><span>Rp1.236.000</span></p>
				    					</div>
			    					</div>
		    					</div>
		    				</div>
	    				</div>
	    				<div class="item">
		    				<div class="product">
		    					<a href="{{route('shop')}}" class="img-prod"><img class="img-fluid" src="{{asset('css/user/meubel/foto_produk/produk3.jpg')}}" alt="Colorlib Template"></a>
		    					<div class="text pt-3 px-3">
		    						<h3><a href="{{route('shop')}}">Nike Sportswear Vapormax Plus</a></h3>
		    						<div class="d-flex">
		    							<div class="pricing">
				    						<p class="price"><span>Rp2.100.000</span></p>
				    					</div>
			    					</div>
		    					</div>
		    				</div>
	    				</div>
	    				<div class="item">
		    				<div class="product">
		    					<a href="{{route('shop')}}" class="img-prod"><img class="img-fluid" src="{{asset('css/user/meubel/foto_produk/produk4.jpg')}}" alt="Colorlib Template"></a>
		    					<div class="text pt-3 px-3">
		    						<h3><a href="{{route('shop')}}">Nike Men's Air VaporMax</a></h3>
		    						<div class="d-flex">
		    							<div class="pricing">
				    						<p class="price"><span>Rp2.500.000</span></p>
				    					</div>
			    					</div>
		    					</div>
		    				</div>
	    				</div>
    				</div>
    			</div>
    		</div>
    	</div>
    </section>

  @include('user.partials.our-product')

  @include('user.partials.customer-section')

  @include('user.partials.our-guarantee')
		
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

	@include('user.partials.footer')
    
  

  <!-- loader -->
  <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>


  <script src="{{asset('css/user/js/jquery.min.js')}}"></script>
  <script src="{{asset('css/user/js/jquery-migrate-3.0.1.min.js')}}"></script>
  <script src="{{asset('css/user/js/popper.min.js')}}"></script>
  <script src="{{asset('css/user/js/bootstrap.min.js')}}"></script>
  <script src="{{asset('css/user/js/jquery.easing.1.3.js')}}"></script>
  <script src="{{asset('css/user/js/jquery.waypoints.min.js')}}"></script>
  <script src="{{asset('css/user/js/jquery.stellar.min.js')}}"></script>
  <script src="{{asset('css/user/js/owl.carousel.min.js')}}"></script>
  <script src="{{asset('css/user/js/jquery.magnific-popup.min.js')}}"></script>
  <script src="{{asset('css/user/js/aos.js')}}"></script>
  <script src="{{asset('css/user/js/jquery.animateNumber.min.js')}}"></script>
  <script src="{{asset('css/user/js/bootstrap-datepicker.js')}}"></script>
  <script src="{{asset('css/user/js/scrollax.min.js')}}"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
  <script src="{{asset('css/user/js/google-map.js')}}"></script>
  <script src="{{asset('css/user/js/main.js')}}"></script>
    
  </body>
</html>