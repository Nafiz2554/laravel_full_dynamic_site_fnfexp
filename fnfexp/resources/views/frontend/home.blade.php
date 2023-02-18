@extends('frontend.layouts.base')
@section('main-container')
    <div class="page">

        <!-- preloader start -->
        <div id="preloader">
            <div id="status">&nbsp;</div>
        </div>
        <div id="rev_slider_4_1_wrapper" class="rev_slider_wrapper fullwidthbanner-container slide-overlay"
            data-alias="classic4export" data-source="gallery">

            <!-- START REVOLUTION SLIDER 5.4.8 auto mode -->
            <div id="rev_slider_4_1" class="rev_slider fullwidthabanner" data-version="5.4.8.1">
                <ul>

                    <li data-index="rs-3" data-transition="slotslide-horizontal" data-slotamount="default"
                        data-hideafterloop="0" data-hideslideonmobile="off" data-easein="default" data-easeout="default"
                        data-masterspeed="default" data-rotate="0" data-saveperformance="off" data-title="Slide"
                        data-param1="" data-param2="" data-param3="" data-param4="" data-param5="" data-param6=""
                        data-param7="" data-param8="" data-param9="" data-param10="" data-description="">
                        <img src="{{ asset('assets/images/slides/5.jpg') }}" alt="" title="slider-mainbg-003"
                            width="1920" height="725" data-bgposition="center center" data-bgfit="cover"
                            data-bgrepeat="no-repeat" class="rev-slidebg" data-no-retina>


                    </li>

                    <li data-index="rs-4" data-transition="slotslide-horizontal" data-slotamount="default"
                        data-hideafterloop="0" data-hideslideonmobile="off" data-easein="default" data-easeout="default"
                        data-masterspeed="default" data-rotate="0" data-saveperformance="off" data-title="Slide"
                        data-param1="" data-param2="" data-param3="" data-param4="" data-param5="" data-param6=""
                        data-param7="" data-param8="" data-param9="" data-param10="" data-description="">

                        <img src="{{ asset('assets/images/slides/4.jpg') }}" alt="" title="slider-mainbg-003"
                            data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" class="rev-slidebg"
                            data-no-retina>
                    </li>

                    <li data-index="rs-5" data-transition="slotslide-horizontal" data-slotamount="default"
                        data-hideafterloop="0" data-hideslideonmobile="off" data-easein="default" data-easeout="default"
                        data-masterspeed="default" data-rotate="0" data-saveperformance="off" data-title="Slide"
                        data-param1="" data-param2="" data-param3="" data-param4="" data-param5="" data-param6=""
                        data-param7="" data-param8="" data-param9="" data-param10="" data-description="">

                        <img src="{{ asset('assets/images/slides/slider-mainbg-003.jpg') }}" alt="" title="slider-mainbg-003"
                            data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" class="rev-slidebg"
                            data-no-retina>
                    </li>


                </ul>
            </div>
        </div>
        <!-- END REVOLUTION SLIDER -->


        <!--site-main start-->
        <div class="site-main">

            <!--about2-section-->
            <section class="ttm-row about2-section break-1199-colum clearfix">
                <div class="container" id="intro">
                    @foreach ($company_intros as $company_intro)
                        <div class="row">
                            <div class="col-lg-5 col-md-12">
                                <!-- ttm_single_image-wrapper -->
                                <div class="ttm_single_image-wrapper mb-5">
                                    <img class="img-fluid" src="{{ asset('/storage/' . $company_intro->image) }}"
                                        alt="">
                                </div>
                                <!-- ttm_single_image-wrapper end -->
                            </div>
                            <div class="col-lg-7 col-md-12">
                                <div class="pt-20">
                                    <div class="row">
                                        <div class="col-lg-4 max-content">
                                            <div class="highlight-text">
                                                <h2>{{ $company_intro->year }}</h2>
                                            </div>
                                        </div>
                                        <div class="col-lg-8">
                                            <!-- section title -->
                                            <div class="section-title with-desc mt-10 pb-10 clearfix">
                                                <div class="title-header">
                                                    <h5>{{ $company_intro->experience }} YEAR EXPERIENCE</h5>
                                                    <h2 class="title">{{ $company_intro->title }}</h2>
                                                </div>
                                            </div>
                                            <!-- section title end -->
                                        </div>
                                    </div>
                                    <!-- section title -->
                                    <div class="section-title with-desc clearfix">
                                        <div class="title-desc">
                                            <strong>{{ $company_intro->subtitle1 }}</strong>
                                        </div>
                                    </div>
                                    <!-- section title end -->
                                    <p>{{ $company_intro->subtitle2 }} </p>
                                    <!-- row-->
                                    <div class="row ttm-fid-row-wrapper">
                                        <div class="col-md-4 col-sm-4">
                                            <div class="ttm-fid inside ttm-fid-view-lefticon">
                                                <div class="ttm-fid-left">
                                                    <div class="ttm-fid-icon-wrapper">
                                                        <i class="ti ti-briefcase"></i>
                                                    </div>
                                                    <h4 class="ttm-fid-inner">
                                                        <span data-appear-animation="animateDigits" data-from="0"
                                                            data-to="{{ $company_intro->total_delivery }}"
                                                            data-interval="5" data-before="" data-before-style="sup"
                                                            data-after=""
                                                            data-after-style="sub">{{ $company_intro->total_delivery }}</span><span>+</span>
                                                    </h4>
                                                </div>
                                                <div class="ttm-fid-contents">
                                                    <h3 class="ttm-fid-title">Parcel Delivery</h3>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4 col-sm-4">
                                            <div class="ttm-fid inside ttm-fid-view-lefticon">
                                                <div class="ttm-fid-left">
                                                    <div class="ttm-fid-icon-wrapper">
                                                        <i class="ti ti-user"></i>
                                                    </div>
                                                    <h4 class="ttm-fid-inner">
                                                        <span data-appear-animation="animateDigits" data-from="0"
                                                            data-to="{{ $company_intro->employee }}" data-interval="5"
                                                            data-before="" data-before-style="sup" data-after=""
                                                            data-after-style="sub">{{ $company_intro->employee }}</span><span>+</span>
                                                    </h4>
                                                </div>
                                                <div class="ttm-fid-contents">
                                                    <h3 class="ttm-fid-title">Work Employed</h3>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4 col-sm-4">
                                            <div class="ttm-fid inside ttm-fid-view-lefticon">
                                                <div class="ttm-fid-left">
                                                    <div class="ttm-fid-icon-wrapper">
                                                        <i class="ti ti-cup"></i>
                                                    </div>
                                                    <h4 class="ttm-fid-inner">
                                                        <span data-appear-animation="animateDigits" data-from="0"
                                                            data-to="{{ $company_intro->experience }}"
                                                            data-interval="5" data-before="" data-before-style="sup"
                                                            data-after=""
                                                            data-after-style="sub">{{ $company_intro->experience }}</span><span>+</span>
                                                    </h4>
                                                </div>
                                                <div class="ttm-fid-contents">
                                                    <h3 class="ttm-fid-title"> {{ $company_intro->experience }} Year
                                                        Experiance</h3>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- row end-->
                                </div>
                            </div>
                        </div>
                        <!-- row end -->
                    @endforeach
                </div>
            </section>
            <!-- about-section end -->








            <!--team-section-->
            <section class="ttm-row team-section-2 break-991-colum ttm-bgcolor-darkgrey clearfix">
                <div class="container">
                    <!-- row -->
                    <div class="row">
                        <div class="col-md-2"></div>
                        <div class="col-md-8">
                            <!-- section title -->
                            <div class="section-title with-desc title-style-center_text clearfix">
                                <div class="title-header">
                                    <h5>MEET OUR TEAM</h5>
                                    <h2 class="title">A professional Our Team</h2>
                                </div>
                                <div class="title-desc">FNF Express Ltd is a Leading Courier Service Provider in
                                    Bangladesh. We have Expert and Expriense Team</div>
                            </div>
                            <!-- section title end -->
                        </div>
                        <div class="col-md-2"></div>
                    </div>
                    <div class="row">
                        <div class="wrap-team team-slide owl-carousel ttm-textcolor-white" data-item="4"
                            data-nav="false" data-dots="false" data-auto="false">
                            <!-- featured-imagebox-team -->
                            @foreach ($teams as $team)
                                <div class="featured-imagebox featured-imagebox-team style2">
                                    <div class="featured-thumbnail">
                                        <img class="img-fluid" src="{{ asset('/storage/' . $team->image) }}"
                                            alt="image">
                                    </div>
                                    <div class="ttm-box-view-overlay ttm-team-box-view-overlay">
                                        <div class="ttm-social-links-wrapper">

                                        </div>
                                        <div class="featured-content featured-content-team">
                                            <div class="featured-title">
                                                <h5><a href="team-details.html">{{ $team->name }}</a></h5>
                                            </div>
                                            <p class="category">{{ $team->designation }}</p>
                                        </div>
                                    </div>
                                </div>
                            @endforeach


                        </div>
                    </div>
                    <!-- row end -->
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="mt-50 text-center">
                                <a class="ttm-btn ttm-btn-size-md ttm-btn-shape-square ttm-icon-btn-right ttm-btn-style-border ttm-btn-color-white"
                                    href="{{ url('/our-management') }}">VIEW MORE TEAM<i
                                        class="ti ti-angle-double-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!--team-section end-->

            <!-- testimonial-section -->
            <section class="ttm-row testimonial2-section bg-img14 ttm-bgcolor-darkgrey ttm-bg ttm-bgimage-yes clearfix">
                <div class="ttm-row-wrapper-bg-layer ttm-bg-layer"></div>
                <div class="container">
                    <!-- row -->
                    <div class="row">
                        <div class="col-lg-12">
                            <!-- section title -->
                            <div class="section-title title-style-center_text pb-90 clearfix">
                                <div class="title-header">
                                    <h5>TESTIMONIAL</h5>
                                    <h2 class="title">What Our Clients Say</h2>
                                </div>
                            </div><!-- section title end -->
                        </div>
                    </div><!-- row end -->
                    <!-- row -->
                    <div class="row res-991-mlr-15">
                        <div class="col-lg-1"></div>
                        <div class="col-lg-10">
                            <!-- col-bg-img-four -->
                            <div class="col-bg-img-four ttm-col-bgimage-yes pb-20">
                                <div class="ttm-col-wrapper-bg-layer ttm-bg-layer"></div>
                                <div class="layer-content ttm-textcolor-white">
                                    <!-- testimonial-slide -->
                                    <div class="testimonial-slide owl-carousel mt_60" data-item="1" data-nav="false"
                                        data-dots="false" data-auto="true">
                                        <!-- testimonials -->
                                        @foreach ($testimonials as $testimonial)
                                            <div class="testimonials style2">
                                                <div class="testimonial-content">
                                                    <div class="testimonial-avatar">
                                                        <div class="testimonial-img">
                                                            <img class="img-center"
                                                                src="{{ asset('/storage/' . $testimonial->image) }}"
                                                                alt="testimonial-img">
                                                        </div>
                                                    </div>
                                                    <div class="ttm-ratting-star">
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                    </div>
                                                    <blockquote>{{ $testimonial->description }}</blockquote>
                                                    <div class="testimonial-caption">
                                                        <h6>{{ $testimonial->client_name }}</h6>
                                                        <label>{{ $testimonial->client_address }}</label>
                                                    </div>
                                                </div>
                                            </div>
                                        @endforeach


                                    </div><!-- testimonial-slide end-->
                                </div>
                            </div><!-- col-bg-img-four end -->
                        </div>
                        <div class="col-lg-1"></div>
                    </div><!-- row end-->
                </div>
            </section>
            <!-- testimonial-section end-->





        </div>
        <a id="totop" href="#top">
            <i class="fa fa-angle-up"></i>
        </a>
    </div>
    <!--site-main end-->
@endsection
