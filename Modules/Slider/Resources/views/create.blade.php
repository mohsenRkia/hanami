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
                <form action="{{ route('sliders.store') }}" method="POST"
                      enctype="multipart/form-data">
                    @csrf
                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title">اسلایدر جدید</h3>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="text-danger">*</label>
                                        <label for="title"><strong>عنوان</strong></label>
                                        <input type="text" class="form-control " value="" name="title" id="title">
                                    </div>
                                </div>
                            </div>
                            <div class="row col-md-4">
                                <button class="btn btn-success btn-lg btn-block" type="submit">ثبت</button>
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
