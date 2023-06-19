@extends('admin.layouts.layout')

@section('panel-title','نقش ها')
@section('panel-first-breadcrumb-title','نقش ها و دسترسی ها')
@section('panel-second-breadcrumb-subject','نقش ها')

@section('panel-content')
    <div class="col-lg-12">
        <div class="form-box">
            <div class="form-title-wrap">
                <h3 class="title">ایجاد دسترسی جدید</h3>
            </div>
            <div class="form-content">
                <div class="contact-form-action">
                    <form action="{{route('panel.roles.manage.store')}}" method="POST">
                        @csrf
                        <div class="row">
                            <div class="col-lg-6 col-sm-4">
                                <h3 class="title m-3">کاربران</h3>
                                <div>
                                    <div class="checkbox-wrap">
                                        @foreach($users as $user)
                                        <div class="custom-radio">
                                            <input name="user_id" value="{{$user->name}}" type="radio" id="{{'user_' . $user->id}}">
                                            <label for="{{'user_' . $user->id}}"><b class="text-info">{{$user->name}}</b></label> <span>({{$user->email}})</span>
                                        </div>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-sm-4">
                                <h3 class="title m-3">نقش ها</h3>
                                <div>
                                    <div class="checkbox-wrap">
                                        @foreach($roles as $role)
                                        <div class="custom-checkbox">
                                            <input name="role[]" value="{{$role->name}}" type="checkbox" id="{{'role_' . $role->id}}">
                                            <label for="{{'role_' . $role->id}}">{{$role->name_fa}}</label>
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
