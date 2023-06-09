@extends('admin.layouts.layout')

@section('panel-title','دسترسی ها')
@section('panel-first-breadcrumb-title','نقش ها و دسترسی ها')
@section('panel-second-breadcrumb-subject','دسترسی ها')

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
                                    <div class="input-box">
                                        <label class="label-text">نام فارسی دسترسی</label>
                                        <div class="form-group">
                                            <span class="la la-pencil form-icon"></span>
                                            <input class="form-control" type="text" name="name_fa" value="" placeholder="ویرایش پست">
                                        </div>
                                    </div>
                                </div><!-- end col-lg-4 -->
                            <div class="col-lg-6 col-sm-4">
                                <div class="input-box">
                                    <label class="label-text">نام انگلیسی دسترسی</label>
                                    <div class="form-group">
                                        <span class="la la-pencil form-icon"></span>
                                        <input class="form-control" type="text" name="name" value="" placeholder="Edit Article">
                                    </div>
                                </div>
                            </div><!-- end col-lg-4 -->
                                <div class="col-lg-12">
                                    <div class="btn-box">
                                        <button class="theme-btn" type="submit">ذخیره تغییرات</button>
                                    </div>
                                </div>
                            <!-- end col-lg-12 -->
                        </div><!-- end row -->
                    </form>
                </div>
            </div>
        </div><!-- end form-box -->
    </div>
@endsection
