@extends('admin.layouts.layout')
@section('panel-title')
   موقعیت جغرافیایی
@endsection
@section('panel-first-breadcrumb-title')
    موقعیت جغرافیایی
@endsection
@section('panel-second-breadcrumb-subject')
   افزودن قاره
@endsection
@section('panel-content')
    <div class="col-lg-12 pt-3">
        <div class="form-box">
            <div class="form-title-wrap">
                <h3 class="title"> قاره جدید</h3>
            </div>
            <div class="form-content">
                <section class="content">
                    <form action="{{ route('areas.store') }}" method="POST"
                          enctype="multipart/form-data">
                        @csrf
                        <div class="card card-primary">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="text-danger">*</label>
                                            <label for="name_fa"><strong>نام فارسی</strong></label>
                                            <input type="text" class="form-control " value="" name="name_fa" id="name_fa">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="text-danger">*</label>
                                            <label for="name_en"><strong>نام انگلیسی</strong></label>
                                            <input type="text" class="form-control " value="" name="name_en" id="name_en">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label class="text-danger">*</label>
                                            <label for="description"><strong>توضیحات</strong></label>
                                            <input type="text" class="form-control " value="" name="description" id="description">
                                        </div>
                                    </div>
                                </div>
                                <div class="row col-md-4">
                                    <button class="btn btn-success btn-lg btn-block" type="submit">ثبت</button>
                                </div>
                            </div>
                        </div>
                        @if ($errors->any())
                            <ul class="row mt-2 mx-1">
                                @foreach ($errors->all() as $error)
                                    <li class="col-5 alert alert-danger m-1">{{ $error }}</li>
                                @endforeach
                            </ul>
                        @endif
                    </form>
                </section>
            </div>
        </div><!-- end form-box -->
    </div>
@endsection
