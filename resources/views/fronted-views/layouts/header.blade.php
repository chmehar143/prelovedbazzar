<header class="header">
            <div class="header-top">
                <div class="container">
                    <div class="header-left">
                        <p class="welcome-msg">Welcome to Preloved Bazar Store!</p>
                    </div>
                    <div class="header-right">
                        <div class="dropdown ">
                            <a href="#currency">USD</a>
                            <div class="dropdown-box">
                                <a href="#USD">USD</a>
                                <a href="#EUR">EUR</a>
                            </div>
                        </div>
                        <!-- End of DropDown Menu -->

                        <div class="dropdown">
                            <a href="#language"><img src="{{asset('frontend-assets/assets/images/flags/eng.png')}}" alt="ENG Flag" width="14"
                                    height="8" class="dropdown-image" /> ENG</a>
                            <div class="dropdown-box">
                                <a href="#ENG">
                                    <img src="{{asset('frontend-assets/assets/images/flags/eng.png')}}" alt="ENG Flag" width="14" height="8"
                                        class="dropdown-image" />
                                    ENG
                                </a>
                                <a href="#FRA">
                                    <img src="{{asset('frontend-assets/assets/images/flags/fra.png')}}" alt="FRA Flag" width="14" height="8"
                                        class="dropdown-image" />
                                    FRA
                                </a>
                            </div>
                        </div>
                        <!-- End of Dropdown Menu -->
                        <span class="divider d-lg-show"></span>
                        <!-- <a href="{{route('blogs')}}" class="d-lg-show">Blog</a> -->
                        <a href="{{route('contact-us')}}" class="d-lg-show">Contact Us</a>
                        <a href="{{route('about-us')}}" class="d-lg-show">About Us</a>

                        <a href="{{route('my-account')}}" class="d-lg-show">My Account</a>
                        <a href="{{route('Login')}}" class="d-lg-show"><i class="w-icon-account"></i>Sign In</a>
                        <span class="delimiter  d-lg-show">/</span>
                        <a href="{{route('Login')}}" class="ml-0 d-lg-show ">Register</a>
                    </div>
                </div>
            </div>
            <!-- End of Header Top -->

            <div class="header-middle">
                <div class="container">
                    <div class="header-left mr-md-4">
                        <a href="#" class="mobile-menu-toggle  w-icon-hamburger" aria-label="menu-toggle">
                        </a>
                        <a href="demo1.html" class="logo ml-lg-0">
                            <img src="{{asset('frontend-assets/assets/images/logo.png')}}" alt="logo" width="144" height="45" />
                        </a>
                        <form method="get" action="#"
                            class="header-search hs-expanded hs-round d-none d-md-flex input-wrapper">
                            <div class="select-box">
                                <select id="category" name="category">
                                    <option value="">All Categories</option>
                                    <option value="4">Mens</option>
                                    <option value="6">Gift Ideas</option>
                                    <option value="8">Men Cloth</option>
                                    <option value="9">Women Cloths</option>
                                    <option value="12">Shirts</option>
                                </select>
                            </div>
                            <input type="text" class="form-control" name="search" id="search" placeholder="Search in..."
                                required />
                            <button class="btn btn-search" type="submit"><i class="w-icon-search"></i>
                            </button>
                        </form>
                    </div>
                    <div class="header-right ml-4">
                        <div class="header-call d-xs-show d-lg-flex align-items-center">
                            <a href="tel:#" class="w-icon-call"></a>
                            <div class="call-info d-lg-show">
                                <h4 class="chat font-weight-normal font-size-md text-normal ls-normal text-light mb-0">
                                    <a href="mailto:#" class="text-capitalize">Live Chat</a> or :</h4>
                                <a href="tel:#" class="phone-number font-weight-bolder ls-50">0(800)123-456</a>
                            </div>
                        </div>
                        <a class="wishlist label-down link d-xs-show" href="{{route('wishlist')}}">
                            <i class="w-icon-heart"></i>
                            <span class="wishlist-label d-lg-show">Wishlist</span>
                        </a>
                        <a class="compare label-down link d-xs-show" href="{{route('compare')}}">
                            <i class="w-icon-compare"></i>
                            <span class="compare-label d-lg-show">Compare</span>
                        </a>
                        <div class="dropdown cart-dropdown cart-offcanvas mr-0 mr-lg-2">
                            <div class="cart-overlay"></div>
                            <a href="#" class="cart-toggle label-down link">
                                <i class="w-icon-cart">
                                    <span class="cart-count">2</span>
                                </i>
                                <span class="cart-label">Cart</span>
                            </a>
                            <div class="dropdown-box">
                                <div class="cart-header">
                                    <span>Shopping Cart</span>
                                    <a href="#" class="btn-close">Close<i class="w-icon-long-arrow-right"></i></a>
                                </div>

                                <div class="products">
                                    <div class="product product-cart">
                                        <div class="product-detail">
                                            <a href="product-details.html" class="product-name">Beige knitted
                                                elas<br>tic
                                                runner shoes</a>
                                            <div class="price-box">
                                                <span class="product-quantity">1</span>
                                                <span class="product-price">$25.68</span>
                                            </div>
                                        </div>
                                        <figure class="product-media">
                                            <a href="product-details.html">
                                                <img src="assets/images/cart/product-1.jpg" alt="product" height="84"
                                                    width="94" />
                                            </a>
                                        </figure>
                                        <button class="btn btn-link btn-close" aria-label="button">
                                            <i class="fas fa-times"></i>
                                        </button>
                                    </div>

                                    <div class="product product-cart">
                                        <div class="product-detail">
                                            <a href="product-details.html" class="product-name">Blue utility
                                                pina<br>fore
                                                denim dress</a>
                                            <div class="price-box">
                                                <span class="product-quantity">1</span>
                                                <span class="product-price">$32.99</span>
                                            </div>
                                        </div>
                                        <figure class="product-media">
                                            <a href="product-details.html">
                                                <img src="assets/images/cart/product-2.jpg" alt="product" width="84"
                                                    height="94" />
                                            </a>
                                        </figure>
                                        <button class="btn btn-link btn-close" aria-label="button">
                                            <i class="fas fa-times"></i>
                                        </button>
                                    </div>
                                </div>

                                <div class="cart-total">
                                    <label>Subtotal:</label>
                                    <span class="price">$58.67</span>
                                </div>

                                <div class="cart-action">
                                    <a href="{{route('cart')}}" class="btn btn-dark btn-outline btn-rounded">View Cart</a>
                                    <a href="{{route('checkout')}}" class="btn btn-primary  btn-rounded">Checkout</a>
                                </div>
                            </div>
                            <!-- End of Dropdown Box -->
                        </div>
                    </div>
                </div>
            </div>
            <!-- End of Header Middle -->

            <div class="header-bottom sticky-content fix-top sticky-header has-dropdown">
                <div class="container">
                    <div class="inner-wrap">
                        <div class="header-left">
                            <div class="dropdown category-dropdown has-border" data-visible="true">
                                <a href="#" class="category-toggle text-dark" role="button" data-toggle="dropdown"
                                    aria-haspopup="true" aria-expanded="true" data-display="static"
                                    title="Browse Categories">
                                    <i class="w-icon-category"></i>
                                    <span>Browse Categories</span>
                                </a>

                                <div class="dropdown-box">
                                    <ul class="menu vertical-menu category-menu">
                                        <li>
                                            <a href="{{route('shop')}}">
                                                <i class="w-icon-tshirt2"></i>Men's
                                            </a>
                                            <ul class="megamenu">
                                                <li>
                                                    <h4 class="menu-title">Women</h4>
                                                    <hr class="divider">
                                                    <ul>
                                                        <li><a href="{{route('shop')}}">New Arrivals</a>
                                                        </li>
                                                        <li><a href="{{route('shop')}}">Best Sellers</a>
                                                        </li>
                                                        <li><a href="{{route('shop')}}">Trending</a></li>
                                                        <li><a href="{{route('shop')}}">Clothing</a></li>
                                                        <li><a href="{{route('shop')}}">Shoes</a></li>
                                                        <li><a href="{{route('shop')}}">Bags</a></li>
                                                        <li><a href="{{route('shop')}}">Accessories</a>
                                                        </li>

                                                    </ul>
                                                </li>
                                                <li>
                                                    <h4 class="menu-title">Men</h4>
                                                    <hr class="divider">
                                                    <ul>
                                                        <li><a href="{{route('shop')}}">New Arrivals</a>
                                                        </li>
                                                        <li><a href="{{route('shop')}}">Best Sellers</a>
                                                        </li>
                                                        <li><a href="{{route('shop')}}">Trending</a></li>
                                                        <li><a href="{{route('shop')}}">Clothing</a></li>
                                                        <li><a href="{{route('shop')}}">Shoes</a></li>
                                                        <li><a href="{{route('shop')}}">Bags</a></li>
                                                        <li><a href="{{route('shop')}}">Accessories</a>
                                                        </li>
                                                        <li><a href="{{route('shop')}}">Jewlery &
                                                                Watches</a></li>
                                                    </ul>
                                                </li>
                                                <li>
                                                    <div class="banner-fixed menu-banner menu-banner2">
                                                        <figure>
                                                            <img src="frontend-assets/assets/images/menu/banner-2.jpg" alt="Menu Banner"
                                                                width="235" height="347" />
                                                        </figure>
                                                        <div class="banner-content">
                                                            <div class="banner-price-info mb-1 ls-normal">Get up to
                                                                <strong
                                                                    class="text-primary text-uppercase">20%Off</strong>
                                                            </div>
                                                            <h3 class="banner-title ls-normal">Hot Sales</h3>
                                                            <a href="{{route('shop')}}"
                                                                class="btn btn-dark btn-sm btn-link btn-slide-right btn-icon-right">
                                                                Shop Now<i class="w-icon-long-arrow-right"></i>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </li>
                                            </ul>
                                        </li>



                                        <li>
                                            <a href="{{route('shop')}}">
                                                <i class="w-icon-gift"></i>Gift Ideas
                                            </a>
                                        </li>

                                        <li>
                                            <a href="{{route('shop')}}">
                                                <i class="w-icon-tshirt"></i>Shirts
                                            </a>
                                        </li>


                                        <li>
                                            <a href="{{route('shop')}}">
                                                <i class="w-icon-heart"></i>Women Cloth
                                            </a>
                                        </li>
                                        <li>
                                            <a href="{{route('shop')}}"
                                                class="font-weight-bold text-primary text-uppercase ls-25">
                                                View All Categories<i class="w-icon-angle-right"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <nav class="main-nav">
                                <ul class="menu active-underline">
                                    <li class="active">
                                        <a href="{{route('index')}}">Home</a>
                                    </li>
                                    <li>
                                        <a href="{{route('shop')}}">Shop</a>

                                        <!-- Start of Megamenu -->
                                        <ul class="megamenu">
                                            <li>
                                                <h4 class="menu-title">Mens Cloth </h4>
                                                <ul>
                                                    <li><a href="{{route('shop')}}">product name</a></li>

                                                </ul>
                                            </li>
                                            <li>
                                                <h4 class="menu-title">Women Cloth</h4>
                                                <ul>
                                                    <li><a href="{{route('shop')}}">product name</a></li>

                                                </ul>
                                            </li>
                                            <li>
                                                <h4 class="menu-title">Baby Cloth</h4>
                                                <ul>
                                                    <li><a href="{{route('shop')}}">product name</a></li>

                                                </ul>
                                            </li>
                                            <li>
                                                <h4 class="menu-title">Clothes Product </h4>
                                                <ul>
                                                    <li><a href="{{route('shop')}}">product name<span
                                                                class="tip tip-hot">Hot</span></a></li>

                                                </ul>
                                            </li>
                                        </ul>
                                        <!-- End of Megamenu -->
                                    </li>
                                    <li>
                                        <a href="{{route('vendor-store')}}">Vendor Stores</a>

                                    </li>
                                    <li>
                                        <a href="{{route('blogs')}}">Blog</a>

                                    </li>


                                    <li><a href="{{route('become-a-vendor')}}">Become A Vendor</a></li>



                                </ul>
                            </nav>
                        </div>
                        <div class="header-right">
                            <a href="#" class="d-xl-show"><i class="w-icon-map-marker mr-1"></i>Track Order</a>
                            <a href="#"><i class="w-icon-sale"></i>Daily Deals</a>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <!-- End of Header -->