@extends('admin.layouts.layout')
@section('panel-title')
    دسته بندی
@endsection
@section('panel-first-breadcrumb-title')
    دسته بندی
@endsection
@section('panel-second-breadcrumb-subject')
    دسته بندی
@endsection
@section('panel-content')
    <div id="app" class="col-lg-12 pt-3">
        <div class="form-box">
            <div class="form-title-wrap">
                        <h3 class="title">لیست دسته بندی ها</h3>
                        <p class="d-inline-flex font-size-14"> {{$categoriesCount}} اسلایدر تا کنون ثبت شده است.</p>
                        <a href="{{route('categories.create')}}" type="button" class="btn btn-outline-primary btn-lg d-inline-flex float-left mt-n3">دسته بندی جدید</a>
                    </div>
            <div class="form-content">
                <div class="table-form table-responsive">
                    <table class="table">
                        <thead>
                    <tr>
                        <th>ردیف</th>
                        <th>نام دسته</th>
                        <th>نامک دسته</th>
                        <th>تاریخ</th>
                        <th>عملیات</th>
                    </tr>
                    </thead>
                        <tbody>
                    @forelse ($categories as $category)
                        <tr>
                            <td>{{$category->id}}</td>
                            <td>{{$category->name}}</td>
                            <td>{{$category->slug}}</td>
                            <td>{{ jdate($category->created_at)->format('%A, %d %B %Y') }}</td>
                            <td>
                                <div class="table-content">
                                    <a href="{{route('categories.edit', $category->id)}}" class="theme-btn theme-btn-small mx-1" data-toggle="tooltip" data-placement="top" title="ویرایش"><i class="la la-edit"></i></a>
                                      <delete-component item-id="{{$category->id}}" post-type="categories" post-module="category"></delete-component>
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
    {{ $categories->links() }}
@endsection
