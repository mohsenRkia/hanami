@extends('admin.layouts.layout')
@section('panel-title')
   موقعیت جغرافیایی
@endsection
@section('panel-first-breadcrumb-title')
    موقعیت جغرافیایی
@endsection
@section('panel-second-breadcrumb-subject')
   ویرایش شهر
@endsection
@section('panel-content')
    <div class="col-lg-12 pt-3">
        <div class="form-box">
            <div class="form-title-wrap">
                <h3 class="title">ویرایش شهر</h3>
            </div>
            <div class="form-content">
                <section class="content">
                        <form action="{{ route('cities.update',['city' => $city->id]) }}" method="POST"
                              enctype="multipart/form-data">
                        @csrf
                            @method('put')
                        <div class="card card-primary">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="text-danger">*</label>
                                            <label for="name_fa"><strong>نام فارسی</strong></label>
                                            <input type="text" class="form-control " value="{{$city->name_fa}}" name="name_fa" id="name_fa">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="text-danger">*</label>
                                            <label for="name_en"><strong>نام انگلیسی</strong></label>
                                            <input type="text" class="form-control " value="{{$city->name_en}}" name="name_en" id="name_en">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="text-danger">*</label>
                                            <label for="area_id"><strong>قاره</strong></label>
                                            <select type="text" class="form-control select2" id="area_id" name="area_id"
                                                    value="">
                                                <option value="">انتخاب کنید</option>
                                                @foreach($areas as $area)
                                                    <option value="{{$area->id}}">
                                                        {{$area->name_fa}}
                                                    </option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="text-danger">*</label>
                                            <label for="country_id"><strong>کشور</strong></label>
                                            <select type="text" class="form-control select2" id="country_id" name="country_id"
                                                    value="">
                                                <option value="">انتخاب کنید</option>
                                                @foreach($countries as $country)
                                                    <option value="{{$country->id}}">
                                                        {{$country->name_fa}}
                                                    </option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label class="text-danger">*</label>
                                            <label for="description"><strong>توضیحات</strong></label>
                                            <input type="text" class="form-control " value="{{$area->description}}" name="description" id="description">
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
