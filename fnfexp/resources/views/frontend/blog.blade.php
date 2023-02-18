@extends('frontend.layouts.base')
@section('main-container')
    <!-- page-title -->
    <div class="ttm-page-title-row">
        <div class="ttm-page-title-row-bg-layer ttm-bg-layer"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="title-box ttm-textcolor-white">
                        <div class="page-title-heading">
                            <h1 class="title">Blog Left Image</h1>
                        </div><!-- /.page-title-captions -->
                        <div class="breadcrumb-wrapper">
                            <span>
                                <a title="Homepage" href="index-3.html"><i class="ti ti-home"></i></a>
                            </span>
                            <span class="ttm-bread-sep">&nbsp; / &nbsp;</span>
                            <span><span>Blog Left Image</span></span>
                        </div>
                    </div>
                </div><!-- /.col-md-12 -->
            </div><!-- /.row -->
        </div><!-- /.container -->
    </div><!-- page-title end-->

    <!--site-main start-->
    <div class="site-main">

        <div class="ttm-row pb-110 ttm-bgcolor-grey clearfix">
            <div class="container">
                <div class="row">
                    @foreach ($blogs as $blog)
                        <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
                            <!-- featured-imagebox-post -->
                            <div class="featured-imagebox featured-imagebox-post ttm-box-view-left-image row">
                                <div class="col-lg-5 col-md-12 ttm-featured-img-left">
                                    <div class="featured-thumbnail">
                                        <img class="img-fluid" src="{{ asset('/storage/' . $blog->image) }}" alt="image">
                                    </div>
                                </div>
                                <div class="col-lg-7 col-md-12 featured-content featured-content-post">
                                    <span class="category">
                                        <a href="portfolio-category.html">{{$blog->tag1}}</a>
                                        <a href="portfolio-category.html"> {{$blog->tag2}}</a>
                                    </span>
                                    <div class="post-title featured-title">
                                        <h5><a href="single-blog.html">{{$blog->title}}</a></h5>
                                    </div>
                                    <div class="featured-desc ttm-box-desc">
                                        <p>{{$blog->subtitle}}</p>
                                    </div>
                                    <div class="post-meta">
                                        <span class="ttm-meta-line"><i class="fa fa-calendar"></i><a
                                                href="single-blog.html">{{$blog->date}}</a></span>
                                    </div>
                                </div>
                            </div><!-- featured-imagebox-post end-->
                        </div>
                    @endforeach







                </div>
            </div>
        </div>

    </div>
    <!--site-main end-->
@endsection
