
<!DOCTYPE html>
<!--
Template نام: مترونیک - بوت استرپ 4  جی اس, React, آنگولار 9 & Vueجی اس Admin داشبورد تم
Author: Keenthemes
 طرح: http://www.keenthemes.com/
مخاطب: support@keenthemes.com
دنبال کردن: www.twitter.com/keenthemes
Dribbble: www.dribbble.com/keenthemes
Like: www.facebook.com/keenthemes
خرید: https://www.rtl-theme.com/metronic-admin-html-template/
Renew حمایت کردن: https://www.rtl-theme.com/metronic-admin-html-template/
مجوز: شما must have a valid license purchased only from themeforest(the above link) in order to legally use the theme for your project.
-->
<html direction="rtl" dir="rtl" style="direction: rtl" >
<!--begin::Head-->
<head><base href="../../../../">
    <meta charset="utf-8"/>
    <title>مترونیک | دانش آموزان</title>
    <meta name="description" content="دانش آموزان example"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>

    <!--begin::Fonts-->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700"/>        <!--end::Fonts-->



    <!--begin::Global تم Styles(used by all pages)-->
    <link href="/assets/plugins/global/plugins.bundle.rtl.css?v=7.0.6" rel="stylesheet" type="text/css"/>
    <link href="/assets/plugins/custom/prismjs/prismjs.bundle.rtl.css" rel="stylesheet" type="text/css"/>
    <link href="/assets/css/style.bundle.rtl.css" rel="stylesheet" type="text/css"/>
    <!--end::Global تم Styles-->

    <!--begin::چیدمان تم ها(used by all pages)-->

    <link href="/assets/css/themes/layout/header/base/light.rtl.css" rel="stylesheet" type="text/css"/>
    <link href="/assets/css/themes/layout/header/menu/light.rtl.css" rel="stylesheet" type="text/css"/>
    <link href="/assets/css/themes/layout/brand/dark.rtl.css" rel="stylesheet" type="text/css"/>
    <link href="/assets/css/themes/layout/aside/dark.rtl.css" rel="stylesheet" type="text/css"/>        <!--end::چیدمان تم ها-->

    <link rel="shortcut icon" href="/assets/media/logos/favicon.ico"/>

</head>
<!--end::Head-->

<!--begin::Body-->
<body  id="kt_body"  class="header-fixed header-mobile-fixed subheader-enabled subheader-fixed aside-enabled aside-fixed aside-minimize-hoverable page-loading"  >

