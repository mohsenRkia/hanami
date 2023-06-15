<div class="sidebar-nav sidebar--nav">
    <div class="sidebar-nav-body">
        <div class="side-menu-close">
            <i class="la la-times"></i>
        </div><!-- end menu-toggler -->
        <div class="author-content">
            <div class="d-flex align-items-center">
                <div class="author-img avatar-sm">
                    <img src="/assets/images/team9.jpg" alt="testimonial image">
                </div>
                <div class="author-bio">
                    <h4 class="author__title">آژانس مسافرتی رویال</h4>
                    <span class="author__meta">به پنل ادمین خوشی اومدی</span>
                </div>
            </div>
        </div>
        <div class="sidebar-menu-wrap">
            <ul class="sidebar-menu toggle-menu list-items">
                <li class="page-active"><a href="{{route('panel.dashboard')}}"><i class="la la-dashboard mr-2"></i>داشبرد</a></li>
                <li><a href="admin-dashboard-booking.html"><i class="la la-shopping-cart mr-2 text-color"></i>رزرو</a></li>
                <li>
                    <span class="side-menu-icon toggle-menu-icon">
                        <i class="la la-angle-down"></i>
                    </span>
                    <a href="admin-dashboard-orders.html"><i class="la la-list mr-2 text-color-2"></i>سفارشات</a>
                    <ul class="toggle-drop-menu">
                        <li><a href="admin-dashboard-orders-details.html">جزئیات سفارش</a></li>
                    </ul>
                </li>
                <li>
                    <span class="side-menu-icon toggle-menu-icon">
                        <i class="la la-angle-down"></i>
                    </span>
                    <a href="admin-dashboard-travellers.html"><i class="la la-users mr-2 text-color-3"></i>مسافران</a>
                    <ul class="toggle-drop-menu">
                        <li><a href="admin-dashboard-traveler-detail.html">مشخصات مسافر</a></li>
                    </ul>
                </li>
                <li><a href="admin-dashboard-visa.html"><i class="la la-plane mr-2 text-color-4"></i>درخواست ویزا</a></li>
                <li><a href="admin-dashboard-reviews.html"><i class="la la-star mr-2 text-color-5"></i>نظرات</a></li>
                <li><a href="admin-dashboard-reviews.html"><i class="la la-star-and-crescent mr-2 text-color-5"></i>ارتباط با ما</a></li>
                <li><a href="admin-dashboard-wishlist.html"><i class="la la-heart mr-2 text-color-6"></i>لیست علاقه مندی ها</a></li>
                <li><a href="admin-dashboard-travel-agents.html"><i class="la la-text-width mr-2 text-color-7"></i>آژانس های مسافرتی</a></li>
                <li>
                    <span class="side-menu-icon toggle-menu-icon">
                        <i class="la la-angle-down"></i>
                    </span>
                    <a href="/"><i class="la la-area-chart mr-2 text-color-8"></i>سطوح دسترسی و نقش ها</a>
                    <ul class="toggle-drop-menu">
                        <li><a href="{{route('panel.roles.manage.index')}}">مدیریت دسترسی و نقش</a></li>
                        <li><a href="{{route('panel.roles.permissions.index')}}">دسترسی ها</a></li>
                        <li><a href="{{route('panel.roles.roles.index')}}">نقش ها</a></li>
                    </ul>
                </li>
                <li>
                    <span class="side-menu-icon toggle-menu-icon">
                        <i class="la la-angle-down"></i>
                    </span>
                    <a href="#"><i class="la la-map-signs mr-2 text-color-9"></i>لوکیشن ها</a>
                    <ul class="toggle-drop-menu">
                        <li><a href="admin-countries.html">کشورها</a></li>
                        <li><a href="admin-airlines.html"> خطوط هوایی</a></li>
                    </ul>
                </li>
                <li><a href="admin-dashboard-settings.html"><i class="la la-cog mr-2 text-color-10"></i>تنظیمات</a></li>
                <li><a href="index.html"><i class="la la-power-off mr-2 text-color-11"></i>خروج</a></li>
            </ul>
        </div><!-- end sidebar-menu-wrap -->
    </div>
</div>
<!-- end sidebar-nav -->
