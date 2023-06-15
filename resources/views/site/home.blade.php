@extends('site.layouts.layout')
@section('title','hanamifly')
@section('content')
    <section id="app">
        <!-- ====== START HERO-WRAPPER AREA ====== -->
        @include('site.home-sections.hero-wrapper')
        <!-- ====== END HERO-WRAPPER AREA ======= -->
        <!-- ====== START INFO AREA ===== -->
        @include('site.home-sections.info-area')
        <!-- ====== END INFO AREA ===== -->
        <div class="section-block"></div>
        <!-- ===== START ROUND-TRIP AREA ===== -->
        @include('site.home-sections.round-trip-area')
        <!-- ====== END ROUND-TRIP AREA====== -->
        <!-- ===== START HOTEL AREA ==== -->
        @include('site.home-sections.hotel-area')
        <!-- ====== END HOTEL AREA ===== -->
        <!-- ====== START DESTINATION AREA ===== -->
        @include('site.home-sections.destination-area')
        <!-- ====== END DESTINATION AREA ======= -->
        <!-- ====== START CAR AREA ====== -->
        @include('site.home-sections.car-area')
        <!-- ====== END CAR AREA ===== -->
        <!-- ======  START TESTIMONIAL AREA ====== -->
        @include('site.home-sections.testimonial-area')
        <!-- ====== END TESTIMONIAL AREA ===== -->
        <!-- ====== START CTA AREA ===== -->
        @include('site.home-sections.cta-area')
        <!-- ====== END CTA AREA ====== -->
        <!-- ======  START BLOG AREA ====== -->
        @include('site.home-sections.blog-area')
        <!-- ====== END BLOG AREA ======= -->
        <!-- ====== START MOBILE AREA ===== -->
        @include('site.home-sections.mobile-app-area')
        <!-- ====== END MOBILE AREA ======= -->
        <!-- ======  START CLIENTLOGO AREA ===== -->
        @include('site.home-sections.clientlogo-area')
        <!-- ======  END CLIENTLOGO AREA ===== -->
    </section>
    <!-- ======  START MODAL-SHARED AREA ===== -->
    @include('site.home-sections.modal-area')
    <!-- ======  END MODAL-SHARED AREA ===== -->
@endsection
@section('css')

@endsection
@section('js')

@endsection
