<!DOCTYPE html>
<html lang="en" data-theme="light" class="darkmode">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dev.Dora.uz </title>
    <link rel="shortcut icon" type="image/x-icon" href="/assets/images/fav.png">
    <link rel="stylesheet" href="/assets/css/plugins/swiper.min.css">
    <link rel="stylesheet" href="/assets/css/plugins/fontawesome-5.css">
    <link rel="stylesheet" href="/assets/css/plugins/unicons.css">
    <link rel="stylesheet" href="/assets/css/plugins/fancybox.min.css">
    <link rel="stylesheet" href="/assets/css/plugins/metismenu.css">
    <link rel="stylesheet" href="/assets/css/vendor/bootstrap.min.css">
    <link rel="stylesheet" href="/assets/css/plugins/hover-revel.css">
    <link rel="stylesheet" href="/assets/css/plugins/animate.min.css">
    <link rel="stylesheet" href="/assets/css/style.css">
</head>

<body>
    <!-- header one -->
    <!-- header one -->
    <header class="header-one header--sticky">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-2 col-md-3 col-4">
                    <!-- logo area start -->
                    <a href="{{route('index')}}" class="thumbnail">
                        <img class="active-light" src="/assets/images/logo/Vector.png" alt="axela-logo">
                        <img class="active-dark" src="/assets/images/logo/Vector-white.png" alt="axela-logo">
                    </a>
                    <!-- logo area end -->
                </div>
                <div class="col-lg-7 d-none d-xl-block">
                    <div class="main-header">
                        <nav class="main-nav">
                            <ul class="mainmenu">
                                 <li>
                                    <a href="{{route('index')}}">@lang('index.hom')</a>
                                </li>
                                <li>
                                    <a href="{{route('about')}}">@lang('index.about')</a>
                                </li>
                                <li >
                                    <a href="{{route('services')}}">@lang('index.services')</a>
                                </li>
                                <li >
                                    <a href="{{route('portfolio')}}">@lang('index.portfolio')</a>
                                </li>
                                <li >
                                    <a href="{{route('blog')}}">@lang('index.blog')</a>
                                </li>

                                <li >
                                    <a href="{{route('contact')}}">@lang('index.contact')</a>
                                </li>

                                <li class="has-droupdown ">
                                    <a href="#">@lang('index.language') {{ session('lang') }}</a>
                                    <ul class="submenu">
                                        <li><a class="single" href="/lang/uz"><img width="25px" height="15px" src="/assets/images/uzbekistan-flag.png" alt=""></a></li>
                                        <li><a class="single" href="/lang/en"><img width="25px" height="15px" src="/assets/images/usa-flag.png" alt=""></a></li>
                                        <li><a class="single" href="/lang/ru"><img width="25px" height="15px" src="/assets/images/russia-flag.png" alt=""></a></li>
                                    </ul>
                                </li>

                              
                               
                                
                            </ul>
                        </nav>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-10 col-md-9 col-8">
                    <div class="header-right">
                        <a href="#" class="rts-btn btn-secondary call-btn">@lang('index.call')
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none">
                                <path d="M5.96875 7C5.96875 6.46875 5.5 6 4.96875 6H4.5C3.375 6 2.5 6.90625 2.5 8.03125V9.5C2.5 10.625 3.375 11.5 4.5 11.5H5C5.53125 11.5 6 11.0625 6 10.5L5.96875 7ZM8 0C3.5 0 0.125 3.75 0 8V9.25C0 9.6875 0.3125 10 0.71875 10C1.09375 10 1.5 9.6875 1.5 9.25V8C1.5 4.4375 4.40625 1.53125 8 1.53125C11.5625 1.53125 14.5 4.4375 14.5 8V12.5C14.5 13.2188 13.9375 13.75 13.25 13.75H9.78125C9.53125 13.3125 9.03125 13 8.5 13H7.53125C6.8125 13 6.15625 13.5 6 14.2188C5.84375 15.1875 6.5625 16 7.46875 16H8.5C9.03125 16 9.53125 15.7188 9.78125 15.25H13.25C14.75 15.25 16 14.0312 16 12.5V8C15.8438 3.75 12.4688 0 8 0ZM11.5 11.5C12.5938 11.5 13.5 10.625 13.5 9.5V8.03125C13.5 6.90625 12.5938 6 11.5 6H11C10.4375 6 10 6.46875 10 7.03125V10.5C10 11.0625 10.4375 11.5 11 11.5H11.5Z" fill="#3B38EB" />
                            </svg>
                        </a>
                        <!-- <a id="menu-btn" href="#" class="rts-btn btn-secondary menu-btn" onclick="event.preventDefault();">
                            <svg xmlns="http://www.w3.org/2000/svg" width="18" height="14" viewBox="0 0 18 14" fill="none">
                                <rect y="12" width="18" height="2" fill="#3B38EB"></rect>
                                <rect x="5" y="6" width="8" height="2" fill="#3B38EB"></rect>
                                <rect width="18" height="2" fill="#3B38EB"></rect>
                            </svg>
                        </a> -->
                      
                    </div>
                </div>
            </div>
        </div>
        
    </header>

   
 
    @yield('content')
   
    <!-- start Footer area -->
    <!-- footer area start -->

    
    <div class="rts-footer-area-one rts-section-gap footer-one-bg">
        <div class="container">
            <div class="row">
                <div class="bg-footer-one-shape">
                    <div class="wrapper">
                        <img class="footer_shape small" src="/assets/images/footer/01.png" alt="Footer_bg" data-sal-delay="150" data-sal="zoom-in" data-sal-duration="800">
                        <img class="footer_shape large" src="/assets/images/footer/02.png" alt="Footer_bg" data-sal-delay="150" data-sal="zoom-in" data-sal-duration="800">
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="footer-one-left">
                        <a class="logo" href="#">
                            <img  width="100px" height="100px" src="/assets/images/logo/Vector.png" alt="Logo_image" data-sal-delay="150" data-sal="slide-up" data-sal-duration="800">
                        </a>
                        
                        <p class="disc" data-sal-delay="250" data-sal="slide-up" data-sal-duration="800">
                        @lang('index.footer_text')
                        </p>
                        <ul class="social-area">
                            <li data-sal-delay="150" data-sal="slide-up" data-sal-duration="800"><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                            <li data-sal-delay="250" data-sal="slide-up" data-sal-duration="800"><a href="#"><i class="fab fa-twitter"></i></a></li>
                            <li data-sal-delay="350" data-sal="slide-up" data-sal-duration="800"><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                            <li data-sal-delay="450" data-sal="slide-up" data-sal-duration="800"><a href="#"><i class="fab fa-skype"></i></a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-8">
                    <div class="footer-right-one">
                        <div class="single-wized-footer">
                            <h5 class="title-heading" data-sal-delay="150" data-sal="slide-up" data-sal-duration="800">
                            @lang('index.services_footer_title')
                            </h5>
                            <ul class="list">
                                @foreach ($serviceee as $servicee)
                                <li data-sal-delay="150" data-sal="slide-up" data-sal-duration="800"><a href="service-details.html">{{$servicee['title_'. \App::getLocale()]}}</a></li>
                                @endforeach
                            </ul>
                        </div>
                        <div class="single-wized-footer">
                            <h5 class="title-heading" data-sal-delay="150" data-sal="slide-up" data-sal-duration="800">
                            @lang('index.resourses_footer_title')
                            </h5>
                            <ul class="list">
                                <li data-sal-delay="150" data-sal="slide-up" data-sal-duration="800"><a href="{{route('index')}}">@lang('index.hom')</a></li>
                                <li data-sal-delay="250" data-sal="slide-up" data-sal-duration="800"><a href="{{route('about')}}">@lang('index.about')</a></li>
                                <li data-sal-delay="350" data-sal="slide-up" data-sal-duration="800"><a href="{{route('services')}}">@lang('index.services')</a></li>
                                <li data-sal-delay="450" data-sal="slide-up" data-sal-duration="800"><a href="{{route('portfolio')}}">@lang('index.portfolio')</a></li>
                                <li data-sal-delay="450" data-sal="slide-up" data-sal-duration="800"><a href="{{route('blog')}}">@lang('index.blog')</a></li>
                                <li data-sal-delay="450" data-sal="slide-up" data-sal-duration="800"><a href="{{route('contact')}}">@lang('index.contact')</a></li>
                            </ul>
                        </div>



                    
                               






                        <div class="single-wized-footer">
                            <h5 class="title-heading" data-sal-delay="150" data-sal="slide-up" data-sal-duration="800">
                            @lang('index.support_footer_title')
                            </h5>
                            <ul class="list">
                                <li data-sal-delay="150" data-sal="slide-up" data-sal-duration="800"><a href="{{route('contact')}}">@lang('index.contact')</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- footer area end -->

    <!-- rts-copyright-area -->
    <div class="rts-copyright-area ptb--30 ptb_sm--15">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="copyu-right-wrapper">
                      
                        <div class="left single">
                            <p>@lang('index.footer_p') <a href="{{route('index')}}">Dora</a></p>
                        </div>
                      
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- rts-copyright-area ENd -->
    <!-- ENd Footer Area -->

    <div class="modal-sidebar-scroll rts-dark-light">
        <ul>
            <li><span>Dark</span><i class="rts-go-dark fal fa-moon"></i></li>
            <li><span>Light</span><i class="rts-go-light far fa-sun"></i></li>
        </ul>
    </div>


    <div class="loader-wrapper">
        <div class="loader">
        </div>
        <div class="loader-section section-left"></div>
        <div class="loader-section section-right"></div>
    </div>


    <div class="progress-wrap">
        <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
            <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" style="transition: stroke-dashoffset 10ms linear 0s; stroke-dasharray: 307.919, 307.919; stroke-dashoffset: 307.919;"></path>
        </svg>
    </div>


    <!-- scripts start form hear -->
    <script src="/assets/js/vendor/jquery.min.js"></script>
    <script src="/assets/js/vendor/jqueryui.js"></script>
    <script src="/assets/js/vendor/waypoint.js"></script>
    <script src="/assets/js/plugins/swiper.js"></script>
    <script src="/assets/js/plugins/counterup.js"></script>
    <script src="/assets/js/plugins/sal.min.js"></script>
    <script src="/assets/js/plugins/fancybox.js"></script>
    <script src="/assets/js/plugins/metismenu.js"></script>
    <script src="/assets/js/plugins/marquery.js"></script>
    <script src="/assets/js/vendor/bootstrap.min.js"></script>
    <script src="/assets/js/vendor/waw.js"></script>


    <script src="/assets/js/plugins/hover-revel.js"></script>
    <script src="/assets/js/plugins/twinmax.js"></script>


    <script src="/assets/js/plugins/contact.form.js"></script>


    <!-- main Js -->
    <script src="/assets/js/main.js"></script>
    <!-- scripts end form hear -->
</body>

</html>