@extends('layouts.master')
@section('styl')
    <style>
        nav ul ul {
            display: none;
        }

        nav ul li:hover > ul {
            display: block;
        }
    </style>
@section('content')
    <!-- breadcrumb-area start -->
    <div class="breadcrumb-area">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <!-- breadcrumb-list start -->
                    <ul class="breadcrumb-list">
                        <li class="breadcrumb-item"><a href="index.html">صفحه اصلی</a></li>
                        <li class="breadcrumb-item active">حساب کاربری</li>
                    </ul>
                    <!-- breadcrumb-list end -->
                </div>
            </div>
        </div>
    </div>
    <!-- breadcrumb-area end -->


    <!-- main-content-wrap start -->
    <div class="main-content-wrap section-ptb my-account-page">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="account-dashboard">
                        <div class="row">
                            <div class="col-md-12 col-lg-2">
                                <a class="btn-bg-dark">برگشت</a>
                            </div>
                            <div class="col-md-12 col-lg-10">
                                <!-- Tab panes -->
                                <div class="tab-content dashboard-content">
                                    <div class="tab-pane active">
                                        <table class="table no-margin">
                                            <thead>
                                            <tr>
                                                <th class="text-center">تصویر محصولات</th>
                                                <th class="text-center">نام محصولات</th>
                                                <th class="text-center">تعداد</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            @foreach($order->products as $product)
                                                <tr>
                                                    <td class="text-center"><img width="15%" src="{{$product->photos[0]->path}}"></td>
                                                    <td class="text-center">{{$product->title}}</td>
                                                    <td class="text-center">{{$product->pivot->qty}}</td>
                                                </tr>
                                            @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- main-content-wrap end -->
@endsection
@section('script-vuejs')
    <script src="{{asset('/admin/js/app.js')}}"></script>
@endsection

