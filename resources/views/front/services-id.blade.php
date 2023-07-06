@extends('layouts.layout')
@section('content')
 <!-- start breadcrumb area -->
 <div class="rts-breadcrumb-area breadcrumb-bg bg_image">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12 breadcrumb-1">
                    <h1 class="title" data-sal-delay="150" data-sal="slide-up" data-sal-duration="800">@lang('index.services_detals')</h1>
                </div>
                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                    <div class="bread-tag">
                        <a href="{{route('index')}}" data-sal-delay="250" data-sal="slide-up" data-sal-duration="800">@lang('index.services_detals_menu')</a>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end breadcrumb area -->

    <!-- start service details area -->
    <div class="rts-service-details-area rts-section-gap">
        <div class="container">
            <div class="row">
                <div class="col-xl-8 col-md-12 col-sm-12 col-12">
                    <!-- service details left area start -->
                    <div class="service-detials-step-1">
                        <div class="thumbnail mb--30" data-sal-delay="150" data-sal="slide-up" data-sal-duration="800">
                            <img src="{{ asset('/storage/' . $service->image) }}" alt="business-area">
                        </div>
                        <h4 class="title" data-sal-delay="150" data-sal="slide-up" data-sal-duration="800">{{$service['big_title_'. \App::getLocale()]}}</h4>
                        <p class="disc" data-sal-delay="150" data-sal="slide-up" data-sal-duration="800">
                        {{strip_tags($service['text_'. \App::getLocale()])}}

                        </p>
                       
                    
                    </div>
                    
                </div>
                <!--rts blog wizered area -->
             
                <!-- rts- blog wizered end area -->
            </div>
        </div>
    </div>
    @endsection