@extends('admin.layouts.layout')

@section('panel-title','نقش ها')
@section('panel-first-breadcrumb-title','نقش ها و دسترسی ها')
@section('panel-second-breadcrumb-subject','نقش ها')

@section('panel-content')
    <div class="col-lg-12">
        <div class="form-box">
            <div class="form-title-wrap">
                <h3 class="title">ایجاد نقش جدید</h3>
            </div>
            <div class="form-content">
                <div class="contact-form-action">
                    <form action="{{route('panel.roles.roles.store')}}" method="POST">
                        @csrf
                        <div class="row">
                            <div class="col-lg-6 col-sm-4">
                                <div class="input-box">
                                    <label class="label-text">نام فارسی نقش</label>
                                    <div class="form-group">
                                        <span class="la la-pencil form-icon"></span>
                                        <input class="form-control" type="text" name="name_fa" value=""
                                               placeholder="مدیر">
                                    </div>
                                </div>
                            </div><!-- end col-lg-4 -->
                            <div class="col-lg-6 col-sm-4">
                                <div class="input-box">
                                    <label class="label-text">نام انگلیسی نقش</label>
                                    <div class="form-group">
                                        <span class="la la-pencil form-icon"></span>
                                        <input class="form-control" type="text" name="name" value=""
                                               placeholder="ََAdmin">
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
                        @if ($errors->any())
                            <ul class="row mt-2 mx-1">
                                @foreach ($errors->all() as $error)
                                    <li class="col-5 alert alert-danger m-1">{{ $error }}</li>
                                @endforeach
                            </ul>
                        @endif
                    </form>
                </div>
            </div>
        </div><!-- end form-box -->
    </div>
@endsection