<div class="flex-row-fluid ml-lg-8">
    <!--begin::Card-->
    <div class="card card-custom">
        <!--begin::Header-->
        <div class="card-header flex-wrap border-0 pt-6 pb-0">
            <h3 class="card-title align-items-start flex-column">
                <span class="card-label font-weight-bolder text-dark">نوع ویژگی ها</span>
                <span class="text-muted mt-1 font-weight-bold font-size-sm">مدیریت انواع (وابستگی کلید)</span>
            </h3>
            <div class="card-toolbar">
                <div class="dropdown dropdown-inline" data-toggle="tooltip" title="" data-placement="left" data-original-title="افزودن سریع">
                    <!--begin::Trigger مودال-->
                    <a href="#" class="btn btn-success font-weight-bolder font-size-sm" aria-haspopup="true" aria-expanded="false"  data-toggle="modal" data-target="#exampleمودالسفارشیScrollable">
                        افزودن نوع ویژگی جدید
                    </a>
                    <!--end::Trigger مودال-->
                    <!--begin::مودال Content-->
                    <div class="modal fade" id="exampleمودالسفارشیScrollable" tabindex="-1" role="dialog" aria-labelledby="staticبازگشتdrop" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered modal-lg" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleمودالLabel">افزودن انواع ویژگی</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="نزدیک">
                                        <i aria-hidden="true" class="ki ki-close"></i>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <div data-scroll="true" data-height="600">
                                        <form class="form pt-9" method="post" action="\attributes">
                                            @csrf
                                            <div class="form-group row">
                                                <label class="col-xl-3 col-lg-3 text-right col-form-label">نام</label>
                                                <div class="col-lg-9 col-xl-6">
                                                    <input class="form-control form-control-lg form-control-solid" value="{{old('title')}}" type="text" placeholder="ویژگی" name="title" />
                                                </div>
                                            </div>
                                            <div class="separator separator-dashed my-10"></div>
                                            <!--begin::Heading-->
                                            <div class="row">
                                                <div class="col-lg-9 col-xl-6 offset-xl-3">
                                                    <h3 class="font-size-h6 mb-5">نوع وابستگی:</h3>
                                                </div>
                                            </div>
                                            <!--end::Heading-->
                                            <div class="form-group row">
                                                <label class="col-xl-3 col-lg-3 text-right col-form-label">چند نوعی</label>
                                                <div class="col-lg-9 col-xl-6">
                                                       <span class="switch">
                                                       <label>
                                                       <input type="checkbox" checked="checked" value="1" name="type_att"/>
                                                       <span></span>
                                                       </label>
                                                       </span>
                                                </div>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-light-primary font-weight-bold" data-dismiss="modal">لغو</button>
                                                <button type="submit" class="btn btn-primary font-weight-bold">ارسال</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--end::مودال Content-->
                </div>
            </div>
        </div>
        <!--end::Header-->

        <!--begin::Body-->
        <div class="card-body">
            <!--begin: جستجو Form-->
            <!--begin::جستجو Form-->
            <div class="mb-10">
                <div class="row align-items-center">
                    <div class="col-lg-9 col-xl-8">
                        <div class="row align-items-center">
                            <div class="col-md-4 my-2 my-md-0">
                                <div class="input-icon">
                                    <input type="text" class="form-control form-control-solid" placeholder="جستجو..." id="kt_datatable_search_query" />
                                    <span><i class="flaticon2-search-1 text-muted"></i></span>
                                </div>
                            </div>
                            <div class="col-md-4 my-2 my-md-0">
                                <select class="form-control form-control-solid" id="kt_datatable_search_type">
                                    <option value="" disabled selected>نوع</option>
                                    <option value="4">چند نوعی</option>
                                    <option value="5">تک نوعی</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-xl-4 mt-5 mt-lg-0">
                        <a href="#" class="btn btn-light-primary px-6 font-weight-bold">
                            جستجو
                        </a>
                    </div>
                </div>
            </div>
            <!--end::جستجو Form-->
            <!--end: جستجو Form-->
            <!--begin: جدول داده ها-->
            <div class="datatable datatable-bordered datatable-head-custom datatable-default datatable-primary datatable-loaded" id="kt_datatable" style="">
                @if(Session::has('attribute_success'))
                    <div class="alert alert-success">
                        <div>{{Session('attribute_success')}}</div>
                    </div>
                @elseif(Session::has('attribute_error'))
                    <div class="alert alert-error">
                        <div>{{Session('attribute_error')}}</div>
                    </div>
                @endif
                <table class="datatable-table" style="display: block;">
                    <thead class="datatable-head">
                        <tr class="datatable-row" style="left: 0px;">
                            <th class="datatable-cell datatable-cell-sort"><span>ردیف</span></th>
                            <th data-field="FacultyAgent" class="datatable-cell datatable-cell-sort" >
                                <span>ویژگی</span>
                            </th>
                            <th data-field="Status" data-autohide-disabled="false" class="datatable-cell datatable-cell-sort">
                                <span>وضعیت</span>
                            </th>
                            <th data-field="Actions" data-autohide-disabled="false" class="datatable-cell datatable-cell-sort">
                                <span>عملیات</span>
                            </th>
                        </tr>
                    </thead>
                    <tbody class="datatable-body">
                    @foreach($attributes as $attribute)
                        <tr class="datatable-row" style="left: 0px;">
                            <td class="datatable-cell datatable-toggle-detail">
                                <a class="datatable-toggle-detail text-center" href="">{{ $loop->index + 1 }}</a>
                            </td>
                            <td data-field="CompanyName" aria-label="Casper-Kerluke" class="datatable-cell">
                                <span class="text-center">
                                    <div class="text-dark-75 font-weight-bolder font-size-lg mb-0">{{$attribute->title}}</div>
                                </span>
                            </td>
                            <td data-field="Status" data-autohide-disabled="false" aria-label="5" class="datatable-cell">
                                <span class="text-center">
                                    <span class="label label-lg font-weight-bold  label-light-danger label-inline">{{$attribute->type}}</span>
                                </span>
                            </td>
                            <td data-field="Actions" data-autohide-disabled="false" aria-label="null" class="datatable-cell text-center">
                                <span style="overflow: visible; position: relative;" class="text-center">
                                    <a href="{{route('attributes.edit',$attribute->id)}}" class="btn btn-sm btn-default btn-text-primary btn-hover-primary btn-icon mr-2" title="Edit details">
                                        <span class="svg-icon svg-icon-md">
                                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                    <rect x="0" y="0" width="24" height="24"></rect>
                                                    <path d="M12.2674799,18.2323597 L12.0084872,5.45852451 C12.0004303,5.06114792 12.1504154,4.6768183 12.4255037,4.38993949 L15.0030167,1.70195304 L17.5910752,4.40093695 C17.8599071,4.6812911 18.0095067,5.05499603 18.0083938,5.44341307 L17.9718262,18.2062508 C17.9694575,19.0329966 17.2985816,19.701953 16.4718324,19.701953 L13.7671717,19.701953 C12.9505952,19.701953 12.2840328,19.0487684 12.2674799,18.2323597 Z" fill="#000000" fill-rule="nonzero" transform="translate(14.701953, 10.701953) rotate(-135.000000) translate(-14.701953, -10.701953) "></path>
                                                    <path d="M12.9,2 C13.4522847,2 13.9,2.44771525 13.9,3 C13.9,3.55228475 13.4522847,4 12.9,4 L6,4 C4.8954305,4 4,4.8954305 4,6 L4,18 C4,19.1045695 4.8954305,20 6,20 L18,20 C19.1045695,20 20,19.1045695 20,18 L20,13 C20,12.4477153 20.4477153,12 21,12 C21.5522847,12 22,12.4477153 22,13 L22,18 C22,20.209139 20.209139,22 18,22 L6,22 C3.790861,22 2,20.209139 2,18 L2,6 C2,3.790861 3.790861,2 6,2 L12.9,2 Z" fill="#000000" fill-rule="nonzero" opacity="0.3"></path>
                                                </g>
                                            </svg>
                                        </span>
                                    </a>
                                    <a href="{{route('attributes.delete',$attribute->id)}}" class="btn btn-sm btn-default btn-text-primary btn-hover-primary btn-icon text-center" title="Delete">
                                        <span class="svg-icon svg-icon-md">
                                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                    <rect x="0" y="0" width="24" height="24"></rect>
                                                    <path d="M6,8 L6,20.5 C6,21.3284271 6.67157288,22 7.5,22 L16.5,22 C17.3284271,22 18,21.3284271 18,20.5 L18,8 L6,8 Z" fill="#000000" fill-rule="nonzero"></path>
                                                    <path d="M14,4.5 L14,4 C14,3.44771525 13.5522847,3 13,3 L11,3 C10.4477153,3 10,3.44771525 10,4 L10,4.5 L5.5,4.5 C5.22385763,4.5 5,4.72385763 5,5 L5,5.5 C5,5.77614237 5.22385763,6 5.5,6 L18.5,6 C18.7761424,6 19,5.77614237 19,5.5 L19,5 C19,4.72385763 18.7761424,4.5 18.5,4.5 L14,4.5 Z" fill="#000000" opacity="0.3"></path>
                                                </g>
                                            </svg>
                                        </span>
                                    </a>
                                </span>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
                <div class="datatable-pager datatable-paging-loaded">
                    <ul class="datatable-pager-nav mb-5 mb-sm-0">
                        <li>
                            <a title="اول" class="datatable-pager-link datatable-pager-link-first datatable-pager-link-disabled" data-page="1" disabled="disabled">
                                <i class="flaticon2-fast-next"></i>
                            </a>
                        </li>
                        <li>
                            <a title="قبلی" class="datatable-pager-link datatable-pager-link-prev datatable-pager-link-disabled" data-page="1" disabled="disabled">
                                <i class="flaticon2-next"></i>
                            </a>
                        </li>
                        <li style=""></li>
                        <li style="display: none;">
                            <input type="text" class="datatable-pager-input form-control" title="شماره صفحه">
                        </li>
                        <li>
                            <a class="datatable-pager-link datatable-pager-link-number datatable-pager-link-active" data-page="1" title="1">1</a>
                        </li>
                        <li>
                            <a class="datatable-pager-link datatable-pager-link-number" data-page="2" title="2">2</a>
                        </li>
                        <li>
                            <a class="datatable-pager-link datatable-pager-link-number" data-page="3" title="3">3</a>
                        </li>
                        <li>
                            <a class="datatable-pager-link datatable-pager-link-number" data-page="4" title="4">4</a>
                        </li>
                        <li>
                            <a class="datatable-pager-link datatable-pager-link-number" data-page="5" title="5">5</a>
                        </li>
                        <li></li>
                        <li>
                            <a title="بعدی" class="datatable-pager-link datatable-pager-link-next" data-page="2">
                                <i class="flaticon2-back"></i>
                            </a>
                        </li>
                        <li>
                            <a title="آخری" class="datatable-pager-link datatable-pager-link-last" data-page="35">
                                <i class="flaticon2-fast-back"></i>
                            </a>
                        </li>
                    </ul>
                    <div class="datatable-pager-info">
                        <div class="dropdown bootstrap-select datatable-pager-size" style="width: 60px;">
                            <select class="selectpicker datatable-pager-size" title="انتخاب اندازه صفحه" data-width="60px" data-container="body" data-selected="10">
                                <option class="bs-title-option" value=""></option>
                                <option value="5">5</option>
                                <option value="10">10</option>
                                <option value="20">20</option>
                                <option value="30">30</option>
                                <option value="50">50</option>
                                <option value="100">100</option>
                            </select>
                            <button type="button" tabindex="-1" class="btn dropdown-toggle btn-light" data-toggle="dropdown" role="combobox" aria-owns="bs-select-1" aria-haspopup="listbox" aria-expanded="false" title="انتخاب اندازه صفحه">
                                <div class="filter-option">
                                    <div class="filter-option-inner">
                                        <div class="filter-option-inner-inner">10</div>
                                    </div>
                                </div>
                            </button>
                            <div class="dropdown-menu ">
                                <div class="inner show" role="listbox" id="bs-select-1" tabindex="-1">
                                    <ul class="dropdown-menu inner show" role="presentation"></ul>
                                </div>
                            </div>
                        </div>
                        <span class="datatable-pager-detail">نمایش 1 - 10 از 350</span>
                    </div>
                </div>
            </div>
            <!--end: جدول داده ها-->
        </div>
        <!--end::Body-->
    </div>
    <!--end::Card-->
