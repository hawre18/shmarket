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
                        <li class="breadcrumb-item active">پرداخت</li>
                    </ul>
                    <!-- breadcrumb-list end -->
                </div>
            </div>
        </div>
    </div>
    <!-- breadcrumb-area end -->


    <!-- main-content-wrap start -->
    <div class="main-content-wrap section-ptb checkout-page">
        <div class="container">
            <!-- checkout-details-wrapper start -->
            <div class="checkout-details-wrapper">
                <div class="row">
                    <div class="col-lg-6 col-md-6">
                        <!-- your-order-wrapper start -->
                        <div class="your-order-wrapper">
                            <h3 class="shoping-checkboxt-title">سفارش شما</h3>
                            <!-- your-order-wrap start-->
                            <div class="your-order-wrap">
                                <!-- your-order-table start -->
                                <div class="your-order-table table-responsive">
                                    <table>
                                        <thead>
                                        <tr>
                                            <th class="product-name">محصول</th>
                                            <th class="product-total">جمع کل</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr class="cart_item">
                                            <td class="product-name">
                                                نام محصول <strong class="product-quantity"> × 1</strong>
                                            </td>
                                            <td class="product-total">
                                                <span class="amount">98,000 تومان</span>
                                            </td>
                                        </tr>
                                        </tbody>
                                        <tfoot>
                                        <tr class="cart-subtotal">
                                            <th>جمع جزء	</th>
                                            <td><span class="amount">198,000 تومان</span></td>
                                        </tr>
                                        <tr class="cart-subtotal">
                                            <th>حمل و نقل</th>
                                            <td><span class="amount">ارسال رایگان</span></td>
                                        </tr>
                                        <tr class="shipping">
                                            <td>
                                                <ul class="text-left">
                                                    <li class="bold mb-3">نوع پرداخت</li>
                                                    <li>
                                                        <label>
                                                            <input type="radio">
                                                            <span class="amount">پرداخت آنلاین</span>
                                                        </label>
                                                    </li>
                                                    <li>
                                                        <label>
                                                            <input type="radio">
                                                            پرداخت در محل
                                                        </label>
                                                    </li>
                                                    <li></li>
                                                </ul>
                                            </td>
                                            <th></th>
                                        </tr>
                                        <tr class="order-total">
                                            <th>جمع کل	</th>
                                            <td><strong><span class="amount">898,000 تومان</span></strong>
                                            </td>
                                        </tr>
                                        </tfoot>
                                    </table>
                                </div>
                                <!-- your-order-table end -->

                                <!-- your-order-wrap end -->
                                <div class="payment-method">
                                    <div class="payment-accordion">
                                        <!-- ACCORDION START -->
                                        <h5>فیش بانکی</h5>
                                        <div class="payment-content">
                                            <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و برای شرایط فعلی</p>
                                        </div>
                                        <!-- ACCORDION END -->
                                    </div>
                                    <div class="order-button-payment">
                                        <input type="submit" value="ثبت سفارش"/>
                                    </div>
                                </div>
                                <!-- your-order-wrapper start -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- checkout-details-wrapper end -->
        </div>
    </div>
    <!-- main-content-wrap end -->
@endsection
@section('script')
@endsection
