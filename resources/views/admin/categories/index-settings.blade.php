@extends('layouts.master-admins')
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
                                        <h5 class="modal-title" id="exampleمودالLabel">تعیین ویژگی های دسته بندی {{$category->name}}</h5>
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
                                            <form method="post" action="\categories.saveSetting\{{$category->id}}">
                                                @csrf
                                                <div class="separator separator-dashed my-10"></div>
                                                <div class="form-group row">
                                                    <div class="col-lg-9 col-xl-6">
                                                            <div class="form-group">
                                                                <label for="attributeGroups">تعیین ویژگی های دسته بندی {{$category->name}}</label>
                                                                <select name="attributeGroups[]" class="form-control" multiple>
                                                                    @foreach($attributeGroups as $attributeGroup)
                                                                        <option value="{{$attributeGroup->id}}" @if(in_array($attributeGroup->id,$category->attributeGroups->pluck('id')->toArray())) selected @endif>{{$attributeGroup->title}}</option>
                                                                    @endforeach
                                                                </select>
                                                            </div>
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
                    </div>
                </div>
            </div>
            <div class="card-body">
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
                    @if(Session::has('category_success'))
                        <div class="alert alert-success">
                            <div>
                                {{session('category_success')}}
                                {{Session()->flush()}}
                            </div>
                        </div>
                    @elseif(Session::has('category_error'))
                        <div class="alert alert-danger">
                            <div>
                                {{session('category_error')}}
                                {{Session()->flush()}}
                            </div>
                        </div>
                    @endif
                        <div tabindex="-1">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleمودالLabel">تعیین ویژگی های دسته بندی {{$category->name}}</h5>
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
                                            <form method="post" action="\categories.saveSetting\{{$category->id}}">
                                                @csrf
                                                <div class="separator separator-dashed my-10"></div>
                                                <div class="form-group row">
                                                    <div class="col-lg-9 col-xl-6">
                                                        <div class="form-group">
                                                            <label for="attributeGroups">تعیین ویژگی های دسته بندی {{$category->name}}</label>
                                                            <select name="attributeGroups[]" class="form-control" multiple>
                                                                @foreach($attributeGroups as $attributeGroup)
                                                                    <option value="{{$attributeGroup->id}}" @if(in_array($attributeGroup->id,$category->attributeGroups->pluck('id')->toArray())) selected @endif>{{$attributeGroup->title}}</option>
                                                                @endforeach
                                                            </select>
                                                        </div>
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
        </div>
    </div>
@endsection
