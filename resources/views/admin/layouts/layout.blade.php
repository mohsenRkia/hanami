<!DOCTYPE html>
<html lang="fa" dir="rtl">

@include('admin.layouts.parts.head')

<body class="section-bg">
<!-- start cssload-loader -->
@include('admin.layouts.parts.css-loader')
<!-- end cssload-loader -->

<!-- ================================
       START USER CANVAS MENU
================================= -->
@include('admin.layouts.parts.canvas-menu')
<!-- ================================
       END USER CANVAS MENU
================================= -->

<!-- ================================
       START DASHBOARD NAV
================================= -->
@include('admin.layouts.parts.sidebar')
<!-- ================================
       END DASHBOARD NAV
================================= -->

<!-- ================================
    START DASHBOARD AREA
================================= -->
@include('admin.layouts.parts.dasboard-area')
<!-- ================================
    END DASHBOARD AREA
================================= -->

<!-- start scroll top -->
@include('admin.layouts.parts.scroll-top')
<!-- end scroll top -->

<!-- Template JS Files -->
@include('admin.layouts.parts.js-files')
</body>
</html>
