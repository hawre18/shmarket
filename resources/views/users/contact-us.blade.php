@extends('layouts.master')
@section('content')<!-- breadcrumb-area start -->
    <div class="breadcrumb-area">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <!-- breadcrumb-list start -->
                    <ul class="breadcrumb-list">
                        <li class="breadcrumb-item"><a href="index.html">صفحه اصلی</a></li>
                        <li class="breadcrumb-item active">درباره ما</li>
                    </ul>
                    <!-- breadcrumb-list end -->
                </div>
            </div>
        </div>
    </div>
    <!-- breadcrumb-area end -->

    <!-- main-content-wrap start -->
    <div class="main-content-wrap contact-wrap">
        <div class="contact-form-area section-ptb">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4">
                        <div class="contact-info-wrap">
                            <div class="contact-title mb-30">
                                <h3>تماس باما</h3>
                            </div>
                            <div class="contact-info-text">
                                <ul>
                                    <li>
                                        <div class="contact-title">
                                            <i class="fa fa-home"></i>
                                            <h4>آدرس ما</h4>
                                        </div>
                                        <p>سنندج</p>
                                    </li>
                                    <li>
                                        <div class="contact-title">
                                            <i class="fa fa-phone"></i>
                                            <h4>شماره تلفن :</h4>
                                        </div>
                                        <p>موبایل : 09184185360<br>
                                            تلفن :0123456789
                                        </p>
                                    </li>
                                    <li>
                                        <div class="contact-title">
                                            <i class="fa fa-envelope-open-o"></i>
                                            <h4>ایمیل</h4>
                                        </div>
                                        <p>hawremi18@gmail.com<br>
                                            support@gmail.com</p>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-7 offset-lg-1">
                        <div class="contact-info-wrap">
                            <div class="contact-title mb-30">
                                <h3>یک پیام برای ما بگذارید</h3>
                            </div>
                            <div class="contact-us-from-wrap">
                                <form id="contact-form" class="contact-us-box" action="http://hasthemes.com/file/mail.php" method="post">
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="single-input">
                                                <label> نام و نام خانوادگی</label>
                                                <input name="con_name" type="text">
                                            </div>
                                        </div>
                                        <div class="col-lg-12">
                                            <div class="single-input">
                                                <label> ایمیل</label>
                                                <input name="con_email" type="email">
                                            </div>
                                        </div>
                                        <div class="col-lg-12">
                                            <div class="single-input">
                                                <label>عنوان</label>
                                                <input name="con_subject" type="text">
                                            </div>
                                        </div>
                                        <div class="col-lg-12">
                                            <div class="single-input">
                                                <label>متن پیام</label>
                                                <textarea name="con_message" ></textarea>
                                            </div>
                                        </div>
                                        <div class="col-lg-12">
                                            <div class="single-input">
                                                <button class="submit-button submit-btn" type="submit">ارسال</button>
                                                <p class="form-messege"></p>
                                            </div>
                                        </div>
                                    </div>
                                </form>
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
