@extends('admin.layouts.layout')

@section('panel-title','فهرست تورها')
@section('panel-first-breadcrumb-title','تورها')
@section('panel-second-breadcrumb-subject','تورها')

@section('panel-content')
    <div class="col-lg-12">
        <div class="form-box">
            <div class="form-title-wrap">
                <h3 class="title">لیست تور ها</h3>
                <a href="{{route('panel.tours.create')}}" type="button" class="btn btn-outline-primary btn-lg d-inline-flex float-left mt-n3">ایجاد تور جدید</a>
            </div>
            <div class="form-content">
                <div class="table-form table-responsive">
                    <table class="table">
                        <thead>
                        <tr>
                            <th scope="col">شماره</th>
                            <th scope="col">عنوان</th>
                            <th scope="col">وضعیت</th>
                            <th scope="col">عملیات</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($tours as $key => $tour)
                            <tr>
                                <th scope="row">{{++$key}}</th>
                                <td>
                                    <div class="table-content">
                                        <h3 class="title">{{$tour->title}}</h3>
                                    </div>
                                </td>
                                <td><span class="badge badge-danger py-1 px-2">غير فعال</span><span
                                        class="badge badge-success py-1 px-2">فعال</span></td>
                                <td>
                                    <div class="table-content">
                                        <a href="{{route('panel.tours.edit' , ['id' => $tour->id])}}" class="theme-btn theme-btn-small" data-toggle="tooltip"
                                           data-placement="top" title="ویرایش"><i class="la la-edit"></i></a>
                                        <delete-component item-id="{{$tour->id}}" post-type="tours" post-module="tour"></delete-component>

                                    </div>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div><!-- end form-box -->
    </div><!-- end col-lg-12 -->
@endsection
