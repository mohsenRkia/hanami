@extends('admin.layouts.layout')

@section('panel-title','مدیریت نقش ها و دسترسی ها')
@section('panel-first-breadcrumb-title','مدیریت نقش ها و دسترسی ها')
@section('panel-second-breadcrumb-subject','مدیریت نقش ها')

@section('panel-content')
    <div class="col-lg-12">
        <div class="form-box">
            <div class="form-title-wrap">
                <h3 class="title">نقش های اعطا شده به کاربر</h3>
                <p class="font-size-14"><i class="la la-plus mr-2 text-color-6"></i><a
                        href="{{route('panel.roles.manage.assignRoleToUserCreate')}}">اعطای نقش به کاربر</a></p>
            </div>
            <div class="form-content">
                <div class="table-form table-responsive">
                    <table class="table">
                        <thead>
                        <tr>
                            <th scope="col">شماره</th>
                            <th scope="col">نام یوزر</th>
                            <th scope="col">ایمیل</th>
                            <th scope="col">عملیات</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($users as $key => $user)
                            <tr>
                                <th scope="row">{{++$key}}</th>
                                <td>
                                    <div class="table-content">
                                        <h3 class="title">{{$user->name}}</h3>
                                    </div>
                                </td>
                                <td>
                                    <div class="table-content">
                                        <h3 class="title">{{$user->email}}</h3>
                                    </div>
                                </td>
                                <td>
                                    <div class="table-content">
                                        <a href="#" class="theme-btn theme-btn-small" data-toggle="tooltip"
                                           data-placement="top" title="ویرایش"><i class="la la-edit"></i></a>
                                        <a href="#"
                                           class="theme-btn theme-btn-small border-danger bg-danger mr-2 text-white"
                                           data-toggle="tooltip" data-placement="top" title="حذف"><i
                                                class="la la-times"></i></a>

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
    <div class="col-lg-12">
        <div class="form-box">
            <div class="form-title-wrap">
                <h3 class="title">دسترسی های اعطا شده به نقش ها</h3>
                <p class="font-size-14"><i class="la la-plus mr-2 text-color-6"></i><a
                        href="{{route('panel.roles.manage.assignPermissionToRoleCreate')}}">اعطای دسترسی به نقش</a></p>
            </div>
            <div class="form-content">
                <div class="table-form table-responsive">
                    <table class="table">
                        <thead>
                        <tr>
                            <th scope="col">شماره</th>
                            <th scope="col">نام فارسی نقش</th>
                            <th scope="col">نام انگلیسی نقش</th>
                            <th scope="col">عملیات</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($roles as $key => $role)
                            <tr>
                                <th scope="row">{{++$key}}</th>
                                <td>
                                    <div class="table-content">
                                        <h3 class="title">{{$role->name_fa}}</h3>
                                    </div>
                                </td>
                                <td>
                                    <div class="table-content">
                                        <h3 class="title">{{$role->name}}</h3>
                                    </div>
                                </td>
                                <td>
                                    <div class="table-content">
                                        <a href="#" class="theme-btn theme-btn-small" data-toggle="tooltip"
                                           data-placement="top" title="ویرایش"><i class="la la-edit"></i></a>
                                        <a href="#"
                                           class="theme-btn theme-btn-small border-danger bg-danger mr-2 text-white"
                                           data-toggle="tooltip" data-placement="top" title="حذف"><i
                                                class="la la-times"></i></a>
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
