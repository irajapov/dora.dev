@extends('layouts.layout')
@section('content')
<div id="side-bar" class="side-bar">
        <button class="close-icon-menu"><i class="far fa-times"></i></button>
        <!-- inner menu area desktop start -->
        
        <!-- inner menu area desktop End -->
    </div>

    <div id="anywhere-home"></div>

    <!-- start breadcrumb area -->
    <div class="rts-breadcrumb-area breadcrumb-bg bg_image">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12 breadcrumb-1">
                    <h1 class="title" data-sal-delay="150" data-sal="slide-up" data-sal-duration="800">  @lang('index.menu_contact_title')</h1>
                </div>
                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                    <div class="bread-tag">
                        <a href="{{route('index')}}" data-sal-delay="250" data-sal="slide-up" data-sal-duration="800">  @lang('index.menu_contact')</a>
                       
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end breadcrumb area -->

    <!-- rts circle progress area -->
    <div class="rts-circle-progress-area rts-section-gap">
        <div class="container">
        <div class="row">
                <div class="col-12">
                    <div class="appoinment-area-one " >
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
                                                <a href="mailto:someone@example.com">hello.mail@gmail.com</a>
                                            </div>
                                        </div>
                                        <div class="communicate-area mt--30" data-sal-delay="550" data-sal="slide-up" data-sal-duration="800">
                                            <img src="assets/images/appoinment/icon/02.svg" alt="creative_icon">
                                            <div class="details-area">
                                                <span>@lang('index.contact_number')</span>
                                                <a href="tel:+4733378901">+227-300-3676</a>
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
    <!-- rts circle progress area End -->

    <!-- contact area start -->
    
    <!-- contact area end -->

    <!-- rts team two area -->
  
    @endsection