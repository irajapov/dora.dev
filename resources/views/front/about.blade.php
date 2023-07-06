@extends('layouts.layout')
@section('content')
   

    <!-- start breadcrumb area -->
    <div class="rts-breadcrumb-area breadcrumb-bg bg_image">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12 breadcrumb-1">
                    <h1 class="title" data-sal-delay="150" data-sal="slide-up" data-sal-duration="800">@lang('index.menu_about_title')</h1>
                </div>
                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                    <div class="bread-tag">
                        <a href="{{route('index')}}" data-sal-delay="250" data-sal="slide-up" data-sal-duration="800">@lang('index.menu_about')</a>
                      
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end breadcrumb area -->

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

    <!-- our working process area start -->
    <div class="rts-working-process-area rts-section-gapBottom">
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

    <!-- cta section start -->
    <div class="rts-cta-section-start rts-section-gap cta-bg-h4">
        <div class="container">
            <div class="row">
                <div class="title-area text-center">
                    <span data-sal-delay="150" data-sal="slide-up" data-sal-duration="800">@lang('index.about_projects_p')</span>
                    <h3 class="title" data-sal-delay="250" data-sal="slide-up" data-sal-duration="800">@lang('index.about_projects_title')</h3>
                    <div class="button-area" data-sal-delay="300" data-sal="slide-up" data-sal-duration="800">
                        <a href="{{route('portfolio')}}" class="rts-btn btn-primary">@lang('index.about_projects_button') <i class="far fa-chevron-double-right"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- cta section end -->

    <!-- team area start-->
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
    <!-- team area End -->

    <!-- tart Customer feedback area -->
   
    @endsection