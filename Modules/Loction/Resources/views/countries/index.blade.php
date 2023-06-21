@extends('admin.layouts.layout')
@section('panel-title')
   موقعیت جغرافیایی
@endsection
@section('panel-first-breadcrumb-title')
    موقعیت جغرافیایی
@endsection
@section('panel-second-breadcrumb-subject')
    کشورها
@endsection
@section('panel-content')
    <div id="app" class="col-lg-12 pt-3">
        <div class="form-box">
            <div class="form-title-wrap">
                <h3 class="title">لیست کشور ها</h3>
                <p class="d-inline-flex font-size-14"> {{$countriesCount}}  کشور تا کنون ثبت شده است.</p>
                <a href="{{route('countries.create')}}" type="button" class="btn btn-outline-primary btn-lg d-inline-flex float-left mt-n3">کشور جدید</a>
            </div>
            <div class="form-content">
                <div class="table-form table-responsive">
                    <table class="table">
                        <thead>
                        <tr>
                            <th scope="col">ردیف</th>
                            <th scope="col">نام فارسی</th>
                            <th scope="col">نام انگلیسی</th>
                            <th scope="col">قاره</th>
                            <th scope="col">توضیحات</th>
                            <th scope="col">عملیات</th>
                        </tr>
                        </thead>
                        <tbody>
                        @forelse ($countries as $country)
                        <tr>
                            <th scope="row">{{$country->id}}</th>
                            <th scope="row">{{$country->name_fa}}</th>
                            <td>{{$country->name_en}}</td>
                            <td>{{$country->area->name_fa}}</td>
                            <td>{{$country->description}}</td>
                            <td>
                                <div class="table-content">
                                    <a href="{{ route('countries.edit', $country->id) }}" class="theme-btn theme-btn-small mx-1" data-toggle="tooltip" data-placement="top" title="ویرایش"><i class="la la-edit"></i></a>
                                    <delete-component item-id="{{$country->id}}" post-type="countries" post-module="loction"></delete-component>
                                </div>
                            </td>
                        </tr>
                        @empty
                            <tr>
                                <td colspan="5" class="text-center">موردی برای نمایش وجود ندارد.</td>
                            </tr>
                        @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div><!-- end form-box -->
    </div>
    {{ $countries->links() }}
@endsection
