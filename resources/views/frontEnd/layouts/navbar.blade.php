<nav class="colorlib-nav" role="navigation">
    <div class="top-menu">
        <div class="container">
            <div class="row">
                <div class="col-sm-7 col-md-9">
                    <div id="colorlib-logo"><a href="index.html">Footwear</a></div>
                </div>
                <div class="col-sm-5 col-md-3">
                    <form action="#" class="search-wrap">
                        <div class="form-group">
                            <input type="search" class="form-control search" placeholder="Search">
                            <button class="btn btn-primary submit-search text-center" type="submit"><i
                                    class="icon-search"></i></button>
                        </div>
                    </form>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12 text-left menu-1">
                    <ul>
                        <li ><a href="index.html">Home</a></li>
                        <li class="has-dropdown">
                    
                            <a href="">Products</a>
                            <ul class="dropdown">
                                <li><a href="product-detail.html">Product Detail</a></li>
                                @auth
                                <li> <a href="{{route('user.fav')}}">User Favourits</a></li>
                                @endauth
                               
                                <li><a href="cart.html">Shopping Cart</a></li>
                                <li><a href="checkout.html">Checkout</a></li>
                                <li><a href="order-complete.html">Order Complete</a></li>
                                <li><a href="add-to-wishlist.html">Wishlist</a></li>
                            </ul>
                        </li>





                        <li><a href="about.html">About</a></li>
                        <li><a href="contact.html">Contact</a></li>
                        <li class="cart">
                            @if (Route::has('login'))
                                @if (Auth::check())
                                    @if (Auth::user()->role != 'user')
                                        <a href="{{ url('/admin/home') }}"
                                            class="text-sm text-gray-700 underline " style="display: inline">Dashboard</a>
                                    @endif
                                @endif
                                <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block"
                                    style="padding-top: 0.1rem !important; display:inline" >
                                    @auth


                                        <div class="user-area dropdown float-right">
                                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true"
                                                aria-expanded="false">
                                                <img class="rounded-circle float-md-right" width="50" height="50"  src="{{ asset('storage/'. Auth::user()->profile_photo_path )}}" alt="{{ Auth::user()->name }}" />



                                            </a>

                                            <div class="user-menu dropdown-menu">


                                                <a class="nav-link" href="#"><i class="fa fa-user"></i> Notifications <span
                                                        class="count">13</span></a>

                                                <a class="nav-link" href="#"><i class="fa fa-cog"></i> Settings</a>
                                                <form method="POST" action="{{ route('logout') }}">
                                                    @csrf
                                                    <a class="nav-link" href="#" onclick="this.parentNode.submit()"><i
                                                            class="fa fa-power-off"></i> Logout</a>

                                                </form>

                                            </div>
                                        </div>
                                    @else
                                        <a href="{{ route('login') }}" class="text-sm text-gray-700 underline">Login</a>

                                        @if (Route::has('register'))
                                            <a href="{{ route('register') }}"
                                                class="ml-4 text-sm text-gray-700 underline">Register</a>
                                        @endif
                                    @endauth
                                </div>
                            @endif

                        </li>
                        <li class="cart"><a href="{{route('cart')}}"><i class="icon-shopping-cart"></i> Cart
                        @if(Cart::instance('default')->count()>0)
                          <strong>[{{Cart::instance('default')->count()}}]</strong>
                          @endif
                        </a></li>



                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="sale">
        <div class="container">
            <div class="row">
                <div class="col-sm-8 offset-sm-2 text-center">
                    <div class="row">
                        <div class="owl-carousel2">
                            <div class="item">
                                <div class="col">
                                    <h3><a href="#">25% off (Almost) Everything! Use Code: Summer Sale</a></h3>
                                </div>
                            </div>
                            <div class="item">
                                <div class="col">
                                    <h3><a href="#">Our biggest sale yet 50% off all summer shoes</a></h3>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</nav>
