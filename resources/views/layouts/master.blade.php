<!doctype html>
<html class="no-js" lang="en">


<head>
    <base href="../../../../">
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>فروشگاه</title>
    <meta name="robots" content="noindex, follow" />
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="assets/images/favicon.ico">

    <!-- CSS
	============================================ -->

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="/assets/css/vendor/bootstrap.min.css">
    <!-- Icon Font CSS -->
    <link rel="stylesheet" href="assets/css/vendor/font-awesome.min.css">
    <link rel="stylesheet" href="assets/css/vendor/plaza-font.css">

    <!-- Plugins CSS -->
    <link rel="stylesheet" href="assets/css/plugins/slick.css">
    <link rel="stylesheet" href="assets/css/plugins/swiper.min.css">
    <link rel="stylesheet" href="assets/css/plugins/animation.css">
    <link rel="stylesheet" href="assets/css/plugins/nice-select.css">
    <link rel="stylesheet" href="assets/css/plugins/fancy-box.css">
    <link rel="stylesheet" href="assets/css/plugins/jqueryui.min.css">


    <!-- Main Style CSS (Please use minify version for better website load performance) -->
    <link rel="stylesheet" href="assets/css/style.css">
    <!--<link rel="stylesheet" href="assets/css/style.min.css">-->
    <meta name="csrf-token" content="{{csrf_token()}}">
</head>

<body>

