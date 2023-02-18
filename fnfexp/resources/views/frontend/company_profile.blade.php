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
                            <h1 class="title">Company Profile</h1>
                        </div><!-- /.page-title-captions -->
                        <div class="breadcrumb-wrapper">
                            <span>
                                <a title="Homepage" href="index-3.html"><i class="ti ti-home"></i></a>
                            </span>
                            <span class="ttm-bread-sep">&nbsp; / &nbsp;</span>
                            <span><span>Details</span></span>
                        </div>
                    </div>
                </div><!-- /.col-md-12 -->
            </div><!-- /.row -->
        </div><!-- /.container -->
    </div><!-- page-title end-->

    <!--site-main start-->
    <div class="site-main">

        <!-- about-section -->

        @foreach ($company_profiles as $company_profile)
            <section class="ttm-row about3-section ttm-bgcolor-grey">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6 col-sm-12">
                            <!-- single-img -->
                            <div class="single-img mb-40">
                                <img style="width: 80%; box-shadow:2px 1px 1px lightgrey;" class="img-fluid"
                                    src="{{ asset('/storage/' . $company_profile->image) }}" alt="">
                            </div><!-- single-img end -->
                        </div>
                        <div class="col-lg-6 col-sm-12 pl-0 res-991-pl-15">
                            <!-- section title -->
                            <div class="section-title clearfix">
                                <div class="title-header">
                                    <h5>WHO WE ARE</h5>
                                    <h2 class="title">{{ $company_profile->who_we_are }}</h2>
                                </div>
                            </div><!-- section title end -->
                            <!-- acadion -->
                            <div class="accordion mt-40">
                                <!-- toggle -->
                                <div class="toggle ttm-style-classic ttm-toggle-title-bgcolor-grey">
                                    <div class="toggle-title"><a data-toggle="collapse" data-parent="#accordion"
                                            href="#collapseOne">FNF Express Limited</a></div>
                                    <div class="toggle-content">
                                        <p>{{ $company_profile->fn_express }}</p>
                                    </div>
                                </div><!-- toggle end -->
                                <!-- toggle -->
                                <div class="toggle ttm-style-classic ttm-toggle-title-bgcolor-grey">
                                    <div class="toggle-title"><a data-toggle="collapse" data-parent="#accordion"
                                            href="#collapseTwo">Mission</a></div>
                                    <div class="toggle-content">
                                        <p>{{ $company_profile->mission }}</p>
                                    </div>
                                </div><!-- toggle end -->
                                <!-- toggle -->
                                <div class="toggle ttm-style-classic ttm-toggle-title-bgcolor-grey">
                                    <div class="toggle-title"><a data-toggle="collapse" data-parent="#accordion"
                                            href="#collapseThree">Vission</a></div>
                                    <div class="toggle-content">
                                        <p>{{ $company_profile->vission }}</p>
                                    </div>
                                </div><!-- toggle end -->
                            </div><!-- acadion end-->
                            <div class="row mt-15">
                                <div class="col-md-4">
                                    <!-- ttm-fid -->
                                    <div class="ttm-fid inside ttm-fid-view-topicon">
                                        <div class="ttm-fid-contents">
                                            <h4><span data-appear-animation="animateDigits" data-from="0"
                                                    data-to="{{ $company_profile->customers }}" data-interval="10"
                                                    data-before="" data-before-style="sup" data-after=""
                                                    data-after-style="sub">{{ $company_profile->customers }}
                                                </span><sub></sub>
                                            </h4>
                                            <h3 class="ttm-fid-title"><span>Customers</span></h3>
                                        </div><!-- ttm-fid-contents end -->
                                    </div><!-- ttm-fid end -->
                                </div>
                                <div class="col-md-4">
                                    <!-- ttm-fid -->
                                    <div class="ttm-fid inside ttm-fid-view-topicon">
                                        <div class="ttm-fid-contents">
                                            <h4><span data-appear-animation="animateDigits" data-from="0"
                                                    data-to="{{ $company_profile->experience }}" data-interval="5"
                                                    data-before="" data-before-style="sup" data-after=""
                                                    data-after-style="sub">{{ $company_profile->experience }}
                                                </span><sub>Year</sub>
                                            </h4>
                                            <h3 class="ttm-fid-title"><span>Experience</span></h3>
                                        </div><!-- ttm-fid-contents end -->
                                    </div><!-- ttm-fid end -->
                                </div>
                                <div class="col-md-4">
                                    <!-- ttm-fid -->
                                    <div class="ttm-fid inside ttm-fid-view-topicon">
                                        <div class="ttm-fid-contents">
                                            <h4><span data-appear-animation="animateDigits" data-from="0"
                                                    data-to="{{ $company_profile->percel_delivery }}" data-interval="10"
                                                    data-before="" data-before-style="sup" data-after=""
                                                    data-after-style="sub">{{ $company_profile->percel_delivery }}
                                                </span><sub></sub>
                                            </h4>
                                            <h3 class="ttm-fid-title"><span>Percel Delivery</span></h3>
                                        </div><!-- ttm-fid-contents end-->
                                    </div><!-- ttm-fid end -->
                                </div>
                            </div>
                        </div>
                    </div><!-- row end-->
                </div>
            </section>
            <!-- about-section end -->
        @endforeach




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
                                    data-dots="false" data-auto="false">
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



        <!--team-section-->
        <section class="ttm-row team-section-2 pb-150 res-991-pb-100 break-991-colum clearfix">
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
                            <div class="title-desc">Boldman has 10+ years of experience with providing wide area of
                                specialty services works listed below.</div>
                        </div><!-- section title end -->
                    </div>
                    <div class="col-md-2"></div>
                </div>
                <div class="row">
                    <div class="wrap-team team-slide owl-carousel ttm-textcolor-white mt-5" data-item="4"
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
                                        <ul class="social-icons list-inline">
                                            <li class="social-facebook"><a class="tooltip-top" target="_blank"
                                                    href="{{ url('https://www.facebook.com/fuadon.fuad') }}"
                                                    data-tooltip="Facebook"><i class="fa fa-facebook"
                                                        aria-hidden="true"></i></a></li>
                                            <li class="social-linkedin"><a class=" tooltip-top" target="_blank"
                                                    href="#" data-tooltip="LinkedIn"><i class="fa fa-linkedin"
                                                        aria-hidden="true"></i></a></li>
                                            <li class="social-gplus"><a class=" tooltip-top" target="_blank"
                                                    href="#" data-tooltip="Google+"><i class="fa fa-google-plus"
                                                        aria-hidden="true"></i></a></li>
                                        </ul>
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
                </div><!-- row end -->
            </div>
        </section>
        <!--team-section end-->

    </div>
    <!--site-main end-->
@endsection
