<html xmlns="http://www.w3.org/1999/xhtml">
<head>
      <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>E-Meubel Admin</title>
	<!-- BOOTSTRAP STYLES-->
    <link href="{{asset('css/admin/css/bootstrap.css')}}" rel="stylesheet" />
     <!-- FONTAWESOME STYLES-->
    <link href="{{asset('css/admin/css/font-awesome.css')}}" rel="stylesheet" />
     <!-- MORRIS CHART STYLES-->
    <link href="{{asset('css/admin/js/morris/morris-0.4.3.min.css')}} " rel="stylesheet" />
        <!-- CUSTOM STYLES-->
    <link href="{{asset('css/admin/css/custom.css')}}" rel="stylesheet" />
     <!-- GOOGLE FONTS-->
   <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
</head>
<body>
    <div id="wrapper">
        <nav class="navbar navbar-default navbar-cls-top " role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="{{route('index')}}">E-Meubel Admin</a> 
            </div>
        <div style="color: white;padding: 15px 50px 5px 50px;
              float: right;font-size: 16px;"> Last access : 2021 &nbsp;
        </nav>   
           <!-- /. NAV TOP  -->
        <nav class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">
				<li class="text-center">
                    <img src="{{asset('css/admin/img/avatar.png')}}" class="user-image img-responsive"/>
					</li>
				
					
                    <li><a href="{{route('admin.home')}}"><i class="fa fa-dashboard fa-3x"></i> Home</a></li>
                    <li><a href="{{route('admin.product')}}"><i class="fa fa-edit fa-3x"></i> Produk</a></li>
                    <li><a href="{{route('admin.pelanggan')}}"><i class="fa fa-edit fa-3x"></i> Pelanggan</a></li>
                    <li><a href="index.php?halaman=logout"><i class="main-text"></i> Logout</a></li>
                </ul>
               
            </div>
            
        </nav>  
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper" >
            <div id="page-inner">
               @yield('content-admin')
            </div>
             <!-- /. PAGE INNER  -->
        </div>
         <!-- /. PAGE WRAPPER  -->
        </div>
     <!-- /. WRAPPER  -->
    <!-- SCRIPTS -AT THE BOTOM TO REDUCE THE LOAD TIME-->
    <!-- JQUERY SCRIPTS -->
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