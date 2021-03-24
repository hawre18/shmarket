@extends('layouts.master')
@section('content')
    <div class="breadcrumb-area">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <!-- breadcrumb-list start -->
                    <ul class="breadcrumb-list">
                        <li class="breadcrumb-item"><a href="index.html">صفحه اصلی</a></li>
                        <li class="breadcrumb-item active">حساب کاربری</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="main-content-wrap section-ptb my-account-page">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="account-dashboard">
                        <div class="row">
                            <div class="col-md-12 col-lg-10">
                                <!-- Tab panes -->
                                <div class="tab-content dashboard-content">
                                    <div class="tab-pane active" id="dashboard">
                                        <form method="post" action="\addresses\{{$address->id}}">
                                            @csrf
                                            <input type="hidden" name="_method" value="PATCH">
                                            <div class="form-group">
                                                <label for="address">آدرس</label>
                                                <input type="text" name="address" class="form-control" value="{{$address->address}}" placeholder="آدرس را وارد کنید...">
                                            </div>
                                            <select-city-component></select-city-component>
                                            <div class="form-group">
                                                <label for="post_code">کدپستی</label>
                                                <input type="text" name="post_code" class="form-control" value="{{$address->post_code}}" placeholder="کدپستی را وارد کنید...">
                                            </div>
                                            <div class="form-group">
                                                <label for="phone">تلفن</label>
                                                <input type="text" name="phone" class="form-control" value="{{$address->phone}}" placeholder="شماره همراه را وارد کنید...">
                                            </div>
                                            <button type="submit" class="btn btn-success pull-left">ذخیره</button>
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
@endsection
@section('script-vuejs')
    <script src="{{asset('/admin/js/app.js')}}"></script>
@endsection

