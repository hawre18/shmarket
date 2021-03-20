@extends('layouts.master')
@section('content')
    <div class="breadcrumb-area">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <!-- breadcrumb-list start -->
                    <ul class="breadcrumb-list">
                        <li class="breadcrumb-item"><a href="{{route('home')}}">خانه</a></li>
                        <li class="breadcrumb-item active">جزئیات محصول {{$product->title}}</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="main-content-wrap shop-page section-ptb">
        <div class="container">
            <div class="row single-product-area product-details-inner">
                <div class="col-lg-5 col-md-6">
                    <div class="product-large-slider">
                        <div class="pro-large-img img-zoom">
                            <img src="{{$product->photos[0]->path}}" alt="product-details" />
                            <a href="{{$product->photos[0]->path}}" data-fancybox="images"><i class="fa fa-search"></i></a>
                        </div>
                    </div>
                    <div class="product-nav">
                        @foreach($product->photos as $photo)
                        <div class="pro-nav-thumb">
                            <img src="{{$photo->path}}" alt="product-details" />
                        </div>
                        @endforeach
                    </div>
                </div>

                <div class="col-lg-7 col-md-6">
                    <div class="product-details-view-content">
                        <div class="product-info">
                            <h3>{{$product->title}}</h3>
                            <div class="product-rating d-flex">
                                <a href="#reviews">(<span class="count">1</span> دیدگاه)</a>
                            </div>
                            <div class="price-box">
                                @if(!$product->discount_price==null)
                                <span class="new-price">{{$product->discount_price}} تومان</span>
                                <span class="old-price">{{$product->price}} تومان</span>
                                @else
                                    <span class="new-price">{{$product->price}} تومان</span>
                                @endif
                            </div>
                            <p>{!! $product->short_description !!}</p>
                            <div class="single-add-to-cart">
                                    <a href="{{route('cart.add',['id'=>$product->id])}}" class="add-to-cart" type="submit"> افزودن به سبد</a>
                            </div>
                            <ul class="stock-cont">
                                @foreach($product->attributeValues as $attribute)
                                <li class="product-sku">{{$attribute->attributeGroup->title}}:  <span>{{$attribute->title}}</span></li>
                                @endforeach
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
                            <div class="product_tab_content tab-pane active" id="description" role="tabpanel">
                                <div class="product_description_wrap  mt-30">
                                    <div class="product_desc mb-30">
                                        <p>{!! $product->long_description !!}</p>
                                    </div>
                                </div>
                            </div>
                            <div class="product_tab_content tab-pane" id="reviews" role="tabpanel">
                                <div class="review_address_inner mt-30">
                                    <div class="pro_review">
                                        <div class="review_thumb">
                                            <i class="fa fa-user-o"></i>
                                        </div>
                                        @foreach($commentsProduct as $comments)
                                        <div class="review_details">
                                            <div class="review_info mb-10">
                                                <h5>{{$comments->user['name'].' '.$comments->user['last_name']}}<strong class="pull-left">{{\Hekmatinasser\Verta\Verta::instance($comments->created_at)->formatDifference(\Hekmatinasser\Verta\Verta::today('Asia/Tehran'))}}</strong></h5>
                                            </div>
                                            <p>{{$comments->description}}</p>
                                        </div>
                                        @endforeach
                                    </div>
                                </div>
                                <div class="rating_wrap mt-50">
                                    <h5 class="rating-title-1">دیدگاه خود را بیان کنید </h5>
                                    <p>آدرس ایمیل شما منتشر نخواهد شد. فیلدهای مورد نیاز علامت گذاری شده اند *</p>
                                </div>
                                <div class="comments-area comments-reply-area">
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <form action="\comment\store\{{$product->id}}\{{$user_id=1}}" class="comment-form-area">
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
