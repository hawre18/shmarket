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
                                <nav>
                                <!-- Nav tabs -->
                                <ul role="tablist" class="nav flex-column dashboard-list">
                                    <li><a href="#dashboard" data-toggle="tab" class="nav-link active">داشبورد</a></li>
                                    <li> <a href="#orders" data-toggle="tab" class="nav-link">سابقه خرید</a></li>
                                    <li><a data-toggle="tab" class="nav-link">آدرس ها</a>
                                        <ul>
                                            <li><a href="#storeAddresses" data-toggle="tab" class="nav-link">ایجاد آدرس</a></li>
                                            <li><a href="#indexAddresses" data-toggle="tab" class="nav-link">آدرس ها</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="#account-details" data-toggle="tab" class="nav-link">ویرایش پروفایل</a></li>
                                    <li><a href="login-register.html" class="nav-link">خروج</a></li>
                                </ul>
                                </nav>
                            </div>
                            <div class="col-md-12 col-lg-10">
                                <!-- Tab panes -->
                                <div class="tab-content dashboard-content">
                                    <div class="tab-pane active" id="dashboard">
                                        <h3>داشبورد </h3>
                                        <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است.</p>
                                    </div>
                                    <div class="tab-pane fade" id="orders">
                                        <h3>سفارشات</h3>
                                        <div class="table-responsive">
                                            <table class="table no-margin">
                                                <thead>
                                                <tr>
                                                    <th class="text-center">شناسه</th>
                                                    <th class="text-center">مبلغ</th>
                                                    <th class="text-center">وضعیت</th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                @foreach($orders as $order)
                                                    <tr>
                                                        <td class="text-center"><a href="{{route('orders.products',['id'=>$order->id])}}">{{$order->id}}</a></td>
                                                        <td class="text-center">{{$order->amount}}</td>
                                                        @if($order->status==0)
                                                            <td class="text-center"><span class="label label-danger">پرداخت نشده</span> </td>
                                                        @else
                                                            <td class="text-center"><span class="label label-success">پرداخت شده</span> </td>
                                                        @endif
                                                    </tr>
                                                @endforeach
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                    <div class="tab-pane" id="storeAddresses">
                                        <form class="form-horizontal" method="post" action="{{route('addresses.store')}}">
                                            @csrf
                                            <fieldset id="address">
                                                <legend>ایجاد آدرس</legend>
                                                <div class="form-group required">
                                                    <label for="input-address-1" class="col-sm-2 control-label">آدرس</label>
                                                    <div class="col-sm-10">
                                                        <input type="text" class="form-control" id="input-address-1" placeholder="آدرس" value="" name="address">
                                                    </div>
                                                </div>
                                                <div class="form-group required">
                                                    <label for="input-postcode" class="col-sm-2 control-label">کد پستی</label>
                                                    <div class="col-sm-10">
                                                        <input type="text" class="form-control" id="input-postcode" placeholder="کد پستی" value="" name="post_code">
                                                    </div>
                                                </div>
                                                <select-city-component></select-city-component>
                                                <div class="form-group required">
                                                    <label for="input-telephone" class="col-sm-2 control-label">شماره تلفن</label>
                                                    <div class="col-sm-10">
                                                        <input type="tel" class="form-control" id="input-telephone" placeholder="شماره تلفن" value="" name="phone">
                                                    </div>
                                                </div>
                                            </fieldset>
                                            <div class="buttons">
                                                <div class="pull-right">
                                                    <input type="submit" class="btn btn-primary" value="ثبت">
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                    <div class="tab-pane" id="indexAddresses">
                                        <table class="table no-margin">
                                            <thead>
                                            <tr>
                                                <th class="text-center">شناسه</th>
                                                <th class="text-center">آدرس</th>
                                                <th class="text-center">استان</th>
                                                <th class="text-center">شهر</th>
                                                <th class="text-center">کدپستی</th>
                                                <th class="text-center">تلفن</th>
                                                <th class="text-center">عملیات</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            @foreach($addresses as $address)
                                                <tr>
                                                    <td class="text-center">{{$loop->index+1}}</td>
                                                    <td class="text-center">{{$address->address}}</td>
                                                    <td class="text-center">{{$address->province->name}}</td>
                                                    <td class="text-center">{{$address->city->name}}</td>
                                                    <td class="text-center">{{$address->post_code}}</td>
                                                    <td class="text-center">{{$address->phone}}</td>
                                                    <td class="text-center">
                                                        <a class="btn btn-warning" href="{{route('addresses.edit', $address->id)}}">ویرایش</a>
                                                        <a type="submit" class="btn btn-danger" href="{{route('addresses.delete', $address->id)}}">حذف</a>
                                                    </td>
                                                </tr>
                                            @endforeach
                                            </tbody>
                                        </table>
                                        <div class="center-block text-center">{{ $addresses->links() }}</div>
                                    </div>
                                    <div class="tab-pane fade" id="account-details">
                                        <h3>ویرایش پروفایل</h3>
                                        <div class="login">
                                            <div class="login-form-container">
                                                <div class="account-login-form">
                                                    <form action="#">
                                                        <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک</p>
                                                        <div class="input-radio">
                                                            <span class="custom-radio"><input type="radio" value="1" name="id_gender"> آقا</span>
                                                            <span class="custom-radio"><input type="radio" value="1" name="id_gender"> خانم</span>
                                                        </div>
                                                        <div class="account-input-box">
                                                            <label>نام</label>
                                                            <input type="text" name="first-name">
                                                            <label>نام خانوادگی</label>
                                                            <input type="text" name="last-name">
                                                            <label>ایمیل</label>
                                                            <input type="text" name="email-name">
                                                            <label>رمز عبور</label>
                                                            <input type="password" name="user-password">
                                                            <label>شماره تماس</label>
                                                            <input type="text" placeholder="" value="" name="birthday">
                                                        </div>
                                                        <div class="custom-checkbox">
                                                            <input type="checkbox" value="1" name="newsletter">
                                                            <label>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک</label>
                                                        </div>
                                                        <div class="button-box">
                                                            <button class="btn default-btn" type="submit">ذخیره</button>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
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

