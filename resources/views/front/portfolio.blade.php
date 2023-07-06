@extends('layouts.layout')
@section('content')
  

    <!-- start breadcrumb area -->
    <div class="rts-breadcrumb-area breadcrumb-bg bg_image">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12 breadcrumb-1">
                    <h1 class="title" data-sal-delay="150" data-sal="slide-up" data-sal-duration="800">@lang('index.menu_portfolio_title')</h1>
                </div>
                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                    <div class="bread-tag">
                        <a href="{{route('index')}}" data-sal-delay="250" data-sal="slide-up" data-sal-duration="800">@lang('index.menu_portfolio')</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end breadcrumb area -->

    <!--portfolio-area start-->
    <section class="portfolio-area style-5 pt--120 pb--120 pt_xs--60 pt_xs--60">
        <div class="container">
            <div class="row">
                @foreach ($portfolio as $ports)
                <div class="col-lg-4 col-md-6 col-sm-12">
                    <div class="item">
                        <div class="portfolio-wrapper">
                            <div class="img-fluid">
                                <img src="/storage/{{$ports->image}}" alt="Portfolio Img">
                            </div>
                            <div class="single-portfolio">
                                <span>{{$ports['category_'. \App::getLocale()]}}</span>
                                <h4 class="portfolio-title text-white">{{$ports['title_'. \App::getLocale()]}}</h4>
                            </div>
                            <a class="pf-btn" href="{{ route('portshow',$ports->id) }}"><i class="fal fa-long-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>

    @endsection