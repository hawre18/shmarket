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
                                    <span class="card-label font-weight-bolder text-dark">ویرایش استان</span>
                                </h3>
                                <div class="card-body">
                                    <div class="datatable datatable-bordered datatable-head-custom datatable-default datatable-primary datatable-error datatable-loaded" id="kt_datatable" style="position: static; zoom: 1;">
                                        <table class="datatable-table" style="display: block;">
                                            <thead class="datatable-head">
                                            <tr class="datatable-row" style="left: 0px;">
                                                <th class="datatable-cell datatable-cell-sort text-center">
                                                    <span>استان</span>
                                                </th>
                                                <th class="datatable-cell datatable-cell-sort text-center">
                                                    <span>عملیات</span>
                                                </th>
                                            </tr>
                                            </thead>
                                            <tbody class="datatable-body">
                                            <form method="post" action="\provinces\{{$province->id}}">
                                                @csrf
                                                <input type="hidden" name="_method" value="PATCH">
                                                <tr class="datatable-row" style="left: 0px;">
                                                    <td class="datatable-cell datatable-toggle-detail">
                                                        <input type="text" name="name" class="form-text form-control"  value="{{$province->name}}">
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
    @endsection
</div>
