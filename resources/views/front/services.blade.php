@extends('layouts.layout')
@section('content')

  

    <!-- start breadcrumb area -->
    <div class="rts-breadcrumb-area breadcrumb-bg bg_image">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12 breadcrumb-1">
                    <h1 class="title" data-sal-delay="150" data-sal="slide-up" data-sal-duration="800">@lang('index.menu_service_title')</h1>
                </div>
                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                    <div class="bread-tag">
                        <a href="{{route('index')}}" data-sal-delay="250" data-sal="slide-up" data-sal-duration="800">@lang('index.menu_service')</a>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end breadcrumb area -->

    <!-- service-appoinment-area start -->
    <div class="rts-service-area bg-light rts-section-gap service-bg_shape service-inner">
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

    <!-- start call to action area -->
   >
    <!-- end call to action area -->

    <!-- rts pricing area start -->
 

    @endsection