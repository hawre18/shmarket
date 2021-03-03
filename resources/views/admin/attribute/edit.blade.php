@extends('layouts.master-admins')
        <div class="d-flex flex-column flex-row-fluid wrapper" id="kt_wrapper">
            @section('content')
            <div class="content  d-flex flex-column flex-column-fluid" id="kt_content">
                <div class="subheader py-2 py-lg-6  subheader-solid " id="kt_subheader">
                    <div class=" container-fluid  d-flex align-items-center justify-content-between flex-wrap flex-sm-nowrap">
                        <div class="d-flex align-items-center flex-wrap mr-1">
                            <div class="d-flex align-items-baseline flex-wrap mr-5">
                                <h5 class="text-dark font-weight-bold my-1 mr-5">دانش آموزان</h5>
                                <ul class="breadcrumb breadcrumb-transparent breadcrumb-dot font-weight-bold p-0 my-2 font-size-sm">
                                    <li class="breadcrumb-item">
                                        <a href="" class="text-muted">اپلیکیشن ها</a>
                                    </li>
                                    <li class="breadcrumb-item">
                                        <a href="" class="text-muted">تحصیلات</a>
                                    </li>
                                    <li class="breadcrumb-item">
                                        <a href="" class="text-muted">مدرسه</a>
                                    </li>
                                    <li class="breadcrumb-item">
                                        <a href="" class="text-muted">دانش آموزان</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="d-flex flex-column-fluid">
                    <div class=" container ">
                        <div class="flex-row-fluid ml-lg-8">
                            <div class="card card-custom">
                                <div class="card-header flex-wrap border-0 pt-6 pb-0">
                                    <h3 class="card-title align-items-start flex-column">
                                        <span class="card-label font-weight-bolder text-dark">ویژگی ها</span>
                                    </h3>
                                    <div class="card-body">
                                        <div class="datatable datatable-bordered datatable-head-custom datatable-default datatable-primary datatable-error datatable-loaded" id="kt_datatable" style="position: static; zoom: 1;">
                                            <table class="datatable-table" style="display: block;">
                                                <thead class="datatable-head">
                                                    <tr class="datatable-row" style="left: 0px;">
                                                        <th class="datatable-cell datatable-cell-sort text-center">
                                                            <span>ویژگی</span>
                                                        </th>
                                                        <th class="datatable-cell datatable-cell-sort text-center">
                                                            <span>وضعیت</span>
                                                        </th>
                                                        <th class="datatable-cell datatable-cell-sort text-center">
                                                            <span>عملیات</span>
                                                        </th>
                                                    </tr>
                                                </thead>
                                                <tbody class="datatable-body">
                                                <form method="post" action="\attributes\{{$attribute->id}}">
                                                    @csrf
                                                    <input type="hidden" name="_method" value="PATCH">
                                                    <tr class="datatable-row" style="left: 0px;">
                                                        <td class="datatable-cell datatable-toggle-detail">
                                                            <input type="text" name="title" class="form-text"  value="{{$attribute->title}}">
                                                        </td>
                                                        <td class="datatable-cell datatable-toggle-detail">
                                                            <div style="left: 95%; position: relative;" class="form-group row">
                                                                <span class="switch">
                                                                    <label>
                                                                        <input type="checkbox" name="type_att" @if($attribute->type=="1") checked @endif />
                                                                        <span></span>
                                                                    </label>
                                                                </span>
                                                            </div>
                                                        </td>
                                                        <td class="datatable-cell datatable-toggle-detail">
                                                            <button type="submit" style="left: 20%; position: relative;" class="btn btn-primary font-weight-bold">اعمال</button>
                                                        </td>
                                                    </tr>
                                                </form>
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
            <div class="footer bg-white py-4 d-flex flex-lg-column " id="kt_footer">
                <div class=" container-fluid  d-flex flex-column flex-md-row align-items-center justify-content-between">
                    <div class="text-dark order-2 order-md-1">
                        <span class="text-muted font-weight-bold mr-2">2020©</span>
                        <a href="http://keenthemes.com/metronic" target="_blank" class="text-dark-75 text-hover-primary">Keenthemes</a>
                    </div>
                    <div class="nav nav-dark">
                        <a href="http://keenthemes.com/metronic" target="_blank" class="nav-link pl-0 pr-5">درباره ما</a>
                        <a href="http://keenthemes.com/metronic" target="_blank" class="nav-link pl-0 pr-5">تیم</a>
                        <a href="http://keenthemes.com/metronic" target="_blank" class="nav-link pl-0 pr-0">مخاطب</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div id="kt_quick_panel" class="offcanvas offcanvas-right pt-5 pb-10">
    <div class="offcanvas-header offcanvas-header-navs d-flex align-items-center justify-content-between mb-5" kt-hidden-height="45" style="">
        <ul class="nav nav-bold nav-tabs nav-tabs-line nav-tabs-line-3x nav-tabs-primary flex-grow-1 px-10" role="tablist">
            <li class="nav-item">
                <a class="nav-link active" data-toggle="tab" href="#kt_quick_panel_logs">حسابرسی لاگ ها</a>
            </li>

            <li class="nav-item">
                <a class="nav-link" data-toggle="tab" href="#kt_quick_panel_notifications">اعلان ها</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-toggle="tab" href="#kt_quick_panel_settings">تنظیمات</a>
            </li>
        </ul>
        <div class="offcanvas-close mt-n1 pr-5">
            <a href="#" class="btn btn-xs btn-icon btn-light btn-hover-primary" id="kt_quick_panel_close">
                <i class="ki ki-close icon-xs text-muted"></i>
            </a>
        </div>
    </div>
    <div class="offcanvas-content px-10">
        <div class="tab-content">
            <div class="tab-pane fade show pt-3 pr-5 mr-n5 active scroll" id="kt_quick_panel_logs" role="tabpanel" style="height: auto; overflow: hidden;">
                <div class="mb-15">
                    <h5 class="font-weight-bold mb-5">پیام های سیستم</h5>
                    <div class="d-flex align-items-center flex-wrap mb-5">
                        <div class="symbol symbol-50 symbol-light mr-5">
                            <span class="symbol-label">
                                <img src="assets/media/svg/misc/006-plurk.svg" class="h-50 align-self-center" alt="">
							</span>
                        </div>
                        <div class="d-flex flex-column flex-grow-1 mr-2">
                            <a href="#" class="font-weight-bolder text-dark-75 text-hover-primary font-size-lg mb-1">نویسندگان برتر</a>
                            <span class="text-muted font-weight-bold">موفق ترین ها</span>
                        </div>
                        <span class="btn btn-sm btn-light font-weight-bolder py-1 my-lg-0 my-2 text-dark-50">+82دلار</span>
                    </div>
                    <div class="d-flex align-items-center flex-wrap mb-5">
                        <div class="symbol symbol-50 symbol-light mr-5">
                            <span class="symbol-label">
                                <img src="assets/media/svg/misc/015-telegram.svg" class="h-50 align-self-center" alt="">
							</span>
                        </div>
                        <div class="d-flex flex-column flex-grow-1 mr-2">
                            <a href="#" class="font-weight-bolder text-dark-75 text-hover-primary font-size-lg mb-1">نویسندگان محبوب</a>
                            <span class="text-muted font-weight-bold">موفق ترین ها</span>
                        </div>
                        <span class="btn btn-sm btn-light font-weight-bolder  my-lg-0 my-2 py-1 text-dark-50">+280دلار</span>
                    </div>
                    <div class="d-flex align-items-center flex-wrap mb-5">
                        <div class="symbol symbol-50 symbol-light mr-5">
                            <span class="symbol-label">
                                <img src="assets/media/svg/misc/003-puzzle.svg" class="h-50 align-self-center" alt="">
							</span>
                        </div>
                        <div class="d-flex flex-column flex-grow-1 mr-2">
                            <a href="#" class="font-weight-bolder text-dark-75 text-hover-primary font-size-lg mb-1">کاربران جدید</a>
                            <span class="text-muted font-weight-bold">موفق ترین ها</span>
                        </div>
                        <span class="btn btn-sm btn-light font-weight-bolder  my-lg-0 my-2 py-1 text-dark-50">+4500دلار</span>
                    </div>
                    <div class="d-flex align-items-center flex-wrap mb-5">
                        <div class="symbol symbol-50 symbol-light mr-5">
                            <span class="symbol-label">
                                <img src="assets/media/svg/misc/005-bebo.svg" class="h-50 align-self-center" alt="">
							</span>
                        </div>
                        <div class="d-flex flex-column flex-grow-1 mr-2">
                            <a href="#" class="font-weight-bolder text-dark-75 text-hover-primary font-size-lg mb-1">فعال مشتریان</a>
                            <span class="text-muted font-weight-bold">موفق ترین ها</span>
                        </div>
                        <span class="btn btn-sm btn-light font-weight-bolder my-lg-0 my-2 py-1 text-dark-50">+4500دلار</span>
                    </div>
                    <div class="d-flex align-items-center flex-wrap">
                        <div class="symbol symbol-50 symbol-light mr-5">
                            <span class="symbol-label">
                                <img src="assets/media/svg/misc/014-kickstarter.svg" class="h-50 align-self-center" alt="">
							</span>
                        </div>
                        <div class="d-flex flex-column flex-grow-1 mr-2">
                            <a href="#" class="font-weight-bolder text-dark-75 text-hover-primary font-size-lg mb-1">تم پرفروش</a>
                            <span class="text-muted font-weight-bold">موفق ترین ها</span>
                        </div>
                        <span class="btn btn-sm btn-light font-weight-bolder my-lg-0 my-2 py-1 text-dark-50">+4500دلار</span>
                    </div>
                </div>
                <div class="mb-5">
                    <h5 class="font-weight-bold mb-5">اعلان ها</h5>
                    <div class="d-flex align-items-center bg-light-warning rounded p-5 mb-5">
			            <span class="svg-icon svg-icon-warning mr-5">
			                <span class="svg-icon svg-icon-lg">
                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                        <rect x="0" y="0" width="24" height="24"></rect>
                                        <path d="M5,3 L6,3 C6.55228475,3 7,3.44771525 7,4 L7,20 C7,20.5522847 6.55228475,21 6,21 L5,21 C4.44771525,21 4,20.5522847 4,20 L4,4 C4,3.44771525 4.44771525,3 5,3 Z M10,3 L11,3 C11.5522847,3 12,3.44771525 12,4 L12,20 C12,20.5522847 11.5522847,21 11,21 L10,21 C9.44771525,21 9,20.5522847 9,20 L9,4 C9,3.44771525 9.44771525,3 10,3 Z" fill="#000000"></path>
                                        <rect fill="#000000" opacity="0.3" transform="translate(17.825568, 11.945519) rotate(-19.000000) translate(-17.825568, -11.945519) " x="16.3255682" y="2.94551858" width="3" height="18" rx="1"></rect>
                                    </g>
                                </svg>
                            </span>
                        </span>
                        <div class="d-flex flex-column flex-grow-1 mr-2">
                            <a href="#" class="font-weight-normal text-dark-75 text-hover-primary font-size-lg mb-1">اهداف دیگر</a>
                            <span class="text-muted font-size-sm">موعد 2 روز</span>
                        </div>
                        <span class="font-weight-bolder text-warning py-1 font-size-lg">+28%</span>
                    </div>
                    <div class="d-flex align-items-center bg-light-success rounded p-5 mb-5">
			            <span class="svg-icon svg-icon-success mr-5">
			                <span class="svg-icon svg-icon-lg">
                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                        <rect x="0" y="0" width="24" height="24"></rect>
                                        <path d="M12.2674799,18.2323597 L12.0084872,5.45852451 C12.0004303,5.06114792 12.1504154,4.6768183 12.4255037,4.38993949 L15.0030167,1.70195304 L17.5910752,4.40093695 C17.8599071,4.6812911 18.0095067,5.05499603 18.0083938,5.44341307 L17.9718262,18.2062508 C17.9694575,19.0329966 17.2985816,19.701953 16.4718324,19.701953 L13.7671717,19.701953 C12.9505952,19.701953 12.2840328,19.0487684 12.2674799,18.2323597 Z" fill="#000000" fill-rule="nonzero" transform="translate(14.701953, 10.701953) rotate(-135.000000) translate(-14.701953, -10.701953) "></path>
                                        <path d="M12.9,2 C13.4522847,2 13.9,2.44771525 13.9,3 C13.9,3.55228475 13.4522847,4 12.9,4 L6,4 C4.8954305,4 4,4.8954305 4,6 L4,18 C4,19.1045695 4.8954305,20 6,20 L18,20 C19.1045695,20 20,19.1045695 20,18 L20,13 C20,12.4477153 20.4477153,12 21,12 C21.5522847,12 22,12.4477153 22,13 L22,18 C22,20.209139 20.209139,22 18,22 L6,22 C3.790861,22 2,20.209139 2,18 L2,6 C2,3.790861 3.790861,2 6,2 L12.9,2 Z" fill="#000000" fill-rule="nonzero" opacity="0.3"></path>
                                    </g>
                                </svg>
                            </span>
                        </span>
                        <div class="d-flex flex-column flex-grow-1 mr-2">
                            <a href="#" class="font-weight-normal text-dark-75 text-hover-primary font-size-lg mb-1">برای مردم خواهد بود</a>
                            <span class="text-muted font-size-sm">موعد 2 روز</span>
                        </div>
                        <span class="font-weight-bolder text-success py-1 font-size-lg">+50%</span>
                    </div>
                    <div class="d-flex align-items-center bg-light-danger rounded p-5 mb-5">
			            <span class="svg-icon svg-icon-danger mr-5">
			                <span class="svg-icon svg-icon-lg">
                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                        <rect x="0" y="0" width="24" height="24"></rect>
                                        <path d="M16,15.6315789 L16,12 C16,10.3431458 14.6568542,9 13,9 L6.16183229,9 L6.16183229,5.52631579 C6.16183229,4.13107011 7.29290239,3 8.68814808,3 L20.4776218,3 C21.8728674,3 23.0039375,4.13107011 23.0039375,5.52631579 L23.0039375,13.1052632 L23.0206157,17.786793 C23.0215995,18.0629336 22.7985408,18.2875874 22.5224001,18.2885711 C22.3891754,18.2890457 22.2612702,18.2363324 22.1670655,18.1421277 L19.6565168,15.6315789 L16,15.6315789 Z" fill="#000000"></path>
                                        <path d="M1.98505595,18 L1.98505595,13 C1.98505595,11.8954305 2.88048645,11 3.98505595,11 L11.9850559,11 C13.0896254,11 13.9850559,11.8954305 13.9850559,13 L13.9850559,18 C13.9850559,19.1045695 13.0896254,20 11.9850559,20 L4.10078614,20 L2.85693427,21.1905292 C2.65744295,21.3814685 2.34093638,21.3745358 2.14999706,21.1750444 C2.06092565,21.0819836 2.01120804,20.958136 2.01120804,20.8293182 L2.01120804,18.32426 C1.99400175,18.2187196 1.98505595,18.1104045 1.98505595,18 Z M6.5,14 C6.22385763,14 6,14.2238576 6,14.5 C6,14.7761424 6.22385763,15 6.5,15 L11.5,15 C11.7761424,15 12,14.7761424 12,14.5 C12,14.2238576 11.7761424,14 11.5,14 L6.5,14 Z M9.5,16 C9.22385763,16 9,16.2238576 9,16.5 C9,16.7761424 9.22385763,17 9.5,17 L11.5,17 C11.7761424,17 12,16.7761424 12,16.5 C12,16.2238576 11.7761424,16 11.5,16 L9.5,16 Z" fill="#000000" opacity="0.3"></path>
                                    </g>
                                </svg>
                            </span>
                        </span>
                        <div class="d-flex flex-column flex-grow-1 mr-2">
                            <a href="#" class="font-weight-normel text-dark-75 text-hover-primary font-size-lg mb-1">هدف این خواهد بود که ترغیب شود</a>
                            <span class="text-muted font-size-sm">موعد 2 روز</span>
                        </div>
                        <span class="font-weight-bolder text-danger py-1 font-size-lg">-27%</span>
                    </div>
                    <div class="d-flex align-items-center bg-light-info rounded p-5">
			            <span class="svg-icon svg-icon-info mr-5">
			                <span class="svg-icon svg-icon-lg">
                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                        <rect x="0" y="0" width="24" height="24"></rect>
                                        <path d="M11.7573593,15.2426407 L8.75735931,15.2426407 C8.20507456,15.2426407 7.75735931,15.6903559 7.75735931,16.2426407 C7.75735931,16.7949254 8.20507456,17.2426407 8.75735931,17.2426407 L11.7573593,17.2426407 L11.7573593,18.2426407 C11.7573593,19.3472102 10.8619288,20.2426407 9.75735931,20.2426407 L5.75735931,20.2426407 C4.65278981,20.2426407 3.75735931,19.3472102 3.75735931,18.2426407 L3.75735931,14.2426407 C3.75735931,13.1380712 4.65278981,12.2426407 5.75735931,12.2426407 L9.75735931,12.2426407 C10.8619288,12.2426407 11.7573593,13.1380712 11.7573593,14.2426407 L11.7573593,15.2426407 Z" fill="#000000" opacity="0.3" transform="translate(7.757359, 16.242641) rotate(-45.000000) translate(-7.757359, -16.242641) "></path>
                                        <path d="M12.2426407,8.75735931 L15.2426407,8.75735931 C15.7949254,8.75735931 16.2426407,8.30964406 16.2426407,7.75735931 C16.2426407,7.20507456 15.7949254,6.75735931 15.2426407,6.75735931 L12.2426407,6.75735931 L12.2426407,5.75735931 C12.2426407,4.65278981 13.1380712,3.75735931 14.2426407,3.75735931 L18.2426407,3.75735931 C19.3472102,3.75735931 20.2426407,4.65278981 20.2426407,5.75735931 L20.2426407,9.75735931 C20.2426407,10.8619288 19.3472102,11.7573593 18.2426407,11.7573593 L14.2426407,11.7573593 C13.1380712,11.7573593 12.2426407,10.8619288 12.2426407,9.75735931 L12.2426407,8.75735931 Z" fill="#000000" transform="translate(16.242641, 7.757359) rotate(-45.000000) translate(-16.242641, -7.757359) "></path>
                                        <path d="M5.89339828,3.42893219 C6.44568303,3.42893219 6.89339828,3.87664744 6.89339828,4.42893219 L6.89339828,6.42893219 C6.89339828,6.98121694 6.44568303,7.42893219 5.89339828,7.42893219 C5.34111353,7.42893219 4.89339828,6.98121694 4.89339828,6.42893219 L4.89339828,4.42893219 C4.89339828,3.87664744 5.34111353,3.42893219 5.89339828,3.42893219 Z M11.4289322,5.13603897 C11.8194565,5.52656326 11.8194565,6.15972824 11.4289322,6.55025253 L10.0147186,7.96446609 C9.62419433,8.35499039 8.99102936,8.35499039 8.60050506,7.96446609 C8.20998077,7.5739418 8.20998077,6.94077682 8.60050506,6.55025253 L10.0147186,5.13603897 C10.4052429,4.74551468 11.0384079,4.74551468 11.4289322,5.13603897 Z M0.600505063,5.13603897 C0.991029355,4.74551468 1.62419433,4.74551468 2.01471863,5.13603897 L3.42893219,6.55025253 C3.81945648,6.94077682 3.81945648,7.5739418 3.42893219,7.96446609 C3.0384079,8.35499039 2.40524292,8.35499039 2.01471863,7.96446609 L0.600505063,6.55025253 C0.209980772,6.15972824 0.209980772,5.52656326 0.600505063,5.13603897 Z" fill="#000000" opacity="0.3" transform="translate(6.014719, 5.843146) rotate(-45.000000) translate(-6.014719, -5.843146) "></path>
                                        <path d="M17.9142136,15.4497475 C18.4664983,15.4497475 18.9142136,15.8974627 18.9142136,16.4497475 L18.9142136,18.4497475 C18.9142136,19.0020322 18.4664983,19.4497475 17.9142136,19.4497475 C17.3619288,19.4497475 16.9142136,19.0020322 16.9142136,18.4497475 L16.9142136,16.4497475 C16.9142136,15.8974627 17.3619288,15.4497475 17.9142136,15.4497475 Z M23.4497475,17.1568542 C23.8402718,17.5473785 23.8402718,18.1805435 23.4497475,18.5710678 L22.0355339,19.9852814 C21.6450096,20.3758057 21.0118446,20.3758057 20.6213203,19.9852814 C20.2307961,19.5947571 20.2307961,18.9615921 20.6213203,18.5710678 L22.0355339,17.1568542 C22.4260582,16.76633 23.0592232,16.76633 23.4497475,17.1568542 Z M12.6213203,17.1568542 C13.0118446,16.76633 13.6450096,16.76633 14.0355339,17.1568542 L15.4497475,18.5710678 C15.8402718,18.9615921 15.8402718,19.5947571 15.4497475,19.9852814 C15.0592232,20.3758057 14.4260582,20.3758057 14.0355339,19.9852814 L12.6213203,18.5710678 C12.2307961,18.1805435 12.2307961,17.5473785 12.6213203,17.1568542 Z" fill="#000000" opacity="0.3" transform="translate(18.035534, 17.863961) scale(1, -1) rotate(45.000000) translate(-18.035534, -17.863961) "></path>
                                    </g>
                                </svg>
                            </span>
                        </span>
                        <div class="d-flex flex-column flex-grow-1 mr-2">
                            <a href="#" class="font-weight-normel text-dark-75 text-hover-primary font-size-lg mb-1">بهترین محصول</a>
                            <span class="text-muted font-size-sm">موعد 2 روز</span>
                        </div>
                        <span class="font-weight-bolder text-info py-1 font-size-lg">+8%</span>
                    </div>
                </div>
            </div>
            <div class="tab-pane fade pt-2 pr-5 mr-n5 scroll" id="kt_quick_panel_notifications" role="tabpanel" style="height: auto; overflow: hidden;">
                <div class="navi navi-icon-circle navi-spacer-x-0">
                    <a href="#" class="navi-item">
                        <div class="navi-link rounded">
                            <div class="symbol symbol-50 mr-3">
                                <div class="symbol-label"><i class="flaticon-bell text-success icon-lg"></i></div>
                            </div>
                            <div class="navi-text">
                                <div class="font-weight-bold font-size-lg">
                                    5 گزارش تولید شده توسط کاربر جدید
                                </div>
                                <div class="text-muted">
                                    گزارش ها بر اساس فروش
                                </div>
                            </div>
                        </div>
                    </a>
                    <a href="#" class="navi-item">
                        <div class="navi-link rounded">
                            <div class="symbol symbol-50 mr-3">
                                <div class="symbol-label"><i class="flaticon2-box text-danger icon-lg"></i></div>
                            </div>
                            <div class="navi-text">
                                <div class="font-weight-bold  font-size-lg">
                                    2 موارد جدید ارسال شد
                                </div>
                                <div class="text-muted">
                                    توسط محمد رضایی
                                </div>
                            </div>
                        </div>
                    </a>
                    <a href="#" class="navi-item">
                        <div class="navi-link rounded">
                            <div class="symbol symbol-50 mr-3">
                                <div class="symbol-label"><i class="flaticon-psd text-primary icon-lg"></i></div>
                            </div>
                            <div class="navi-text">
                                <div class="font-weight-bold  font-size-lg">
                                    فایل های ایجاد شده
                                </div>
                                <div class="text-muted">
                                    گزارش ها بر اساس فروش
                                </div>
                            </div>
                        </div>
                    </a>
                    <a href="#" class="navi-item">
                        <div class="navi-link rounded">
                            <div class="symbol symbol-50 mr-3">
                                <div class="symbol-label"><i class="flaticon2-supermarket text-warning icon-lg"></i></div>
                            </div>
                            <div class="navi-text">
                                <div class="font-weight-bold  font-size-lg">
                                    دلار2900 ارزش محصولات فروخته شده
                                </div>
                                <div class="text-muted">
                                    جمع آوری 234 مورد
                                </div>
                            </div>
                        </div>
                    </a>
                    <a href="#" class="navi-item">
                        <div class="navi-link rounded">
                            <div class="symbol symbol-50 mr-3">
                                <div class="symbol-label"><i class="flaticon-paper-plane-1 text-success icon-lg"></i></div>
                            </div>
                            <div class="navi-text">
                                <div class="font-weight-bold  font-size-lg">
                                    میانگین زمان پاسخگویی 4.5 ساعت
                                </div>
                                <div class="text-muted">
                                    فاستوست باری است
                                </div>
                            </div>
                        </div>
                    </a>
                    <a href="#" class="navi-item">
                        <div class="navi-link rounded">
                            <div class="symbol symbol-50 mr-3">
                                <div class="symbol-label"><i class="flaticon-safe-shield-protection text-danger icon-lg"></i></div>
                            </div>
                            <div class="navi-text">
                                <div class="font-weight-bold  font-size-lg">
                                    3 هشدارهای دفاعی
                                </div>
                                <div class="text-muted">
                                    هفته گذشته 40٪ هشدار کمتری دارد
                                </div>
                            </div>
                        </div>
                    </a>
                    <a href="#" class="navi-item">
                        <div class="navi-link rounded">
                            <div class="symbol symbol-50 mr-3">
                                <div class="symbol-label"><i class="flaticon-notepad text-primary icon-lg"></i></div>
                            </div>
                            <div class="navi-text">
                                <div class="font-weight-bold  font-size-lg">
                                    میانگین 4 پست وبلاگ برای هر نویسنده
                                </div>
                                <div class="text-muted">
                                    12 بار ارسال شده است
                                </div>
                            </div>
                        </div>
                    </a>
                    <a href="#" class="navi-item">
                        <div class="navi-link rounded">
                            <div class="symbol symbol-50 mr-3">
                                <div class="symbol-label"><i class="flaticon-users-1 text-warning icon-lg"></i></div>
                            </div>
                            <div class="navi-text">
                                <div class="font-weight-bold  font-size-lg">
                                    هفته گذشته 16 نویسنده پیوستند
                                </div>
                                <div class="text-muted">
                                    طراح
                                </div>
                            </div>
                        </div>
                    </a>
                    <a href="#" class="navi-item">
                        <div class="navi-link rounded">
                            <div class="symbol symbol-50 mr-3">
                                <div class="symbol-label"><i class="flaticon2-box text-info icon-lg"></i></div>
                            </div>
                            <div class="navi-text">
                                <div class="font-weight-bold  font-size-lg">
                                    2 مورد جدید ارسال شده است
                                </div>
                                <div class="text-muted">
                                    توسط محمد رضایی
                                </div>
                            </div>
                        </div>
                    </a>
                    <a href="#" class="navi-item">
                        <div class="navi-link rounded">
                            <div class="symbol symbol-50 mr-3">
                                <div class="symbol-label"><i class="flaticon2-download text-success icon-lg"></i></div>
                            </div>
                            <div class="navi-text">
                                <div class="font-weight-bold  font-size-lg">
                                    حجم دانلودها 2 گیگ
                                </div>
                                <div class="text-muted">
                                    مفاهیم بنیادی
                                </div>
                            </div>
                        </div>
                    </a>
                    <a href="#" class="navi-item">
                        <div class="navi-link rounded">
                            <div class="symbol symbol-50 mr-3">
                                <div class="symbol-label"><i class="flaticon2-supermarket text-danger icon-lg"></i></div>
                            </div>
                            <div class="navi-text">
                                <div class="font-weight-bold  font-size-lg">
                                    دلار2900 ارزش محصولات فروخته شده
                                </div>
                                <div class="text-muted">
                                    جمع آوری 234 مورد
                                </div>
                            </div>
                        </div>
                    </a>
                    <a href="#" class="navi-item">
                        <div class="navi-link rounded">
                            <div class="symbol symbol-50 mr-3">
                                <div class="symbol-label"><i class="flaticon-bell text-primary icon-lg"></i></div>
                            </div>
                            <div class="navi-text">
                                <div class="font-weight-bold  font-size-lg">
                                    7 گزارش تولید شده توسط کاربر جدید
                                </div>
                                <div class="text-muted">
                                    گزارش ها بر اساس فروش
                                </div>
                            </div>
                        </div>
                    </a>
                    <a href="#" class="navi-item">
                        <div class="navi-link rounded">
                            <div class="symbol symbol-50 mr-3">
                                <div class="symbol-label"><i class="flaticon-paper-plane-1 text-success icon-lg"></i></div>
                            </div>
                            <div class="navi-text">
                                <div class="font-weight-bold  font-size-lg">
                                    میانگین زمان پاسخگویی 4.5 ساعت
                                </div>
                                <div class="text-muted">
                                    فاستوست باری است
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
            <div class="tab-pane fade pt-3 pr-5 mr-n5 scroll" id="kt_quick_panel_settings" role="tabpanel" style="height: auto; overflow: hidden;">
                <form class="form">
                    <div>
                        <h5 class="font-weight-bold mb-3">مراقبت از مشتری</h5>
                        <div class="form-group mb-0 row align-items-center">
                            <label class="col-8 col-form-label">فعال کردن اعلان ها:</label>
                            <div class="col-4 d-flex justify-content-end">
                                <span class="switch switch-success switch-sm">
                                    <label>
                                        <input type="checkbox" checked="checked" name="select">
										<span></span>
									</label>
								</span>
                            </div>
                        </div>
                        <div class="form-group mb-0 row align-items-center">
                            <label class="col-8 col-form-label">فعال کردن ردیابی:</label>
                            <div class="col-4 d-flex justify-content-end">
                                <span class="switch switch-success switch-sm">
                                    <label>
                                        <input type="checkbox" name="quick_panel_notifications_2">
										<span></span>
									</label>
								</span>
                            </div>
                        </div>
                        <div class="form-group mb-0 row align-items-center">
                            <label class="col-8 col-form-label">پرتال پشتیبانی</label>
                            <div class="col-4 d-flex justify-content-end">
                                <span class="switch switch-success switch-sm">
                                    <label>
                                        <input type="checkbox" checked="checked" name="select">
										<span></span>
									</label>
								</span>
                            </div>
                        </div>
                    </div>
                    <div class="separator separator-dashed my-6"></div>
                    <div class="pt-2">
                        <h5 class="font-weight-bold mb-3">گزارشات</h5>
                        <div class="form-group mb-0 row align-items-center">
                            <label class="col-8 col-form-label">گزارش عمومیات:</label>
                            <div class="col-4 d-flex justify-content-end">
                                <span class="switch switch-sm switch-danger">
                                    <label>
                                        <input type="checkbox" checked="checked" name="select">
										<span></span>
									</label>
								</span>
                            </div>
                        </div>
                        <div class="form-group mb-0 row align-items-center">
                            <label class="col-8 col-form-label">فعال سازی خروچی گزارش</label>
                            <div class="col-4 d-flex justify-content-end">
                                <span class="switch switch-sm switch-danger">
                                    <label>
                                        <input type="checkbox" name="select">
										<span></span>
									</label>
								</span>
                            </div>
                        </div>
                        <div class="form-group mb-0 row align-items-center">
                            <label class="col-8 col-form-label">اجازه جمع آوری داده ها:</label>
                            <div class="col-4 d-flex justify-content-end">
                                <span class="switch switch-sm switch-danger">
                                    <label>
                                        <input type="checkbox" checked="checked" name="select">
										<span></span>
									</label>
								</span>
                            </div>
                        </div>
                    </div>
                    <div class="separator separator-dashed my-6"></div>
                    <div class="pt-2">
                        <h5 class="font-weight-bold mb-3">اعضا</h5>
                        <div class="form-group mb-0 row align-items-center">
                            <label class="col-8 col-form-label">فعال سازی عضویت اعضا</label>
                            <div class="col-4 d-flex justify-content-end">
                                <span class="switch switch-sm switch-primary">
                                    <label>
                                        <input type="checkbox" checked="checked" name="select">
										<span></span>
									</label>
								</span>
                            </div>
                        </div>
                        <div class="form-group mb-0 row align-items-center">
                            <label class="col-8 col-form-label">اجازه نظر دهی</label>
                            <div class="col-4 d-flex justify-content-end">
                                <span class="switch switch-sm switch-primary">
                                    <label>
                                        <input type="checkbox" name="select">
										<span></span>
									</label>
								</span>
                            </div>
                        </div>
                        <div class="form-group mb-0 row align-items-center">
                            <label class="col-8 col-form-label">فعال کردن پرتال مشتری</label>
                            <div class="col-4 d-flex justify-content-end">
                                <span class="switch switch-sm switch-primary">
                                    <label>
                                        <input type="checkbox" checked="checked" name="select">
										<span></span>
									</label>
								</span>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<div class="modal modal-sticky modal-sticky-bottom-right" id="kt_chat_modal" role="dialog" data-backdrop="false">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="card card-custom">
                <div class="card-header align-items-center px-4 py-3">
                    <div class="text-left flex-grow-1">
                        <div class="dropdown dropdown-inline">
                            <button type="button" class="btn btn-clean btn-sm btn-icon btn-icon-md" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="svg-icon svg-icon-lg">
                                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                            <polygon points="0 0 24 0 24 24 0 24"></polygon>
                                            <path d="M18,8 L16,8 C15.4477153,8 15,7.55228475 15,7 C15,6.44771525 15.4477153,6 16,6 L18,6 L18,4 C18,3.44771525 18.4477153,3 19,3 C19.5522847,3 20,3.44771525 20,4 L20,6 L22,6 C22.5522847,6 23,6.44771525 23,7 C23,7.55228475 22.5522847,8 22,8 L20,8 L20,10 C20,10.5522847 19.5522847,11 19,11 C18.4477153,11 18,10.5522847 18,10 L18,8 Z M9,11 C6.790861,11 5,9.209139 5,7 C5,4.790861 6.790861,3 9,3 C11.209139,3 13,4.790861 13,7 C13,9.209139 11.209139,11 9,11 Z" fill="#000000" fill-rule="nonzero" opacity="0.3"></path>
                                            <path d="M0.00065168429,20.1992055 C0.388258525,15.4265159 4.26191235,13 8.98334134,13 C13.7712164,13 17.7048837,15.2931929 17.9979143,20.2 C18.0095879,20.3954741 17.9979143,21 17.2466999,21 C13.541124,21 8.03472472,21 0.727502227,21 C0.476712155,21 -0.0204617505,20.45918 0.00065168429,20.1992055 Z" fill="#000000" fill-rule="nonzero"></path>
                                        </g>
                                    </svg>
                                </span>
                            </button>
                            <div class="dropdown-menu p-0 m-0 dropdown-menu-right dropdown-menu-md">
                                <ul class="navi navi-hover py-5">
                                    <li class="navi-item">
                                        <a href="#" class="navi-link">
                                            <span class="navi-icon"><i class="flaticon2-drop"></i></span>
                                            <span class="navi-text">گروه جدید</span>
                                        </a>
                                    </li>
                                    <li class="navi-item">
                                        <a href="#" class="navi-link">
                                            <span class="navi-icon"><i class="flaticon2-list-3"></i></span>
                                            <span class="navi-text">مخاطب</span>
                                        </a>
                                    </li>
                                    <li class="navi-item">
                                        <a href="#" class="navi-link">
                                            <span class="navi-icon"><i class="flaticon2-rocket-1"></i></span>
                                            <span class="navi-text">گروه ها</span>
                                            <span class="navi-link-badge">
                                                <span class="label label-light-primary label-inline font-weight-bold">جدید</span>
                                            </span>
                                        </a>
                                    </li>
                                    <li class="navi-item">
                                        <a href="#" class="navi-link">
                                            <span class="navi-icon"><i class="flaticon2-bell-2"></i></span>
                                            <span class="navi-text">تماس ها</span>
                                        </a>
                                    </li>
                                    <li class="navi-item">
                                        <a href="#" class="navi-link">
                                            <span class="navi-icon"><i class="flaticon2-gear"></i></span>
                                            <span class="navi-text">تنظیمات</span>
                                        </a>
                                    </li>
                                    <li class="navi-separator my-3"></li>
                                    <li class="navi-item">
                                        <a href="#" class="navi-link">
                                            <span class="navi-icon"><i class="flaticon2-magnifier-tool"></i></span>
                                            <span class="navi-text">راهنما</span>
                                        </a>
                                    </li>
                                    <li class="navi-item">
                                        <a href="#" class="navi-link">
                                            <span class="navi-icon"><i class="flaticon2-bell-2"></i></span>
                                            <span class="navi-text">حریم خصوصی</span>
                                            <span class="navi-link-badge">
                                                <span class="label label-light-danger label-rounded font-weight-bold">5</span>
                                            </span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="text-center flex-grow-1">
                        <div class="text-dark-75 font-weight-bold font-size-h5">محسن برومند</div>
                        <div>
                            <span class="label label-dot label-success"></span>
                            <span class="font-weight-bold text-muted font-size-sm">فعال</span>
                        </div>
                    </div>
                    <div class="text-right flex-grow-1">
                        <button type="button" class="btn btn-clean btn-sm btn-icon btn-icon-md" data-dismiss="modal">
                            <i class="ki ki-close icon-1x"></i>
                        </button>
                    </div>
                </div>
                <div class="card-footer align-items-center">
                    <textarea class="form-control border-0 p-0" rows="2" placeholder="تایپ یک پیام"></textarea>
                    <div class="d-flex align-items-center justify-content-between mt-5">
                        <div class="mr-3">
                            <a href="#" class="btn btn-clean btn-icon btn-md mr-1"><i class="flaticon2-photograph icon-lg"></i></a>
                            <a href="#" class="btn btn-clean btn-icon btn-md"><i class="flaticon2-photo-camera  icon-lg"></i></a>
                        </div>
                        <div>
                            <button type="button" class="btn btn-primary btn-md text-uppercase font-weight-bold chat-send py-2 px-6">ارسال</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div id="kt_scrolltop" class="scrolltop">
	<span class="svg-icon">
        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
            <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                <polygon points="0 0 24 0 24 24 0 24"></polygon>
                <rect fill="#000000" opacity="0.3" x="11" y="10" width="2" height="10" rx="1"></rect>
                <path d="M6.70710678,12.7071068 C6.31658249,13.0976311 5.68341751,13.0976311 5.29289322,12.7071068 C4.90236893,12.3165825 4.90236893,11.6834175 5.29289322,11.2928932 L11.2928932,5.29289322 C11.6714722,4.91431428 12.2810586,4.90106866 12.6757246,5.26284586 L18.6757246,10.7628459 C19.0828436,11.1360383 19.1103465,11.7686056 18.7371541,12.1757246 C18.3639617,12.5828436 17.7313944,12.6103465 17.3242754,12.2371541 L12.0300757,7.38413782 L6.70710678,12.7071068 Z" fill="#000000" fill-rule="nonzero"></path>
            </g>
        </svg>
    </span>
