@extends('admin.layouts.layout')

@section('panel-title','ویرایش تور')
@section('panel-first-breadcrumb-title','تورها')
@section('panel-second-breadcrumb-subject','ویرایش تور')

@section('panel-content')
    <div class="col-lg-12">
        <div class="form-box">
            <div class="form-title-wrap">
                <h3 class="title">ویرایش تور</h3>
            </div>
            <div id="app" class="form-content">
                <article-edit-main-component
                    article-type="tours"
                    :article = "{{json_encode($tour)}}"
                    :article-categories = "{{json_encode($categories)}}"
                    :article-types= "{{json_encode($articleTypes)}}"
                    :article-type-movings= "{{json_encode($typeMovings)}}"
                    module="Article"
                    model="Article"
                    tag-mediable="Tour"
                    :old-image="{{json_encode($image)}}"
                    :old-fa-keys="{{json_encode($oldOtherDetail)}}"
                    :old-destinations-keys="{{json_encode($oldDestinations)}}"
                    :old-plans-keys="{{json_encode($oldPlansKeys)}}"
                    :cities="{{json_encode($cities)}}"
                ></article-edit-main-component>
            </div>
        </div><!-- end form-box -->
    </div>
@endsection
