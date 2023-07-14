@extends('admin.layouts.layout')

@section('panel-title','ویرایش مطلب')
@section('panel-first-breadcrumb-title','مطالب')
@section('panel-second-breadcrumb-subject','ویرایش مطلب')

@section('panel-content')
    <div class="col-lg-12">
        <div class="form-box">
            <div class="form-title-wrap">
                <h3 class="title">ویرایش مطلب</h3>
            </div>
            <div id="app" class="form-content">
                <article-edit-main-component
                    article-type="articles"
                    :article = "{{json_encode($article)}}"
                    :article-categories = "{{json_encode($categories)}}"
                    :article-types= "{{json_encode($articleTypes)}}"
                    module="Article"
                    model="Article"
                    tag-mediable="Image"
                    :old-image="{{json_encode($image)}}"
                ></article-edit-main-component>
            </div>
        </div><!-- end form-box -->
    </div>
@endsection
