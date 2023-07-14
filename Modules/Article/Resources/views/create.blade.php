@extends('admin.layouts.layout')

@section('panel-title','ایجاد مطلب جدید')
@section('panel-first-breadcrumb-title','مطالب')
@section('panel-second-breadcrumb-subject','ایجاد مطلب جدید')

@section('panel-content')
    <div class="col-lg-12">
        <div class="form-box">
            <div class="form-title-wrap">
                <h3 class="title">ایجاد مطلب جدید</h3>
            </div>
            <div id="app" class="form-content">
                <article-main-component
                    article-type="articles"
                    :article-categories = "{{json_encode($categories)}}"
                    :article-types= "{{json_encode($articleTypes)}}"
                    module="Article"
                    model="Article"
                    tag-mediable="Image"
                ></article-main-component>
            </div>
        </div><!-- end form-box -->
    </div>
@endsection
