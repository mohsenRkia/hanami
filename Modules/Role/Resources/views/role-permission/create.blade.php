@extends('admin.layouts.layout')

@section('panel-title','تخصیص نقش به کاربر')
@section('panel-first-breadcrumb-title','مدیریت نقش ها و دسترسی ها')
@section('panel-second-breadcrumb-subject','تخصیص نقش به کاربر')

@section('panel-content')
    <div class="col-lg-12">
        <div class="form-box">
            <div class="form-title-wrap">
                <h3 class="title">تخصیص نقش به یک کاربر</h3>
            </div>
            <div class="form-content">
                <div class="contact-form-action">
                    <form action="{{route('panel.roles.manage.assignPermissionToRoleStore')}}" method="POST">
                        @csrf
                        <div class="row">
                            <div class="col-lg-6 col-sm-4">
                                <h3 class="title m-3">کاربران ها</h3>
                                <div>
                                    <div class="checkbox-wrap">
                                        @foreach($roles as $role)
                                        <div class="custom-radio">
                                            <input name="role_name" value="{{$role->name}}" type="radio" id="{{'role_' . $role->id}}">
                                            <label for="{{'role_' . $role->id}}">{{$role->name_fa}}</label>
                                        </div>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-sm-4">
                                <h3 class="title m-3">دسترسی ها</h3>
                                <div>
                                    <div class="checkbox-wrap">
                                        @foreach($permissions as $permission)
                                        <div class="custom-checkbox">
                                            <input name="permission_name[]" value="{{$permission->name}}" type="checkbox" id="{{'permission_' . $permission->id}}">
                                            <label for="{{'permission_' . $permission->id}}">{{$permission->name_fa}}</label>
                                        </div>
                                        @endforeach
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-12">
                                <div class="btn-box m-4">
                                    <button class="theme-btn" type="submit">ذخیره تغییرات</button>
                                </div>
                            </div>
                        </div><!-- end row -->
                    </form>
                </div>
            </div>
        </div><!-- end form-box -->
    </div>
@endsection
