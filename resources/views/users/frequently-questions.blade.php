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
                            <li class="breadcrumb-item active">پرسش پاسخ</li>
                        </ul>
                        <!-- breadcrumb-list end -->
                    </div>
                </div>
            </div>
        </div>
        <!-- breadcrumb-area end -->


        <!-- main-content-wrap start -->
        <div class="main-content-wrap section-pt">
            <div class="container">
                <div class="frequently-questions-area">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="section-title text-center mb-30">
                                <h2>پرتکرارترین پرسش‌ها</h2>
                            </div>
                            <div class="section-dec mb-40">
                                <h4>پاسخ پرسش‌های پرتکرار</h4>
                                <p>
                                    لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و برای شرایط فعلی تکنولوژی مورد نیاز و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد. کتابهای زیادی در شصت و سه درصد گذشته، حال و آینده شناخت فراوان جامعه
                                </p>
                            </div>
                            <div class="faq-style-wrap section-pb" id="faq-five">

                                <!-- Panel-default -->
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <h5 class="panel-title">
                                            <a class="collapsed" role="button" data-toggle="collapse" data-target="#faq-collapse4" aria-expanded="false" aria-controls="faq-collapse4"> <span class="button-faq"></span>چطور میتوانم سفارشم را پیگیری کنم ؟</a>
                                        </h5>
                                    </div>
                                    <div id="faq-collapse4" class="collapse" role="tabpanel" data-parent="#faq-five">
                                        <div class="panel-body">
                                            <p>
                                                لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و برای شرایط فعلی تکنولوژی مورد نیاز و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد.  </p>
                                        </div>
                                    </div>
                                </div>
                                <!--// Panel-default -->
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
