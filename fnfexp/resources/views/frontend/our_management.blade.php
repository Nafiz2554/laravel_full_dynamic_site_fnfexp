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
                            <h1 class="title">Our Management</h1>
                        </div><!-- /.page-title-captions -->
                        <div class="breadcrumb-wrapper">
                            <span>
                                <a title="Homepage" href="index-3.html"><i class="ti ti-home"></i></a>
                            </span>
                            <span class="ttm-bread-sep">&nbsp; / &nbsp;</span>
                            <span><span>Our Management Details</span></span>
                        </div>
                    </div>
                </div><!-- /.col-md-12 -->
            </div><!-- /.row -->
        </div><!-- /.container -->
    </div><!-- page-title end-->

    <!--site-main start-->
    <div class="site-main">

        <section class="ttm-row pt-60 pb-110 res-991-pb-70 ttm-bgcolor-grey clearfix">
            <div class="container">
                <!-- row -->
                <div class="row">
                    <div class="col-lg-12">
                        <h2><strong>Our Management List</strong></h2>
                    </div>
                </div><!-- row end -->
                <div class="row">
                    @foreach ($aboutuses as $aboutus)
                        <div class="col-lg-4 col-md-4 col-sm-6">
                            <!-- featured-imagebox -->
                            <div class="featured-imagebox featured-imagebox-portfolio ttm-box-view-top-image">
                                <div class="ttm-box-view-content-inner">
                                    <!-- featured-thumbnail -->
                                    <div class="featured-thumbnail">
                                        <a href="#"> <img class="img-fluid"
                                                src="{{ asset('/storage/' . $aboutus->image) }}" alt="image"></a>
                                    </div><!-- featured-thumbnail end-->
                                    <!-- ttm-box-view-overlay -->
                                    <div class="ttm-box-view-overlay">
                                        <div class="featured-iconbox ttm-media-link">
                                            <a class="ttm_prettyphoto ttm_image" title="Plumbing, New York"
                                                data-rel="prettyPhoto" href="images/portfolio/01.jpg"><i
                                                    class="ti ti-search"></i></a>
                                            <a href="portfolio-style-1.html" class="ttm_link"><i
                                                    class="ti ti-link"></i></a>
                                        </div>
                                    </div><!-- ttm-box-view-overlay end-->
                                </div>
                                <div class="ttm-box-bottom-content featured-content-portfolio box-shadow2">
                                    <span class="category">
                                        <a href="{{ url('detailview/' . $aboutus->name) }}">{{ $aboutus->name }}</a>,

                                    </span>
                                    <h2 class="featured-title"><a
                                            href="{{ url('detailview/' . $aboutus->name) }}">{{ $aboutus->designation }}</a></h2>
                                </div>
                            </div><!-- featured-imagebox -->
                        </div>
                    @endforeach
                </div>

            </div>
        </section>

    </div>
    <!--site-main end-->
@endsection
