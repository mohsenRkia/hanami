<section class="contact-area section--padding">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <div class="form-box">
                    <div class="form-title-wrap">
                        <h3 class="title">ما از هم صحبتی با شما خوشحال میشیم .</h3>
                        <p class="font-size-15">به ما پیام بده تا در اسرع وقت پاسخگوی شما باشیم</p>
                    </div><!-- form-title-wrap -->
                    <div class="form-content ">
                        <div class="contact-form-action">
                            <form class="row messenger-box-form" method="POST" action="{{ route('contactUs.store') }}">
                                @csrf
                                @if(session()->has('success'))
                                    <div class="alert alert-success messenger-box-contact__msg col-lg-12" role="alert">
                                        {{ session()->get('success') }}
                                    </div>
                                @endif
                                @if ($errors->any())
                                    <div class="alert alert-danger">
                                        <ul>
                                            @foreach ($errors->all() as $error)
                                                <li>{{ $error }}</li>
                                            @endforeach
                                        </ul>
                                    </div>
                                @endif
                                <div class="col-lg-4 responsive-column">
                                    <div class="input-box messenger-box-input-wrap">
                                        <label class="label-text" for="firstname">نام شما</label>
                                        <div class="form-group">
                                            <span class="la la-user form-icon"></span>
                                            <input class="form-control" type="text" id="firstname" name="firstname" placeholder="نام شما">
                                        </div>
                                    </div>
                                </div><!-- end col-lg-4 -->
                                <div class="col-lg-4 responsive-column">
                                    <div class="input-box messenger-box-input-wrap">
                                        <label class="label-text" for="lastname">نام خانوادگی شما</label>
                                        <div class="form-group">
                                            <span class="la la-user form-icon"></span>
                                            <input class="form-control" type="text" id="lastname" name="lastname"
                                                   placeholder="نام خانوادگی شما">
                                        </div>
                                    </div>
                                </div><!-- end col-lg-4-->
                                <div class="col-lg-4 responsive-column">
                                    <div class="input-box messenger-box-input-wrap">
                                        <label class="label-text" for="mobile">شماره تماس</label>
                                        <div class="form-group">
                                            <span class="la la-phone form-icon"></span>
                                            <input class="form-control" type="text" name="mobile" id="mobile"
                                                   placeholder="شماره تماس">
                                        </div>
                                    </div>
                                </div><!-- end col-lg-4-->
                                <div class="col-lg-12">
                                    <div class="input-box messenger-box-input-wrap">
                                        <label class="label-text" for="description">پیام</label>
                                        <div class="form-group">
                                            <span class="la la-pencil form-icon"></span>
                                            <textarea class="message-control form-control" name="description"
                                                      id="description" placeholder="پیامی بنویس"></textarea>
                                        </div>
                                    </div>
                                </div><!-- end col-lg-12 -->
                                <div class="col-lg-12">
                                    <div class="btn-box messenger-box-input-wrap">
                                        <button type="submit" class="theme-btn send-message-btn"
                                                id="send-message-btn">ارسال</button>
                                    </div>
                                </div><!-- end col-lg-12 -->
                            </form>
                        </div><!-- end contact-form-action -->
                    </div><!-- end form-content -->
                </div><!-- end form-box -->
            </div><!-- end col-lg-8 -->
            <div class="col-lg-4">
                <div class="form-box">
                    <div class="form-title-wrap">
                        <h3 class="title">با ما در تماس باشید</h3>
                    </div><!-- form-title-wrap -->
                    <div class="form-content">
                        <div class="address-book">
                            <ul class="list-items contact-address">
                                <li>
                                    <i class="la la-map-marker icon-element"></i>
                                    <h5 class="title font-size-16 pb-1">آدرس</h5>
                                    <p class="map__desc">
                                        سعادت آباد ، بلوار سرو غربی ، ساختمان تجاری اداری سرو
                                    </p>
                                </li>
                                <li>
                                    <i class="la la-phone icon-element"></i>
                                    <h5 class="title font-size-16 pb-1">شماره تلفن پشتیبانی</h5>
                                    <p class="map__desc">تلفن : 2800 256 508</p>
                                    <p class="map__desc">تلفن همراه: 8888 777 0912</p>
                                </li>
                                <li>
                                    <i class="la la-envelope-o icon-element"></i>
                                    <h5 class="title font-size-16 pb-1">پست الکترونیک</h5>
                                    <p class="map__desc">needhelp@trizen.com</p>
                                    <p class="map__desc">inquiry@trizen.com</p>
                                </li>
                            </ul>
                            <ul class="social-profile text-center">
                                <li><a href="#"><i class="lab la-facebook-f"></i></a></li>
                                <li><a href="#"><i class="lab la-twitter"></i></a></li>
                                <li><a href="#"><i class="lab la-instagram"></i></a></li>
                                <li><a href="#"><i class="lab la-linkedin-in"></i></a></li>
                                <li><a href="#"><i class="lab la-youtube"></i></a></li>
                            </ul>
                        </div>
                    </div><!-- end form-content -->
                </div><!-- end form-box -->
            </div><!-- end col-lg-4 -->
        </div><!-- end row -->
    </div><!-- end container -->
</section>
