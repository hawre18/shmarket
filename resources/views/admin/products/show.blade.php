@extends('layouts.master-admins')
@section('content')
    <section id="app" class="content" style="direction: rtl">
        <div class="col-sm-9 align-content-center" style="position: relative;right: 18%;">
            <div class="card card-custom">
                <div class="card-body">
                    <div class="datatable datatable-bordered datatable-head-custom datatable-default datatable-primary datatable-loaded" id="kt_datatable" style="">
                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                        <lable>عنوان محصول: {{$product->title}}</lable></br>
                            <lable>کد محصول در سیستم: {{$product->sku}}</lable></br>
                            <lable>اسم مستعار: {{$product->slug}}</lable></br>
                            <lable>وضعیت نشر: {{$product->status}}</lable></br>
                            <lable>قیمت محصول: {{$product->price}}</lable></br>
                            <lable>قیمت تخفیف خورده: {{$product->discountprice}}</lable></br>
                            <lable for="shortdescription">توضیحات کوتاه: </lable></br>
                            <div id="shortdescription" itemprop="description" id="tab-description" class="tab-pane active">
                                {!! $product->short_description !!}
                            </div>
                            <lable for="longdescription">توضیحات اصلی: </lable></br>
                            <div id="longdescription" itemprop="description" id="tab-description" class="tab-pane active">
                                {!! $product->long_description !!}
                            </div>
                            <lable>کاربر ایجاد کننده محصول: 1</lable></br>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

