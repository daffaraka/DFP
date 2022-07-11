<!DOCTYPE html>
<html lang="en">
  <head>
    <title>E-Meubel</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link href="https://fonts.googleapis.com/css?family=Lato:100,300,400,700,900" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto+Condensed:300,400,700" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" />
    <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" />
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
    <!-- END nav -->
	
	@yield('content')	

    <footer class="ftco-footer bg-light ftco-section">
      <div class="container">
        <div class="row mb-5">
          <div class="col-md">
            <div class="ftco-footer-widget mb-4">
              <h2 class="ftco-heading-2">Nike Shoes</h2>
              <ul class="ftco-footer-social list-unstyled float-md-left float-lft mt-5">
                <li class="ftco-animate"><a href="#"><span class="icon-twitter"></span></a></li>
                <li class="ftco-animate"><a href="#"><span class="icon-facebook"></span></a></li>
                <li class="ftco-animate"><a href="#"><span class="icon-instagram"></span></a></li>
              </ul>
            </div>
          </div>
          <div class="col-md">
            <div class="ftco-footer-widget mb-4 ml-md-5">
              <h2 class="ftco-heading-2">Menu</h2>
              <ul class="list-unstyled">
                <li><a href="#" class="py-2 d-block">Shop</a></li>
                <li><a href="#" class="py-2 d-block">About</a></li>
                <li><a href="#" class="py-2 d-block">Journal</a></li>
                <li><a href="#" class="py-2 d-block">Contact Us</a></li>
              </ul>
            </div>
          </div>
          <div class="col-md-4">
             <div class="ftco-footer-widget mb-4">
              <h2 class="ftco-heading-2">Help</h2>
              <div class="d-flex">
	              <ul class="list-unstyled mr-l-5 pr-l-3 mr-4">
	                <li><a href="#" class="py-2 d-block">Shipping Information</a></li>
	                <li><a href="#" class="py-2 d-block">Returns &amp; Exchange</a></li>
	                <li><a href="#" class="py-2 d-block">Terms &amp; Conditions</a></li>
	                <li><a href="#" class="py-2 d-block">Privacy Policy</a></li>
	              </ul>
	              <ul class="list-unstyled">
	                <li><a href="#" class="py-2 d-block">FAQs</a></li>
	                <li><a href="#" class="py-2 d-block">Contact</a></li>
	              </ul>
	            </div>
            </div>
          </div>
          <div class="col-md">
            <div class="ftco-footer-widget mb-4">
            	<h2 class="ftco-heading-2">Have a Questions?</h2>
            	<div class="block-23 mb-3">
	              <ul>
	                <li><span class="icon icon-map-marker"></span><span class="text">Indonesia</span></li>
	                <li><a href="#"><span class="icon icon-phone"></span><span class="text">(012)3456789</span></a></li>
	                <li><a href="#"><span class="icon icon-envelope"></span><span class="text">nikeshoes@gmail.com</span></a></li>
	              </ul>
	            </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12 text-center">

            <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
						  Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved
						  <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
						</p>
          </div>
        </div>
      </div>
    </footer>
    
  

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
  <script type="text/javascript"
      src="https://app.sandbox.midtrans.com/snap/snap.js"
      data-client-key="SB-Mid-server-x22KwzovWFpHlkw-LTxSeuTw"></script>  
  </body>
</html>