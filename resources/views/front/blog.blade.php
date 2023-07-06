@extends('layouts.layout')
@section('content')
    

    <!-- start breadcrumb area -->
    <div class="rts-breadcrumb-area breadcrumb-bg bg_image">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12 breadcrumb-1">
                    <h1 class="title" data-sal-delay="150" data-sal="slide-up" data-sal-duration="800">@lang('index.menu_blog_title')</h1>
                </div>
                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                    <div class="bread-tag">
                        <a href="{{route('index')}}" data-sal-delay="250" data-sal="slide-up" data-sal-duration="800">@lang('index.menu_blog')</a>
                      
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end breadcrumb area -->

    <!-- rts blog grid area -->
    <div class="rts-blog-grid-area rts-section-gap">
        <div class="container">
            <div class="row g-5">
                <div class="col-xl-8 col-md-12 col-sm-12 col-12 pr--40 pr_md--0 pr_sm-controler--0">
                    <div class="row g-5">
                    @foreach ($blogs as $blog)
                        <div class="col-lg-6 col-md-6 col-sm-12 col-12" data-sal-delay="150" data-sal="slide-up" data-sal-duration="800">
                            <!-- start blog grid inner -->
                            <div class="blog-grid-inner">
                                <div class="blog-header">
                                    <a class="thumbnail" href="{{ route('blogid',$blog->id) }}">
                                        <img src="{{ asset('/storage/' . $blog->image) }}" alt="Business_Blog">
                                    </a>
                                    <div class="blog-info">
                                        <div class="user">
                                            <i class="fal fa-user-circle"></i>
                                            <span>{{$blog->smit}}</span>
                                        </div>
                                       
                                    </div>
                                    <div class="date">
                                        <span>{{$blog->date}}</span>
                                    </div>
                                </div>
                                <div class="blog-body">
                                    <a href="{{ route('blogid',$blog->id) }}">
                                        <h5 class="title">
                                        {{$blog['title_'. \App::getLocale()]}}
                                        </h5>
                                    </a>
                                </div>
                            </div>
                        
                        </div>
                       @endforeach
                    </div>
                  
            
                  
                </div>
             
                <div class="col-xl-4 col-md-12 col-sm-12 col-12">
                    
                    <div class="rts-single-wized search" data-sal-delay="150" data-sal="slide-up" data-sal-duration="800">
                        <div class="wized-header">
                            <h5 class="title">
                                Search Hear
                            </h5>
                        </div>
                        <div class="wized-body">
                            <div class="rts-search-wrapper">
                                <input class="Search" type="text" placeholder="Enter Keyword">
                                <button><i class="fal fa-search"></i></button>
                            </div>
                        </div>
                    </div>
                   
           
                   
                </div>
                
            </div>
        </div>
    </div>
@endsection