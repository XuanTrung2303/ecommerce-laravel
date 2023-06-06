<div class="mobile-header-active mobile-header-wrapper-style">
    <div class="mobile-header-wrapper-inner">
        <div class="mobile-header-top">
            <div class="mobile-header-logo">
                <a href="/"><img src="{{ asset('assets/imgs/logo/logo-1.JFIF') }}" alt="logo"></a>
            </div>
            <div class="mobile-menu-close close-style-wrap close-style-position-inherit">
                <button class="close-style search-close">
                    <i class="icon-top"></i>
                    <i class="icon-bottom"></i>
                </button>
            </div>
        </div>
        <div class="mobile-header-content-area">
            <div class="mobile-search search-style-3 mobile-header-border">
                @livewire('header-search-component')
            </div>
            <div class="mobile-menu-wrap mobile-header-border">
                <!-- mobile menu start -->
                <nav>
                    <ul class="mobile-menu">
                        <li class="menu-item-has-children"><a class="active" href="/">Home </a></li>
                        <li class="menu-item-has-children"><a href="{{ route('about') }}">About</a></li>
                        <li class="menu-item-has-children"><a href="{{ route('shop') }}">Product</a></li>
                        <li class="menu-item-has-children"><a href="{{ route('contact') }}">Contact</a></li>
                        @auth
                            <li class="menu-item-has-children"><a href="#">My Account <i
                                        class="fi-rs-angle-down"></i></a>
                                @if (Auth::user()->utype == 'ADM')
                                    <ul class="sub-menu">
                                        <li class="menu-item-has-children"><a
                                                href="{{ route('admin.dashboard') }}">Dashboard</a></li>
                                        <li class="menu-item-has-children"><a
                                                href="{{ route('admin.products') }}">Products</a></li>
                                        <li class="menu-item-has-children"><a
                                                href="{{ route('admin.categories') }}">Categories</a></li>
                                        <li class="menu-item-has-children"><a href="{{ route('admin.home.slider') }}">Manage
                                                Slider</a></li>
                                    </ul>
                                @else
                                    <ul class="sub-menu">
                                        <li class="menu-item-has-children"><a
                                                href="{{ route('user.dashboard') }}">Dashboard</a></li>
                                    </ul>
                                @endif
                            </li>
                            @endif
                        </ul>
                    </nav>
                    <!-- mobile menu end -->
                </div>
                <div class="mobile-header-info-wrap mobile-header-border">
                    @auth
                        <ul lass="single-mobile-header-info">
                            <li><i class="fi-rs-user"></i>{{ Auth::user()->name }} /
                                <form method="POST" action="{{ route('logout') }}">
                                    @csrf
                                    <a href="{{ route('logout') }}"
                                        onclick="event.preventDefault(); this.closest('form').submit();">Logout</a>
                                </form>
                            </li>
                        </ul>
                    @else
                        <ul lass="single-mobile-header-info">
                            <li><i class="fi-rs-key"></i><a href="{{ route('login') }}">Log In </a> /
                                <a href="{{ route('register') }}">Sign Up</a>
                            </li>
                        </ul>
                        @endif
                        <div class="single-mobile-header-info">
                            <a href="#">(+84) 0905-000-000 </a>
                        </div>
                    </div>
                    <div class="mobile-social-icon">
                        <h5 class="mb-15 text-grey-4">Follow Us</h5>
                        <a href="https://www.facebook.com/castrichmauxanh"><img
                                src="{{ asset('assets/imgs/theme/icons/icon-facebook.svg') }}" alt=""></a>
                        <a href="https://www.instagram.com/9nurt_/"><img
                                src="{{ asset('assets/imgs/theme/icons/icon-instagram.svg') }}" alt=""></a>
                    </div>
                </div>
            </div>
        </div>
