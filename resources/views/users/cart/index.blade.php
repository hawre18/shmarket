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
                            <table class="table table-bordered">
                                <thead>
                                <tr>
                                    <td class="text-center">تصویر</td>
                                    <td class="text-left">نام محصول</td>
                                    <td class="text-left">کد محصول</td>
                                    <td class="text-left">تعداد</td>
                                    <td class="text-right">قیمت واحد</td>
                                    <td class="text-right">کل</td>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($cart->items as $product)
                                    <tr>
                                        <td class="text-center"><a href="#"><img src="{{$product['item']->photos[0]->path}}" class="img-thumbnail" /></a></td>
                                        <td class="text-left"><a href="#">{{$product['item']->title}}</a><br /></td>
                                        <td class="text-left"><a href="#">{{$product['item']->sku}}</a><br /></td>
                                        <td class="text-left"><div class="input-group btn-block quantity">
                                                <a data-toggle="tooltip" title="اضافه" href="{{route('cart.add',['id'=>$product['item']->id])}}" class="uppy-btn"><i class="fa fa-plus"></i></a>
                                                <span>    </span>
                                                <a data-toggle="tooltip" title="کم کردن" onClick="event.preventDefault();
                                                        document.getElementById('remove-cart-item_{{$product['item']->id}}').submit();" class="down"><i class="fa fa-minus"></i></a>
                                                <form id="remove-cart-item_{{$product['item']->id}}" action="{{ route('cart.remove',['id'=>$product['item']->id]) }}" method="post" style="display: none;">
                                                    @csrf
                                                </form>
                                                <p>تعداد: <span class="label label-success">{{$product['qty']}}</span></p>
                                            </div>
                                        </td>
                                        <td class="text-right">{{$product['item']->discount_price?$product['item']->discount_price:$product['item']->price}} تومان</td>
                                        <td class="text-right">{{$product['price']}} تومان</td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                        <div class="row">
                            <div class="col-md-8">
                                <div class="coupon-all">

                                    <div class="coupon2">
                                        <a href="{{route('home')}}" class="continue-btn">ادامه خرید</a>
                                    </div>

                                    <div class="coupon">
                                        <h3>تخفیف</h3>
                                        <p>کد تخفیف خود راوارد کنید.</p>
                                        <form action="{{ route('coupon.add')}}" method="post">
                                            @csrf
                                            <div class="input-group">
                                                <input type="text" name="code" placeholder="کد تخفیف خود را در اینجا وارد کنید" class="form-control"/>
                                                <button type="submit" class="btn btn-primary">اعمال تخفیف</button>
                                            </div>
                                        </form>
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
