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
                                <!-- Nav tabs -->
                                <ul role="tablist" class="nav flex-column dashboard-list">
                                    <li><a href="#dashboard" data-toggle="tab" class="nav-link active">داشبورد</a></li>
                                    <li> <a href="#orders" data-toggle="tab" class="nav-link">سابقه خرید</a></li>
                                    <li><a href="#address" data-toggle="tab" class="nav-link">آدرس ها</a></li>
                                    <li><a href="#account-details" data-toggle="tab" class="nav-link">ویرایش پروفایل</a></li>
                                    <li><a href="login-register.html" class="nav-link">خروج</a></li>
                                </ul>
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
                                            <table class="table">
                                                <thead>
                                                <tr>
                                                    <th>سفارشات</th>
                                                    <th>تاریخ</th>
                                                    <th>وضعیت</th>
                                                    <th>جمع کل</th>
                                                    <th>مشاهده </th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                <tr>
                                                    <td>1</td>
                                                    <td>21 آذر 1398</td>
                                                    <td>در حال بررسی</td>
                                                    <td>	25,000 تومان برای 1 محصول </td>
                                                    <td><a href="cart.html" class="view">مشاهده</a></td>
                                                </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                    <div class="tab-pane" id="address">
                                        <p>لورم ایپسوم متن ساختگی لورم ایپسوم متن</p>
                                        <h4 class="billing-address">آدرس صورتحساب</h4>
                                        <a href="#" class="view">ویرایش</a>
                                        <p class="biller-name">محمد محمدی</p>
                                        <p>تهران , تجریش</p>
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
@section('script')
@endsection
