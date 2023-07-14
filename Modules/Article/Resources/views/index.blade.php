@extends('admin.layouts.layout')

@section('panel-title','فهرست مطالب')
@section('panel-first-breadcrumb-title','مطالب')
@section('panel-second-breadcrumb-subject','مطالب')

@section('panel-content')
    <div class="col-lg-12">
        <div id="app" class="form-box">
            <div class="form-title-wrap">
                <h3 class="title">لیست مطالب</h3>
                <a href="{{route('panel.articles.create')}}" type="button"
                   class="btn btn-outline-primary btn-lg d-inline-flex float-left mt-n3">ایجاد مطلب جدید</a>
            </div>
            <div class="form-content">
                <div class="table-form table-responsive">
                    <table class="table">
                        <thead>
                        <tr>
                            <th scope="col">شماره</th>
                            <th scope="col">عنوان</th>
                            <th scope="col">وضعیت</th>
                            <th scope="col">عملیات</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($articles as $key => $article)
                            <tr>
                                <th scope="row">{{++$key}}</th>
                                <td>
                                    <div class="table-content">
                                        <h3 class="title">{{$article->title}}</h3>
                                    </div>
                                </td>
                                <td>
                                    @switch($article->status)
                                        @case(0)
                                            <span class="badge badge-danger py-1 px-2">غير فعال</span>
                                        @break
                                        @case(1)
                                            <span class="badge badge-success py-1 px-2">فعال</span></td>
                                        @break
                                    @endswitch
                                <td>
                                    <div class="table-content">
                                        <a href="{{route('panel.articles.edit' , ['article' => $article->id])}}"
                                           class="theme-btn theme-btn-small mx-2" data-toggle="tooltip"
                                           data-placement="top" title="ویرایش"><i class="la la-edit"></i></a>
                                        <delete-component item-id="{{$article->id}}" post-type="articles"
                                                          post-module="article"></delete-component>

                                    </div>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div><!-- end form-box -->
    </div><!-- end col-lg-12 -->
@endsection
