@extends('admin.layouts.layout')

@section('panel-title','نقش ها')
@section('panel-first-breadcrumb-title','نقش ها و دسترسی ها')
@section('panel-second-breadcrumb-subject','نقش ها')

@section('panel-content')
    <div class="col-lg-12">
        <div class="form-box">
            <div class="form-title-wrap">
                <h3 class="title">ایجاد دسترسی جدید</h3>
            </div>
            <div class="form-content">
                <div class="contact-form-action">
                    <form action="{{route('panel.roles.permissions.store')}}" method="POST">
                        @csrf
                        <div class="row">
                            <div class="col-lg-6 col-sm-4">
                                <div class="dropdown-item">
                                    <div class="checkbox-wrap">
                                        <div class="custom-checkbox">
                                            <input type="checkbox" id="catChb1">
                                            <label for="catChb1">هر خط کشتی کروز</label>
                                        </div>
                                        <div class="custom-checkbox">
                                            <input type="checkbox" id="catChb2">
                                            <label for="catChb2">کارنوال کروز لاین</label>
                                        </div>
                                        <div class="custom-checkbox">
                                            <input type="checkbox" id="catChb3">
                                            <label for="catChb3">سلبریتی کروزس</label>
                                        </div>
                                        <div class="custom-checkbox">
                                            <input type="checkbox" id="catChb4">
                                            <label for="catChb4">خط کشتی کروز دیزنی</label>
                                        </div>
                                        <div class="custom-checkbox">
                                            <input type="checkbox" id="catChb5">
                                            <label for="catChb5">هلند آمریکا لاین</label>
                                        </div>
                                        <div class="custom-checkbox">
                                            <input type="checkbox" id="catChb6">
                                            <label for="catChb6">MSC كروز</label>
                                        </div>
                                        <div class="custom-checkbox">
                                            <input type="checkbox" id="catChb7">
                                            <label for="catChb7">نروژین کروز لاین</label>
                                        </div>
                                        <div class="custom-checkbox">
                                            <input type="checkbox" id="catChb8">
                                            <label for="catChb8">رویال کاریبین اینترنشنال</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="btn-box">
                                    <button class="theme-btn" type="submit">ذخیره تغییرات</button>
                                </div>
                            </div>
                        </div><!-- end row -->
                    </form>
                </div>
            </div>
        </div><!-- end form-box -->
    </div>
@endsection
