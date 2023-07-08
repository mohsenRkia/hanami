@extends('admin.layouts.layout')
@section('panel-title')
    اسلایدر
@endsection
@section('panel-first-breadcrumb-title')
    اسلایدر
@endsection
@section('panel-second-breadcrumb-subject')
    اسلایدر
@endsection
@section('panel-content')
    <div id="app" class="col-lg-12 pt-3">
        <div class="form-box">
            <div class="form-title-wrap">
                        <h3 class="title">لیست اسلایدرها</h3>
                        <p class="d-inline-flex font-size-14"> {{$slidersCount}} اسلایدر تا کنون ثبت شده است.</p>
                        <a href="{{route('sliders.create')}}" type="button" class="btn btn-outline-primary btn-lg d-inline-flex float-left mt-n3">اسلایدر جدید</a>
                    </div>
            <div class="form-content">
                <div class="table-form table-responsive">
                    <table class="table">
                        <thead>
                    <tr>
                        <th>ردیف</th>
                        <th>موضوع</th>
                        <th>تاریخ</th>
                        <th>عملیات</th>
                    </tr>
                    </thead>
                        <tbody>
                    @forelse ($sliders as $slider)
                        <tr>
                            <td>{{$slider->id}}</td>
                            <td>{{$slider->title}}</td>
                            <td>{{ jdate($slider->created_at)->format('%A, %d %B %Y') }}</td>
                            <td>
                                <div class="table-content">
                                    <a href="{{route('sliders.edit', $slider->id)}}" class="theme-btn theme-btn-small mx-1" data-toggle="tooltip" data-placement="top" title="ویرایش"><i class="la la-edit"></i></a>
                                      <delete-component item-id="{{$slider->id}}" post-type="sliders" post-module="slider"></delete-component>
                                </div>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="10" class="text-center">موردی برای نمایش وجود ندارد.</td>
                        </tr>
                    @endforelse
                    </tbody>
                    </table>
                </div>
            </div>
        </div><!-- end form-box -->
    </div>
@endsection