<div class="main-wrapper" id="app">

    <header class="header">

        <!-- Header Top Start -->
        <div class="header-top-area d-none d-lg-block text-color-white bg-gren border-bm-1">

            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="header-top-settings">
                            <ul class="nav align-items-center">
                                <li class="language"><i class="fa fa-angle-down"></i>
                                    <a href="#"><i class="icon-instagram"></i></a>
                                </li>
                                <li class="language"><i class="fa fa-angle-down"></i>
                                    <a href="#"><i class="icon-phone-call"></i></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <div class="haeader-mid-area bg-gren border-bm-1 d-none d-lg-block ">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-3 col-md-4 col-5">
                        <div class="logo-area">
                            <a href="index.html"><img src="assets/images/logo/logo.png" alt=""></a>
                        </div>
                    </div>
                    <div class="col-lg-5">
                        <search-products></search-products>
                    </div>
                    <div class="col-lg-4">
                        <div class="customer-wrap green-bg">
                            <div class="single-costomer-box">
                                <div class="single-costomer">
                                    <p><i class="icon-check-circle"></i><span>ارسال رایگان</span></p>
                                </div>
                            </div>
                            <div class="single-costomer-box">
                                <div class="single-costomer">
                                    <p><i class="icon-lock"></i><span>پرداخت امن</span></p>
                                </div>
                            </div>
                            <div class="single-costomer-box">
                                <div class="single-costomer">
                                    <p><i class="icon-bell"></i><span>پشتیبانی 24</span></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="haeader-bottom-area bg-gren header-sticky">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-9 d-none d-lg-block">
                        <div class="main-menu-area white_text">
                            <nav class="main-navigation">
                                <ul>
                                    @foreach($categories=App\Models\Category::where('parent_id',null)->get() as $cat)
                                        @if( $cat->parent_id == null )
                                        <li class="active"><a href="{{route('category.index',['id'=>$cat])}}">{{$cat->name}}<i class="fa fa-angle-down"></i></a>
                                            @if(!$cat->children->isEmpty())
                                        <ul class="sub-menu">
                                            @include('users.partials.menu',['categories'=>$cat->childrenRecursive, 'level'=>1])
                                        </ul>
                                            @endif
                                        </li>
                                        @endif
                                    @endforeach
                                </ul>
                            </nav>
                        </div>
                    </div>
                    <div class="col-5 col-md-6 d-block d-lg-none">
                        <div class="logo"><a href="index.html"><img src="assets/images/logo/logo.png" alt=""></a></div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-7">
                        <div class="right-blok-box text-white d-flex">
                            <div class="user-wrap">
                                @if(Auth::check())
                                    <ul>
                                        <li style="border: none;">
                                            <a href="{{route('user.logout')}}" onclick="event.preventDefault();document.getElementById('logout-form').submit();">
                                                <i class="fa fa-sign-out"></i>
                                            </a>
                                        </li>
                                        <li style="border: none;"><a href="{{route('user.profile')}}"><i class="fa fa-user"></i></a></li>
                                    </ul>
                                    <form id="logout-form" action="{{ route('user.logout') }}" method="post" style="display: none;">
                                        @csrf
                                    </form>
                                @else
                                    <ul>
                                        <li style="border: none;"><a href="{{route('login')}}"><i class="fa fa-user-plus"></i></a></li>
                                    </ul>
                                @endif
                            </div>
                            <div class="shopping-cart-wrap">
                                <a href="#">
                                    <span class="cart-total-amunt">{{Session::has('cart') ? Session::get('cart')->totalPrice.'تومان':''}}</span>
                                    <i class="icon-shopping-bag2 float-left"></i>
                                    <span class="cart-total">{{Session::has('cart') ? Session::get('cart')->totalQty.'آیتم':''}}</span>
                                </a>
                                <ul class="mini-cart">
                                    @if(Session::has('cart'))
                                    <li class="cart-item">
                                        @foreach(Session::get('cart')->items as $product)
                                        <div class="cart-image">
                                            <a href="{{route('products.single',['id'=>$product['item']->id])}}"><img alt="" src="{{$product['item']->photos[0]->path}}"></a>
                                        </div>
                                        <div class="cart-title">
                                            <a href="{{route('products.single',['id'=>$product['item']->id])}}">
                                                <h4>{{$product['item']->title}}</h4>
                                            </a>
                                            <div class="quanti-price-wrap">
                                                <span class="quantity">{{$product['qty']}} ×</span>
                                                <div class="price-box"><span class="new-price">{{$product['price']}} تومان</span></div>
                                            </div>
                                            <div >
                                                <button class="btn btn-danger btn-xs remove" title="حذف" onclick="event.preventDefault();
                                                    document.getElementById('remove-cart-item_{{$product['item']->id}}').submit();" type="button"><i class="fa fa-times"></i>
                                                </button>
                                            </div>
                                            <form id="remove-cart-item_{{$product['item']->id}}" action="{{ route('cart.remove',['id'=>$product['item']->id]) }}" method="post" style="display: none;">
                                                @csrf
                                            </form>
                                        </div>
                                    </li>
                                        @endforeach
                                    <li class="subtotal-box">
                                        <div class="subtotal-title">
                                            <h3>جمع کل :</h3><span>{{Session::get('cart')->totalPurePrice}} تومان</span>
                                        </div>
                                    </li>
                                        <li class="subtotal-box">
                                        <div class="subtotal-title">
                                            <h3>کسر هدیه: </h3><span>{{Session::get('cart')->totalDiscountPrice}} تومان</span>
                                        </div>
                                    </li><li class="subtotal-box">
                                        <div class="subtotal-title">
                                            <h3>قابل پرداخت :</h3><span>{{Session::get('cart')->totalPrice}} تومان</span>
                                        </div>
                                    </li>
                                    <li class="mini-cart-btns">
                                        <div class="cart-btns">
                                            <a href="{{route('cart.get')}}">مشاهده سبد</a>
                                        </div>
                                    </li>
                                    @else
                                        <p>سبد خرید شما خالی است</p>
                                    @endif
                                </ul>
                            </div>
                            <div class="mobile-menu-btn d-block d-lg-none">
                                <div class="off-canvas-btn">
                                    <a href="#"><img src="assets/images/icon/bg-menu.png" alt=""></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- haeader bottom End -->


        <!-- off-canvas menu start -->
        <aside class="off-canvas-wrapper">
            <div class="off-canvas-overlay"></div>
            <div class="off-canvas-inner-content">
                <div class="btn-close-off-canvas">
                    <i class="icon-x"></i>
                </div>

                <div class="off-canvas-inner">

                    <div class="search-box-offcanvas">
                        <search-products></search-products>
                    </div>

                    <div class="mobile-navigation">
                        <nav>
                            <ul class="mobile-menu">
                                @foreach($categories=App\Models\Category::where('parent_id',null)->get() as $cat)
                                    @if( $cat->parent_id == null )
                                        <li class="menu-item-has-children"><a href="{{route('category.index',['id'=>$cat])}}">{{$cat->name}}</a>
                                            @if(!$cat->children->isEmpty())
                                                <ul class="dropdown">
                                                    @include('users.partials.menu',['categories'=>$cat->childrenRecursive, 'level'=>1])
                                                </ul>
                                            @endif
                                        </li>
                                    @endif
                                @endforeach
                            </ul>
                        </nav>
                        <!-- mobile menu navigation end -->
                    </div>
                    <!-- mobile menu end -->


                    <div class="header-top-settings offcanvas-curreny-lang-support">
                        <h5><a href="#"><i class="icon-add-user"></i></a></h5>
                        <ul class="nav align-items-center icon-phone-incoming">
                            <li class="language"><i class="fa fa-angle-down"></i>
                                <ul class="dropdown-list">
                                    <li><a href="#"><i class="icon-instagram"></i></a></li>
                                    <li><a href="#"><i class="icon-phone-call"></i></a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </aside>
        <!-- off-canvas menu end -->
    </header>

