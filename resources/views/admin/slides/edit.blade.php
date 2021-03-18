@extends('layouts.master-admins')
<link rel="stylesheet" href="{{asset('assets/css/dropzone.css')}}">
@section('content')
<div class="d-flex flex-column flex-row-fluid wrapper" id="app">
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
                                                    <label>عنوان اسلاید</label>
                                                </th>
                                                <th class="datatable-cell datatable-cell-sort text-center">
                                                    <label>وضعیت</label>
                                                </th>
                                                <th class="datatable-cell datatable-cell-sort text-center">
                                                    <label>عکس اسلایدها</label>
                                                </th>

                                                <th class="datatable-cell datatable-cell-sort text-center">
                                                    <label>عملیات</label>
                                                </th>

                                            </tr>
                                            </thead>
                                            <tbody class="datatable-body">
                                            <form method="post" action="\slides\{{$slide->id}}">
                                                @csrf
                                                <input type="hidden" name="_method" value="PATCH">
                                                <tr class="datatable-row" style="left: 0px;">
                                                    <td class="datatable-cell datatable-toggle-detail">
                                                        <input type="text" name="title" class="form-text form-control"  value="{{$slide->title}}">
                                                    </td>
                                                    <td class="datatable-cell datatable-toggle-detail">
                                                        <input class="form-control" type="radio" name="status" value="1" @if($slide->status==1) checked @endif>منتشر شده
                                                        <input  class="form-control"type="radio" name="status" value="0"@if($slide->status==0) checked @endif>منتشر نشده
                                                    </td>
                                                    <td class="datatable-cell datatable-toggle-detail">
                                                        <label for="photo">گالری تصاویر</label>
                                                        <input type="hidden" name="photo_id[]" id="slide-photo">
                                                        <div class="form-control dropzone" id="photo"></div>
                                                        @foreach($slide->photos as $photo)
                                                            <div class="col-sm-3" id="updated_photo_{{$photo->id}}">
                                                                <img class="img-responsive" src="{{$photo->path}}">
                                                                <button type="button" class="btn btn-danger" onclick="removeImages({{$photo->id}})">حذف</button>
                                                            </div>
                                                        @endforeach

                                                    </td>
                                                    <td class="datatable-cell datatable-toggle-detail">
                                                        <button type="submit" onclick="sliderGallery()" style="left: 20%; position: relative;" class="btn btn-primary font-weight-bold">اعمال</button>
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
@section('script-vuejs')
    <script src="{{asset('/js/app.js')}}"></script>
@endsection
@section('scripts-pic-ck')
    <script type="text/javascript" src="{{asset('assets/plugins/custom/dropzone.js')}}"></script>
    <script>
        Dropzone.autoDiscover=false;
        var slidesGallery=[]
        var photo=[].concat({{$slide->photos->pluck('id')}})
        var drop=new Dropzone('#photo',{
            addRemoveLinks:true,
            url:"{{route('photos.upload')}}",
            sending:function (file,xhr,formData) {
                formData.append("_token","{{csrf_token()}}")
            },
            success: function (file,response) {
                slidesGallery.push(response.photo_id)
            }
        });
        sliderGallery=function () {
            document.getElementById('slide-photo').value=slidesGallery.concat(photo)
        }
        removeImages=function (id) {
            var index=photo.indexOf(id)
            photo.splice(index,1);
            document.getElementById('updated_photo_'+id).remove();
        }
    </script>
@endsection

