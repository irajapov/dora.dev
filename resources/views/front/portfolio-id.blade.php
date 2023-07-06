@extends('layouts.layout')
@section('content')
   

    

    <!-- start breadcrumb area -->
    <div class="rts-breadcrumb-area breadcrumb-bg bg_image">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12 breadcrumb-1">
                    <h1 class="title" data-sal-delay="150" data-sal="slide-up" data-sal-duration="800">@lang('index.portfolio_detals')</h1>
                </div>
                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                    <div class="bread-tag">
                        <a href="{{route('index')}}" data-sal-delay="250" data-sal="slide-up" data-sal-duration="800">@lang('index.portfolio_detals_menu')</a>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end breadcrumb area -->

    <!-- project details image area -->
    <div class="rts-project-details-area rts-section-gap">
        <div class="container">
            <div class="row">
                <div class="col-12" data-sal-delay="150" data-sal="slide-up" data-sal-duration="800">
                    <div class="big-bg-porduct-details">
                        <img style="object-fit: contain; aspect-ratio: 4/2;"      src="/storage/{{$portfolio->image}}" alt="Business_Finbiz">
                        <div class="project-info" data-sal-delay="250" data-sal="slide-up" data-sal-duration="800">
                            <div class="info-head">
                                <h5 class="title">Project Information</h5>
                            </div>
                            <div class="info-body">
                                <!-- single info -->
                                <div class="single-info">
                                    <div class="info-ico">
                                        <i class="fas fa-user"></i>
                                    </div>
                                    <div class="info-details">
                                        <span>Clients:</span>
                                        <h6 class="name">{{$portfolio->client_name}}</h6>
                                    </div>
                                </div>
                                <!-- end single info -->
                                <!-- single info -->
                                <div class="single-info">
                                    <div class="info-ico">
                                        <i class="fas fa-layer-group"></i>
                                    </div>
                                    <div class="info-details">
                                        <span>Category:</span>
                                        <h6 class="name">{{$portfolio['category_'. \App::getLocale()] }}</h6>
                                    </div>
                                </div>
                                <!-- end single info -->
                                <!-- single info -->
                                <div class="single-info">
                                    <div class="info-ico">
                                        <i class="fas fa-calendar-alt"></i>
                                    </div>
                                    <div class="info-details">
                                        <span>Date:</span>
                                        <h6 class="name">{{$portfolio->date}}</h6>
                                    </div>
                                </div>
                                <!-- end single info -->
                               
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row mt--70 mb--50">
                <div class="col-12">
                    <div class="product-details-main-inner">
                        <span data-sal-delay="150" data-sal="slide-up" data-sal-duration="800">{{$portfolio['category_'. \App::getLocale()] }}</span>
                        <h3 class="title" data-sal-delay="250" data-sal="slide-up" data-sal-duration="800">{{$portfolio['title_'. \App::getLocale()] }}</h3>
                        <p class="disc" data-sal-delay="350" data-sal="slide-up" data-sal-duration="800">{{strip_tags($portfolio['text_'. \App::getLocale()])}}</p>
                    </div>
                </div>
            </div>
            <div class="row g-5 mb--60">
            @foreach ($images as $image)
                <div class="col-lg-4" data-sal-delay="150" data-sal="slide-up" data-sal-duration="800">
                
                <div class="thumbnail">
                   
                        <img src="{{ asset('/storage/' . $image) }}" alt="">
                    
                </div>
                
                </div>
                @endforeach
            </div>
           
        </div>
    </div>
    @endsection