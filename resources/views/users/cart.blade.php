@extends('layouts.master')
@section('content')
<!-- breadcrumb-area start -->
    <div class="breadcrumb-area">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <!-- breadcrumb-list start -->
                    <ul class="breadcrumb-list">
                        <li class="breadcrumb-item"><a href="index.html">صفحه اصلی</a></li>
                        <li class="breadcrumb-item active">سبد خرید</li>
                    </ul>
                    <!-- breadcrumb-list end -->
                </div>
            </div>
        </div>
    </div>
    <!-- breadcrumb-area end -->

    <!-- main-content-wrap start -->
    <div class="main-content-wrap section-ptb cart-page">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <form action="#" class="cart-table">
                        <div class="table-content table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th class="plantmore-product-thumbnail">تصویر محصول</th>
                                        <th class="cart-product-name">نام محصول</th>
                                        <th class="plantmore-product-price">قیمت</th>
                                        <th class="plantmore-product-quantity">تعداد</th>
                                        <th class="plantmore-product-subtotal">جمع کل</th>
                                        <th class="plantmore-product-remove">حذف محصول</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="plantmore-product-thumbnail"><a href="#"><img src="assets/images/other/01.jpg" alt=""></a></td>
                                        <td class="plantmore-product-name"><a href="#">سالاد</a></td>
                                        <td class="plantmore-product-price"><span class="amount">49000 تومان</span></td>
                                        <td class="plantmore-product-quantity">
                                            <input value="1" type="number">
                                        </td>
                                        <td class="product-subtotal"><span class="amount">49000 تومان</span></td>
                                        <td class="plantmore-product-remove"><a href="#"><i class="icon-x"></i></a></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="row">
                            <div class="col-md-8">
                                <div class="coupon-all">

                                    <div class="coupon2">
                                        <a class="continue-btn" name="update_cart" type="submit">ویرایش سبد</a>
                                        <a href="shop.blade.php" class="continue-btn">ادامه خرید</a>
                                    </div>

                                    <div class="coupon">
                                        <h3>تخفیف</h3>
                                        <p>کد تخفیف خود راوارد کنید.</p>
                                        <input id="coupon_code" class="input-text" name="coupon_code" value="" placeholder="کد تخفیف ..." type="text">
                                        <input class="button" name="apply_coupon" value="اعمال کد تخفیف" type="submit">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 ml-auto">
                                <div class="cart-page-total">
                                    <h2>مجموع سبد</h2>
                                    <ul>
                                        <li>زیرمجموع <span>49000 تومان</span></li>
                                        <li>جمع کل <span>79000 تومان</span></li>
                                    </ul>
                                    <a href="#" class="proceed-checkout-btn">ادامه فرایند پرداخت</a>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- main-content-wrap end -->
@endsection
@section('script')
@endsection
