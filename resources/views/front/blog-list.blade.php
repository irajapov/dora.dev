@extends('layouts.layout')
@section('content')
<div class="rts-breadcrumb-area breadcrumb-bg bg_image">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12 breadcrumb-1">
                    <h1 class="title" data-sal-delay="150" data-sal="slide-up" data-sal-duration="800">@lang('index.blog_detals')</h1>
                </div>
                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                    <div class="bread-tag">
                        <a href="{{route('index')}}" data-sal-delay="250" data-sal="slide-up" data-sal-duration="800">@lang('index.blog_detals_menu')</a>
                       
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end breadcrumb area -->

    <!-- rts blog mlist area -->
    <div class="rts-blog-list-area rts-section-gap">
        <div class="container">
            <div class="row g-5">
                <!-- rts blo post area -->
                <div class="col-xl-8 col-md-12 col-sm-12 col-12">
                    <!-- single post -->
                    <div class="blog-single-post-listing details mb--0">
                        <div class="thumbnail">
                            <img src="{{ asset('/storage/' . $blog->image) }}" alt="Business-Blog">
                        </div>
                        <div class="blog-listing-content">
                            <div class="user-info">
                                <!-- single info -->
                                <div class="single">
                                    <i class="far fa-user-circle"></i>
                                    <span>{{$blog->smit}}</span>
                                </div>
                                <!-- single infoe end -->
                                <!-- single info -->
                                <div class="single">
                                    <i class="far fa-clock"></i>
                                    <span>{{$blog->date}}</span>
                                </div>
                                <!-- single infoe end -->
                                <!-- single info -->
                               
                                <!-- single infoe end -->
                            </div>
                            <h3 class="title">{{$blog['title_'. \App::getLocale()]}}</h3>
                            <p class="disc para-1">
                            {{strip_tags($blog['text_'. \App::getLocale()])}}
                            </p>
                           
                           
                            
                            <a class="rts-btn btn-primary" href="{{route('index')}}">@lang('index.submit_message')</a>
                        </div>
                    </div>
                    <!-- single post End-->
                </div>
                <!-- rts-blog post end area -->
                <!--rts blog wizered area -->
          
                <!-- rts- blog wizered end area -->
            </div>
        </div>
    </div>
@endsection