</div>

<!--begin::Global Config(global config for global جی اس scripts)-->
<script>
    var KTAppSettings  = {
        "breakpoints": {
            "sm": 576,
            "md": 768,
            "lg": 992,
            "xl": 1200,
            "xxl": 1400
        },
        "colors": {
            "theme": {
                "base": {
                    "white": "#ffffff",
                    "primary": "#3699FF",
                    "secondary": "#E5EAEE",
                    "success": "#1BC5BD",
                    "info": "#8950FC",
                    "warning": "#FFA800",
                    "danger": "#F64E60",
                    "light": "#E4E6EF",
                    "dark": "#181C32"
                },
                "light": {
                    "white": "#ffffff",
                    "primary": "#E1F0FF",
                    "secondary": "#EBEDF3",
                    "success": "#C9F7F5",
                    "info": "#EEE5FF",
                    "warning": "#FFF4DE",
                    "danger": "#FFE2E5",
                    "light": "#F3F6F9",
                    "dark": "#D6D6E0"
                },
                "inverse": {
                    "white": "#ffffff",
                    "primary": "#ffffff",
                    "secondary": "#3F4254",
                    "success": "#ffffff",
                    "info": "#ffffff",
                    "warning": "#ffffff",
                    "danger": "#ffffff",
                    "light": "#464E5F",
                    "dark": "#ffffff"
                }
            },
            "gray": {
                "gray-100": "#F3F6F9",
                "gray-200": "#EBEDF3",
                "gray-300": "#E4E6EF",
                "gray-400": "#D1D3E0",
                "gray-500": "#B5B5C3",
                "gray-600": "#7E8299",
                "gray-700": "#5E6278",
                "gray-800": "#3F4254",
                "gray-900": "#181C32"
            }
        },
        "font-family": "Poppins"
    };
</script>
<!--end::Global Config-->

<!--begin::Global تم Bundle(used by all pages)-->
<script src="/assets/plugins/global/plugins.bundle.js?v=7.0.6"></script>
<script src="/assets/plugins/custom/prismjs/prismjs.bundle.js?v=7.0.6"></script>
<script src="/assets/js/scripts.bundle.js?v=7.0.6"></script>
<!--end::Global تم Bundle-->


<!--begin::Page Scripts(used by this page)-->
<script src="/assets/js/pages/custom/education/school/students.js?v=7.0.6"></script>
</body>

</html>