</div>
<ul class="sticky-toolbar nav flex-column pl-2 pr-2 pt-3 pb-3 mt-4">
    <li class="nav-item mb-2" id="kt_demo_panel_toggle" data-toggle="tooltip" title="" data-placement="right" data-original-title="نسخه های نمایشی بیشتر را بررسی کنید">
        <a class="btn btn-sm btn-icon btn-bg-light btn-icon-success btn-hover-success" href="#">
            <i class="flaticon2-drop"></i>
        </a>
    </li>
    <li class="nav-item mb-2" data-toggle="tooltip" title="" data-placement="left" data-original-title="چیدمان سازنده">
        <a class="btn btn-sm btn-icon btn-bg-light btn-icon-primary btn-hover-primary" href="https://preview.keenthemes.com/metronic/preview/demo1/builder.html" target="_blank">
            <i class="flaticon2-gear"></i>
        </a>
    </li>
    <li class="nav-item mb-2" data-toggle="tooltip" title="" data-placement="left" data-original-title="مستندات">
        <a class="btn btn-sm btn-icon btn-bg-light btn-icon-warning btn-hover-warning" href="https://keenthemes.com/metronic/?page=docs" target="_blank">
            <i class="flaticon2-telegram-logo"></i>
        </a>
    </li>
    <li class="nav-item" id="kt_sticky_toolbar_chat_toggler" data-toggle="tooltip" title="" data-placement="left" data-original-title="چت نمونه">
        <a class="btn btn-sm btn-icon btn-bg-light btn-icon-danger btn-hover-danger" href="#" data-toggle="modal" data-target="#kt_chat_modal">
            <i class="flaticon2-chat-1"></i>
        </a>
    </li>
</ul>
@endsection
