@extends('admin.layouts.layout')
@section('panel-title')
    اسلایدر
@endsection
@section('panel-first-breadcrumb-title')
    اسلایدر
@endsection
@section('panel-second-breadcrumb-subject')
     اسلایدر جدید
@endsection
@section('panel-content')
    <div id="app" class="col-lg-12 pt-3">
        <div class="form-box">
            <section class="content">
                <form action="{{ route('sliders.update',['slider' => $slider->id]) }}" method="POST"
                      enctype="multipart/form-data">
                    @csrf
                    @method('put')
                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title">ویرایش اسلایدر</h3>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="text-danger">*</label>
                                        <label for="title"><strong>عنوان</strong></label>
                                        <input type="text" class="form-control " value="{{$slider->title}}" name="title" id="title">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <slider-component
                                        :slider="{{$slider}}"
                                        :old-image="{{json_encode($image)}}"
                                    />
                                </div>
                            </div>
                            <div class="row col-md-4">
                                <button class="btn btn-success btn-lg btn-block" type="submit">ویرایش</button>
                            </div>
                        </div>
                    </div>
                    @if ($errors->any())
                        <ul class="row mt-2 mx-1">
                            @foreach ($errors->all() as $error)
                                <li class="col-5 alert alert-danger m-1">{{ $error }}</li>
                            @endforeach
                        </ul>
                    @endif
                </form>
            </section>
        </div><!-- end form-box -->
    </div>
@endsection
