<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-light ftco-navbar-light" id="ftco-navbar">
    <div class="container">
        <a class="navbar-brand" href="{{route('index')}}">E-Meubel Bojonegoro </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="oi oi-menu"></span> Menu
        </button>

        <div class="collapse navbar-collapse" id="ftco-nav">
        <ul class="navbar-nav ml-auto">
            <li class="nav-item active"> <a href="{{route('index')}}" class="nav-link">Home</a></li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="dropdown04" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Shop</a>
                <div class="dropdown-menu" aria-labelledby="dropdown04">
                <a class="dropdown-item" href="{{route('shop')}}">Shop</a>
                <a class="dropdown-item" href="checkout.php">Checkout</a>
                </div>
            </li>
            <li class="nav-item"><a href="{{route('admin.home')}}" class="nav-link">Admin Page</a></li>
            <li class="nav-item"><a href="{{route('cart.cartList')}}" class="nav-link">Cart</a></li>
            <li class="nav-item"><a href="#" class="nav-link">Contact</a></li>
                    <!--jika sudah login(ada session pelanggan)-->
                   
            <!--jika belum login-->
           
            
          @guest
            @if (Route::has('login'))
                <li class="nav-item"><a href="{{route('login')}}" class="nav-link">Login</a></li>
                @if (Route::has('register'))
                    <li class="nav-item"><a href="{{route('register')}}" class="nav-link">Register</a></li>
                @endif
            @endif
          @endguest

          @auth
            <li class="nav-link nav-item dropdown p-0">
                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                    {{ Auth::user()->name }}
                </a>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item w-auto" href="{{route('admin.home')}}" >Admin home</a>
                    <a class="dropdown-item w-auto" href="{{route('logout')}}" >Logout</a>
                </div>
            </li>
          @endauth
        </ul>
        </div>
    </div>
</nav>