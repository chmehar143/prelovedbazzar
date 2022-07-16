@extends('fronted-views.layouts.app')

@section('content')

   <!-- Start of Main -->
   <main class="main mb-10 pb-1">
            <!-- Start of Breadcrumb -->
            <nav class="breadcrumb-nav container">
                <ul class="breadcrumb bb-no">
                    <li><a href="demo1.html">Home</a></li>
                    <li><a href="product-default.html">Products</a></li>
                    <li>Vertical Thumbs</li>
                </ul>
                <ul class="product-nav list-style-none">
                    <li class="product-nav-prev">
                        <a href="#">
                            <i class="w-icon-angle-left"></i>
                        </a>
                        <span class="product-nav-popup">
                            <img src="assets/images/products/product-nav-prev.jpg" alt="Product" width="110"
                                height="110" />
                            <span class="product-name">Soft Sound Maker</span>
                        </span>
                    </li>
                    <li class="product-nav-next">
                        <a href="#">
                            <i class="w-icon-angle-right"></i>
                        </a>
                        <span class="product-nav-popup">
                            <img src="assets/images/products/product-nav-next.jpg" alt="Product" width="110"
                                height="110" />
                            <span class="product-name">Fabulous Sound Speaker</span>
                        </span>
                    </li>
                </ul>
            </nav>
            <!-- End of Breadcrumb -->

            <!-- Start of Page Content -->
            <div class="page-content">
                <div class="container">
                    <div class="product product-single row">
                        <div class="col-md-6 mb-6">
                            <div class="product-gallery product-gallery-sticky product-gallery-vertical">
                                <div class="swiper-container product-single-swiper swiper-theme nav-inner" data-swiper-options="{
                                    'navigation': {
                                        'nextEl': '.swiper-button-next',
                                        'prevEl': '.swiper-button-prev'
                                    }
                                }">
                                    <div class="swiper-wrapper row cols-1 gutter-no">
                                        <div class="swiper-slide">
                                            <figure class="product-image">
                                                <img src="assets/images/products/without/1-800x900.jpg"
                                                    data-zoom-image="assets/images/products/without/1-800x900.jpg"
                                                    alt="Bright Green IPhone" width="800" height="900">
                                            </figure>
                                        </div>
                                        <div class="swiper-slide">
                                            <figure class="product-image">
                                                <img src="assets/images/products/without/2-800x900.jpg"
                                                    data-zoom-image="assets/images/products/without/2-800x900.jpg"
                                                    alt="Bright Green IPhone" width="488" height="549">
                                            </figure>
                                        </div>
                                        <div class="swiper-slide">
                                            <figure class="product-image">
                                                <img src="assets/images/products/without/3-800x900.jpg"
                                                    data-zoom-image="assets/images/products/without/3-800x900.jpg"
                                                    alt="Bright Green IPhone" width="800" height="900">
                                            </figure>
                                        </div>
                                        <div class="swiper-slide">
                                            <figure class="product-image">
                                                <img src="assets/images/products/without/4-800x900.jpg"
                                                    data-zoom-image="assets/images/products/without/4-800x900.jpg"
                                                    alt="Bright Green IPhone" width="800" height="900">
                                            </figure>
                                        </div>
                                        <div class="swiper-slide">
                                            <figure class="product-image">
                                                <img src="assets/images/products/without/5-800x900.jpg"
                                                    data-zoom-image="assets/images/products/without/5-800x900.jpg"
                                                    alt="Bright Green IPhone" width="800" height="900">
                                            </figure>
                                        </div>
                                    </div>
                                    <button class="swiper-button-next"></button>
                                    <button class="swiper-button-prev"></button>
                                    <a href="#" class="product-gallery-btn product-image-full"><i class="w-icon-zoom"></i></a>
                                </div>
                                <div class="product-thumbs-wrap swiper-container" data-swiper-options="{
                                    'navigation': {
                                        'nextEl': '.swiper-button-next',
                                        'prevEl': '.swiper-button-prev'
                                    },
                                    'breakpoints': {
                                        '992': {
                                            'direction': 'vertical',
                                            'slidesPerView': 'auto'
                                        }
                                    }
                                }">
                                    <div class="product-thumbs swiper-wrapper row cols-lg-1 cols-4 gutter-sm">
                                        <div class="product-thumb swiper-slide">
                                            <img src="assets/images/products/without/1-800x900.jpg" alt="Product Thumb"
                                                width="800" height="900">
                                        </div>
                                        <div class="product-thumb swiper-slide">
                                            <img src="assets/images/products/without/2-800x900.jpg" alt="Product Thumb"
                                                width="800" height="900">
                                        </div>
                                        <div class="product-thumb swiper-slide">
                                            <img src="assets/images/products/without/3-800x900.jpg" alt="Product Thumb"
                                                width="800" height="900">
                                        </div>
                                        <div class="product-thumb swiper-slide">
                                            <img src="assets/images/products/without/4-800x900.jpg" alt="Product Thumb"
                                                width="800" height="900">
                                        </div>
                                        <div class="product-thumb swiper-slide">
                                            <img src="assets/images/products/without/5-800x900.jpg" alt="Product Thumb"
                                                width="800" height="900">
                                        </div>
                                    </div>
                                    <button class="swiper-button-prev"></button>
                                    <button class="swiper-button-next"></button>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 mb-4 mb-md-6">
                            <div class="product-details">
                                <h1 class="product-title">Bright Green IPhone</h1>
                                <div class="product-bm-wrapper">
                                    <figure class="brand">
                                        <img src="assets/images/products/brand/brand-2.jpg" alt="Brand" width="105"
                                            height="48" />
                                    </figure>
                                    <div class="product-meta">
                                        <div class="product-categories">
                                            Category:
                                            <span class="product-category"><a href="#">Electronics</a></span>
                                        </div>
                                        <div class="product-sku">
                                            SKU: <span>MS46891383</span>
                                        </div>
                                    </div>
                                </div>

                                <hr class="product-divider">

                                <div class="product-price"><ins class="new-price">$950.00</ins></div>

                                <div class="ratings-container">
                                    <div class="ratings-full">
                                        <span class="ratings" style="width: 80%;"></span>
                                        <span class="tooltiptext tooltip-top"></span>
                                    </div>
                                    <a href="#" class="rating-reviews">(1 Reviews)</a>
                                </div>

                                <div class="product-short-desc lh-2">
                                    <ul class="list-type-check list-style-none">
                                        <li>Ultrices eros in cursus turpis massa cursus mattis.</li>
                                        <li>Volutpat ac tincidunt vitae semper quis lectus.</li>
                                        <li>Aliquam id diam maecenas ultricies mi eget mauris.</li>
                                    </ul>
                                </div>

                                <hr class="product-divider">

                                <div class="fix-bottom product-sticky-content sticky-content">
                                    <div class="product-form container">
                                        <div class="product-qty-form with-label">
                                            <label>Quantity:</label>
                                            <div class="input-group">
                                                <input class="quantity form-control" type="number" min="1"
                                                    max="10000000">
                                                <button class="quantity-plus w-icon-plus"></button>
                                                <button class="quantity-minus w-icon-minus"></button>
                                            </div>
                                        </div>
                                        <button class="btn btn-primary btn-cart">
                                            <i class="w-icon-cart"></i>
                                            <span>Add to Cart</span>
                                        </button>
                                    </div>
                                </div>

                                <div class="social-links-wrapper">
                                    <div class="social-links">
                                        <div class="social-icons social-no-color border-thin">
                                            <a href="#" class="social-icon social-facebook w-icon-facebook"></a>
                                            <a href="#" class="social-icon social-twitter w-icon-twitter"></a>
                                            <a href="#" class="social-icon social-pinterest fab fa-pinterest-p"></a>
                                            <a href="#" class="social-icon social-whatsapp fab fa-whatsapp"></a>
                                            <a href="#" class="social-icon social-youtube fab fa-linkedin-in"></a>
                                        </div>
                                    </div>
                                    <span class="divider d-xs-show"></span>
                                    <div class="product-link-wrapper d-flex">
                                        <a href="#" class="btn-product-icon btn-wishlist w-icon-heart"><span></span></a>
                                        <a href="#"
                                            class="btn-product-icon btn-compare btn-icon-left w-icon-compare"><span></span></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab tab-nav-boxed tab-nav-underline product-tabs mt-3">
                        <ul class="nav nav-tabs" role="tablist">
                            <li class="nav-item">
                                <a href="#product-tab-description" class="nav-link active">Description</a>
                            </li>
                            <li class="nav-item">
                                <a href="#product-tab-reviews" class="nav-link">Customer Reviews (3)</a>
                            </li>
                        </ul>
                        <div class="tab-content">
                            <div class="tab-pane active" id="product-tab-description">
                                <div class="row mb-4">
                                    <div class="col-md-6 mb-5">
                                        <h4 class="title tab-pane-title font-weight-bold mb-2">Detail</h4>
                                        <p class="mb-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit,
                                            sed do eiusmod tempor incididunt arcu cursus vitae congue mauris.
                                            Sagittis id consectetur purus ut. Tellus rutrum tellus pelle Vel
                                            pretium lectus quam id leo in vitae turpis massa.</p>
                                        <ul class="list-type-check">
                                            <li>Nunc nec porttitor turpis. In eu risus enim. In vitae mollis elit.
                                            </li>
                                            <li>Vivamus finibus vel mauris ut vehicula.</li>
                                            <li>Nullam a magna porttitor, dictum risus nec, faucibus sapien.</li>
                                        </ul>
                                    </div>
                                    <div class="col-md-6 mb-5">
                                        <div class="banner banner-video product-video br-xs">
                                            <figure class="banner-media">
                                                <a href="#">
                                                    <img src="assets/images/products/video-banner-610x300.jpg"
                                                        alt="banner" width="610" height="300"
                                                        style="background-color: #bebebe;">
                                                </a>
                                                <a class="btn-play-video btn-iframe"
                                                    href="assets/video/memory-of-a-woman.mp4"></a>
                                            </figure>
                                        </div>
                                    </div>
                                </div>
                                <div class="row cols-md-3">
                                    <div class="mb-3">
                                        <h5 class="sub-title font-weight-bold"><span class="mr-3">1.</span>Free Shipping
                                            &amp; Return</h5>
                                        <p class="detail pl-5">We offer free shipping for products on orders above 50$
                                            and offer free delivery for all orders in US.</p>
                                    </div>
                                    <div class="mb-3">
                                        <h5 class="sub-title font-weight-bold"><span>2.</span>Free and Easy Returns</h5>
                                        <p class="detail pl-5">We guarantee our products and you could get back all of
                                            your money anytime you want in 30 days.</p>
                                    </div>
                                    <div class="mb-3">
                                        <h5 class="sub-title font-weight-bold"><span>3.</span>Special Financing</h5>
                                        <p class="detail pl-5">Get 20%-50% off items over 50$ for a month or over 250$
                                            for a year with our special credit card.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane" id="product-tab-reviews">
                                <div class="row mb-4">
                                    <div class="col-xl-4 col-lg-5 mb-4">
                                        <div class="ratings-wrapper">
                                            <div class="avg-rating-container">
                                                <h4 class="avg-mark font-weight-bolder ls-50">3.3</h4>
                                                <div class="avg-rating">
                                                    <p class="text-dark mb-1">Average Rating</p>
                                                    <div class="ratings-container">
                                                        <div class="ratings-full">
                                                            <span class="ratings" style="width: 60%;"></span>
                                                            <span class="tooltiptext tooltip-top"></span>
                                                        </div>
                                                        <a href="#" class="rating-reviews">(3 Reviews)</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="ratings-value d-flex align-items-center text-dark ls-25">
                                                <span class="text-dark font-weight-bold">66.7%</span>Recommended<span
                                                    class="count">(2 of 3)</span>
                                            </div>
                                            <div class="ratings-list">
                                                <div class="ratings-container">
                                                    <div class="ratings-full">
                                                        <span class="ratings" style="width: 100%;"></span>
                                                        <span class="tooltiptext tooltip-top"></span>
                                                    </div>
                                                    <div class="progress-bar progress-bar-sm ">
                                                        <span></span>
                                                    </div>
                                                    <div class="progress-value">
                                                        <mark>70%</mark>
                                                    </div>
                                                </div>
                                                <div class="ratings-container">
                                                    <div class="ratings-full">
                                                        <span class="ratings" style="width: 80%;"></span>
                                                        <span class="tooltiptext tooltip-top"></span>
                                                    </div>
                                                    <div class="progress-bar progress-bar-sm ">
                                                        <span></span>
                                                    </div>
                                                    <div class="progress-value">
                                                        <mark>30%</mark>
                                                    </div>
                                                </div>
                                                <div class="ratings-container">
                                                    <div class="ratings-full">
                                                        <span class="ratings" style="width: 60%;"></span>
                                                        <span class="tooltiptext tooltip-top"></span>
                                                    </div>
                                                    <div class="progress-bar progress-bar-sm ">
                                                        <span></span>
                                                    </div>
                                                    <div class="progress-value">
                                                        <mark>40%</mark>
                                                    </div>
                                                </div>
                                                <div class="ratings-container">
                                                    <div class="ratings-full">
                                                        <span class="ratings" style="width: 40%;"></span>
                                                        <span class="tooltiptext tooltip-top"></span>
                                                    </div>
                                                    <div class="progress-bar progress-bar-sm ">
                                                        <span></span>
                                                    </div>
                                                    <div class="progress-value">
                                                        <mark>0%</mark>
                                                    </div>
                                                </div>
                                                <div class="ratings-container">
                                                    <div class="ratings-full">
                                                        <span class="ratings" style="width: 20%;"></span>
                                                        <span class="tooltiptext tooltip-top"></span>
                                                    </div>
                                                    <div class="progress-bar progress-bar-sm ">
                                                        <span></span>
                                                    </div>
                                                    <div class="progress-value">
                                                        <mark>0%</mark>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-8 col-lg-7 mb-4">
                                        <div class="review-form-wrapper">
                                            <h3 class="title tab-pane-title font-weight-bold mb-1">Submit Your Review
                                            </h3>
                                            <p class="mb-3">Your email address will not be published. Required fields
                                                are marked *</p>
                                            <form action="#" method="POST" class="review-form">
                                                <div class="rating-form">
                                                    <label for="rating">Your Rating Of This Product :</label>
                                                    <span class="rating-stars">
                                                        <a class="star-1" href="#">1</a>
                                                        <a class="star-2" href="#">2</a>
                                                        <a class="star-3" href="#">3</a>
                                                        <a class="star-4" href="#">4</a>
                                                        <a class="star-5" href="#">5</a>
                                                    </span>
                                                    <select name="rating" id="rating" required=""
                                                        style="display: none;">
                                                        <option value="">Rate…</option>
                                                        <option value="5">Perfect</option>
                                                        <option value="4">Good</option>
                                                        <option value="3">Average</option>
                                                        <option value="2">Not that bad</option>
                                                        <option value="1">Very poor</option>
                                                    </select>
                                                </div>
                                                <textarea cols="30" rows="6" placeholder="Write Your Review Here..."
                                                    class="form-control" id="review"></textarea>
                                                <div class="row gutter-md">
                                                    <div class="col-md-6">
                                                        <input type="text" class="form-control" placeholder="Your Name"
                                                            id="author">
                                                    </div>
                                                    <div class="col-md-6">
                                                        <input type="text" class="form-control" placeholder="Your Email"
                                                            id="email_1">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <input type="checkbox" class="custom-checkbox" id="save-checkbox">
                                                    <label for="save-checkbox">Save my name, email, and website in this
                                                        browser for the next time I comment.</label>
                                                </div>
                                                <button type="submit" class="btn btn-dark">Submit Review</button>
                                            </form>
                                        </div>
                                    </div>
                                </div>

                                <div class="tab tab-nav-boxed tab-nav-outline tab-nav-center">
                                    <ul class="nav nav-tabs" role="tablist">
                                        <li class="nav-item">
                                            <a href="#show-all" class="nav-link active">Show All</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="#helpful-positive" class="nav-link">Most Helpful Positive</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="#helpful-negative" class="nav-link">Most Helpful Negative</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="#highest-rating" class="nav-link">Highest Rating</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="#lowest-rating" class="nav-link">Lowest Rating</a>
                                        </li>
                                    </ul>
                                    <div class="tab-content">
                                        <div class="tab-pane active" id="show-all">
                                            <ul class="comments list-style-none">
                                                <li class="comment">
                                                    <div class="comment-body">
                                                        <figure class="comment-avatar">
                                                            <img src="assets/images/agents/1-100x100.png"
                                                                alt="Commenter Avatar" width="90" height="90">
                                                        </figure>
                                                        <div class="comment-content">
                                                            <h4 class="comment-author">
                                                                <a href="#">John Doe</a>
                                                                <span class="comment-date">March 22, 2021 at 1:54
                                                                    pm</span>
                                                            </h4>
                                                            <div class="ratings-container comment-rating">
                                                                <div class="ratings-full">
                                                                    <span class="ratings" style="width: 60%;"></span>
                                                                    <span class="tooltiptext tooltip-top"></span>
                                                                </div>
                                                            </div>
                                                            <p>pellentesque habitant morbi tristique senectus et. In
                                                                dictum non consectetur a erat.
                                                                Nunc ultrices eros in cursus turpis massa tincidunt ante
                                                                in nibh mauris cursus mattis.
                                                                Cras ornare arcu dui vivamus arcu felis bibendum ut
                                                                tristique.</p>
                                                            <div class="comment-action">
                                                                <a href="#"
                                                                    class="btn btn-secondary btn-link btn-underline sm btn-icon-left font-weight-normal text-capitalize">
                                                                    <i class="far fa-thumbs-up"></i>Helpful (1)
                                                                </a>
                                                                <a href="#"
                                                                    class="btn btn-dark btn-link btn-underline sm btn-icon-left font-weight-normal text-capitalize">
                                                                    <i class="far fa-thumbs-down"></i>Unhelpful (0)
                                                                </a>
                                                                <div class="review-image">
                                                                    <a href="#">
                                                                        <figure>
                                                                            <img src="assets/images/products/default/review-img-1.jpg"
                                                                                width="60" height="60"
                                                                                alt="Attachment image of John Doe's review on Electronics Black Wrist Watch"
                                                                                data-zoom-image="assets/images/products/default/review-img-1-800x900.jpg" />
                                                                        </figure>
                                                                    </a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="comment">
                                                    <div class="comment-body">
                                                        <figure class="comment-avatar">
                                                            <img src="assets/images/agents/2-100x100.png"
                                                                alt="Commenter Avatar" width="90" height="90">
                                                        </figure>
                                                        <div class="comment-content">
                                                            <h4 class="comment-author">
                                                                <a href="#">John Doe</a>
                                                                <span class="comment-date">March 22, 2021 at 1:52
                                                                    pm</span>
                                                            </h4>
                                                            <div class="ratings-container comment-rating">
                                                                <div class="ratings-full">
                                                                    <span class="ratings" style="width: 80%;"></span>
                                                                    <span class="tooltiptext tooltip-top"></span>
                                                                </div>
                                                            </div>
                                                            <p>Nullam a magna porttitor, dictum risus nec, faucibus
                                                                sapien.
                                                                Ultrices eros in cursus turpis massa tincidunt ante in
                                                                nibh mauris cursus mattis.
                                                                Cras ornare arcu dui vivamus arcu felis bibendum ut
                                                                tristique.</p>
                                                            <div class="comment-action">
                                                                <a href="#"
                                                                    class="btn btn-secondary btn-link btn-underline sm btn-icon-left font-weight-normal text-capitalize">
                                                                    <i class="far fa-thumbs-up"></i>Helpful (1)
                                                                </a>
                                                                <a href="#"
                                                                    class="btn btn-dark btn-link btn-underline sm btn-icon-left font-weight-normal text-capitalize">
                                                                    <i class="far fa-thumbs-down"></i>Unhelpful (0)
                                                                </a>
                                                                <div class="review-image">
                                                                    <a href="#">
                                                                        <figure>
                                                                            <img src="assets/images/products/default/review-img-2.jpg"
                                                                                width="60" height="60"
                                                                                alt="Attachment image of John Doe's review on Electronics Black Wrist Watch"
                                                                                data-zoom-image="assets/images/products/default/review-img-2.jpg" />
                                                                        </figure>
                                                                    </a>
                                                                    <a href="#">
                                                                        <figure>
                                                                            <img src="assets/images/products/default/review-img-3.jpg"
                                                                                width="60" height="60"
                                                                                alt="Attachment image of John Doe's review on Electronics Black Wrist Watch"
                                                                                data-zoom-image="assets/images/products/default/review-img-3.jpg" />
                                                                        </figure>
                                                                    </a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="comment">
                                                    <div class="comment-body">
                                                        <figure class="comment-avatar">
                                                            <img src="assets/images/agents/3-100x100.png"
                                                                alt="Commenter Avatar" width="90" height="90">
                                                        </figure>
                                                        <div class="comment-content">
                                                            <h4 class="comment-author">
                                                                <a href="#">John Doe</a>
                                                                <span class="comment-date">March 22, 2021 at 1:21
                                                                    pm</span>
                                                            </h4>
                                                            <div class="ratings-container comment-rating">
                                                                <div class="ratings-full">
                                                                    <span class="ratings" style="width: 60%;"></span>
                                                                    <span class="tooltiptext tooltip-top"></span>
                                                                </div>
                                                            </div>
                                                            <p>In fermentum et sollicitudin ac orci phasellus. A
                                                                condimentum vitae
                                                                sapien pellentesque habitant morbi tristique senectus
                                                                et. In dictum
                                                                non consectetur a erat. Nunc scelerisque viverra mauris
                                                                in aliquam sem fringilla.</p>
                                                            <div class="comment-action">
                                                                <a href="#"
                                                                    class="btn btn-secondary btn-link btn-underline sm btn-icon-left font-weight-normal text-capitalize">
                                                                    <i class="far fa-thumbs-up"></i>Helpful (0)
                                                                </a>
                                                                <a href="#"
                                                                    class="btn btn-dark btn-link btn-underline sm btn-icon-left font-weight-normal text-capitalize">
                                                                    <i class="far fa-thumbs-down"></i>Unhelpful (1)
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="tab-pane" id="helpful-positive">
                                            <ul class="comments list-style-none">
                                                <li class="comment">
                                                    <div class="comment-body">
                                                        <figure class="comment-avatar">
                                                            <img src="assets/images/agents/1-100x100.png"
                                                                alt="Commenter Avatar" width="90" height="90">
                                                        </figure>
                                                        <div class="comment-content">
                                                            <h4 class="comment-author">
                                                                <a href="#">John Doe</a>
                                                                <span class="comment-date">March 22, 2021 at 1:54
                                                                    pm</span>
                                                            </h4>
                                                            <div class="ratings-container comment-rating">
                                                                <div class="ratings-full">
                                                                    <span class="ratings" style="width: 60%;"></span>
                                                                    <span class="tooltiptext tooltip-top"></span>
                                                                </div>
                                                            </div>
                                                            <p>pellentesque habitant morbi tristique senectus et. In
                                                                dictum non consectetur a erat.
                                                                Nunc ultrices eros in cursus turpis massa tincidunt ante
                                                                in nibh mauris cursus mattis.
                                                                Cras ornare arcu dui vivamus arcu felis bibendum ut
                                                                tristique.</p>
                                                            <div class="comment-action">
                                                                <a href="#"
                                                                    class="btn btn-secondary btn-link btn-underline sm btn-icon-left font-weight-normal text-capitalize">
                                                                    <i class="far fa-thumbs-up"></i>Helpful (1)
                                                                </a>
                                                                <a href="#"
                                                                    class="btn btn-dark btn-link btn-underline sm btn-icon-left font-weight-normal text-capitalize">
                                                                    <i class="far fa-thumbs-down"></i>Unhelpful (0)
                                                                </a>
                                                                <div class="review-image">
                                                                    <a href="#">
                                                                        <figure>
                                                                            <img src="assets/images/products/default/review-img-1.jpg"
                                                                                width="60" height="60"
                                                                                alt="Attachment image of John Doe's review on Electronics Black Wrist Watch"
                                                                                data-zoom-image="assets/images/products/default/review-img-1.jpg" />
                                                                        </figure>
                                                                    </a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="comment">
                                                    <div class="comment-body">
                                                        <figure class="comment-avatar">
                                                            <img src="assets/images/agents/2-100x100.png"
                                                                alt="Commenter Avatar" width="90" height="90">
                                                        </figure>
                                                        <div class="comment-content">
                                                            <h4 class="comment-author">
                                                                <a href="#">John Doe</a>
                                                                <span class="comment-date">March 22, 2021 at 1:52
                                                                    pm</span>
                                                            </h4>
                                                            <div class="ratings-container comment-rating">
                                                                <div class="ratings-full">
                                                                    <span class="ratings" style="width: 80%;"></span>
                                                                    <span class="tooltiptext tooltip-top"></span>
                                                                </div>
                                                            </div>
                                                            <p>Nullam a magna porttitor, dictum risus nec, faucibus
                                                                sapien.
                                                                Ultrices eros in cursus turpis massa tincidunt ante in
                                                                nibh mauris cursus mattis.
                                                                Cras ornare arcu dui vivamus arcu felis bibendum ut
                                                                tristique.</p>
                                                            <div class="comment-action">
                                                                <a href="#"
                                                                    class="btn btn-secondary btn-link btn-underline sm btn-icon-left font-weight-normal text-capitalize">
                                                                    <i class="far fa-thumbs-up"></i>Helpful (1)
                                                                </a>
                                                                <a href="#"
                                                                    class="btn btn-dark btn-link btn-underline sm btn-icon-left font-weight-normal text-capitalize">
                                                                    <i class="far fa-thumbs-down"></i>Unhelpful (0)
                                                                </a>
                                                                <div class="review-image">
                                                                    <a href="#">
                                                                        <figure>
                                                                            <img src="assets/images/products/default/review-img-2.jpg"
                                                                                width="60" height="60"
                                                                                alt="Attachment image of John Doe's review on Electronics Black Wrist Watch"
                                                                                data-zoom-image="assets/images/products/default/review-img-2-800x900.jpg" />
                                                                        </figure>
                                                                    </a>
                                                                    <a href="#">
                                                                        <figure>
                                                                            <img src="assets/images/products/default/review-img-3.jpg"
                                                                                width="60" height="60"
                                                                                alt="Attachment image of John Doe's review on Electronics Black Wrist Watch"
                                                                                data-zoom-image="assets/images/products/default/review-img-3-800x900.jpg" />
                                                                        </figure>
                                                                    </a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="tab-pane" id="helpful-negative">
                                            <ul class="comments list-style-none">
                                                <li class="comment">
                                                    <div class="comment-body">
                                                        <figure class="comment-avatar">
                                                            <img src="assets/images/agents/3-100x100.png"
                                                                alt="Commenter Avatar" width="90" height="90">
                                                        </figure>
                                                        <div class="comment-content">
                                                            <h4 class="comment-author">
                                                                <a href="#">John Doe</a>
                                                                <span class="comment-date">March 22, 2021 at 1:21
                                                                    pm</span>
                                                            </h4>
                                                            <div class="ratings-container comment-rating">
                                                                <div class="ratings-full">
                                                                    <span class="ratings" style="width: 60%;"></span>
                                                                    <span class="tooltiptext tooltip-top"></span>
                                                                </div>
                                                            </div>
                                                            <p>In fermentum et sollicitudin ac orci phasellus. A
                                                                condimentum vitae
                                                                sapien pellentesque habitant morbi tristique senectus
                                                                et. In dictum
                                                                non consectetur a erat. Nunc scelerisque viverra mauris
                                                                in aliquam sem fringilla.</p>
                                                            <div class="comment-action">
                                                                <a href="#"
                                                                    class="btn btn-secondary btn-link btn-underline sm btn-icon-left font-weight-normal text-capitalize">
                                                                    <i class="far fa-thumbs-up"></i>Helpful (0)
                                                                </a>
                                                                <a href="#"
                                                                    class="btn btn-dark btn-link btn-underline sm btn-icon-left font-weight-normal text-capitalize">
                                                                    <i class="far fa-thumbs-down"></i>Unhelpful (1)
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="tab-pane" id="highest-rating">
                                            <ul class="comments list-style-none">
                                                <li class="comment">
                                                    <div class="comment-body">
                                                        <figure class="comment-avatar">
                                                            <img src="assets/images/agents/2-100x100.png"
                                                                alt="Commenter Avatar" width="90" height="90">
                                                        </figure>
                                                        <div class="comment-content">
                                                            <h4 class="comment-author">
                                                                <a href="#">John Doe</a>
                                                                <span class="comment-date">March 22, 2021 at 1:52
                                                                    pm</span>
                                                            </h4>
                                                            <div class="ratings-container comment-rating">
                                                                <div class="ratings-full">
                                                                    <span class="ratings" style="width: 80%;"></span>
                                                                    <span class="tooltiptext tooltip-top"></span>
                                                                </div>
                                                            </div>
                                                            <p>Nullam a magna porttitor, dictum risus nec, faucibus
                                                                sapien.
                                                                Ultrices eros in cursus turpis massa tincidunt ante in
                                                                nibh mauris cursus mattis.
                                                                Cras ornare arcu dui vivamus arcu felis bibendum ut
                                                                tristique.</p>
                                                            <div class="comment-action">
                                                                <a href="#"
                                                                    class="btn btn-secondary btn-link btn-underline sm btn-icon-left font-weight-normal text-capitalize">
                                                                    <i class="far fa-thumbs-up"></i>Helpful (1)
                                                                </a>
                                                                <a href="#"
                                                                    class="btn btn-dark btn-link btn-underline sm btn-icon-left font-weight-normal text-capitalize">
                                                                    <i class="far fa-thumbs-down"></i>Unhelpful (0)
                                                                </a>
                                                                <div class="review-image">
                                                                    <a href="#">
                                                                        <figure>
                                                                            <img src="assets/images/products/default/review-img-2.jpg"
                                                                                width="60" height="60"
                                                                                alt="Attachment image of John Doe's review on Electronics Black Wrist Watch"
                                                                                data-zoom-image="assets/images/products/default/review-img-2-800x900.jpg" />
                                                                        </figure>
                                                                    </a>
                                                                    <a href="#">
                                                                        <figure>
                                                                            <img src="assets/images/products/default/review-img-3.jpg"
                                                                                width="60" height="60"
                                                                                alt="Attachment image of John Doe's review on Electronics Black Wrist Watch"
                                                                                data-zoom-image="assets/images/products/default/review-img-3-800x900.jpg" />
                                                                        </figure>
                                                                    </a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="tab-pane" id="lowest-rating">
                                            <ul class="comments list-style-none">
                                                <li class="comment">
                                                    <div class="comment-body">
                                                        <figure class="comment-avatar">
                                                            <img src="assets/images/agents/1-100x100.png"
                                                                alt="Commenter Avatar" width="90" height="90">
                                                        </figure>
                                                        <div class="comment-content">
                                                            <h4 class="comment-author">
                                                                <a href="#">John Doe</a>
                                                                <span class="comment-date">March 22, 2021 at 1:54
                                                                    pm</span>
                                                            </h4>
                                                            <div class="ratings-container comment-rating">
                                                                <div class="ratings-full">
                                                                    <span class="ratings" style="width: 60%;"></span>
                                                                    <span class="tooltiptext tooltip-top"></span>
                                                                </div>
                                                            </div>
                                                            <p>pellentesque habitant morbi tristique senectus et. In
                                                                dictum non consectetur a erat.
                                                                Nunc ultrices eros in cursus turpis massa tincidunt ante
                                                                in nibh mauris cursus mattis.
                                                                Cras ornare arcu dui vivamus arcu felis bibendum ut
                                                                tristique.</p>
                                                            <div class="comment-action">
                                                                <a href="#"
                                                                    class="btn btn-secondary btn-link btn-underline sm btn-icon-left font-weight-normal text-capitalize">
                                                                    <i class="far fa-thumbs-up"></i>Helpful (1)
                                                                </a>
                                                                <a href="#"
                                                                    class="btn btn-dark btn-link btn-underline sm btn-icon-left font-weight-normal text-capitalize">
                                                                    <i class="far fa-thumbs-down"></i>Unhelpful (0)
                                                                </a>
                                                                <div class="review-image">
                                                                    <a href="#">
                                                                        <figure>
                                                                            <img src="assets/images/products/default/review-img-3.jpg"
                                                                                width="60" height="60"
                                                                                alt="Attachment image of John Doe's review on Electronics Black Wrist Watch"
                                                                                data-zoom-image="assets/images/products/default/review-img-3-800x900.jpg" />
                                                                        </figure>
                                                                    </a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <section class="vendor-product-section">
                        <div class="title-link-wrapper mb-4">
                            <h4 class="title text-left">More Products From This Vendor</h4>
                            <a href="#" class="btn btn-dark btn-link btn-slide-right btn-icon-right">More
                                Products<i class="w-icon-long-arrow-right"></i></a>
                        </div>
                        <div class="swiper-container swiper-theme" data-swiper-options="{
                            'spaceBetween': 20,
                            'slidesPerView': 2,
                            'breakpoints': {
                                '576': {
                                    'slidesPerView': 3
                                },
                                '768': {
                                    'slidesPerView': 4
                                },
                                '992': {
                                    'slidesPerView': 4
                                }
                            }
                        }">
                            <div class="swiper-wrapper row cols-lg-3 cols-md-4 cols-sm-3 cols-2">
                                <div class="swiper-slide product">
                                    <figure class="product-media">
                                        <a href="product-default.html">
                                            <img src="assets/images/products/default/1-1.jpg" alt="Product"
                                                width="300" height="338" />
                                            <img src="assets/images/products/default/1-2.jpg" alt="Product"
                                                width="300" height="338" />
                                        </a>
                                        <div class="product-action-vertical">
                                            <a href="#" class="btn-product-icon btn-cart w-icon-cart"
                                                title="Add to cart"></a>
                                            <a href="#" class="btn-product-icon btn-wishlist w-icon-heart"
                                                title="Add to wishlist"></a>
                                            <a href="#" class="btn-product-icon btn-compare w-icon-compare"
                                                title="Add to Compare"></a>
                                        </div>
                                        <div class="product-action">
                                            <a href="#" class="btn-product btn-quickview" title="Quick View">Quick
                                                View</a>
                                        </div>
                                    </figure>
                                    <div class="product-details">
                                        <div class="product-cat"><a href="shop-banner-sidebar.html">Accessories</a>
                                        </div>
                                        <h4 class="product-name"><a href="product-default.html">Sticky Pencil</a>
                                        </h4>
                                        <div class="ratings-container">
                                            <div class="ratings-full">
                                                <span class="ratings" style="width: 100%;"></span>
                                                <span class="tooltiptext tooltip-top"></span>
                                            </div>
                                            <a href="product-default.html" class="rating-reviews">(3 reviews)</a>
                                        </div>
                                        <div class="product-pa-wrapper">
                                            <div class="product-price">$20.00</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide product">
                                    <figure class="product-media">
                                        <a href="product-default.html">
                                            <img src="assets/images/products/default/2.jpg" alt="Product"
                                                width="300" height="338" />
                                        </a>
                                        <div class="product-action-vertical">
                                            <a href="#" class="btn-product-icon btn-cart w-icon-cart"
                                                title="Add to cart"></a>
                                            <a href="#" class="btn-product-icon btn-wishlist w-icon-heart"
                                                title="Add to wishlist"></a>
                                            <a href="#" class="btn-product-icon btn-compare w-icon-compare"
                                                title="Add to Compare"></a>
                                        </div>
                                        <div class="product-action">
                                            <a href="#" class="btn-product btn-quickview" title="Quick View">Quick
                                                View</a>
                                        </div>
                                    </figure>
                                    <div class="product-details">
                                        <div class="product-cat"><a href="shop-banner-sidebar.html">Electronics</a>
                                        </div>
                                        <h4 class="product-name"><a href="product-default.html">Mini
                                                Multi-Functional Cooker</a></h4>
                                        <div class="ratings-container">
                                            <div class="ratings-full">
                                                <span class="ratings" style="width: 80%;"></span>
                                                <span class="tooltiptext tooltip-top"></span>
                                            </div>
                                            <a href="product-default.html" class="rating-reviews">(5 reviews)</a>
                                        </div>
                                        <div class="product-pa-wrapper">
                                            <div class="product-price">
                                                <ins class="new-price">$480.00</ins><del
                                                    class="old-price">$534.00</del>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide product">
                                    <figure class="product-media">
                                        <a href="product-default.html">
                                            <img src="assets/images/products/default/3.jpg" alt="Product"
                                                width="300" height="338" />
                                        </a>
                                        <div class="product-action-vertical">
                                            <a href="#" class="btn-product-icon btn-cart w-icon-cart"
                                                title="Add to cart"></a>
                                            <a href="#" class="btn-product-icon btn-wishlist w-icon-heart"
                                                title="Add to wishlist"></a>
                                            <a href="#" class="btn-product-icon btn-compare w-icon-compare"
                                                title="Add to Compare"></a>
                                        </div>
                                        <div class="product-action">
                                            <a href="#" class="btn-product btn-quickview" title="Quick View">Quick
                                                View</a>
                                        </div>
                                    </figure>
                                    <div class="product-details">
                                        <div class="product-cat"><a href="shop-banner-sidebar.html">Sports</a></div>
                                        <h4 class="product-name"><a href="product-default.html">Skate Pan</a></h4>
                                        <div class="ratings-container">
                                            <div class="ratings-full">
                                                <span class="ratings" style="width: 100%;"></span>
                                                <span class="tooltiptext tooltip-top"></span>
                                            </div>
                                            <a href="product-default.html" class="rating-reviews">(3 reviews)</a>
                                        </div>
                                        <div class="product-pa-wrapper">
                                            <div class="product-price">
                                                <ins class="new-price">$278.00</ins><del
                                                    class="old-price">$310.00</del>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide product">
                                    <figure class="product-media">
                                        <a href="product-default.html">
                                            <img src="assets/images/products/default/4-1.jpg" alt="Product"
                                                width="300" height="338" />
                                            <img src="assets/images/products/default/4-2.jpg" alt="Product"
                                                width="300" height="338" />
                                        </a>
                                        <div class="product-action-vertical">
                                            <a href="#" class="btn-product-icon btn-cart w-icon-cart"
                                                title="Add to cart"></a>
                                            <a href="#" class="btn-product-icon btn-wishlist w-icon-heart"
                                                title="Add to wishlist"></a>
                                            <a href="#" class="btn-product-icon btn-compare w-icon-compare"
                                                title="Add to Compare"></a>
                                        </div>
                                        <div class="product-action">
                                            <a href="#" class="btn-product btn-quickview" title="Quick View">Quick
                                                View</a>
                                        </div>
                                    </figure>
                                    <div class="product-details">
                                        <div class="product-cat"><a href="shop-banner-sidebar.html">Accessories</a>
                                        </div>
                                        <h4 class="product-name"><a href="product-default.html">Clip Attachment</a>
                                        </h4>
                                        <div class="ratings-container">
                                            <div class="ratings-full">
                                                <span class="ratings" style="width: 100%;"></span>
                                                <span class="tooltiptext tooltip-top"></span>
                                            </div>
                                            <a href="product-default.html" class="rating-reviews">(5 reviews)</a>
                                        </div>
                                        <div class="product-pa-wrapper">
                                            <div class="product-price">$40.00</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                    <section class="related-product-section">
                        <div class="title-link-wrapper mb-4">
                            <h4 class="title">Related Products</h4>
                            <a href="#" class="btn btn-dark btn-link btn-slide-right btn-icon-right">More
                                Products<i class="w-icon-long-arrow-right"></i></a>
                        </div>
                        <div class="swiper-container swiper-theme" data-swiper-options="{
                            'spaceBetween': 20,
                            'slidesPerView': 2,
                            'breakpoints': {
                                '576': {
                                    'slidesPerView': 3
                                },
                                '768': {
                                    'slidesPerView': 4
                                },
                                '992': {
                                    'slidesPerView': 4
                                }
                            }
                        }">
                            <div class="swiper-wrapper row cols-lg-3 cols-md-4 cols-sm-3 cols-2">
                                <div class="swiper-slide product">
                                    <figure class="product-media">
                                        <a href="product-default.html">
                                            <img src="assets/images/products/default/5.jpg" alt="Product"
                                                width="300" height="338" />
                                        </a>
                                        <div class="product-action-vertical">
                                            <a href="#" class="btn-product-icon btn-cart w-icon-cart"
                                                title="Add to cart"></a>
                                            <a href="#" class="btn-product-icon btn-wishlist w-icon-heart"
                                                title="Add to wishlist"></a>
                                            <a href="#" class="btn-product-icon btn-compare w-icon-compare"
                                                title="Add to Compare"></a>
                                        </div>
                                        <div class="product-action">
                                            <a href="#" class="btn-product btn-quickview" title="Quick View">Quick
                                                View</a>
                                        </div>
                                    </figure>
                                    <div class="product-details">
                                        <h4 class="product-name"><a href="product-default.html">Drone</a></h4>
                                        <div class="ratings-container">
                                            <div class="ratings-full">
                                                <span class="ratings" style="width: 100%;"></span>
                                                <span class="tooltiptext tooltip-top"></span>
                                            </div>
                                            <a href="product-default.html" class="rating-reviews">(3 reviews)</a>
                                        </div>
                                        <div class="product-pa-wrapper">
                                            <div class="product-price">$632.00</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide product">
                                    <figure class="product-media">
                                        <a href="product-default.html">
                                            <img src="assets/images/products/default/6.jpg" alt="Product"
                                                width="300" height="338" />
                                        </a>
                                        <div class="product-action-vertical">
                                            <a href="#" class="btn-product-icon btn-cart w-icon-cart"
                                                title="Add to cart"></a>
                                            <a href="#" class="btn-product-icon btn-wishlist w-icon-heart"
                                                title="Add to wishlist"></a>
                                            <a href="#" class="btn-product-icon btn-compare w-icon-compare"
                                                title="Add to Compare"></a>
                                        </div>
                                        <div class="product-action">
                                            <a href="#" class="btn-product btn-quickview" title="Quick View">Quick
                                                View</a>
                                        </div>
                                    </figure>
                                    <div class="product-details">
                                        <h4 class="product-name"><a href="product-default.html">Official Camera</a>
                                        </h4>
                                        <div class="ratings-container">
                                            <div class="ratings-full">
                                                <span class="ratings" style="width: 100%;"></span>
                                                <span class="tooltiptext tooltip-top"></span>
                                            </div>
                                            <a href="product-default.html" class="rating-reviews">(3 reviews)</a>
                                        </div>
                                        <div class="product-pa-wrapper">
                                            <div class="product-price">
                                                <ins class="new-price">$263.00</ins><del
                                                    class="old-price">$300.00</del>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide product">
                                    <figure class="product-media">
                                        <a href="product-default.html">
                                            <img src="assets/images/products/default/7-1.jpg" alt="Product"
                                                width="300" height="338" />
                                            <img src="assets/images/products/default/7-2.jpg" alt="Product"
                                                width="300" height="338" />
                                        </a>
                                        <div class="product-action-vertical">
                                            <a href="#" class="btn-product-icon btn-cart w-icon-cart"
                                                title="Add to cart"></a>
                                            <a href="#" class="btn-product-icon btn-wishlist w-icon-heart"
                                                title="Add to wishlist"></a>
                                            <a href="#" class="btn-product-icon btn-compare w-icon-compare"
                                                title="Add to Compare"></a>
                                        </div>
                                        <div class="product-action">
                                            <a href="#" class="btn-product btn-quickview" title="Quick View">Quick
                                                View</a>
                                        </div>
                                    </figure>
                                    <div class="product-details">
                                        <h4 class="product-name"><a href="product-default.html">Phone Charge Pad</a>
                                        </h4>
                                        <div class="ratings-container">
                                            <div class="ratings-full">
                                                <span class="ratings" style="width: 80%;"></span>
                                                <span class="tooltiptext tooltip-top"></span>
                                            </div>
                                            <a href="product-default.html" class="rating-reviews">(8 reviews)</a>
                                        </div>
                                        <div class="product-pa-wrapper">
                                            <div class="product-price">$23.00</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide product">
                                    <figure class="product-media">
                                        <a href="product-default.html">
                                            <img src="assets/images/products/default/8.jpg" alt="Product"
                                                width="300" height="338" />
                                        </a>
                                        <div class="product-action-vertical">
                                            <a href="#" class="btn-product-icon btn-cart w-icon-cart"
                                                title="Add to cart"></a>
                                            <a href="#" class="btn-product-icon btn-wishlist w-icon-heart"
                                                title="Add to wishlist"></a>
                                            <a href="#" class="btn-product-icon btn-compare w-icon-compare"
                                                title="Add to Compare"></a>
                                        </div>
                                        <div class="product-action">
                                            <a href="#" class="btn-product btn-quickview" title="Quick View">Quick
                                                View</a>
                                        </div>
                                    </figure>
                                    <div class="product-details">
                                        <h4 class="product-name"><a href="product-default.html">Fashionalble
                                                Pencil</a></h4>
                                        <div class="ratings-container">
                                            <div class="ratings-full">
                                                <span class="ratings" style="width: 100%;"></span>
                                                <span class="tooltiptext tooltip-top"></span>
                                            </div>
                                            <a href="product-default.html" class="rating-reviews">(9 reviews)</a>
                                        </div>
                                        <div class="product-pa-wrapper">
                                            <div class="product-price">$50.00</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                </div>
            </div>
            <!-- End of Page Content -->
        </main>
        <!-- End of Main -->
@endsection
