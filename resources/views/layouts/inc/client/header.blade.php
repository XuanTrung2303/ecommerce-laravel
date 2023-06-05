<header class="header-area header-style-1 header-height-2">
    <div class="header-top header-top-ptb-1 d-none d-lg-block">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-xl-6 col-lg-4">
                    <div class="text-center">
                        <div id="news-flash" class="d-inline-block">
                            <ul>
                                <li>Get great devices up to 50% off <a href="shop.html">View details</a></li>
                                <li>Supper Value Deals - Save more with coupons</li>
                                <li>Trendy 25silver jewelry, save up 35% off today <a href="shop.html">Shop now</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4">
                    <div class="header-info header-info-right">
                        @auth
                            <ul>
                                <li><i class="fi-rs-user"></i>{{ Auth::user()->name }} /
                                    <form method="POST" action="{{ route('logout') }}">
                                        @csrf
                                        <a href="{{ route('logout') }}"
                                            onclick="event.preventDefault(); this.closest('form').submit();">Logout</a>
                                    </form>
                                </li>
                            </ul>
                        @else
                            <ul>
                                <li><i class="fi-rs-key"></i><a href="{{ route('login') }}">Log In </a> /
                                    <a href="{{ route('register') }}">Sign Up</a>
                                </li>
                            </ul>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="header-middle header-middle-ptb-1 d-none d-lg-block">
            <div class="container">
                <div class="header-wrap">
                    <div class="logo logo-width-1">
                        <a href="index.html"><img src="{{ asset('assets/imgs/logo/logo.png') }}" alt="logo"></a>
                    </div>
                    <div class="header-right">
                        @livewire('header-search-component')
                        <div class="header-action-right">
                            <div class="header-action-2">
                                @livewire('wishlist-icon-component')
                                @livewire('cart-icon-component')
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="header-bottom header-bottom-bg-color sticky-bar">
            <div class="container">
                <div class="header-wrap header-space-between position-relative">
                    <div class="logo logo-width-1 d-block d-lg-none">
                        <a href="index.html"><img src="{{ asset('assets/imgs/logo/logo.png') }}" alt="logo"></a>
                    </div>
                    <div class="header-nav d-none d-lg-flex">
                        <div class="main-menu main-menu-padding-1 main-menu-lh-2 d-none d-lg-block">
                            <nav>
                                <ul>
                                    <li><a class="active" href="/">Home </a></li>
                                    <li><a href="about.html">About</a></li>
                                    <li><a href="{{ route('shop') }}">Product</a></li>
                                    <li><a href="blog.html">Blog </a></li>
                                    <li><a href="contact.html">Contact</a></li>
                                    @auth
                                        <li><a href="#">My Account<i class="fi-rs-angle-down"></i></a>
                                            @if (Auth::user()->utype == 'ADM')
                                                <ul class="sub-menu">
                                                    <li><a href="{{ route('admin.dashboard') }}">Dashboard</a></li>
                                                    <li><a href="{{ route('admin.products') }}">Products</a></li>
                                                    <li><a href="{{ route('admin.categories') }}">Categories</a></li>
                                                    <li><a href="{{ route('admin.home.slider') }}">Manage Slider</a></li>
                                                    <li><a href="#">Orders</a></li>
                                                    <li><a href="#">Customers</a></li>
                                                </ul>
                                            @else
                                                <ul class="sub-menu">
                                                    <li><a href="{{ route('user.dashboard') }}">Dashboard</a></li>
                                                </ul>
                                            @endif
                                        </li>
                                        @endif
                                    </ul>
                                </nav>
                            </div>
                        </div>
                        <div class="hotline d-none d-lg-block">
                            <p><i class="fi-rs-smartphone"></i><span>Toll Free</span> (+1) 0000-000-000 </p>
                        </div>
                        <div class="header-action-right d-block d-lg-none">
                            <div class="header-action-2">
                                <div class="header-action-icon-2">
                                    <a href="shop-wishlist.php">
                                        <img alt="Surfside Media" src="{{ asset('assets/imgs/theme/icons/icon-heart.svg') }}">
                                        <span class="pro-count white">4</span>
                                    </a>
                                </div>
                                <div class="header-action-icon-2">
                                    <a class="mini-cart-icon" href="cart.html">
                                        <img alt="Surfside Media" src="{{ asset('assets/imgs/theme/icons/icon-cart.svg') }}">
                                        <span class="pro-count white">2</span>
                                    </a>
                                    <div class="cart-dropdown-wrap cart-dropdown-hm2">
                                        <ul>
                                            <li>
                                                <div class="shopping-cart-img">
                                                    <a href="product-details.html"><img alt="Surfside Media"
                                                            src="{{ asset('assets/imgs/shop/thumbnail-3.jpg') }}"></a>
                                                </div>
                                                <div class="shopping-cart-title">
                                                    <h4><a href="product-details.html">Plain Striola Shirts</a></h4>
                                                    <h3><span>1 × </span>$800.00</h3>
                                                </div>
                                                <div class="shopping-cart-delete">
                                                    <a href="#"><i class="fi-rs-cross-small"></i></a>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="shopping-cart-img">
                                                    <a href="product-details.html"><img alt="Surfside Media"
                                                            src="{{ asset('assets/imgs/shop/thumbnail-4.jpg') }}"></a>
                                                </div>
                                                <div class="shopping-cart-title">
                                                    <h4><a href="product-details.html">Macbook Pro 2022</a></h4>
                                                    <h3><span>1 × </span>$3500.00</h3>
                                                </div>
                                                <div class="shopping-cart-delete">
                                                    <a href="#"><i class="fi-rs-cross-small"></i></a>
                                                </div>
                                            </li>
                                        </ul>
                                        <div class="shopping-cart-footer">
                                            <div class="shopping-cart-total">
                                                <h4>Total <span>$383.00</span></h4>
                                            </div>
                                            <div class="shopping-cart-button">
                                                <a href="cart.html">View cart</a>
                                                <a href="shop-checkout.php">Checkout</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="header-action-icon-2 d-block d-lg-none">
                                    <div class="burger-icon burger-icon-white">
                                        <span class="burger-icon-top"></span>
                                        <span class="burger-icon-mid"></span>
                                        <span class="burger-icon-bottom"></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>
