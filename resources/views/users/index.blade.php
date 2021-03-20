
@extends('layouts.master')
@section('content')
    <!-- Hero Section Start -->
    <div class="hero-slider-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    <div class="categories-menu-wrap mt-30">
                        <div class="categories_menu">
                            <div class="categories_title">
                                <h5 class="categori_toggle">دسته بندی ها</h5>
                            </div>
                            <div class="categories_menu_toggle">
                                    <ul>
                                        @foreach($categories=App\Models\Category::where('parent_id',null)->get() as $cat)
                                            @if( $cat->parent_id == null )
                                                <li><a href="{{route('category.index',['id'=>$cat])}}">{{$cat->name}}<i class="fa fa-angle-left"></i></a>
                                                    @if(!$cat->children->isEmpty())
                                                        <ul class="categories_mega_menu">
                                                            @include('users.partials.menu',['categories'=>$cat->childrenRecursive, 'level'=>1])
                                                        </ul>
                                                    @endif
                                                </li>
                                            @endif
                                        @endforeach
                                    </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-9">
                    <div class="hero-slider-wrapper mt-30">
                        <!-- Hero Slider Start -->
                        <div class="hero-slider-area hero-slider-one">
                            <div class="swiper-container gallery-top">
                                <div class="swiper-wrapper">
                                    @foreach($slides as $slide)
                                        @foreach($slide->photos as $photo)
                                            @foreach($products as $product)
                                    <div class="swiper-slide" style="background-image:url({{$photo->path}})">
                                        <div class="hero-content-one">
                                            <div class="slider-content-text">
                                                <h2 style="color: #1f1f1f;">{{$slide->title}} <br>{{$slide->description}}</h2>
                                                <div class="slider-btn">
                                                    <a href="{{route('cart.add',$product->id)}}">خرید کن</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                            @endforeach
                                        @endforeach
                                    @endforeach
                                </div>
                                <div class="swiper-pagination"></div>
                            </div>
                            <div class="swiper-container gallery-thumbs">
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide">
                                        <div class="slider-thum-text"><span>سوپر مارکت</span></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Hero Slider End -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Hero Section End -->


    <!-- Categories Item Warap Start -->
    <div class="categories-item-warap section-pt-30 section-pb">
        <div class="container">
            <div class="row">
                <div class="col-lg-2 col-md-4 col-sm-4 col-6">
                    <!-- single-categories-item Start -->
                    <div class="single-categories-item mt-30">
                        <div class="cat-item-image">
                            <a href="#"><img src="assets/images/category/category-thumb-1.jpg" alt=""></a>
                        </div>
                        <div class="categories-title">
                            <h6><a href="#">سبزیجات</a></h6>
                            <p>11 محصول</p>
                        </div>
                    </div>
                    <!-- single-categories-item End -->
                </div>
            </div>
        </div>
    </div>
    <!-- Categories Item Warap End -->

    <!-- Banner Area Start -->
    <div class="banner-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6">
                    <div class="single-banner mb-30">
                        <a href="#"><img src="assets/images/banner/banner-01.jpg" alt=""></a>
                    </div>
                </div>
                <div class="col-lg-6  col-md-6">
                    <div class="single-banner mb-30">
                        <a href="#"><img src="assets/images/banner/banner-02.jpg" alt=""></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Banner Area End -->

    <!-- Product Area Start -->
    <div class="product-area section-pt-30">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6">
                    <!-- Section Title Start -->
                    <div class="section-title">
                        <h3>کالاهای موجود در فروشگاه</h3>
                    </div>
                    <!-- Section Title End -->
                </div>
            </div>
            <div class="row row-8 product-two-row-4">
                <div class="product-col">
                    <!-- Single Product Start -->
                    <div class="single-product-wrap mt-10">
                        <div class="product-image">
                            <a href="product-details.html"><img src="assets/images/product/product-15.jpg" alt=""></a>
                            <span class="onsale">فروش ویژه!</span>
                        </div>
                        <div class="product-button">
                            <a href="wishlist.html" class="add-to-wishlist"><i class="icon-heart"></i></a>
                        </div>
                        <div class="product-content">
                            <div class="price-box">
                                <span class="new-price">49000 تومان</span>
                                <span class="old-price">89000 تومان</span>
                            </div>
                            <h6 class="product-name"><a href="product-details.html">سالاد ماکارونی</a></h6>
                            <div class="product-button-action">
                                <a href="#" class="add-to-cart">افزودن به سبد</a>
                            </div>
                        </div>
                    </div>
                    <!-- Single Product End -->
                </div>
            </div>

        </div>
    </div>
    <!-- Product Area Start -->

    <!-- Deals Off Area Start -->
    <div class="deals-offer-area section-pt-100 section-pb-40 dealis-offer-bg">
        <div class="container">
            <div class="row">
                <div class="col-xl-2 col-lg-3 col-md-4">
                    <div class="deals-offer-title mb-20">
                        <h2>تخفیفات این هفته</h2>
                    </div>
                </div>
                <div class="col-xl-10 col-lg-9 col-md-8">
                    <div class="row row-8 product-active-lg-4 ltr">
                        <div class="product-col">
                            <!-- Single Product Start -->
                            <div class="single-product-wrap mt-30">
                                <div class="product-image">
                                    <a href="product-details.html"><img src="assets/images/product/product-04.jpg" alt=""></a>
                                    <span class="onsale">فروش ویژه!</span>

                                    <!-- countdown start -->
                                    <div class="countdown-deals" data-countdown="2020/03/01"></div>
                                    <!-- countdown end -->
                                </div>
                                <div class="product-content">
                                    <div class="price-box">
                                        <span class="new-price">49000 تومان</span>
                                        <span class="old-price">89000 تومان</span>
                                    </div>
                                    <h6 class="product-name"><a href="product-details.html">سالاد ماکارونی</a></h6>
                                    <div class="product-button-action">
                                        <a href="#" class="add-to-cart">افزودن به سبد</a>
                                    </div>
                                </div>
                            </div>
                            <!-- Single Product End -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Deals Off Area End -->

    <!-- Product Area Start -->
    <div class="product-area section-pt">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6">
                    <!-- Section Title Start -->
                    <div class="section-title">
                        <h3>فروش مرکبات</h3>
                    </div>
                    <!-- Section Title End -->
                </div>
                <div class="col-lg-6 col-md-6">
                    <div class="tabs-categorys-list">
                        <ul class="nav menu-tabs" role="tablist">
                            <li class="active"><a class="active" href="#earrings" role="tab" data-toggle="tab">لبنیات</a></li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="product-wrapper-four ltr">
                <div class="tab-content">
                    <div class="tab-pane active" id="earrings">
                        <div class="row row-8 product-row-6-active">
                            <div class="product-col">
                                <!-- Single Product Start -->
                                <div class="single-product-wrap mt-10">
                                    <div class="product-image">
                                        <a href="product-details.html"><img src="assets/images/product/product-01.jpg" alt=""></a>
                                        <span class="onsale">فروش ویژه!</span>
                                    </div>
                                    <div class="product-button">
                                        <a href="wishlist.html" class="add-to-wishlist"><i class="icon-heart"></i></a>
                                    </div>
                                    <div class="product-content">
                                        <div class="price-box">
                                            <span class="new-price">49000 تومان</span>
                                            <span class="old-price">89000 تومان</span>
                                        </div>
                                        <h6 class="product-name"><a href="product-details.html">سالاد ماکارونی</a></h6>

                                        <div class="product-button-action">
                                            <a href="#" class="add-to-cart">افزودن به سبد</a>
                                        </div>
                                    </div>
                                </div>
                                <!-- Single Product End -->
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane" id="necklaces">
                        <div class="row row-8 product-row-6-active">
                            <div class="product-col">
                                <!-- Single Product Start -->
                                <div class="single-product-wrap mt-10">
                                    <div class="product-image">
                                        <a href="product-details.html"><img src="assets/images/product/product-01.jpg" alt=""></a>
                                        <span class="onsale">فروش ویژه!</span>
                                    </div>
                                    <div class="product-button">
                                        <a href="wishlist.html" class="add-to-wishlist"><i class="icon-heart"></i></a>
                                    </div>
                                    <div class="product-content">
                                        <div class="price-box">
                                            <span class="new-price">49000 تومان</span>
                                            <span class="old-price">89000 تومان</span>
                                        </div>
                                        <h6 class="product-name"><a href="product-details.html">سالاد ماکارونی</a></h6>

                                        <div class="product-button-action">
                                            <a href="#" class="add-to-cart">افزودن به سبد</a>
                                        </div>
                                    </div>
                                </div>
                                <!-- Single Product End -->
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane" id="bracelets">
                        <div class="row row-8 product-row-6-active">
                            <div class="product-col">
                                <!-- Single Product Start -->
                                <div class="single-product-wrap mt-10">
                                    <div class="product-image">
                                        <a href="product-details.html"><img src="assets/images/product/product-01.jpg" alt=""></a>
                                        <span class="onsale">فروش ویژه!</span>
                                    </div>
                                    <div class="product-button">
                                        <a href="wishlist.html" class="add-to-wishlist"><i class="icon-heart"></i></a>
                                    </div>
                                    <div class="product-content">
                                        <div class="price-box">
                                            <span class="new-price">49000 تومان</span>
                                            <span class="old-price">89000 تومان</span>
                                        </div>
                                        <h6 class="product-name"><a href="product-details.html">سالاد ماکارونی</a></h6>

                                        <div class="product-button-action">
                                            <a href="#" class="add-to-cart">افزودن به سبد</a>
                                        </div>
                                    </div>
                                </div>
                                <!-- Single Product End -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <!-- Product Area Start -->

    <!-- Banner Area Start -->
    <div class="banner-area section-pb-30">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6">
                    <div class="single-banner mb-30">
                        <a href="#"><img src="assets/images/banner/banner-03.jpg" alt=""></a>
                    </div>
                </div>
                <div class="col-lg-6  col-md-6">
                    <div class="single-banner mb-30">
                        <a href="#"><img src="assets/images/banner/banner-04.jpg" alt=""></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Banner Area End -->

    <!-- Testimonials Area Start -->
    <div class="testimonials-area section-pt-100 section-pb-100 testimonial-bg">
        <div class="container">
            <div class="row testimonial-slider">
                <div class="col-lg-4">
                    <div class="testimonial-wrap">
                        <div class="quote-container">
                            <div class="quote-image">
                                <img src="assets/images/testimonial/testimonial-01.jpg" alt="">
                            </div>
                            <div class="author">
                                <ul>
                                    <li class="name">جنیفر</li>
                                    <li class="title">مشتری</li>
                                </ul>
                            </div>
                            <div class="testimonials-text">
                                <p>پشتیبانی عالی بود،و به من کمک کرد  تا با چندین مسئله که با اون مشکل داشتم، تقریبا همان روز را حل کنم.لذت بردم!</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="testimonial-wrap">
                        <div class="quote-container">
                            <div class="quote-image">
                                <img src="assets/images/testimonial/testimonial-02.jpg" alt="">
                            </div>
                            <div class="author">
                                <ul>
                                    <li class="name">جنیفر</li>
                                    <li class="title">مشتری</li>
                                </ul>
                            </div>
                            <div class="testimonials-text">
                                <p>پشتیبانی عالی بود،و به من کمک کرد  تا با چندین مسئله که با اون مشکل داشتم، تقریبا همان روز را حل کنم.لذت بردم!</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Testimonials Area End -->

    <!-- Product Area Start -->
    <div class="product-area section-pt">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <!-- Section Title Start -->
                    <div class="section-title">
                        <h3>محصولات پربازدید اخیر</h3>
                    </div>
                    <!-- Section Title End -->
                </div>
            </div>

            <div class="product-wrapper-four ltr">
                <div class="row row-8 product-row-6-active">
                    <div class="product-col">
                        <!-- Single Product Start -->
                        <div class="single-product-wrap mt-10">
                            <div class="product-image">
                                <a href="product-details.html"><img src="assets/images/product/product-01.jpg" alt=""></a>
                                <span class="onsale">فروش ویژه!</span>
                            </div>
                            <div class="product-button">
                                <a href="wishlist.html" class="add-to-wishlist"><i class="icon-heart"></i></a>
                            </div>
                            <div class="product-content">
                                <div class="price-box">
                                    <span class="new-price">49000 تومان</span>
                                    <span class="old-price">89000 تومان</span>
                                </div>
                                <h6 class="product-name"><a href="product-details.html">سالاد ماکارونی</a></h6>

                                <div class="product-button-action">
                                    <a href="#" class="add-to-cart">افزودن به سبد</a>
                                </div>
                            </div>
                        </div>
                        <!-- Single Product End -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Product Area Start -->
@endsection
@section('script')
    @endsection
