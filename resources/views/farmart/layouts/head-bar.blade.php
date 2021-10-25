<div class="ps-top-bar">
    <div class="container">
        <div class="top-bar">
            <div class="top-bar__left">
                <ul class="nav-top">
                    <li class="nav-top-item"><a class="nav-top-link" href="#">Sell on Famart.</a></li>
                    @auth

                    @else
                    <li class="nav-top-item"><a class="nav-top-link text-success" href="{{ route('register.index')}}">Register Now</a></li>
                    @endauth
                </ul>
            </div>
            <div class="top-bar__right">
                <ul class="nav-top">
                    <li class="nav-top-item contact"><a class="nav-top-link" href="tel:970978-6290"> <i class="icon-telephone"></i><span>Hotline:</span><span class="text-success font-bold">75990-622-36</span></a></li>
                    <li class="nav-top-item"><a class="nav-top-link" href="order-tracking.html">Order Tracking</a></li>
                    <li class="nav-top-item languages"><a class="nav-top-link" href="javascript:void(0);"> <span class="current-languages">English</span><i class="icon-chevron-down"></i></a>
                        <div class="select--dropdown">
                            <ul class="select-languages">
                                <li class="active language-item" data-value="English"><a href="javascript:void(0);">English</a></li>
                                <li class="language-item" data-value="Brunei"><a href="javascript:void(0);">Brunei</a></li>
                                <li class="language-item" data-value="Armenia"><a href="javascript:void(0);">Armenia</a></li>
                            </ul>
                        </div>
                    </li>
                    <li class="nav-top-item currency"><a class="nav-top-link" href="javascript:void(0);"> <span class="current-currency">USD</span><i class="icon-chevron-down"></i></a>
                        <div class="select--dropdown">
                            <ul class="select-currency">
                                <li class="active currency-item" data-value="USD"><a href="javascript:void(0);">USD</a></li>
                                <li class="currency-item" data-value="VND"><a href="javascript:void(0);">VND</a></li>
                                <li class="currency-item" data-value="EUR"><a href="javascript:void(0);">EUR</a></li>
                            </ul>
                        </div>
                    </li>
                    @auth
                    <li class="nav-top-item account"><a class="nav-top-link" href="javascript:void(0);"> <i class="icon-user"></i>Hi! <span class="font-bold">{{ Auth::user()->name }}</span></a>
                        <div class="account--dropdown">
                            <div class="account-anchor">
                                <div class="triangle"></div>
                            </div>
                            <div class="account__content">
                                @if(Auth::user()->getRole(Auth::user()->id) == true)
                                <ul class="account-list">
                                    <li class="title-item"><a href="javascript:void(0);">My Account</a></li>
                                    <li><a href="#">Dasdboard</a></li>
                                    <li><a href="#">Account Setting</a></li>
                                    <li><a href="shopping-cart.html">Orders</a></li>
                                    <li><a href="{{ route('wishlist.index')}}">Wishlist</a></li>
                                    <li><a href="#">Shipping Address</a></li>
                                </ul>
                                <!-- <hr> -->
                                @else
                                <ul class="account-list">
                                    <li class="title-item"><a href="javascript:void(0);">Vendor Settings</a></li>
                                    <li><a href="{{ route('dashboard.index') }}">Dasdboard</a></li>
                                    <li><a href="{{ route('product.index')}}">Products</a></li>
                                    <li><a href="shopping-cart.html">Orders</a></li>
                                    <li><a href="#">Settings</a></li>
                                    <li><a href="#">View Store</a></li>
                                </ul>
                                @endif
                                <hr><a class="account-logout" href="{{ route('logout')}}"><i class="icon-exit-left"></i>Log out</a>
                            </div>
                        </div>
                    </li>
                    @else
                    <li class="nav-top-item account"><a class="nav-top-link" href="{{ route('login.index') }}"> <i class="icon-user"></i>Login</a></li>
                    @endauth
                </ul>
            </div>
        </div>
    </div>
</div>