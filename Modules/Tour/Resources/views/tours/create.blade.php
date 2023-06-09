@extends('admin.layouts.layout')

@section('panel-title','ایجاد تور جدید')
@section('panel-first-breadcrumb-title','تورها')
@section('panel-second-breadcrumb-subject','ایجاد تور جدید')

@section('panel-content')
    <div class="col-lg-12">
        <div class="form-box">
            <div class="form-title-wrap">
                <h3 class="title">ایجاد تور جدید</h3>
            </div>
            <div id="app" class="form-content">
                <article-main-component
                    article-type="tours"
                    :article-categories = "{{json_encode($categories)}}"
                    :article-types= "{{json_encode($articleTypes)}}"
                    :article-type-movings= "{{json_encode($typeMovings)}}"
                    module="Article"
                    model="Article"
                    tag-mediable="Tour"
                    :cities="{{json_encode($cities)}}"
                ></article-main-component>
            </div>
        </div><!-- end form-box -->
    </div>
@endsection
