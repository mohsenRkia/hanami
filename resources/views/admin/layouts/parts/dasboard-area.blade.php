<section class="dashboard-area">
    @include('admin.layouts.parts.dashboard-parts.d-nav')
    <div class="dashboard-content-wrap">
        <div class="dashboard-bread dashboard-bread-2">
            <div class="container-fluid">
                <div class="row align-items-center">
                    <div class="col-lg-6">
                        <div class="breadcrumb-content">
                            <div class="section-heading">
                                <h2 class="sec__title font-size-30 text-white">
                                    @yield('panel-title')
                                </h2>
                            </div>
                        </div><!-- end breadcrumb-content -->
                    </div><!-- end col-lg-6 -->
                    <div class="col-lg-6">
                        <div class="breadcrumb-list text-right">
                            <ul class="list-items">
                                <li><a href="index.html" class="text-white">صفحه اصلی</a></li>
                                <li>@yield('panel-first-breadcrumb-title')</li>
                                <li>@yield('panel-second-breadcrumb-subject')</li>
                            </ul>
                        </div><!-- end breadcrumb-list -->
                    </div><!-- end col-lg-6 -->
                </div><!-- end row -->
                @if(request()->route()->getName() == 'panel.dashboard')
                <div class="row mt-4">
                    <div class="col-lg-3 responsive-column-l">
                        <div class="icon-box icon-layout-2 dashboard-icon-box pb-0">
                            <div class="d-flex pb-3 justify-content-between">
                                <div class="info-content">
                                    <p class="info__desc">کل رزرو ها!</p>
                                    <h4 class="info__title">55</h4>
                                </div><!-- end info-content -->
                                <div class="info-icon icon-element bg-4">
                                    <i class="la la-shopping-cart"></i>
                                </div><!-- end info-icon-->
                            </div>
                            <div class="section-block"></div>
                            <a href="admin-dashboard-booking.html" class="d-flex align-items-center justify-content-between view-all">مشاهده همه<i class="la la-angle-left"></i></a>
                        </div>
                    </div><!-- end col-lg-3 -->
                    <div class="col-lg-3 responsive-column-l">
                        <div class="icon-box icon-layout-2 dashboard-icon-box pb-0">
                            <div class="d-flex pb-3 justify-content-between">
                                <div class="info-content">
                                    <p class="info__desc">نظرات جدید!</p>
                                    <h4 class="info__title">22</h4>
                                </div><!-- end info-content -->
                                <div class="info-icon icon-element bg-3">
                                    <i class="la la-star"></i>
                                </div><!-- end info-icon-->
                            </div>
                            <div class="section-block"></div>
                            <a href="admin-dashboard-reviews.html" class="d-flex align-items-center justify-content-between view-all">مشاهده همه<i class="la la-angle-left"></i></a>
                        </div>
                    </div><!-- end col-lg-3 -->
                    <div class="col-lg-3 responsive-column-l">
                        <div class="icon-box icon-layout-2 dashboard-icon-box pb-0">
                            <div class="d-flex pb-3 justify-content-between">
                                <div class="info-content">
                                    <p class="info__desc">کل مشترکین !</p>
                                    <h4 class="info__title">27</h4>
                                </div><!-- end info-content -->
                                <div class="info-icon icon-element bg-2">
                                    <i class="la la-envelope"></i>
                                </div><!-- end info-icon-->
                            </div>
                            <div class="section-block"></div>
                            <a href="admin-dashboard-subscribers.html" class="d-flex align-items-center justify-content-between view-all">مشاهده همه<i class="la la-angle-left"></i></a>
                        </div>
                    </div><!-- end col-lg-3 -->
                    <div class="col-lg-3 responsive-column-l">
                        <div class="icon-box icon-layout-2 dashboard-icon-box pb-0">
                            <div class="d-flex pb-3 justify-content-between">
                                <div class="info-content">
                                    <p class="info__desc">بوک مارک های جدید!</p>
                                    <h4 class="info__title">25</h4>
                                </div><!-- end info-content -->
                                <div class="info-icon icon-element bg-1">
                                    <i class="la la-bookmark-o"></i>
                                </div><!-- end info-icon-->
                            </div>
                            <div class="section-block"></div>
                            <a href="admin-dashboard-wishlist.html" class="d-flex align-items-center justify-content-between view-all">مشاهده همه<i class="la la-angle-left"></i></a>
                        </div>
                    </div><!-- end col-lg-3 -->
                </div><!-- end row -->
                @endif
            </div>
        </div><!-- end dashboard-bread -->
        <div class="dashboard-main-content">
            <div class="container-fluid">
                <div class="row">
                    @yield('panel-content')
                </div><!-- end row -->
                @include('admin.layouts.parts.dashboard-parts.d-footer')
            </div><!-- end container-fluid -->
        </div><!-- end dashboard-main-content -->
    </div><!-- end dashboard-content-wrap -->
</section><!-- end dashboard-area -->
