@extends('site.layouts.layout')
@section('title','ارتباط با ما')
@section('content')
    <section id="app">
        <!-- ==== START BREADCRUMB AREA  -->
        @include('site.contact-sections.breadcrumb-area')
        <!-- ==== END BREADCRUMB AREA ==== -->
        <!-- ==== START CONTACT AREA ==== -->
        @include('site.contact-sections.contact-area')
        <!-- ==== END CONTACT AREA ==== -->
        <!-- ==== START MAP AREA ==== -->
        @include('site.contact-sections.map-area')
        <!-- ==== END MAP AREA ==== -->
    </section>
    <!-- ======  START MODAL-SHARED AREA ===== -->
    @include('site.home-sections.modal-area')
    <!-- ======  END MODAL-SHARED AREA ===== -->
@endsection
@section('css')
    <link rel="stylesheet" href="assets/css/leaflet.css">
@endsection
@section('js')
    <script src="assets/js/leaflet.js"></script>
    <script src="assets/js/map.js"></script>
    <script src="assets/js/ajax-form.js"></script>
@endsection