@yield('content')
    <footer>
        <div class="footer-top section-pb section-pt-60">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-md-6">
                        <div class="widget-footer mt-40">
                            <h6 class="title-widget">اطلاعات تماس</h6>
                            <div class="contact-call-wrap">
                                <img src="assets/images/icon/img-headphone.png" alt="">
                                <div class="footer-call">
                                    <p>تلفن تماس :</p>
                                    <h6>(+98)0918-418-5360</h6>
                                </div>
                            </div>
                            <div class="footer-addres">
                                <p>سنندج</p>
                                <p>hawremi18@gmaile.com</p>
                            </div>

                            <ul class="social-icons">
                                <li>
                                    <a class="facebook social-icon" href="#" title="Facebook" target="_blank"><i class="fa fa-facebook"></i></a>
                                </li>
                                <li>
                                    <a class="twitter social-icon" href="#" title="Twitter" target="_blank"><i class="fa fa-twitter"></i></a>
                                </li>
                                <li>
                                    <a class="instagram social-icon" href="#" title="Instagram" target="_blank"><i class="fa fa-instagram"></i></a>
                                </li>
                            </ul>

                        </div>

                    </div>
                    <div class="col-lg-2 col-md-6 col-sm-6">
                        <div class="widget-footer mt-40">
                            <h6 class="title-widget">اوریجن</h6>
                            <ul class="footer-list">
                                <li><a href="#">درباره ما</a></li>
                                <li><a href="#">تماس با ما</a></li>
                                <li><a href="#">چرا اوریجن</a></li>
                                <li><a href="#">وبلاگ</a></li>
                                <li><a href="#">راهنمای خرید</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-6 col-sm-6">
                        <div class="widget-footer mt-40">
                            <h6 class="title-widget">خدمات مشتریان</h6>
                            <ul class="footer-list">
                                <li><a href="#">پاسخ به پرسش‌های متداول</a></li>
                                <li><a href="#">رویه‌های بازگرداندن کالا</a></li>
                                <li><a href="#">شرایط استفاده</a></li>
                                <li><a href="#">گزارش باگ</a></li>
                                <li><a href="#">رویه ارسال سفارش</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="newletter-area">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="newletter-wrap">
                            <div class="row align-items-center">
                                <div class="col-lg-3 col-md-12">
                                    <div class="newsletter-title mb-30">
                                        <h3>به ما ملحق شوید<br><span>خبرنامه</span></h3>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-5">
                                    <div class="newsletter-dec mb-30">
                                        <p>از تخفیف‌ها و جدیدترین‌های اوریجن باخبر شوید:</p>
                                    </div>
                                </div>
                                <div class="col-lg-5 col-md-7">
                                    <div class="newsletter-footer mb-30">
                                        <input type="text" placeholder="ایمیل...">
                                        <div class="subscribe-button">
                                            <button class="subscribe-btn">اشتراک</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-bottom">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6 col-md-6">
                        <div class="copy-left-text">
                            <p class="copyright-text">&copy;  1399  <strong> اوریجین </strong> ساخته شده توسط  <a href="#" target="_blank">hawre</a> </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>



</div>

<!-- JS
============================================ -->
<script src="{{asset('js/app.js')}}"></script>
<!-- Modernizer JS -->
<script src="assets/js/vendor/modernizr-3.6.0.min.js"></script>
<!-- jQuery JS -->
<script src="assets/js/vendor/jquery-3.3.1.min.js"></script>
<!-- Bootstrap JS -->
<script src="assets/js/vendor/popper.min.js"></script>
<script src="assets/js/vendor/bootstrap.min.js"></script>

<!-- Plugins JS -->
<script src="assets/js/plugins/slick.min.js"></script>
<script src="assets/js/plugins/swiper.min.js"></script>
<script src="assets/js/plugins/jquery.nice-select.min.js"></script>
<script src="assets/js/plugins/countdown.min.js"></script>
<script src="assets/js/plugins/image-zoom.min.js"></script>
<script src="assets/js/plugins/fancybox.js"></script>
<script src="assets/js/plugins/scrollup.min.js"></script>
<script src="assets/js/plugins/jqueryui.min.js"></script>
<script src="assets/js/plugins/ajax-contact.js"></script>


<!-- Main JS -->
<script src="assets/js/main.js"></script>
@yield('script')

<!-- JS Part End-->
</body>
</html>
