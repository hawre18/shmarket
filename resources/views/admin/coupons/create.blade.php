@extends('layouts.master-admins')
<link rel="stylesheet" href="{{asset('assets/css/dropzone.css')}}">
@section('content')
        <div class="col-sm-9 align-content-center" style="position: relative;right: 18%;">
            <div class="card card-custom">
                <div class="card-header flex-wrap border-0 pt-6 pb-0">
                    <h3 class="card-title align-items-start flex-column">
                        <span class="card-label font-weight-bolder text-dark">نوع ویژگی ها</span>
                        <span class="text-muted mt-1 font-weight-bold font-size-sm">مدیریت انواع (وابستگی کلید)</span>
                    </h3>
                    <div class="card-toolbar">
                        <div class="dropdown dropdown-inline" data-toggle="tooltip" title="" data-placement="left" data-original-title="افزودن سریع">
                            <a href="#" class="btn btn-success font-weight-bolder font-size-sm" aria-haspopup="true" aria-expanded="false"  data-toggle="modal" data-target="#exampleمودالسفارشیScrollable">
                                افزودن نوع ویژگی جدید
                            </a>
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
                                                @if ($errors->any())
                                                    <div class="alert alert-danger">
                                                        <ul>
                                                            @foreach ($errors->all() as $error)
                                                                <li>{{ $error }}</li>
                                                            @endforeach
                                                        </ul>
                                                    </div>
                                                @endif
                                                    <form method="post" action="coupons">
                                                        @csrf
                                                        <div class="form-group">
                                                            <label class="col-xl-3 col-lg-3 text-right col-form-label" for="title">عنوان تخفیف</label>
                                                            <input type="text" name="title" value="{{old('title')}}" class="form-control" placeholder="عنوان تخفیف">
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="code" class="col-xl-3 col-lg-3 text-right col-form-label">کد تخفیف</label>
                                                            <input type="text" name="code" value="{{old('code')}}" class="form-control" placeholder="کد تخفیف"></input>
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="price" class="col-xl-3 col-lg-3 text-right col-form-label">مقدار تخفیف</label>
                                                            <input type="number" name="price" value="{{old('price')}}" class="form-control" placeholder="مقدار تخفیف"></input>
                                                        </div>
                                                        <div class="form-group required">
                                                            <label for="input-gender" class="col-xl-3 col-lg-3 text-right col-form-label">وضعیت</label>
                                                            <input type="radio" name="status" value="1"><span>منتشر شده</span>
                                                            <input type="radio" name="status" value="0"><span>منتشر نشده</span>
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
                <a class="card-body">
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
                    <div class="datatable datatable-bordered datatable-head-custom datatable-default datatable-primary datatable-loaded" id="kt_datatable" style="">
                        @if(Session::has('coupon_success'))
                            <div class="alert alert-success">
                                <div>{{Session('coupon_success')}}</div>
                            </div>
                        @elseif(Session::has('coupon_error'))
                            <div class="alert alert-danger">
                                <div>{{Session('coupon_error')}}</div>
                            </div>
                        @endif
                        <table class="datatable-table" style="display: block;">
                            <thead class="datatable-head">
                            <tr class="datatable-row" style="left: 0px;">
                                <th class="datatable-cell datatable-cell-sort"><span>ردیف</span></th>
                                <th class="datatable-cell datatable-cell-sort"><span>عنوان تخفیف</span></th>
                                <th class="datatable-cell datatable-cell-sort"><span>کد تخفیف</span></th>
                                <th class="datatable-cell datatable-cell-sort"><span>مقدار تخفیف</span></th>
                                <th class="datatable-cell datatable-cell-sort"><span>وضعیت</span></th>
                                <th class="datatable-cell datatable-cell-sort"><span>تغییر وضعیت</span></th>
                                <th data-field="Actions" data-autohide-disabled="false" class="datatable-cell datatable-cell-sort"><span>عملیات</span></th>
                            </tr>
                            </thead>
                            <tbody class="datatable-body">
                            @foreach($coupons as $coupon)
                                <tr class="datatable-row" style="left: 0px;">
                                    <td class="datatable-cell datatable-toggle-detail">
                                        <span class="datatable-toggle-detail text-center">{{ $loop->index + 1 }}</span>
                                    </td>
                                    <td data-field="CompanyName" aria-label="Casper-Kerluke" class="datatable-cell">
                                        <span class="text-center">
                                            <a class="datatable-toggle-detail text-center">{{$coupon->title}}</a>
                                        </span>
                                    </td>
                                    <td data-field="CompanyName" aria-label="Casper-Kerluke" class="datatable-cell">
                                        <span class="text-center">
                                            <a class="datatable-toggle-detail text-center">{{$coupon->code}}</a>
                                        </span>
                                    </td>
                                    <td data-field="CompanyName" aria-label="Casper-Kerluke" class="datatable-cell">
                                        <span class="text-center">
                                            <a class="datatable-toggle-detail text-center">{{$coupon->price}}</a>
                                        </span>
                                    </td>
                                    @if($coupon->status==0)
                                        <td data-field="Status" aria-label="Casper-Kerluke" class="datatable-cell"><span class="align-center label-danger ">غیرفعال</span></td>
                                        <td data-field="Status" aria-label="Casper-Kerluke" class="datatable-cell">
                                            <span class="text-center">
                                                <a class="btn btn-success" href="{{route('coupon.action',[$coupon->id,$status=1])}}">فعال کردن</a>
                                            </span>
                                        </td>
                                    @else
                                        <td data-field="Status" aria-label="Casper-Kerluke" class="datatable-cell"><span class="label label-success">فعال</span></td>
                                        <td data-field="Status" aria-label="Casper-Kerluke" class="datatable-cell"><a class="btn btn-danger" href="{{route('coupon.action',[$coupon->id,$status=0])}}">غیرفعال کردن</a></td>
                                    @endif
                                    <td data-field="Actions" data-autohide-disabled="false" aria-label="null" class="datatable-cell text-center">
                                <span style="overflow: visible; position: relative;" class="text-center">
                                    <a href="{{route('coupons.edit',$coupon->id)}}" class="btn btn-sm btn-default btn-text-primary btn-hover-primary btn-icon mr-2" title="Edit details">
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
                                    <a href="{{route('coupons.delete',$coupon->id)}}" class="btn btn-sm btn-default btn-text-primary btn-hover-primary btn-icon text-center" title="Delete">
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
                </a>
            </div>
        </div>
@endsection

