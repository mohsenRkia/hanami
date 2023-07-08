@extends('admin.layouts.layout')
@section('panel-title')
    دسته بندی
@endsection
@section('panel-first-breadcrumb-title')
    دسته بندی
@endsection
@section('panel-second-breadcrumb-subject')
    ویرایش دسته بندی
@endsection
@section('panel-content')
    <div class="col-lg-12 pt-3">
        <div class="form-box">
            <div class="form-title-wrap">
                <h3 class="title">ویرایش دسته بندی</h3>
            </div>
            <div class="form-content">
                <section class="content">
                        <form action="{{ route('categories.update',['category' => $category->id]) }}" method="POST"
                              enctype="multipart/form-data">
                        @csrf
                            @method('put')
                        <div class="card card-primary">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="text-danger">*</label>
                                            <label for="name"><strong>نام دسته</strong></label>
                                            <input type="text" class="form-control " value="{{$category->name}}" name="name" id="name">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="text-danger">*</label>
                                            <label for="slug"><strong>نامک دسته</strong></label>
                                            <input type="text" class="form-control " value="{{$category->slug}}" name="slug" id="slug">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label class="text-danger">*</label>
                                            <label for="description"><strong>توضیحات</strong></label>
                                            <input type="text" class="form-control " value="{{$category->description}}" name="description" id="description">
                                        </div>
                                    </div>
                                </div>
                                <div class="row col-md-4">
                                    <button class="btn btn-success btn-lg btn-block" type="submit">ویرایش</button>
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
