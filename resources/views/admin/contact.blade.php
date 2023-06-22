@extends('admin.layouts.layout')
@section('panel-title')
درباره ما
@endsection
@section('panel-first-breadcrumb-title')
   داشبرد
@endsection
@section('panel-second-breadcrumb-subject')
    درباره ما
@endsection
@section('panel-content')
    <div class="col-lg-12 pt-3">
                            <div class="form-box">
                                <div class="form-title-wrap">
                                    <div class="d-flex align-items-center justify-content-between">
                                        <div>
                                            <h3 class="title">لیست نظرات</h3>
                                            <p class="font-size-14"> {{$contactsCount}}  نظر تا کنون ثبت شده است.</p>
                                        </div>
                                        <div class="select-contain">
                                            <select class="select-contain-select">
                                                <option value="1">هر زمانی</option>
                                                <option value="2">جدید ترین</option>
                                                <option value="3">قدیمی ترین</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-content">
                                    <div class="comments-list">
                                        @forelse ($contacts as $contact)
                                        <div class="comment">
                                            <div class="comment-avatar">
                                                <img class="avatar__img" alt="" src="images/team8.jpg">
                                            </div>
                                            <div class="comment-body">
                                                <div class="meta-data">
                                                    <div class="meta-data-inner d-flex">
                                                        <p class="comment__meta mr-1"> توسط <a href="#">{{$contact->fullname}}</a></p>
                                                        <span class="ratings d-flex align-items-center mr-1">
                                                    </span>
                                                        <p class="comment__date">{{ jdate($contact->created_at)->format('%d %B %Y') }}</p>
                                                    </div>
                                                </div>
                                                <p class="comment-content">
                                                  {!! $contact->description !!}
                                                </p>
                                            </div>
                                        </div><!-- end comments -->
                                        @empty
                                            <div class="text-center">موردی برای نمایش وجود ندارد.</div>
                                        @endforelse
                                    </div><!-- end comments-list -->
                                </div>
                            </div><!-- end form-box -->
                        </div>
    {{ $contacts->links() }}
@endsection
