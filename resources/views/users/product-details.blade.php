@extends('layouts.master')
@section('content')
<!-- breadcrumb-area start -->
    <div class="breadcrumb-area">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <!-- breadcrumb-list start -->
                    <ul class="breadcrumb-list">
                        <li class="breadcrumb-item"><a href="index.html">خانه</a></li>
                        <li class="breadcrumb-item active">جزئیات محص.ل</li>
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
            <div class="row single-product-area product-details-inner">
                <div class="col-lg-5 col-md-6">
                    <!-- Product Details Left -->
                    <div class="product-large-slider">
                        <div class="pro-large-img img-zoom">
                            <img src="assets/images/product/details-04-600x600.jpg" alt="product-details" />
                            <a href="assets/images/product/details-04-600x600.jpg" data-fancybox="images"><i class="fa fa-search"></i></a>
                        </div>
                    </div>
                    <div class="product-nav">
                        <div class="pro-nav-thumb">
                            <img src="assets/images/product/04-150x150.jpg" alt="product-details" />
                        </div>
                    </div>
                    <!--// Product Details Left -->
                </div>

                <div class="col-lg-7 col-md-6">
                    <div class="product-details-view-content">
                        <div class="product-info">
                            <h3>نام محصول</h3>
                            <div class="product-rating d-flex">
                                <a href="#reviews">(<span class="count">1</span> دیدگاه)</a>
                            </div>
                            <div class="price-box">
                                <span class="new-price">89000 تومان</span>
                                <span class="old-price">99000 تومان</span>
                            </div>
                            <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و برای شرایط فعلی تکنو</p>

                            <div class="single-add-to-cart">
                                <form action="#" class="cart-quantity d-flex">
                                    <button class="add-to-cart" type="submit"> افزودن به سبد</button>
                                </form>
                            </div>
                            <ul class="stock-cont">
                                <li class="product-sku">تعداد در بسته:  <span>10</span></li>
                                <li class="product-stock-status">دسته‌بندی : <a href="#">مواد پروتئینی</a></li>
                            </ul>
                            <div class="share-product-socail-area">
                                <p>این محصول را به اشتراک بگذارید</p>
                                <ul class="single-product-share">
                                    <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                                    <li><a href="#"><i class="fa fa-telegram"></i></a></li>
                                    <li><a href="#"><i class="fa fa-mail-forward"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="product-description-area section-pt">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="product-details-tab">
                            <ul role="tablist" class="nav">
                                <li class="active" role="presentation">
                                    <a data-toggle="tab" role="tab" href="#description" class="active">توضیحات</a>
                                </li>
                                <li role="presentation">
                                    <a data-toggle="tab" role="tab" href="#reviews">دیدگاه مشتریان</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="product_details_tab_content tab-content">
                            <!-- Start Single Content -->
                            <div class="product_tab_content tab-pane active" id="description" role="tabpanel">
                                <div class="product_description_wrap  mt-30">
                                    <div class="product_desc mb-30">
                                        <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و برای شرایط فعلی تکنولوژی مورد نیاز و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد. کتابهای زیادی در شصت و سه درصد گذشته، حال و آینده شناخت فراوان جامعه و متخصصان را می طلبد تا با نرم افزارها شناخت بیشتری را برای طراحان رایانه ای علی الخصوص طراحان خلاقی و فرهنگ پیشرو در زبان فارسی ایجاد کرد. در این صورت می توان امید داشت که تمام و دشواری موجود در ارائه راهکارها و شرایط سخت تایپ به پایان رسد وزمان مورد نیاز شامل حروفچینی دستاوردهای اصلی و جوابگوی سوالات پیوسته اهل دنیای موجود طراحی اساسا مورد استفاده قرار گیرد.</p>
                                    </div>

                                </div>
                            </div>
                            <!-- End Single Content -->
                            <!-- Start Single Content -->
                            <div class="product_tab_content tab-pane" id="reviews" role="tabpanel">
                                <div class="review_address_inner mt-30">
                                    <!-- Start Single Review -->
                                    <div class="pro_review">
                                        <div class="review_thumb">
                                            <i class="fa fa-user-o"></i>
                                        </div>
                                        <div class="review_details">
                                            <div class="review_info mb-10">
                                                <h5>نیلوفر- <span>27 اردیبهشت 1398</span></h5>
                                            </div>
                                            <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و برای شرایط فعلی تکنولوژی مورد نیاز</p>
                                        </div>
                                    </div>
                                    <!-- End Single Review -->
                                </div>
                                <!-- Start RAting Area -->
                                <div class="rating_wrap mt-50">
                                    <h5 class="rating-title-1">دیدگاه خود را بیان کنید </h5>
                                    <p>آدرس ایمیل شما منتشر نخواهد شد. فیلدهای مورد نیاز علامت گذاری شده اند *</p>
                                    <h6 class="rating-title-2">امتیاز</h6>
                                </div>
                                <!-- End RAting Area -->
                                <div class="comments-area comments-reply-area">
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <form action="#" class="comment-form-area">
                                                <div class="row comment-input">
                                                    <div class="col-md-6 comment-form-author mt-15">
                                                        <label>نام و نام خانوادگی <span class="required">*</span></label>
                                                        <input type="text" required="required" name="Name">
                                                    </div>
                                                    <div class="col-md-6 comment-form-email mt-15">
                                                        <label>ایمیل <span class="required">*</span></label>
                                                        <input type="text" required="required" name="email">
                                                    </div>
                                                </div>
                                                <div class="comment-form-comment mt-15">
                                                    <label>متن پیام</label>
                                                    <textarea class="comment-notes" required="required"></textarea>
                                                </div>
                                                <div class="comment-form-submit mt-15">
                                                    <input type="submit" value="ارسال پیام" class="comment-submit">
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- End Single Content -->
                        </div>
                    </div>
                </div>
            </div>

            <div class="related-product-area section-pt ltr">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="section-title">
                            <h3> محصولات مرتبط</h3>
                        </div>
                    </div>
                </div>
                <div class="row row-8 product-row-6-active">
                    <div class="product-col">
                        <!-- Single Product Start -->
                        <div class="single-product-wrap mt-10">
                            <div class="product-image">
                                <a href="product-details.html"><img src="assets/images/product/product-01.jpg" alt=""></a>
                                <span class="onsale">فروش ویژه</span>
                            </div>
                            <div class="product-button">
                                <a href="wishlist.html" class="add-to-wishlist"><i class="icon-heart"></i></a>
                            </div>
                            <div class="product-content">
                                <div class="price-box">
                                    <span class="new-price">89000 تومان</span>
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

            <div class="related-product-area section-pt">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="section-title">
                            <h3>محصولات ویژه</h3>
                        </div>
                    </div>
                </div>
                <div class="row row-8 product-row-6-active">
                    <div class="product-col">
                        <!-- Single Product Start -->
                        <div class="single-product-wrap mt-10">
                            <div class="product-image">
                                <a href="product-details.html"><img src="assets/images/product/product-15.jpg" alt=""></a>
                                <span class="onsale">فروش!</span>
                            </div>
                            <div class="product-button">
                                <a href="wishlist.html" class="add-to-wishlist"><i class="icon-heart"></i></a>
                            </div>
                            <div class="product-content">
                                <div class="price-box">
                                    <span class="new-price">14000 تومان - 19000 تومان</span>
                                </div>
                                <h6 class="product-name"><a href="product-details.html">محصول</a></h6>

                                <div class="product-button-action">
                                    <a href="#" class="add-to-cart">افزدون به سبد خرید</a>
                                </div>
                            </div>
                        </div>
                        <!-- Single Product End -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- main-content-wrap end -->
@endsection
@section('script')
@endsection
