@extends('layouts.layout')
@section('content')
   

    <div class="banner-area bg_image--1 bg_image rts-section-gap">
        <div class="container shape-line">
            <div class="row align-items-start pt--100 pt_sm--50 banner-shape-red">
                <div class="col-lg-6 order-xl-1 order-md-2 order-sm-1 order-1">
                    <div class="banner-one-content-wrapper">
                       
                        <h1 class="title-banner" data-sal-delay="200" data-sal="slide-up" data-sal-duration="800">
                        @lang('index.title')
                        </h1>
                        <p class="banner-disc" data-sal-delay="250" data-sal="slide-up" data-sal-duration="800">
                        @lang('index.desc')
                        </p>
                        <div class="banner-wrapper button" data-sal-delay="300" data-sal="slide-up" data-sal-duration="800">
                            <a href="{{route('contact')}}" class="rts-btn btn-primary">@lang('index.start')</a>

                            <a href="https://www.youtube.com/embed/KwpA_CvmWV0" class="btn-watch-video fancybox fancybox.iframe ml--25">
                                <span class="icon"></span>
                                <span class="text">@lang('index.vide')</span>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 order-xl-2">
                    <div class="banner-shape-area-one">
                        <img src="assets/images/banner/shape/01.png" alt="banner_shape" data-sal-delay="200" data-sal="zoom-in" data-sal-duration="1000">
                    </div>
                    <div class="banner-thumb-1 banner-shape-one">
                        <img src="assets/images/banner/01.png" alt="Creative_banner" data-sal-delay="200" data-sal="zoom-in" data-sal-duration="1000">
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- our working process area start -->
    <div class="rts-working-process-area rts-section-gap">
        <div class="container">
            <div class="row mb--30">
                <div class="col-12">
                    <div class="title-area text-center">
                        <span data-sal-delay="150" data-sal="slide-up" data-sal-duration="800">@lang('index.portfolio_p')</span>
                        <h3 class="title" data-sal-delay="250" data-sal="slide-up" data-sal-duration="800">@lang('index.port_title')</h3>
                    </div>
                </div>
            </div>
            <div class="row g-5">
            @foreach ($firstservice as $service)
                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12">
                    <div class="single-working-process-one">
                        <div class="inner text-center" data-sal-delay="150" data-sal="slide-up" data-sal-duration="800">
                            <img class="logo" src="{{ asset('/storage/' . $service->icon) }}" alt="process-logo">
                            <h5 class="title">
                            {{$service['title_'. \App::getLocale()]}}
                            </h5>
                          
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
    <!-- our working process area end -->

    <!-- counter up area start -->
    <div class="counter-up-area ptb--100 counter-bg">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="counter-up-wrapper-one">
                        <!-- ingle counter -->
                        <div class="counter-single" data-sal-delay="150" data-sal="slide-up" data-sal-duration="800">
                            <h2 class="title"><span class="counter plus">@lang('index.complate_number_1')</span></h2>
                            <p class="disc"> @lang('index.complate_1')</p>
                        </div>
                        <!-- single-counter End -->
                        <!-- ingle counter -->
                        <div class="counter-single" data-sal-delay="250" data-sal="slide-up" data-sal-duration="800">
                            <h2 class="title"><span class="counter k-plus">@lang('index.complate_number_2')</span></h2>
                            <p class="disc">@lang('index.complate_2')</p>
                        </div>
                        <!-- single-counter End -->
                        <!-- ingle counter -->
                        <div class="counter-single" data-sal-delay="350" data-sal="slide-up" data-sal-duration="800">
                            <h2 class="title"><span class="counter plus">@lang('index.complate_number_3')</span></h2>
                            <p class="disc">@lang('index.complate_3')</p>
                        </div>
                        <!-- single-counter End -->
                        <!-- ingle counter -->
                        <div class="counter-single" data-sal-delay="450" data-sal="slide-up" data-sal-duration="800">
                            <h2 class="title"><span class="counter plus">@lang('index.complate_number_4')</span></h2>
                            <p class="disc">@lang('index.complate_4')</p>
                        </div>
                        <!-- single-counter End -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- counter up area End -->

    <!-- about us area start -->
    <div class="rts-about-us-area rts-section-gap">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-7">
                    <div class="thumbnail" data-sal-delay="150" data-sal="slide-up" data-sal-duration="800">
                        <img src="assets/images/about-us/01.jpg" alt="creative_about">
                    </div>
                </div>
                <div class="col-lg-5">
                    <div class="about-right-one-area">
                        <div class="title-area">
                            <span data-sal-delay="150" data-sal="slide-up" data-sal-duration="800">@lang('index.about_p')</span>
                            <h3 class="title" data-sal-delay="200" data-sal="slide-up" data-sal-duration="800">
                            @lang('index.about_title')
                            </h3>
                        </div>
                        <p class="disc" data-sal-delay="250" data-sal="slide-up" data-sal-duration="800">
                        @lang('index.about_text')
                        </p>
                     
                        <div class="button-area" data-sal-delay="300" data-sal="slide-up" data-sal-duration="800">
                            <a href="{{route('contact')}}" class="rts-btn btn-primary">@lang('index.start')</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- about us area end -->

    <!-- service-appoinment-area start -->
    <div class="rts-service-area bg-light rts-section-gap service-bg_shape">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="title-area text-center">
                        <span data-sal-delay="150" data-sal="slide-up" data-sal-duration="800">@lang('index.services_p')</span>
                        <h3 class="title" data-sal-delay="250" data-sal="slide-up" data-sal-duration="800">@lang('index.services_title')</h3>
                    </div>
                </div>
            </div>
            <div class="row g-24 mt--5">
                @foreach ($serviceee as $ser)
                <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 col-12" data-sal-delay="150" data-sal="slide-up" data-sal-duration="800">
                    <!-- single service area start -->
                    <div class="rts-single-service-one">
                        <div class="icon">
                            <img src="{{ asset('/storage/' . $ser->icon) }}" alt="axela_service">
                        </div>
                        <a href="#">
                            <h5 class="title">
                            {{$ser['title_'. \App::getLocale()]}}
                            </h5>
                        </a>
                        <p class="disc">
                        {{$ser['desc_'. \App::getLocale()]}}
                        </p>
                        <a href="{{ route('servicesid',$ser->id) }}" class="rts-read-more">@lang('index.services_but')<i class="far fa-chevron-double-right"></i></a>
                    </div>
                    <!-- single service area end -->
                </div>
                @endforeach
            </div>
            
        </div>
    </div>
    <!-- service-appoinment-area End -->

    <!-- meet our teams ection start -->
    <div class="rts-project-area-h2 rts-section-gapTop pb--100">
        <div class="container mb--30">
            <div class="row">
                <div class="col-12">
                    <div class="title-area-btn-wrapper">
                        <div class="title-area text-start">
                            <span data-sal-delay="150" data-sal="slide-up" data-sal-duration="800">@lang('index.team_p')</span>
                            <h2 class="title" data-sal-delay="250" data-sal="slide-up" data-sal-duration="800">@lang('index.team_title')</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid custom">
            <div class="row g-24">
           
                <!-- swiper slider style one -->
                <div class="swiper project-h2-slider">
                    <div class="swiper-wrapper">
                    @foreach ($teams as $team)
                        <div class="swiper-slide">
                            <!-- single produsct -->
                            
                            <div class="single-product-wrapper-h2">
                                <a class="thumbnail" ><img src="/storage/{{$team->rasm}}" alt="single_product"></a>
                                <div class="inner">
                                    <a>
                                        <h5 class="title">
                                           {{$team->name}}
                                        </h5>
                                    </a>
                                    <span class="desig">
                                    {{$team['cat_'. \App::getLocale()]}}
                                    </span>
                                </div>
                            </div>
                           
                            <!-- single produsct End -->
                        </div>
                        @endforeach
                       
                      
                       
                       
                      
                    </div>
                    <div class="swiper-pagination"></div>
                </div>
               
                <!-- swiper slider style one end -->
            </div>
        </div>
    </div>
    <!-- meet our teams ection end -->

    <!-- rts-case studies area start -->
    <div class="rts-project-area rts-section-gap bgproject-area" id="portfolio">
        <div class="container">
            <div class="row mb--30">
                <div class="title-area text-center">
                    <span data-sal-delay="150" data-sal="slide-up" data-sal-duration="800">@lang('index.project_p')</span>
                    <h3 class="title" data-sal-delay="250" data-sal="slide-up" data-sal-duration="800">@lang('index.project_title')</h3>
                </div>
            </div>
            <div class="row g-24">
                @foreach ($portfolio as $port)
                <div class="col-lg-4 col-md-6 col-sm-6 col-12" data-sal-delay="150" data-sal="slide-up" data-sal-duration="800">
                    <div class="rts-product-one">
                        <div class="thumbnail-area">
                            <img src="/storage/{{$port->image}}" alt="Business_Finbiz">
                            <a class="rts-btn btn-primary rounded" href="{{ route('portshow',$port->id) }}"><i class="far fa-arrow-right"></i></a>
                        </div>
                        <div class="product-contact-wrapper">
                            <a href="{{ route('portshow',$port->id) }}">
                                <h5 class="title">{{$port['title_'. \App::getLocale()]}}</h5>
                            </a>
                            <span>{{$port['category_'. \App::getLocale()]}}</span>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>


     <div class="rts-brand-area bg_brand--two ptb--100">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="brand-wrapper-two">
                        <!-- Swiper -->
                        <div class="swiper brand-1">
                            <div class="swiper-wrapper">
                                @foreach ($clients as $client)
                                <div class="swiper-slide">
                                    <a href="#"><img src="/storage/{{$client->image}}" alt="Brand_area_images"></a>
                                </div>
                                @endforeach
                             
                            </div>
                        </div>
                        <!-- swiper end -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- rts-case studies area end -->

    <!-- tart Customer feedback area -->

    <!-- tart Customer feedback area End -->

    <!-- rts blog post area -->
    <div class="rts-blog-post-area shape-blog-one rts-section-gap">
        <div class="container">
            <div class="row mb--30">
                <div class="col-12">
                    <div class="title-area text-center">
                        <span data-sal-delay="150" data-sal="slide-up" data-sal-duration="800">@lang('index.blog_p')</span>
                        <h3 class="title" data-sal-delay="250" data-sal="slide-up" data-sal-duration="800">@lang('index.project_title')
                        </h3>
                    </div>
                </div>
            </div>
            <div class="row g-5">
            @foreach ($blogs as $blog)
                <div class="col-xl-4 col-md-6 col-sm-12 col-12">
                    <!-- single blog post -->
                    <div class="rts-blog-post-area-one" data-sal-delay="150" data-sal="slide-up" data-sal-duration="800">
                        <a class="thumbnail" href="{{ route('blogid',$blog->id) }}"><img src="/storage/{{$blog->image}}" alt="Blog_post_images"></a>
                        <a href="{{ route('blogid',$blog->id) }}">
                            <h5 class="title">
                            {{$blog['title_'. \App::getLocale()]}}
                            </h5>
                        </a>
                        <div class="blog-footer">
                            <div class="time">
                                <i class="far fa-clock"></i>
                                <span>{{$blog->date}}</span>
                            </div>
                            <div class="time user">
                                <i class="far fa-user"></i>
                                <span>{{$blog->client}}</span>
                            </div>
                        </div>
                    </div>
                    <!-- single blog post End -->
                </div>
           @endforeach   
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="appoinment-area-one mt--120 mt_sm--60">
                        <div class="row">
                            <div class="col-lg-6">
                                <!-- appoinment left area -->
                                <div class="appoinment-left">
                                    <div class="title-area">
                                        <span data-sal-delay="150" data-sal="slide-up" data-sal-duration="800">
                                          @lang('index.contact_p')
                                        </span>
                                        <h3 class="title" data-sal-delay="250" data-sal="slide-up" data-sal-duration="800">
                                        @lang('index.contact_title')
                                        </h3>
                                        <p class="disc" data-sal-delay="350" data-sal="slide-up" data-sal-duration="800">
                                        @lang('index.contact_text')
                                        </p>
                                        <div class="communicate-area" data-sal-delay="450" data-sal="slide-up" data-sal-duration="800">
                                            <img src="assets/images/appoinment/icon/01.svg" alt="creative_icon">
                                            <div class="details-area">
                                                <span>@lang('index.contact_gmail')</span>
                                                <a href="mailto:someone@example.com">suxrob@gmail.com</a>
                                            </div>
                                        </div>
                                        <div class="communicate-area mt--30" data-sal-delay="550" data-sal="slide-up" data-sal-duration="800">
                                            <img src="assets/images/appoinment/icon/02.svg" alt="creative_icon">
                                            <div class="details-area">
                                                <span>@lang('index.contact_number')</span>
                                                <a href="tel:+4733378901">+998 93 705 74 72</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- appoinment left area End -->
                            </div>
                            <div class="col-lg-6">
                                <!-- appoinment-right -->
                                <div class="appoinment-right">
                                    <form action="#">
                                        <div class="single-input" data-sal-delay="150" data-sal="slide-up" data-sal-duration="800">
                                            <label for="name">@lang('index.name')</label>
                                            <input type="text" id="name" required>
                                        </div>
                                        <div class="single-input mt--20" data-sal-delay="250" data-sal="slide-up" data-sal-duration="800">
                                            <label for="Email">@lang('index.number')</label>
                                            <input type="text" id="Email" required>
                                        </div>
                                        <div class="single-input mt--20" data-sal-delay="350" data-sal="slide-up" data-sal-duration="800">
                                            <label for="message">@lang('index.message')</label>
                                            <textarea id="message"></textarea>
                                        </div>
                                        <button class="rts-btn btn-primary mt--30">@lang('index.submit')</button>
                                    </form>
                                </div>
                                <!-- appoinment-right End -->
                            </div>
                        </div>
                    </div>
                    <div class="appoinment-shape">
                        <img class="shape-1 shape" src="assets/images/appoinment/shape/01.png" alt="appoinmtnt_shape" data-sal-delay="250" data-sal="slide-right" data-sal-duration="600">
                        <img class="shape shape-2" src="assets/images/appoinment/shape/02.png" alt="appoinmtnt_shape" data-sal-delay="150" data-sal="slide-right" data-sal-duration="800">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- rts blog post area End -->

@endsection