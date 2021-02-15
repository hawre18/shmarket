@extends('layouts.master')
@section('content')
<!-- breadcrumb-area start -->
        <div class="breadcrumb-area">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <!-- breadcrumb-list start -->
                        <ul class="breadcrumb-list">
                            <li class="breadcrumb-item"><a href="index.html">صفحه اصلی </a></li>
                            <li class="breadcrumb-item active">فروشگاه</li>
                        </ul>
                        <!-- breadcrumb-list end -->
                    </div>
                </div>
            </div>
        </div>
        <!-- breadcrumb-area end -->


        <!-- main-content-wrap start -->
        <div class="main-content-wrap shop-page section-ptb">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 order-lg-1 order-2">
                        <!-- shop-sidebar-wrap start -->
                        <div class="shop-sidebar-wrap">
                            <div class="shop-box-area">
                                <!-- shop-sidebar start -->
                                <div class="shop-sidebar mb-30">
                                    <h4 class="title">جستجو بر اساس قیمت</h4>
                                    <!-- filter-price-content start -->
                                    <div class="filter-price-content">
                                        <form action="#" method="post">
                                            <div id="price-slider" class="price-slider"></div>
                                            <div class="filter-price-wapper">
                                                <a class="add-to-cart-button" href="#">
                                                    <span>فیلتر جستجو</span>
                                                </a>
                                                <div class="filter-price-cont">
                                                    <span>قیمت:</span>
                                                    <div class="input-type">
                                                        <input type="text" id="min-price" readonly="" />
                                                    </div>
                                                    <span>—</span>
                                                    <div class="input-type">
                                                        <input type="text" id="max-price" readonly="" />
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                    <!-- filter-price-content end -->
                                </div>
                                <!-- shop-sidebar end -->
                            </div>
                        </div>
                        <!-- shop-sidebar-wrap end -->
                    </div>
                    <div class="col-lg-9 order-lg-2 order-1">

                        <div class="shop-banner mb-30">
                            <img src="assets/images/bg/shop-catergorypage.jpg" alt="Shop banner">
                        </div>

                        <!-- shop-product-wrapper start -->
                        <div class="shop-product-wrapper">
                            <div class="row align-itmes-center">
                                <div class="col">
                                    <!-- shop-top-bar start -->
                                    <div class="shop-top-bar">
                                        <!-- product-view-mode start -->

                                        <div class="product-mode">
                                            <!--shop-item-filter-list-->
                                            <ul class="nav shop-item-filter-list" role="tablist">
                                                <li><a class="active grid-view" data-toggle="tab" href="#grid"><i class="ion-ios-keypad-outline"></i></a></li>
                                                <li class="active"><a class=" list-view" data-toggle="tab" href="#list"><i class="ion-ios-list-outline"></i></a></li>
                                            </ul>
                                            <!-- shop-item-filter-list end -->
                                        </div>
                                        <!-- product-view-mode end -->
                                        <!-- product-short start -->
                                        <div class="product-short">
                                            <p>مرتب‌ سازی بر اساس :</p>
                                            <select class="nice-select" name="sortby">
                                                <option value="trending">پرفروش‌ ترین‌</option>
                                                <option value="sales">محبوب‌ترین</option>
                                                <option value="sales">جدیدترین</option>
                                                <option value="rating">ارزان‌ترین</option>
                                                <option value="date">گران‌ترین</option>
                                                <option value="date">سریع‌ترین ارسال</option>
                                            </select>
                                        </div>
                                        <!-- product-short end -->
                                    </div>
                                    <!-- shop-top-bar end -->
                                </div>
                            </div>
                            <!-- shop-products-wrap start -->
                            <div class="shop-products-wrap">
                                <div class="tab-content">
                                    <div class="tab-pane active" id="grid">
                                        <div class="shop-product-wrap">
                                            <div class="row row-8">
                                                <div class="product-col col-lg-3 col-md-4 col-sm-6">
                                                    <!-- Single Product Start -->
                                                    <div class="single-product-wrap mt-10">
                                                        <div class="product-image">
                                                            <a href="product-details.html"><img src="assets/images/product/product-01.jpg" alt=""></a>
                                                            <span class="onsale">فروش ویژه !</span>
                                                        </div>
                                                        <div class="product-button">
                                                            <a href="wishlist.html" class="add-to-wishlist"><i class="icon-heart"></i></a>
                                                        </div>
                                                        <div class="product-content">
                                                            <div class="price-box">
                                                                <span class="new-price">89000 تومان</span>
                                                            </div>
                                                            <h6 class="product-name"><a href="product-details.html">سوپ اکسپرس  </a></h6>

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
                                    <div class="tab-pane" id="list">
                                        <div class="shop-product-list-wrap">
                                            <div class="row product-layout-list">
                                                <div class="col-lg-3 col-md-3">
                                                    <!-- single-product-wrap start -->
                                                    <div class="single-product">
                                                        <div class="product-image">
                                                            <a href="product-details.html"><img src="assets/images/product/product-14.jpg" alt="Produce Images"></a>
                                                        </div>
                                                    </div>
                                                    <!-- single-product-wrap end -->
                                                </div>
                                                <div class="col-lg-6 col-md-6">
                                                    <div class="product-content-list text-left">
                                                        <div class="price-box">
                                                            <span class="new-price"> 49000 تومان – 89000 تومان	</span>
                                                        </div>
                                                        <p><a href="product-details.html" class="product-name">نام محصول</a></p>
                                                        <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و برای شرایط فعلی تکنولوژی مورد نیاز و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد.</p>
                                                    </div>
                                                </div>

                                                <div class="col-lg-3 col-md-3">
                                                    <div class="block2">
                                                        <ul class="stock-cont">
                                                            <li class="product-stock-status">فروش ویژه</li>
                                                        </ul>
                                                        <div class="product-button">
                                                            <div class="add-to-cart">
                                                                <div class="product-button-action">
                                                                    <a href="#" class="add-to-cart">افزودن به سبد</a>
                                                                </div>
                                                            </div>
                                                            <ul class="actions">
                                                                <li class="add-to-wishlist">
                                                                    <a href="wishlist.html" class="add_to_wishlist"><i class="icon-heart"></i> افزودن به لیست دلخواه</a>
                                                                </li>
                                                                <li class="add-to-مقایسه کنید">
                                                                    <div class="مقایسه کنید-button"><a><i class="icon-sliders"></i> مقایسه کنید</a></div>
                                                                </li>
                                                                <li class="quickviewbtn">
                                                                    <a class="detail-link quickview" href="#"> <i class="icon-eye2"></i> مشاهده کالا</a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- shop-products-wrap end -->

                            <!-- paginatoin-area start -->
                            <div class="paginatoin-area">
                                <div class="row">
                                    <div class="col-lg-12 col-md-12">
                                        <ul class="pagination-box">
                                            <li class="active"><a href="#">1</a></li>
                                            <li><a href="#">2</a></li>
                                            <li><a href="#">3</a></li>
                                            <li>
                                                <a class="Next" href="#">بعدی</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <!-- paginatoin-area end -->
                        </div>
                        <!-- shop-product-wrapper end -->
                    </div>
                </div>
            </div>
        </div>
        <!-- main-content-wrap end -->
        @endsection
        @section('script')
        @endsection
