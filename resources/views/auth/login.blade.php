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
                        <li class="breadcrumb-item active">ورود - ثبت نام</li>
                    </ul>
                    <!-- breadcrumb-list end -->
                </div>
            </div>
        </div>
    </div>
    <!-- breadcrumb-area end -->

    <!-- main-content-wrap start -->
    <div class="main-content-wrap section-ptb lagin-and-register-page">
        <div class="container">
            <div class="row">
                <div class="col-lg-7 col-md-12 ml-auto mr-auto">
                    <div class="login-register-wrapper">
                        <!-- login-register-tab-list start -->
                        <div class="login-register-tab-list nav">
                            <a class="active" data-toggle="tab" href="#lg1">
                                <h4> ورود </h4>
                            </a>
                            <a data-toggle="tab" href="#lg2">
                                <h4> ثبت نام </h4>
                            </a>
                        </div>
                        <!-- login-register-tab-list end -->
                        <div class="tab-content">
                            <div id="lg1" class="tab-pane active">
                                <div class="login-form-container">
                                    <div class="login-register-form">
                                        <form  method="post"action="{{ url('/login') }}">
                                            {{ csrf_field() }}
                                            <div class="login-input-box">
                                                <input type="text" name="email" placeholder="ایمیل">
                                                <input type="password" name="password" placeholder="رمز عبور">
                                            </div>
                                            <div class="button-box">
                                                <div class="login-toggle-btn">
                                                    <input type="checkbox">
                                                    <label>من را به یاد آور</label>
                                                    <a href="#">رمز عبور خود را فراموش کرده اید؟</a>
                                                </div>
                                                <div class="button-box">
                                                    <button class="login-btn btn" type="submit"><span>ورود</span></button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <div id="lg2" class="tab-pane">
                                <div class="login-form-container">
                                    <div class="login-register-form">
                                        <form method="post" action="{{ url('/register') }}">
                                        {{ csrf_field() }}
                                            <div class="login-input-box">
                                                <input type="text" name="user-name" placeholder="نام کاربری">
                                                <input type="password" name="user-password" placeholder="رمز عبور">
                                                <input name="user-email" placeholder="ایمیل" type="email">
                                            </div>
                                            <div class="button-box">
                                                <button class="register-btn btn" type="submit"><span>ثبت نام</span></button>
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
    <!-- main-content-wrap end -->
@endsection
@section('script')
@endsection
