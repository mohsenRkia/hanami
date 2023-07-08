@extends('admin.layouts.layout')
@section('panel-title')
    دسته بندی
@endsection
@section('panel-first-breadcrumb-title')
    دسته بندی
@endsection
@section('panel-second-breadcrumb-subject')
    دسته بندی جدید
@endsection
@section('panel-content')
    <div class="col-lg-12 pt-3">
        <div class="form-box">
            <div class="form-title-wrap">
                <h3 class="title"> دسته بندی جدید</h3>
            </div>
            <div class="form-content">
                <section class="content">
                    <form action="{{ route('categories.store') }}" method="POST"
                          enctype="multipart/form-data">
                        @csrf
                        <div class="card card-primary">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="text-danger">*</label>
                                            <label for="name"><strong>نام دسته</strong></label>
                                            <input type="text" class="form-control " value="" name="name" id="name">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="text-danger">*</label>
                                            <label for="slug"><strong>نامک دسته</strong></label>
                                            <input type="text" class="form-control " value="" name="slug" id="slug">
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
