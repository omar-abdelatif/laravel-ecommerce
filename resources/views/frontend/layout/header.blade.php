@php
    $role = '';
    if(Auth::user()){
        $id= Auth::user()->id;
        $userId = App\Models\User::find($id);
        $role = $userId->role;
    }
@endphp
<header class="header-area header-style-1 header-height-2">
    <div class="header-top header-top-ptb-1 d-none d-lg-block">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-xl-3 col-lg-4">
                    <div class="header-info">
                        <ul>
                            <li>
                                <a href="page-account.html">My Cart</a>
                            </li>
                            <li>
                                <a href="shop-wishlist.html">Checkout</a>
                            </li>
                            <li>
                                <a href="shop-order.html">Order Tracking</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-4">
                    <div class="text-center">
                        <div id="news-flash" class="d-inline-block">
                            <ul>
                                <li>100% Secure delivery without contacting the courier</li>
                                <li>Supper Value Deals - Save more with coupons</li>
                                <li>Trendy 25silver jewelry, save up 35% off today</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4">
                    <div class="header-info header-info-right">
                        <ul>
                            <li>
                                <a class="language-dropdown-active" href="#">
                                    English
                                    <i class="fi-rs-angle-small-down"></i>
                                </a>
                                <ul class="language-dropdown">
                                    <li>
                                        <a href="#">
                                            <img src="assets/frontend/imgs/theme/flag-fr.png" alt="" />
                                            Français
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <img src="assets/frontend/imgs/theme/flag-dt.png" alt="" />
                                            Deutsch
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <img src="assets/frontend/imgs/theme/flag-ru.png" alt="" />
                                            Pусский
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                Need help? Call Us:
                                <strong class="text-brand"> + 1800 900</strong>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="header-middle header-middle-ptb-1 d-none d-lg-block">
        <div class="container">
            <div class="header-wrap">
                <div class="logo logo-width-1">
                    <a href="/">
                        <img src="assets/frontend/imgs/theme/logo.svg" alt="logo" />
                    </a>
                </div>
                <div class="header-right">
                    <div class="search-style-2">
                        <form action="#">
                            <select class="select-active">
                                <option>All Categories</option>
                                <option>Milks and Dairies</option>
                                <option>Wines & Alcohol</option>
                                <option>Clothing & Beauty</option>
                                <option>Pet Foods & Toy</option>
                                <option>Fast food</option>
                                <option>Baking material</option>
                                <option>Vegetables</option>
                                <option>Fresh Seafood</option>
                                <option>Noodles & Rice</option>
                                <option>Ice cream</option>
                            </select>
                            <input type="text" placeholder="Search for items..." />
                        </form>
                    </div>
                    <div class="header-action-right">
                        <div class="header-action-2">
                            <div class="search-location">
                                <form action="#">
                                    <select class="select-active">
                                        <option>Your Location</option>
                                        <option>Alabama</option>
                                        <option>Alaska</option>
                                        <option>Arizona</option>
                                        <option>Delaware</option>
                                        <option>Florida</option>
                                        <option>Georgia</option>
                                        <option>Hawaii</option>
                                        <option>Indiana</option>
                                        <option>Maryland</option>
                                        <option>Nevada</option>
                                        <option>New Jersey</option>
                                        <option>New Mexico</option>
                                        <option>New York</option>
                                    </select>
                                </form>
                            </div>
                            <div class="header-action-icon-2">
                                <a href="shop-wishlist.html">
                                    <img class="svgInject" alt="Nest" src="assets/frontend/imgs/theme/icons/icon-heart.svg" />
                                    <span class="pro-count blue">0</span>
                                </a>
                                <a href="shop-wishlist.html">
                                    <span class="lable">Wishlist</span>
                                </a>
                            </div>
                            <div class="header-action-icon-2">
                                <a class="mini-cart-icon" href="shop-cart.html">
                                    <img alt="Nest" src="assets/frontend/imgs/theme/icons/icon-cart.svg" />
                                    <span class="pro-count blue">0</span>
                                </a>
                                <a href="shop-cart.html">
                                    <span class="lable">Cart</span>
                                </a>
                                <div class="cart-dropdown-wrap cart-dropdown-hm2">
                                    <ul>
                                        <li>
                                            <div class="shopping-cart-img">
                                                <a href="shop-product-right.html">
                                                    <img alt="Nest" src="assets/frontend/imgs/shop/thumbnail-3.jpg" />
                                                </a>
                                            </div>
                                            <div class="shopping-cart-title">
                                                <h4>
                                                    <a href="shop-product-right.html">Daisy Casual Bag</a>
                                                </h4>
                                                <h4>
                                                    <span>1 × </span>
                                                    $800.00
                                                </h4>
                                            </div>
                                            <div class="shopping-cart-delete">
                                                <a href="#">
                                                    <i class="fi-rs-cross-small"></i>
                                                </a>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="shopping-cart-img">
                                                <a href="shop-product-right.html">
                                                    <img alt="Nest" src="assets/frontend/imgs/shop/thumbnail-2.jpg" />
                                                </a>
                                            </div>
                                            <div class="shopping-cart-title">
                                                <h4>
                                                    <a href="shop-product-right.html">
                                                    Corduroy Shirts</a>
                                                </h4>
                                                <h4>
                                                    <span>1 × </span>
                                                    $3200.00
                                                </h4>
                                            </div>
                                            <div class="shopping-cart-delete">
                                                <a href="#">
                                                    <i class="fi-rs-cross-small"></i>
                                                </a>
                                            </div>
                                        </li>
                                    </ul>
                                    <div class="shopping-cart-footer">
                                        <div class="shopping-cart-total">
                                            <h4>
                                                Total
                                                <span>$4000.00</span>
                                            </h4>
                                        </div>
                                        <div class="shopping-cart-button">
                                            <a href="shop-cart.html" class="outline">View cart</a>
                                            <a href="shop-checkout.html">Checkout</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="header-action-icon-2">
                                <a href="page-account.html">
                                    <img class="svgInject" alt="Nest" src="assets/frontend/imgs/theme/icons/icon-user.svg" />
                                </a>
                                <a href="page-account.html">
                                    <span class="lable ml-0">Account</span>
                                </a>
                                <div class="cart-dropdown-wrap cart-dropdown-hm2 account-dropdown">
                                    <ul>
                                        @if($role === 'admin')
                                            <li>
                                                <a href="{{route('admin.dashboard')}}">
                                                    <i class="fi fi-rs-user mr-10"></i>
                                                    Dashboard
                                                </a>
                                            </li>
                                            <li>
                                                <a href="page-account.html">
                                                    <i class="fi fi-rs-user mr-10"></i>
                                                    My Account
                                                </a>
                                            </li>
                                            <li>
                                                <a href="page-account.html">
                                                    <i class="fi fi-rs-location-alt mr-10"></i>
                                                    Order Tracking
                                                </a>
                                            </li>
                                            <li>
                                                <a href="page-account.html">
                                                    <i class="fi fi-rs-label mr-10"></i>
                                                    My Voucher
                                                </a>
                                            </li>
                                            <li>
                                                <a href="shop-wishlist.html">
                                                    <i class="fi fi-rs-heart mr-10"></i>
                                                    My Wishlist
                                                </a>
                                            </li>
                                            <li>
                                                <a href="page-account.html">
                                                    <i class="fi fi-rs-settings-sliders mr-10"></i>
                                                    Setting
                                                </a>
                                            </li>
                                            <li>
                                                <form method="POST" action="{{ route('user.logout') }}">
                                                    @csrf
                                                    <a href="{{route('user.logout')}}"  onclick="event.preventDefault(); this.closest('form').submit();">
                                                        <i class="fi fi-rs-sign-out mr-10"></i>
                                                        Sign out
                                                    </a>
                                                </form>
                                            </li>
                                        @elseif ($role === 'vendor')
                                            <li>
                                                <a href="{{route('vendor.dashboard')}}">
                                                    <i class="fi fi-rs-user mr-10"></i>
                                                    Dashboard
                                                </a>
                                            </li>
                                            <li>
                                                <a href="page-account.html">
                                                    <i class="fi fi-rs-user mr-10"></i>
                                                    My Account
                                                </a>
                                            </li>
                                            <li>
                                                <a href="page-account.html">
                                                    <i class="fi fi-rs-location-alt mr-10"></i>
                                                    Order Tracking
                                                </a>
                                            </li>
                                            <li>
                                                <a href="page-account.html">
                                                    <i class="fi fi-rs-label mr-10"></i>
                                                    My Voucher
                                                </a>
                                            </li>
                                            <li>
                                                <a href="shop-wishlist.html">
                                                    <i class="fi fi-rs-heart mr-10"></i>
                                                    My Wishlist
                                                </a>
                                            </li>
                                            <li>
                                                <a href="page-account.html">
                                                    <i class="fi fi-rs-settings-sliders mr-10"></i>
                                                    Setting
                                                </a>
                                            </li>
                                            <li>
                                                <a href="page-login.html">
                                                    <i class="fi fi-rs-sign-out mr-10"></i>
                                                    Sign out
                                                </a>
                                            </li>
                                        @elseif ($role === 'user')
                                            <li>
                                                <a href="page-account.html">
                                                    <i class="fi fi-rs-user mr-10"></i>
                                                    My Account
                                                </a>
                                            </li>
                                            <li>
                                                <a href="page-account.html">
                                                    <i class="fi fi-rs-location-alt mr-10"></i>
                                                    Order Tracking
                                                </a>
                                            </li>
                                            <li>
                                                <a href="page-account.html">
                                                    <i class="fi fi-rs-label mr-10"></i>
                                                    My Voucher
                                                </a>
                                            </li>
                                            <li>
                                                <a href="shop-wishlist.html">
                                                    <i class="fi fi-rs-heart mr-10"></i>
                                                    My Wishlist
                                                </a>
                                            </li>
                                            <li>
                                                <a href="page-account.html">
                                                    <i class="fi fi-rs-settings-sliders mr-10"></i>
                                                    Setting
                                                </a>
                                            </li>
                                            <li>
                                                <a href="page-login.html">
                                                    <i class="fi fi-rs-sign-out mr-10"></i>
                                                    Sign out
                                                </a>
                                            </li>
                                        @else
                                            <li>
                                                <i class="fi fi-rs-user mr-10"></i>
                                                <a href="{{route('user.login')}}">Login</a>
                                            </li>
                                            <li>
                                                <i class="fi fi-rs-user mr-10"></i>
                                                <a href="{{route('user.register')}}">Register</a>
                                            </li>
                                            <li>
                                                <i class="fi fi-rs-user mr-10"></i>
                                                <a href="{{route('become.vendor')}}">Become A Vendor</a>
                                            </li>
                                        @endif
                                    </ul>
                                </div>
                            </div>
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
                    <a href="/">
                        <img src="assets/frontend/imgs/theme/logo.svg" alt="logo" />
                    </a>
                </div>
                <div class="header-nav d-none d-lg-flex">
                    <div class="main-categori-wrap d-none d-lg-block">
                        <a class="categories-button-active" href="#">
                            <span class="fi-rs-apps"></span>
                            All Categories
                            <i class="fi-rs-angle-down"></i>
                        </a>
                        <div class="categories-dropdown-wrap categories-dropdown-active-large font-heading">
                            <div class="d-flex categori-dropdown-inner">
                                <ul>
                                    <li>
                                        <a href="shop-grid-right.html">
                                            <img src="assets/frontend/imgs/theme/icons/category-1.svg" alt="" />
                                            Milks and Dairies
                                        </a>
                                    </li>
                                    <li>
                                        <a href="shop-grid-right.html">
                                            <img src="assets/frontend/imgs/theme/icons/category-2.svg" alt="" />
                                            Clothing & beauty
                                        </a>
                                    </li>
                                    <li>
                                        <a href="shop-grid-right.html">
                                            <img src="assets/frontend/imgs/theme/icons/category-3.svg" alt="" />
                                            Pet Foods & Toy
                                        </a>
                                    </li>
                                    <li>
                                        <a href="shop-grid-right.html">
                                            <img src="assets/frontend/imgs/theme/icons/category-4.svg" alt="" />
                                            Baking material
                                        </a>
                                    </li>
                                    <li>
                                        <a href="shop-grid-right.html">
                                            <img src="assets/frontend/imgs/theme/icons/category-5.svg" alt="" />
                                            Fresh Fruit
                                        </a>
                                    </li>
                                </ul>
                                <ul class="end">
                                    <li>
                                        <a href="shop-grid-right.html">
                                            <img src="assets/frontend/imgs/theme/icons/category-6.svg" alt="" />
                                            Wines & Drinks
                                        </a>
                                    </li>
                                    <li>
                                        <a href="shop-grid-right.html">
                                            <img src="assets/frontend/imgs/theme/icons/category-7.svg" alt="" />
                                            Fresh Seafood
                                        </a>
                                    </li>
                                    <li>
                                        <a href="shop-grid-right.html">
                                            <img src="assets/frontend/imgs/theme/icons/category-8.svg" alt="" />
                                            Fast food
                                        </a>
                                    </li>
                                    <li>
                                        <a href="shop-grid-right.html">
                                            <img src="assets/frontend/imgs/theme/icons/category-9.svg" alt="" />
                                            Vegetables
                                        </a>
                                    </li>
                                    <li>
                                        <a href="shop-grid-right.html">
                                            <img src="assets/frontend/imgs/theme/icons/category-10.svg" alt="" />
                                            Bread and Juice
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <div class="more_slide_open" style="display: none">
                                <div class="d-flex categori-dropdown-inner">
                                    <ul>
                                        <li>
                                            <a href="shop-grid-right.html">
                                                <img src="assets/frontend/imgs/theme/icons/icon-1.svg" alt="" />
                                                Milks and Dairies
                                            </a>
                                        </li>
                                        <li>
                                            <a href="shop-grid-right.html">
                                                <img src="assets/frontend/imgs/theme/icons/icon-2.svg" alt="" />
                                                Clothing & beauty
                                            </a>
                                        </li>
                                    </ul>
                                    <ul class="end">
                                        <li>
                                            <a href="shop-grid-right.html">
                                                <img src="assets/frontend/imgs/theme/icons/icon-3.svg" alt="" />
                                                Wines & Drinks
                                            </a>
                                        </li>
                                        <li>
                                            <a href="shop-grid-right.html">
                                                <img src="assets/frontend/imgs/theme/icons/icon-4.svg" alt="" />
                                                Fresh Seafood
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="more_categories">
                                <span class="icon"></span>
                                <span class="heading-sm-1">Show more...</span>
                            </div>
                        </div>
                    </div>
                    @include('frontend.layout.navigation')
                </div>
                <div class="hotline d-none d-lg-flex">
                    <img src="assets/frontend/imgs/theme/icons/icon-headphone.svg" alt="hotline" />
                    <p>
                        1900 - 888
                        <span>24/7 Support Center</span>
                    </p>
                </div>
                <div class="header-action-icon-2 d-block d-lg-none">
                    <div class="burger-icon burger-icon-white">
                        <span class="burger-icon-top"></span>
                        <span class="burger-icon-mid"></span>
                        <span class="burger-icon-bottom"></span>
                    </div>
                </div>
                <div class="header-action-right d-block d-lg-none">
                    <div class="header-action-2">
                        <div class="header-action-icon-2">
                            <a href="shop-wishlist.html">
                                <img alt="Nest" src="assets/frontend/imgs/theme/icons/icon-heart.svg" />
                                <span class="pro-count white">4</span>
                            </a>
                        </div>
                        <div class="header-action-icon-2">
                            <a class="mini-cart-icon" href="#">
                                <img alt="Nest" src="assets/frontend/imgs/theme/icons/icon-cart.svg" />
                                <span class="pro-count white">2</span>
                            </a>
                            <div class="cart-dropdown-wrap cart-dropdown-hm2">
                                <ul>
                                    <li>
                                        <div class="shopping-cart-img">
                                            <a href="shop-product-right.html">
                                                <img alt="Nest" src="assets/frontend/imgs/shop/thumbnail-3.jpg" />
                                            </a>
                                        </div>
                                        <div class="shopping-cart-title">
                                            <h4>
                                                <a href="shop-product-right.html">Plain Striola Shirts</a>
                                            </h4>
                                            <h3>
                                                <span>1 × </span>
                                                $800.00
                                            </h3>
                                        </div>
                                        <div class="shopping-cart-delete">
                                            <a href="#">
                                                <i class="fi-rs-cross-small"></i>
                                            </a>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="shopping-cart-img">
                                            <a href="shop-product-right.html">
                                                <img alt="Nest" src="assets/frontend/imgs/shop/thumbnail-4.jpg" />
                                            </a>
                                        </div>
                                        <div class="shopping-cart-title">
                                            <h4>
                                                <a href="shop-product-right.html">Macbook Pro 2022</a>
                                            </h4>
                                            <h3>
                                                <span>1 × </span>
                                                $3500.00
                                            </h3>
                                        </div>
                                        <div class="shopping-cart-delete">
                                            <a href="#">
                                                <i class="fi-rs-cross-small"></i>
                                            </a>
                                        </div>
                                    </li>
                                </ul>
                                <div class="shopping-cart-footer">
                                    <div class="shopping-cart-total">
                                        <h4>
                                            Total
                                            <span>$383.00</span>
                                        </h4>
                                    </div>
                                    <div class="shopping-cart-button">
                                        <a href="shop-cart.html">View cart</a>
                                        <a href="shop-checkout.html">Checkout</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>