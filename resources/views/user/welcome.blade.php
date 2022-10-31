@extends('user.layouts.app')
@section('content')
       <!-- Start of Main-->
       <main class="main">
            <section class="intro-section">
                <div class="swiper-container swiper-theme nav-inner pg-inner swiper-nav-lg animation-slider pg-xxl-hide nav-xxl-show nav-hide"
                    data-swiper-options="{
                    'slidesPerView': 1,
                    'autoplay': {
                        'delay': 8000,
                        'disableOnInteraction': false
                    }
                }">
                    <div class="swiper-wrapper">
                        @foreach($banners as $banner)
                        <div class="swiper-slide banner banner-fixed intro-slide intro-slide1"
                            style="background-image: url({{asset('frontend-assets/assets/images/demos/demo1/sliders/slide-1.jpg')}}); background-color: #ebeef2;">
                            <div class="container">
                                <figure class="slide-image skrollable slide-animate">
                                    <img src="{{asset('frontend-assets/assets/images/demos/demo1/sliders/shoes.png')}}" alt="Banner"
                                        data-bottom-top="transform: translateY(10vh);"
                                        data-top-bottom="transform: translateY(-10vh);" width="474" height="397">
                                </figure>
                                <div class="banner-content y-50 text-right">
                                    <h5 class="banner-subtitle font-weight-normal text-default ls-50 lh-1 mb-2 slide-animate"
                                        data-animation-options="{
                                    'name': 'fadeInRightShorter',
                                    'duration': '1s',
                                    'delay': '.2s'
                                }">
                                        Custom <span class="p-relative d-inline-block">Men’s</span>
                                    </h5>
                                    <h3 class="banner-title font-weight-bolder ls-25 lh-1 slide-animate"
                                        data-animation-options="{
                                    'name': 'fadeInRightShorter',
                                    'duration': '1s',
                                    'delay': '.4s'
                                }">
                                        RUNNING SHOES
                                    </h3>
                                    <p class="font-weight-normal text-default slide-animate" data-animation-options="{
                                    'name': 'fadeInRightShorter',
                                    'duration': '1s',
                                    'delay': '.6s'
                                }">
                                        Sale up to <span class="font-weight-bolder text-secondary">30% OFF</span>
                                    </p>

                                    <a href="{{route('shop')}}"
                                        class="btn btn-dark btn-outline btn-rounded btn-icon-right slide-animate"
                                        data-animation-options="{
                                    'name': 'fadeInRightShorter',
                                    'duration': '1s',
                                    'delay': '.8s'
                                }">SHOP NOW<i class="w-icon-long-arrow-right"></i></a>

                                </div>
                                <!-- End of .banner-content -->
                            </div>
                            <!-- End of .container -->
                        </div>
                        @endforeach
                        <!-- End of .intro-slide1 -->

                        <div class="swiper-slide banner banner-fixed intro-slide intro-slide2"
                            style="background-image: url({{asset('frontend-assets/assets/images/demos/demo1/sliders/slide-2.jpg')}}); background-color: #ebeef2;">
                            <div class="container">
                                <figure class="slide-image skrollable slide-animate" data-animation-options="{
                                    'name': 'fadeInUpShorter',
                                    'duration': '1s'
                                }">
                                    <img src="{{asset('frontend-assets/assets/images/demos/demo1/sliders/men.png')}}" alt="Banner"
                                        data-bottom-top="transform: translateX(10vh);"
                                        data-top-bottom="transform: translateX(-10vh);" width="480" height="633">
                                </figure>
                                <div class="banner-content d-inline-block y-50">
                                    <h5 class="banner-subtitle font-weight-normal text-default ls-50 slide-animate"
                                        data-animation-options="{
                                        'name': 'fadeInUpShorter',
                                        'duration': '1s',
                                        'delay': '.2s'
                                    }">
                                        Mountain-<span class="text-secondary">Climbing</span>
                                    </h5>
                                    <h3 class="banner-title font-weight-bolder text-dark mb-0 ls-25 slide-animate"
                                        data-animation-options="{
                                        'name': 'fadeInUpShorter',
                                        'duration': '1s',
                                        'delay': '.4s'
                                    }">
                                        Hot & Packback
                                    </h3>
                                    <p class="font-weight-normal text-default slide-animate" data-animation-options="{
                                        'name': 'fadeInUpShorter',
                                        'duration': '1s',
                                        'delay': '.8s'
                                    }">
                                        Only until the end of this week.
                                    </p>
                                    <a href="{{route('shop')}}"
                                        class="btn btn-dark btn-outline btn-rounded btn-icon-right slide-animate"
                                        data-animation-options="{
                                        'name': 'fadeInUpShorter',
                                        'duration': '1s',
                                        'delay': '1s'
                                    }">
                                        SHOP NOW<i class="w-icon-long-arrow-right"></i>
                                    </a>
                                </div>
                                <!-- End of .banner-content -->
                            </div>
                            <!-- End of .container -->
                        </div>
                        <!-- End of .intro-slide2 -->

                        <div class="swiper-slide banner banner-fixed intro-slide intro-slide3"
                            style="background-image: url({{asset('frontend-assets/assets/images/demos/demo1/sliders/slide-3.jpg')}}); background-color: #f0f1f2;">
                            <div class="container">
                                <figure class="slide-image skrollable slide-animate" data-animation-options="{
                                    'name': 'fadeInDownShorter',
                                    'duration': '1s'
                                }">
                                    <img src="{{asset('frontend-assets/assets/images/demos/demo1/sliders/skate.png')}}" alt="Banner"
                                        data-bottom-top="transform: translateY(10vh);"
                                        data-top-bottom="transform: translateY(-10vh);" width="310" height="444">
                                </figure>
                                <div class="banner-content text-right y-50">
                                    <p class="font-weight-normal text-default text-uppercase mb-0 slide-animate"
                                        data-animation-options="{
                                        'name': 'fadeInLeftShorter',
                                        'duration': '1s',
                                        'delay': '.6s'
                                    }">
                                        Top weekly Seller
                                    </p>
                                    <h5 class="banner-subtitle font-weight-normal text-default ls-25 slide-animate"
                                        data-animation-options="{
                                        'name': 'fadeInLeftShorter',
                                        'duration': '1s',
                                        'delay': '.4s'
                                    }">
                                        Trending Collection
                                    </h5>
                                    <h3 class="banner-title p-relative font-weight-bolder ls-50 slide-animate"
                                        data-animation-options="{
                                        'name': 'fadeInLeftShorter',
                                        'duration': '1s',
                                        'delay': '.2s'
                                    }"><span class="text-white mr-4">Roller</span>-skate
                                    </h3>
                                    <div class="btn-group slide-animate" data-animation-options="{
                                        'name': 'fadeInLeftShorter',
                                        'duration': '1s',
                                        'delay': '.8s'
                                    }">
                                        <a href="{{route('shop')}}"
                                            class="btn btn-dark btn-outline btn-rounded btn-icon-right">SHOP
                                            NOW<i class="w-icon-long-arrow-right"></i></a>
                                    </div>
                                    <!-- End of .banner-content -->
                                </div>
                                <!-- End of .container -->
                            </div>
                        </div>
                        <!-- End of .intro-slide3 -->
                    </div>
                    <div class="swiper-pagination"></div>
                    <button class="swiper-button-next"></button>
                    <button class="swiper-button-prev"></button>
                </div>
                <!-- End of .swiper-container -->
            </section>
            <!-- End of .intro-section -->

            <div class="container">
                <div class="swiper-container appear-animate icon-box-wrapper br-sm mt-6 mb-6" data-swiper-options="{
                    'slidesPerView': 1,
                    'loop': false,
                    'breakpoints': {
                        '576': {
                            'slidesPerView': 2
                        },
                        '768': {
                            'slidesPerView': 3
                        },
                        '1200': {
                            'slidesPerView': 4
                        }
                    }
                }">
                    <div class="swiper-wrapper row cols-md-4 cols-sm-3 cols-1">
                        <div class="swiper-slide icon-box icon-box-side icon-box-primary">
                            <span class="icon-box-icon icon-shipping">
                                <i class="w-icon-truck"></i>
                            </span>
                            <div class="icon-box-content">
                                <h4 class="icon-box-title font-weight-bold mb-1">Free Shipping & Returns</h4>
                                <p class="text-default">For all orders over $99</p>
                            </div>
                        </div>
                        <div class="swiper-slide icon-box icon-box-side icon-box-primary">
                            <span class="icon-box-icon icon-payment">
                                <i class="w-icon-bag"></i>
                            </span>
                            <div class="icon-box-content">
                                <h4 class="icon-box-title font-weight-bold mb-1">Secure Payment</h4>
                                <p class="text-default">We ensure secure payment</p>
                            </div>
                        </div>
                        <div class="swiper-slide icon-box icon-box-side icon-box-primary icon-box-money">
                            <span class="icon-box-icon icon-money">
                                <i class="w-icon-money"></i>
                            </span>
                            <div class="icon-box-content">
                                <h4 class="icon-box-title font-weight-bold mb-1">Money Back Guarantee</h4>
                                <p class="text-default">Any back within 30 days</p>
                            </div>
                        </div>
                        <div class="swiper-slide icon-box icon-box-side icon-box-primary icon-box-chat">
                            <span class="icon-box-icon icon-chat">
                                <i class="w-icon-chat"></i>
                            </span>
                            <div class="icon-box-content">
                                <h4 class="icon-box-title font-weight-bold mb-1">Customer Support</h4>
                                <p class="text-default">Call or email us 24/7</p>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End of Iocn Box Wrapper -->

                <div class="row category-banner-wrapper appear-animate pt-6 pb-8">
                    <div class="col-md-6 mb-4">
                        <div class="banner banner-fixed br-xs">
                            <figure>
                                <img src="{{asset('frontend-assets/assets/images/demos/demo1/categories/1-1.jpg')}}" alt="Category Banner"
                                    width="610" height="160" style="background-color: #ecedec;" />
                            </figure>
                            <div class="banner-content y-50 mt-0">
                                <h5 class="banner-subtitle font-weight-normal text-dark">Get up to <span
                                        class="text-secondary font-weight-bolder text-uppercase ls-25">20% Off</span>
                                </h5>
                                <h3 class="banner-title text-uppercase">Sports Outfits<br><span
                                        class="font-weight-normal                       text-capitalize">Collection</span>
                                </h3>
                                <div class="banner-price-info font-weight-normal">Starting at <span
                                        class="text-secondary                       font-weight-bolder">$170.00</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 mb-4">
                        <div class="banner banner-fixed br-xs">
                            <figure>
                                <img src="{{asset('frontend-assets/assets/images/demos/demo1/categories/1-2.jpg')}}" alt="Category Banner"
                                    width="610" height="160" style="background-color: #636363;" />
                            </figure>
                            <div class="banner-content y-50 mt-0">
                                <h5 class="banner-subtitle font-weight-normal text-capitalize">New Arrivals</h5>
                                <h3 class="banner-title text-white text-uppercase">Accessories<br><span
                                        class="font-weight-normal text-capitalize">Collection</span></h3>
                                <div class="banner-price-info text-white font-weight-normal text-capitalize">Only From
                                    <span class="text-secondary font-weight-bolder">$90.00</span></div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End of Category Banner Wrapper -->

                <div class="row deals-wrapper appear-animate mb-8">
                    <div class="col-lg-9 mb-4">
                        <div class="single-product h-100 br-sm">
                            <h4 class="title-sm title-underline font-weight-bolder ls-normal">
                                Deals Hot of The Day
                            </h4>
                            <div class="swiper">
                                <div class="swiper-container swiper-theme nav-top swiper-nav-lg" data-swiper-options="{
                                    'spaceBetween': 20,
                                    'slidesPerView': 1
                                }">
                                    <div class="swiper-wrapper row cols-1 gutter-no">
                                        @foreach($deals as $unit)
                                        <div class="swiper-slide">
                                            <div class="product product-single row">
                                                <div class="col-md-6">
                                                    <div
                                                        class="product-gallery product-gallery-sticky product-gallery-vertical">
                                                        <div
                                                            class="swiper-container product-single-swiper swiper-theme nav-inner">
                                                            <div class="swiper-wrapper row cols-1 gutter-no">
                                                                <div class="swiper-slide">
                                                                    <figure class="product-image">
                                                                        <img src="{{asset('storage/uploads/products/'.$unit->p_image)}}"
                                                                            data-zoom-image="{{asset('storage/uploads/products/'.$unit->p_image)}}"
                                                                            alt="Product Image" width="800"
                                                                            height="900">
                                                                    </figure>
                                                                </div>
                                                                <div class="swiper-slide">
                                                                    <figure class="product-image">
                                                                        <img src="{{asset('storage/uploads/products/'.$unit->p_image)}}"
                                                                            data-zoom-image="{{asset('storage/uploads/products/'.$unit->p_image)}}"
                                                                            alt="Product Image" width="800"
                                                                            height="900">
                                                                    </figure>
                                                                </div>
                                                                <div class="swiper-slide">
                                                                    <figure class="product-image">
                                                                        <img src="{{asset('storage/uploads/products/'.$unit->p_image)}}"
                                                                            data-zoom-image="{{asset('storage/uploads/products/'.$unit->p_image)}}"
                                                                            alt="Product Image" width="800"
                                                                            height="900">
                                                                    </figure>
                                                                </div>
                                                                <div class="swiper-slide">
                                                                    <figure class="product-image">
                                                                        <img src="{{asset('storage/uploads/products/'.$unit->p_image)}}"
                                                                            data-zoom-image="{{asset('storage/uploads/products/'.$unit->p_image)}}"
                                                                            alt="Product Image" width="800"
                                                                            height="900">
                                                                    </figure>
                                                                </div>
                                                            </div>
                                                            <button class="swiper-button-next"></button>
                                                            <button class="swiper-button-prev"></button>
                                                            <div class="product-label-group">
                                                                <label class="product-label label-discount">
                                                                    $<del class="w-bold">{{$unit->p_old_price}}</del>
                                                                </label>
                                                            </div>
                                                        </div>
                                                        <div class="product-thumbs-wrap swiper-container"
                                                            data-swiper-options="{
                                                            'direction': 'vertical',
                                                            'breakpoints': {
                                                                '0': {
                                                                    'direction': 'horizontal',
                                                                    'slidesPerView': 4
                                                                },
                                                                '992': {
                                                                    'direction': 'vertical',
                                                                    'slidesPerView': 'auto'
                                                                }
                                                            }
                                                        }">
                                                            <div
                                                                class="product-thumbs swiper-wrapper row cols-lg-1 cols-4 gutter-sm">
                                                                <div class="product-thumb swiper-slide">
                                                                    <img src="{{asset('storage/uploads/products/'.$unit->p_image)}}"
                                                                        alt="Product thumb" width="60" height="68" />
                                                                </div>
                                                                <div class="product-thumb swiper-slide">
                                                                    <img src="{{asset('storage/uploads/products/'.$unit->p_image)}}"
                                                                        alt="Product thumb" width="60" height="68" />
                                                                </div>
                                                                <div class="product-thumb swiper-slide">
                                                                    <img src="{{asset('storage/uploads/products/'.$unit->p_image)}}"
                                                                        alt="Product thumb" width="60" height="68" />
                                                                </div>
                                                                <div class="product-thumb swiper-slide">
                                                                    <img src="{{asset('storage/uploads/products/'.$unit->p_image)}}"
                                                                        alt="Product thumb" width="60" height="68" />
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="product-details scrollable">
                                                        <h2 class="product-title mb-1"><a
                                                                href="{{route('product',$unit->id)}}">{{$unit->p_name}}</a></h2>

                                                        <hr class="product-divider">

                                                        <div class="product-price"><ins class="new-price ls-50">pkr{{$unit->p_new_price}}</ins></div>

                                                        <div class="product-countdown-container flex-wrap">
                                                            <label class="mr-2 text-default">Offer Ends In:</label>
                                                            <div class="product-countdown countdown-compact"
                                                                data-until="2022, 09, 31" data-compact="true">
                                                                {{$unit->created_at->diffForHumans()}}</div>
                                                        </div>
                                                            <?php 
                                                                $sum = $unit->discussions->sum('review');
                                                                $no = $unit->discussions->count('review');
                                                                if($sum == 0 || $no == 0){
                                                                    $avg = 0;
                                                                }
                                                                else{
                                                                    $aver = $sum/$no;
                                                                    $avg = 20 * $aver;
                                                                }
                                                            ?>
                                                        <div class="ratings-container">
                                                            <div class="ratings-full">
                                                                <span class="ratings" style="width: {{ $avg }}%;"></span>
                                                                <span class="tooltiptext tooltip-top"></span>
                                                            </div>
                                                            <h2>{{ $unit->review }}</h2>
                                                            <a href="javascript:void(0)" class="rating-reviews">({{$no}} Reviews)</a>
                                                        </div>

                                                        <div
                                                            class="product-form product-variation-form product-size-swatch mb-3">
                                                            <label class="mb-1">Size:</label>
                                                            <ul
                                                                class="flex-wrap d-flex align-items-center product-variations">
                                                                @if($unit->large == 1)
                                                                <li>
                                                                    <input type="radio" id="large" name="size" value="large" style="display: none;">
                                                                    <label for="large" class="size">Large</label>
                                                                </li>                                                                @endif
                                                                @if($unit->medium == 1)
                                                                <li>
                                                                    <input type="radio" id="medium" name="size" value="medium" style="display: none;">
                                                                    <label for="medium" class="size">Medium</label>
                                                                </li>
                                                                @endif
                                                                @if($unit->small == 1)
                                                                <li>
                                                                    <input type="radio" id="small" name="size" value="small" style="display: none;">
                                                                    <label for="small" class="size">Small</label>
                                                                </li>                                                                
                                                                @endif
                                                            </ul>
                                                            <!-- <a href="javascript:void(0)" class="product-variation-clean">Clean All</a> -->
                                                        </div>
                                                        <!-- <div class="product-variation-price">
                                                            <span></span>
                                                        </div> -->
                                                        <div class="product-form pt-4">
                                                            <div class="product-qty-form mb-2 mr-2">
                                                                <div class="input-group">
                                                                    <input class="quantity form-control" id="qnty_{{$unit->id}}" type="number"
                                                                        min="1" max="10000000">
                                                                    <button class="quantity-plus w-icon-plus"></button>
                                                                    <button class="quantity-minus w-icon-minus"></button>
                                                                </div>
                                                            </div>
                                                            <button class="btn btn-primary btn-cart" onclick="add_cart_({{ $unit->id }})">
                                                                <i class="w-icon-cart"></i>
                                                                <span>Add to Cart</span>
                                                            </button>
                                                        </div>

                                                        <div class="social-links-wrapper mt-1">
                                                            <div class="social-links">
                                                                <!-- <div class="social-icons social-no-color border-thin">
                                                                    <a href="javascript:void(0)"
                                                                        class="social-icon social-facebook w-icon-facebook"></a>
                                                                    <a href="javascript:void(0)"
                                                                        class="social-icon social-twitter w-icon-twitter"></a>
                                                                    <a href="javascript:void(0)"
                                                                        class="social-icon social-pinterest fab fa-pinterest-p"></a>
                                                                    <a href="javascript:void(0)"
                                                                        class="social-icon social-whatsapp fab fa-whatsapp"></a>
                                                                    <a href="javascript:void(0)"
                                                                        class="social-icon social-youtube fab fa-linkedin-in"></a>
                                                                </div> -->
                                                            </div>
                                                            <span class="divider d-xs-show"></span>
                                                            <div class="product-link-wrapper d-flex">
                                                                <a href="javascript:void(0)"
                                                                    class="btn-product-icon btn-wishlist w-icon-heart" onclick="add_wish_({{$unit->id}})"></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        @endforeach
                                    </div>
                                    <button class="swiper-button-prev"></button>
                                    <button class="swiper-button-next"></button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 mb-4">
                        <div class="widget widget-products widget-products-bordered h-100">
                            <div class="widget-body br-sm h-100">
                                <h4 class="title-sm title-underline font-weight-bolder ls-normal mb-2">Top 20 Best
                                    Seller</h4>
                                <div class="swiper">
                                    <div class="swiper-container swiper-theme nav-top" data-swiper-options="{
                                        'slidesPerView': 1,
                                        'spaceBetween': 20,
                                        'breakpoints': {
                                            '576': {
                                                'slidesPerView': 2
                                            },
                                            '768': {
                                                'slidesPerView': 3
                                            },
                                            '992': {
                                                'slidesPerView': 1
                                            }
                                        }
                                    }">
                                        <div class="swiper-wrapper row cols-lg-1 cols-md-3">

                                            @foreach($top_sellers as $seller)
                                            <div class="swiper-slide product-widget-wrap">
                                                @foreach($seller->products->slice(0, 4) as $item)
                                                <div class="product product-widget bb-no">
                                                    <figure class="product-media">
                                                        <a href="{{route('product', $item->id)}}">
                                                            <img src="{{asset('storage/uploads/products/'.$item->p_image)}}"
                                                                alt="Product" width="105" height="118" />
                                                        </a>
                                                    </figure>
                                                    <?php 
                                                        $sum = $item->discussions->sum('review');
                                                        $no = $item->discussions->count('review');
                                                        if($sum == 0 || $no == 0){
                                                            $avg = 0;
                                                        }
                                                        else{
                                                            $aver = $sum/$no;
                                                            $avg = 20 * $aver;
                                                        }
                                                    ?>
                                                    <div class="product-details">
                                                        <h4 class="product-name">
                                                            <a href="{{route('product', 16)}}">{{$item->p_name}}</a>
                                                        </h4>
                                                        <div class="ratings-container">
                                                            <div class="ratings-full">
                                                                <span class="ratings" style="width: {{$avg}}%;"></span>
                                                                <span class="tooltiptext tooltip-top"></span>
                                                            </div>
                                                        </div>
                                                        <div class="product-price">
                                                            <ins class="new-price">pkr{{$item->p_new_price}}</ins>
                                                        </div>
                                                    </div>
                                                </div>
                                                @endforeach
                                            </div>
                                            @endforeach
                                        </div>
                                        <button class="swiper-button-next"></button>
                                        <button class="swiper-button-prev"></button>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
                <!-- End of Deals Wrapper -->
            </div>

            <!-- <section
                class="category-section top-category bg-grey pt-10 pb-10 appear-animate fadeIn appear-animation-visible"
                style="animation-duration: 1.2s;">
                <div class="container pb-2">
                    <h2 class="title justify-content-center pt-1 ls-normal mb-5">Top Categories Of The Month</h2>
                    <div class="swiper">
                        <div class="swiper-container swiper-theme pg-show swiper-container-initialized swiper-container-horizontal swiper-container-pointer-events"
                            data-swiper-options="{
                            'spaceBetween': 20,
                            'slidesPerView': 2,
                            'breakpoints': {
                                '576': {
                                    'slidesPerView': 3
                                },
                                '768': {
                                    'slidesPerView': 5
                                },
                                '992': {
                                    'slidesPerView': 6
                                }
                            }
                        }">
                            <div class="swiper-wrapper " id="swiper-wrapper-106e6dba6ffeb499c" aria-live="polite"
                                style="transform: translate3d(0px, 0px, 0px);">
                                @foreach($top_categories as $category)
                                    @foreach($category->slice(0, 1) as $catog)
                                <div class="swiper-slide category category-classic category-absolute overlay-zoom br-xs swiper-slide-active"
                                    role="group" aria-label="1 / 6" style="width: 190px; margin-right: 20px;">
                                    <a href="{{route('shop',2)}}" class="category-media">
                                        <img src="{{asset('frontend-assets/assets/images/demos/demo1/categories/2-1.jpg')}}" alt="Category"
                                            width="130" height="130">
                                    </a>
                                    <div class="category-content">
                                        <h4 class="category-name">{{$catog->name}} </h4>
                                        <a href="{{route('shop',4)}}"
                                            class="btn btn-primary btn-link btn-underline">Shop
                                            Now</a>
                                    </div>
                                </div>
                                    @endforeach
                                @endforeach
                            </div>
                            <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span>
                        </div>
                    </div>
                </div>
            </section> -->
            <!-- End of .category-section top-category -->

            <div class="container">
                <h2 class="title justify-content-center ls-normal mb-4 mt-10 pt-1 appear-animate">Popular Departments
                </h2>
                <div class="tab tab-nav-boxed tab-nav-outline appear-animate">
                    <ul class="nav nav-tabs justify-content-center" role="tablist">
                        <li class="nav-item mr-2 mb-2">
                            <a class="nav-link active br-sm font-size-md ls-normal" href="#tab1-1">New arrivals</a>
                        </li>
                        <li class="nav-item mr-2 mb-2">
                            <a class="nav-link br-sm font-size-md ls-normal" href="#tab1-2">Best seller</a>
                        </li>
                        <li class="nav-item mr-2 mb-2">
                            <a class="nav-link br-sm font-size-md ls-normal" href="#tab1-3">most popular</a>
                        </li>
                        <li class="nav-item mr-0 mb-2">
                            <a class="nav-link br-sm font-size-md ls-normal" href="#tab1-4">Featured</a>
                        </li>
                    </ul>
                </div>
                <!-- End of Tab -->
                <div class="tab-content product-wrapper appear-animate">
                    <div class="tab-pane active pt-4" id="tab1-1">
                        <div class="row cols-xl-5 cols-md-4 cols-sm-3 cols-2">
                            @foreach($newarrivals->slice(0, 10) as $arrival)
                            <div class="product-wrap">
                                <div class="product text-center">
                                    <figure class="product-media">
                                        <a href="{{route('product', $arrival->id)}}">
                                            <img src="{{asset('/storage/uploads/products/'.$arrival->p_image)}}" alt="Product"
                                            style="width:300px;height:300px" />
                                            <img src="{{asset('/storage/uploads/products/'.$arrival->p_image)}}" alt="Product"
                                                style="width:300px;height:300px" />
                                        </a>
                                        <div class="product-action-vertical">
                                            <a href="javascript:void(0)" class="btn-product-icon btn-cart w-icon-cart"
                                                title="Add to cart" onclick="add_cart_({{$arrival->id}})"></a>
                                            <a href="javascript:void(0)" class="btn-product-icon btn-wishlist w-icon-heart" onclick="add_wish_({{$arrival->id}})"
                                                title="Add to wishlist"></a>
                                            <!-- <a href="javascript:void(0)" class="btn-product-icon btn-quickview w-icon-search"
                                                title="Quickview"></a>
                                            <a href="javascript:void(0)" class="btn-product-icon btn-compare w-icon-compare"
                                                title="Add to Compare"></a> -->
                                        </div>
                                    </figure>
                                    <div class="product-details">
                                        <h4 class="product-name"><a href="{{route('product', 16)}}">{{$arrival->p_name}}</a></h4>
                                        <?php 
                                            $sum = $arrival->discussions->sum('review');
                                            $no = $arrival->discussions->count('review');
                                            if($sum == 0 || $no == 0){
                                                $avg = 0;
                                            }
                                            else{
                                                $aver = $sum/$no;
                                                $avg = 20 * $aver;
                                            }
                                        ?>
                                        <div class="ratings-container">
                                            <div class="ratings-full">
                                                <span class="ratings" style="width: {{ $avg }}%;"></span>
                                                <span class="tooltiptext tooltip-top"></span>
                                            </div>
                                            <a href="{{route('product', 16)}}" class="rating-reviews">({{ $no }} Reviews)</a>
                                        </div>
                                        <div class="product-price">
                                            <ins class="new-price">pkr{{$arrival->p_new_price}}</ins>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                    <!-- End of Tab Pane -->
                    <div class="tab-pane pt-4" id="tab1-2">
                        <div class="row cols-xl-5 cols-md-4 cols-sm-3 cols-2">
                            @foreach($top_sellers->slice(0, 5) as $seller)
                                @foreach($seller->products->slice(0, 3) as $unit)
                                    <div class="product-wrap">
                                        <div class="product text-center">
                                            <figure class="product-media">
                                                <a href="{{route('product',$unit->id)}}">
                                                    <img src="{{asset('/storage/uploads/products/'.$unit->p_image)}}" alt="Product"
                                                    style="width:300px;height:300px" />
                                                    <img src="{{asset('/storage/uploads/products/'.$unit->p_image)}}" alt="Product"
                                                    style="width:300px;height:300px" />
                                                </a>
                                                <div class="product-action-vertical">
                                                    <a href="javascript:void(0)" class="btn-product-icon btn-cart w-icon-cart"
                                                        title="Add to cart" onclick="add_cart_({{$unit->id}})"></a>
                                                    <a href="javascript:void(0)" class="btn-product-icon btn-wishlist w-icon-heart" onclick="add_wish_({{$unit->id}})"
                                                        title="Add to wishlist"></a>
                                                    <!-- <a href="javascript:void(0)" class="btn-product-icon btn-quickview w-icon-search"
                                                        title="Quickview"></a>
                                                    <a href="javascript:void(0)" class="btn-product-icon btn-compare w-icon-compare"
                                                        title="Add to Compare"></a> -->
                                                </div>
                                            </figure>
                                            <?php 
                                                $sum = $unit->discussions->sum('review');
                                                $no = $unit->discussions->count('review');
                                                if($sum == 0 || $no == 0){
                                                    $avg = 0;
                                                }
                                                else{
                                                    $aver = $sum/$no;
                                                    $avg = 20 * $aver;
                                                }
                                            ?>
                                            <div class="product-details">
                                                <h4 class="product-name"><a href="{{route('product',$unit->id)}}">{{$unit->p_name}}</a>
                                                </h4>
                                                <div class="ratings-container">
                                                    <div class="ratings-full">
                                                        <span class="ratings" style="width: {{$avg}}%;"></span>
                                                        <span class="tooltiptext tooltip-top"></span>
                                                    </div>
                                                    <a href="{{route('product', $unit->id)}}" class="rating-reviews">({{ $no }} reviews)</a>
                                                </div>
                                                <div class="product-price">
                                                    <ins class="new-price">pkr{{$unit->p_new_price}}</ins>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            @endforeach
                        </div>
                    </div>
                    <!-- End of Tab Pane -->
                    <div class="tab-pane pt-4" id="tab1-3">
                        <div class="row cols-xl-5 cols-md-4 cols-sm-3 cols-2">
                            @foreach($most_populars->slice(0, 10) as $deal)
                            <div class="product-wrap">
                                <div class="product text-center">
                                    <figure class="product-media">
                                        <a href="{{route('product', 16)}}">
                                            <img src="{{asset('/storage/uploads/products/'.$deal->p_image)}}" alt="Product"
                                            style="width:300px;height:300px" />
                                        </a>
                                        <div class="product-action-vertical">
                                            <a href="javascript:void(0)" class="btn-product-icon btn-cart w-icon-cart"
                                                title="Add to cart" onclick="add_cart_({{$deal->id}})"></a>
                                            <a href="javascript:void(0)" class="btn-product-icon btn-wishlist w-icon-heart" onclick="add_wish_({{$deal->id}})"
                                                title="Add to wishlist"></a>
                                            <!-- <a href="javascript:void(0)" class="btn-product-icon btn-quickview w-icon-search"
                                                title="Quickview"></a>
                                            <a href="javascript:void(0)" class="btn-product-icon btn-compare w-icon-compare"
                                                title="Add to Compare"></a> -->
                                        </div>
                                    </figure>
                                    <?php 
                                        $sum = $deal->discussions->sum('review');
                                        $no = $deal->discussions->count('review');
                                        if($sum == 0 || $no == 0){
                                            $avg = 0;
                                        }
                                        else{
                                            $aver = $sum/$no;
                                            $avg = 20 * $aver;
                                        }
                                    ?>
                                    <div class="product-details">
                                        <h4 class="product-name"><a href="{{route('product',$deal->id)}}">{{$deal->p_name}}
                                            </a></h4>
                                        <div class="ratings-container">
                                            <div class="ratings-full">
                                                <span class="ratings" style="width: {{ $avg }}%;"></span>
                                                <span class="tooltiptext tooltip-top"></span>
                                            </div>
                                            <a href="{{route('product', 16)}}" class="rating-reviews">({{ $no }} reviews)</a>
                                        </div>
                                        <div class="product-price">
                                            <span class="price">pkr{{$deal->p_new_price}}</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                    <!-- End of Tab Pane -->
                    <div class="tab-pane pt-4" id="tab1-4">
                        <div class="row cols-xl-5 cols-md-4 cols-sm-3 cols-2">
                            @foreach($deals as $deal)
                            <div class="product-wrap">
                                <div class="product text-center">
                                    <figure class="product-media">
                                        <a href="{{route('product', 16)}}">
                                            <img src="{{asset('/storage/uploads/products/'.$deal->p_image)}}" alt="Product"
                                            style="width:300px;height:300px" />
                                        </a>
                                        <div class="product-action-vertical">
                                            <a href="javascript:void(0)" class="btn-product-icon btn-cart w-icon-cart"
                                                title="Add to cart" onclick="add_cart_({{$deal->id}})"></a>
                                            <a href="javascript:void(0)" class="btn-product-icon btn-wishlist w-icon-heart" onclick="add_wish_({{$deal->id}})"
                                                title="Add to wishlist"></a>
                                            <!-- <a href="javascript:void(0)" class="btn-product-icon btn-quickview w-icon-search"
                                                title="Quickview"></a>
                                            <a href="javascript:void(0)" class="btn-product-icon btn-compare w-icon-compare"
                                                title="Add to Compare"></a> -->
                                        </div>
                                    </figure>
                                    <?php 
                                        $sum = $deal->discussions->sum('review');
                                        $no = $deal->discussions->count('review');
                                        if($sum == 0 || $no == 0){
                                            $avg = 0;
                                        }
                                        else{
                                            $aver = $sum/$no;
                                            $avg = 20 * $aver;
                                        }
                                    ?>
                                    <div class="product-details">
                                        <h4 class="product-name"><a href="{{route('product',$deal->id)}}">{{$deal->p_name}}
                                            </a></h4>
                                        <div class="ratings-container">
                                            <div class="ratings-full">
                                                <span class="ratings" style="width: {{ $avg }}%;"></span>
                                                <span class="tooltiptext tooltip-top"></span>
                                            </div>
                                            <a href="{{route('product', 16)}}" class="rating-reviews">({{ $no }} reviews)</a>
                                        </div>
                                        <div class="product-price">
                                            <span class="price">pkr{{$deal->p_new_price}}</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                    <!-- End of Tab Pane -->
                </div>
                <!-- End of Tab Content -->

                <!-- <div class="row category-cosmetic-lifestyle appear-animate mb-5">
                    <div class="col-md-6 mb-4">
                        <div class="banner banner-fixed category-banner-1 br-xs">
                            <figure>
                                <img src="{{asset('frontend-assets/assets/images/demos/demo1/categories/3-1.jpg')}}" alt="Category Banner"
                                    width="610" height="200" style="background-color: #3B4B48;" />
                            </figure>
                            <div class="banner-content y-50 pt-1">
                                <h5 class="banner-subtitle font-weight-bold text-uppercase">Natural Process</h5>
                                <h3 class="banner-title font-weight-bolder text-capitalize text-white">Cosmetic
                                    Makeup<br>Professional</h3>
                                <a href="{{route('shop')}}"
                                    class="btn btn-white btn-link btn-underline btn-icon-right">Shop Now<i
                                        class="w-icon-long-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 mb-4">
                        <div class="banner banner-fixed category-banner-2 br-xs">
                            <figure>
                                <img src="{{asset('frontend-assets/assets/images/demos/demo1/categories/3-2.jpg')}}" alt="Category Banner"
                                    width="610" height="200" style="background-color: #E5E5E5;" />
                            </figure>
                            <div class="banner-content y-50 pt-1">
                                <h5 class="banner-subtitle font-weight-bold text-uppercase">Trending Now</h5>
                                <h3 class="banner-title font-weight-bolder text-capitalize">Women's
                                    Lifestyle<br>Collection</h3>
                                <a href="{{route('shop')}}"
                                    class="btn btn-dark btn-link btn-underline btn-icon-right">Shop Now<i
                                        class="w-icon-long-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div> -->
                <!-- End of Category Cosmetic Lifestyle -->
                @foreach($frontcat as $test)
                    @foreach($test as $unit)

                <div class="product-wrapper-1 appear-animate mb-5">
                    <div class="title-link-wrapper pb-1 mb-4">
                        <h2 class="title ls-normal mb-0">{{$unit['name']}}</h2>
                        <a href="{{route('shop')}}" class="font-size-normal font-weight-bold ls-25 mb-0">More
                            Products<i class="w-icon-long-arrow-right"></i></a>
                    </div>
                    <div class="row">
                        <!-- <div class="col-lg-3 col-sm-4 mb-4">
                            <div class="banner h-100 br-sm" style="background-image: url({{asset('frontend-assets/assets/images/demos/demo1/banners/2.jpg')}});
                                background-color: #ebeced;">
                                <div class="banner-content content-top">
                                    <h5 class="banner-subtitle font-weight-normal mb-2">Weekend Sale</h5>
                                    <hr class="banner-divider bg-dark mb-2">
                                    <h3 class="banner-title font-weight-bolder ls-25 text-uppercase">
                                        New Arrivals<br> <span
                                            class="font-weight-normal text-capitalize">Collection</span>
                                    </h3>
                                    <a href="{{route('shop')}}"
                                        class="btn btn-dark btn-outline btn-rounded btn-sm">shop Now</a>
                                </div>
                            </div>
                        </div> -->
                        <!-- End of Banner -->
                        <div class="col-lg-12 col-sm-8">
                            <div class="swiper-container swiper-theme" data-swiper-options="{
                                'spaceBetween': 20,
                                'slidesPerView': 2,
                                'breakpoints': {
                                    '992': {
                                        'slidesPerView': 3
                                    },
                                    '1200': {
                                        'slidesPerView': 4
                                    }
                                }
                            }">
                                <div class="swiper-wrapper row cols-xl-4 cols-lg-3 cols-2">
                                    @foreach($unit['product']->slice(0, 10) as $row)
                                    <div class="swiper-slide product-col">
                                        <div class="product-wrap product text-center">
                                            <figure class="product-media">
                                                <a href="{{ route('product', $row->id)}}">
                                                    <img src="{{asset('storage/uploads/products/'.$row->p_image)}}" alt="Product"
                                                    style="width:300px;height:300px" />
                                                </a>
                                                <div class="product-action-vertical">
                                                    <a href="javascript:void(0)" class="btn-product-icon btn-cart w-icon-cart"
                                                        title="Add to cart" onclick="add_cart_({{$row->id}})"></a>
                                                    <a href="javascript:void(0)" class="btn-product-icon btn-wishlist w-icon-heart" onclick="add_wish_({{$row->id}})"
                                                        title="Add to wishlist"></a>
                                                    <!-- <a href="javascript:void(0)" class="btn-product-icon btn-quickview w-icon-search"
                                                        title="Quickview"></a>
                                                    <a href="javascript:void(0)" class="btn-product-icon btn-compare w-icon-compare"
                                                        title="Add to Compare"></a> -->
                                                </div>
                                            </figure>
                                            <div class="product-details">
                                                <h4 class="product-name">
                                                    <a href="{{route('product', $row->id)}}">{{$row->p_name}}</a>
                                                </h4>
                                                    <?php 
                                                        $sum = $row->discussions->sum('review');
                                                        $no = $row->discussions->count('review');
                                                        if($sum == 0 || $no == 0){
                                                            $avg = 0;
                                                        }
                                                        else{
                                                            $aver = $sum/$no;
                                                            $avg = 20 * $aver;
                                                        }
                                                    ?>
                                                <div class="ratings-container">
                                                    <div class="ratings-full">
                                                        <span class="ratings" style="width: {{ $avg }}%;"></span>
                                                        <span class="tooltiptext tooltip-top"></span>
                                                    </div>
                                                    <a href="{{route('product', $row->id)}}" class="rating-reviews">({{$no}}
                                                        reviews)</a>
                                                </div>
                                                <div class="product-price">
                                                    <ins class="new-price">pkr{{$row->p_new_price}}</ins><del
                                                        class="old-price">pkr{{$row->p__price}}</del>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    @endforeach
                                </div>
                                <div class="swiper-pagination"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End of Product Wrapper 1 -->
                    @endforeach
                @endforeach


                <!-- End of Product Wrapper 1 -->

                <!-- <div class="banner banner-fashion appear-animate br-sm mb-9" style="background-image: url({{asset('frontend-assets/assets/images/demos/demo1/banners/4.jpg)')}};
                    background-color: #383839;">
                    <div class="banner-content align-items-center">
                        <div class="content-left d-flex align-items-center mb-3">
                            <div class="banner-price-info font-weight-bolder text-secondary text-uppercase lh-1 ls-25">
                                25
                                <sup class="font-weight-bold">%</sup><sub class="font-weight-bold ls-25">Off</sub>
                            </div>
                            <hr class="banner-divider bg-white mt-0 mb-0 mr-8">
                        </div>
                        <div class="content-right d-flex align-items-center flex-1 flex-wrap">
                            <div class="banner-info mb-0 mr-auto pr-4 mb-3">
                                <h3 class="banner-title text-white font-weight-bolder text-uppercase ls-25">For Today's
                                    Fashion</h3>
                                <p class="text-white mb-0">Use code
                                    <span
                                        class="text-dark bg-white font-weight-bold ls-50 pl-1 pr-1 d-inline-block">Black
                                        <strong>12345</strong></span> to get best offer.</p>
                            </div>
                            <a href="{{route('shop')}}"
                                class="btn btn-white btn-outline btn-rounded btn-icon-right mb-3">Shop Now<i
                                    class="w-icon-long-arrow-right"></i></a>
                        </div>
                    </div>
                </div> -->
                <!-- End of Banner Fashion -->

                <div class="product-wrapper-1 appear-animate mb-7">
                    <div class="title-link-wrapper pb-1 mb-4">
                        <h2 class="title ls-normal mb-0">Home Garden & Kitchen</h2>
                        <a href="{{route('shop')}}" class="font-size-normal font-weight-bold ls-25 mb-0">More
                            Products<i class="w-icon-long-arrow-right"></i></a>
                    </div>
                    <div class="row">
                        <!-- <div class="col-lg-3 col-sm-4 mb-4">
                            <div class="banner h-100 br-sm" style="background-image: url({{asset('frontend-assets/assets/images/demos/demo1/banners/5.jpg')}});
                            background-color: #EAEFF3;">
                                <div class="banner-content content-top">
                                    <h5 class="banner-subtitle font-weight-normal mb-2">Deals And Promotions</h5>
                                    <hr class="banner-divider bg-dark mb-2">
                                    <h3 class="banner-title font-weight-bolder text-uppercase ls-25">
                                        Trending <br> <span class="font-weight-normal text-capitalize">House
                                            Utensil</span>
                                    </h3>
                                    <a href="{{route('shop')}}"
                                        class="btn btn-dark btn-outline btn-rounded btn-sm">shop now</a>
                                </div>
                            </div>
                        </div> -->
                        <!-- End of Banner -->
                        <div class="col-lg-12 col-sm-8">
                            <div class="swiper-container swiper-theme" data-swiper-options="{
                                'spaceBetween': 20,
                                'slidesPerView': 2,
                                'breakpoints': {
                                    '992': {
                                        'slidesPerView': 3
                                    },
                                    '1200': {
                                        'slidesPerView': 4
                                    }
                                }
                            }">
                                <div class="swiper-wrapper row cols-xl-4 cols-lg-3 cols-2">
                                    @foreach($homes as $row)
                                    <div class="swiper-slide product-col">
                                        <div class="product-wrap product text-center">
                                            <figure class="product-media">
                                                <a href="{{ route('product', $row->id)}}">
                                                    <img src="{{asset('storage/uploads/products/'.$row->p_image)}}" alt="Product"
                                                    style="width:300px;height:300px" />
                                                </a>
                                                <div class="product-action-vertical">
                                                    <a href="javascript:void(0)" class="btn-product-icon btn-cart w-icon-cart"
                                                        title="Add to cart" onclick="add_cart_({{$row->id}})"></a>
                                                    <a href="javascript:void(0)" class="btn-product-icon btn-wishlist w-icon-heart" onclick="add_wish_({{$row->id}})"
                                                        title="Add to wishlist"></a>
                                                    <!-- <a href="javascript:void(0)" class="btn-product-icon btn-quickview w-icon-search"
                                                        title="Quickview"></a>
                                                    <a href="javascript:void(0)" class="btn-product-icon btn-compare w-icon-compare"
                                                        title="Add to Compare"></a> -->
                                                </div>
                                            </figure>
                                            <?php 
                                                $sum = $row->discussions->sum('review');
                                                $no = $row->discussions->count('review');
                                                if($sum == 0 || $no == 0){
                                                    $avg = 0;
                                                }
                                                else{
                                                    $aver = $sum/$no;
                                                    $avg = 20 * $aver;
                                                }
                                            ?>
                                            <div class="product-details">
                                                <h4 class="product-name">
                                                    <a href="{{route('product', $row->id)}}">{{$row->p_name}}</a>
                                                </h4>
                                                <div class="ratings-container">
                                                    <div class="ratings-full">
                                                        <span class="ratings" style="width: {{ $avg }}%;"></span>
                                                        <span class="tooltiptext tooltip-top"></span>
                                                    </div>
                                                    <a href="{{route('product', $row->id)}}" class="rating-reviews">({{ $no }}
                                                        reviews)</a>
                                                </div>
                                                <div class="product-price">
                                                    <ins class="new-price">pkr{{$row->p_new_price}}</ins><del
                                                        class="old-price">pkr{{$row->p__price}}</del>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    @endforeach

                                </div>
                                <div class="swiper-pagination"></div>
                            </div>
                            <!-- End of Produts -->
                        </div>
                    </div>
                </div>
                <!-- End of Product Wrapper 1 -->

                <h2 class="title title-underline mb-4 ls-normal appear-animate">Our Clients</h2>
                <div class="swiper-container swiper-theme brands-wrapper mb-9 appear-animate" data-swiper-options="{
                    'spaceBetween': 0,
                    'slidesPerView': 2,
                    'breakpoints': {
                        '576': {
                            'slidesPerView': 3
                        },
                        '768': {
                            'slidesPerView': 4
                        },
                        '992': {
                            'slidesPerView': 5
                        },
                        '1200': {
                            'slidesPerView': 6
                        }
                    }
                }">
                    <div class="swiper-wrapper row gutter-no cols-xl-6 cols-lg-5 cols-md-4 cols-sm-3 cols-2">
                        <div class="swiper-slide brand-col">
                            <figure class="brand-wrapper">
                                <img src="{{asset('frontend-assets/assets/images/demos/demo1/brands/1.png')}}" alt="Brand" width="410"
                                    height="186" />
                            </figure>
                            <figure class="brand-wrapper">
                                <img src="{{asset('frontend-assets/assets/images/demos/demo1/brands/2.png')}}" alt="Brand" width="410"
                                    height="186" />
                            </figure>
                        </div>
                        <div class="swiper-slide brand-col">
                            <figure class="brand-wrapper">
                                <img src="{{asset('frontend-assets/assets/images/demos/demo1/brands/3.png')}}" alt="Brand" width="410"
                                    height="186" />
                            </figure>
                            <figure class="brand-wrapper">
                                <img src="{{asset('frontend-assets/assets/images/demos/demo1/brands/4.png')}}" alt="Brand" width="410"
                                    height="186" />
                            </figure>
                        </div>
                        <div class="swiper-slide brand-col">
                            <figure class="brand-wrapper">
                                <img src="{{asset('frontend-assets/assets/images/demos/demo1/brands/5.png')}}" alt="Brand" width="410"
                                    height="186" />
                            </figure>
                            <figure class="brand-wrapper">
                                <img src="{{asset('frontend-assets/assets/images/demos/demo1/brands/6.png')}}" alt="Brand" width="410"
                                    height="186" />
                            </figure>
                        </div>
                        <div class="swiper-slide brand-col">
                            <figure class="brand-wrapper">
                                <img src="{{asset('frontend-assets/assets/images/demos/demo1/brands/7.png')}}" alt="Brand" width="410"
                                    height="186" />
                            </figure>
                            <figure class="brand-wrapper">
                                <img src="{{asset('frontend-assets/assets/images/demos/demo1/brands/8.png')}}" alt="Brand" width="410"
                                    height="186" />
                            </figure>
                        </div>
                        <div class="swiper-slide brand-col">
                            <figure class="brand-wrapper">
                                <img src="{{asset('frontend-assets/assets/images/demos/demo1/brands/9.png')}}" alt="Brand" width="410"
                                    height="186" />
                            </figure>
                            <figure class="brand-wrapper">
                                <img src="{{asset('frontend-assets/assets/images/demos/demo1/brands/10.png')}}" alt="Brand" width="410"
                                    height="186" />
                            </figure>
                        </div>
                        <div class="swiper-slide brand-col">
                            <figure class="brand-wrapper">
                                <img src="{{asset('frontend-assets/assets/images/demos/demo1/brands/11.png')}}" alt="Brand" width="410"
                                    height="186" />
                            </figure>
                            <figure class="brand-wrapper">
                                <img src="{{asset('frontend-assets/assets/images/demos/demo1/brands/12.png')}}" alt="Brand" width="410"
                                    height="186" />
                            </figure>
                        </div>
                    </div>
                </div>
                <!-- End of Brands Wrapper -->
                <!-- Post Wrapper -->
                @if($recents->count() > 0)
                <h2 class="title title-underline mb-4 ls-normal appear-animate">Your Recent Views</h2>
                <div class="swiper-container swiper-theme shadow-swiper appear-animate pb-4 mb-8" data-swiper-options="{
                    'spaceBetween': 20,
                    'slidesPerView': 2,
                    'breakpoints': {
                        '576': {
                            'slidesPerView': 3
                        },
                        '768': {
                            'slidesPerView': 5
                        },
                        '992': {
                            'slidesPerView': 6
                        },
                        '1200': {
                            'slidesPerView': 8
                        }
                    }
                    }">
                    <div class="swiper-wrapper row cols-xl-8 cols-lg-6 cols-md-4 cols-2">
                        @foreach($recents as $recent)
                        <div class="swiper-slide product-wrap mb-0">
                            <div class="product text-center product-absolute">
                                <figure class="product-media">
                                    <a href="product-defa{{route('product', $recent->p_id)}}">
                                        <img src="{{asset('storage/uploads/products/'.$recent->pimage)}}" alt="Category image"
                                        style="width:300px;height:300px" style="background-color: #fff" />
                                    </a>
                                </figure>
                                <h4 class="product-name">
                                    <a href="{{route('product', $recent->p_id)}}">{{$recent->pname}}</a>
                                </h4>
                            </div>
                        </div>
                        @endforeach
                    </div>
                    <div class="swiper-pagination"></div>
                </div>
                @endif
                <!-- End of Reviewed Producs -->
                
            </div>
            <!--End of Catainer -->
            <div class="container">
                    </div>
                    <div class="swiper-container swiper-theme show-code-action" data-swiper-options="{
                        'autoplay': true,
                        'slidesPerView': 2,
                        'breakpoints': {
                            '576': {
                                'slidesPerView': 3
                            },
                            '768': {
                                'slidesPerView': 4
                            },
                            '992': {
                                'slidesPerView': 5
                            },
                            '1200': {
                                'slidesPerView': 6
                            }
                        }
                    }">
                        <div class="swiper-wrapper row cols-xl-6 cols-lg-5 cols-md-4 cols-sm-3 cols-2 gutter-no">
                            <figure class="swiper-slide instagram">
                                <a href="#">
                                    <img src="../frontend-assets/assets/images/instagram/instagram-1.jpg" alt="Instagram" width="320"
                                        height="320" />
                                </a>
                            </figure>
                            <figure class="swiper-slide instagram">
                                <a href="#">
                                    <img src="../frontend-assets/assets/images/instagram/instagram-2.jpg" alt="Instagram" width="320"
                                        height="320" />
                                </a>
                            </figure>
                            <figure class="swiper-slide instagram">
                                <a href="#">
                                    <img src="../frontend-assets/assets/images/instagram/instagram-6.jpg" alt="Instagram" width="320"
                                        height="320" />
                                </a>
                            </figure>
                            <figure class="swiper-slide instagram">
                                <a href="#">
                                    <img src="../frontend-assets/assets/images/instagram/instagram-3.jpg" alt="Instagram" width="320"
                                        height="320" />
                                </a>
                            </figure>
                            <figure class="swiper-slide instagram">
                                <a href="#">
                                    <img src="../frontend-assets/assets/images/instagram/instagram-4.jpg" alt="Instagram" width="320"
                                        height="320" />
                                </a>
                            </figure>
                            <figure class="swiper-slide instagram">
                                <a href="#">
                                    <img src="../frontend-assets/assets/images/instagram/instagram-5.jpg" alt="Instagram" width="320"
                                        height="320" />
                                </a>
                            </figure>
                        </div>
                        <div class="swiper-pagination"></div>
                    </div>
        </main>
        <!-- End of Main -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js" crossorigin="anonymous"></script>

<script type="text/javascript">

$("#postbutton").click(function(){
            var id = $("#product_id").val();
            var quantity = $("#qnty").val();
            if(!quantity){
                var quantity = 1;
            }
            var size = $("#size").val();
            if(!size){
                var size = 'medium';
            }
            // processing ajax request
            $.ajax({
                url: "{{ route('addcart') }}",
                type: 'POST',
                dataType: "json",
                data: {
                    "_token": "{{ csrf_token() }}",
                    id: id,
                    quantity: quantity,
                    size: size
                },
                success: function(data) {
                    // log response into console
                    console.log(data);
                }
            });
        });

</script>
@endsection
