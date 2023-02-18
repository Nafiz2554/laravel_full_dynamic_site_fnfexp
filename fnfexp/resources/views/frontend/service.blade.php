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
                            <h1 class="title">Services</h1>
                        </div>
                        <!-- /.page-title-captions -->
                        <div class="breadcrumb-wrapper">
                            <span>
                                <a title="Homepage" href="index-3.html"><i class="ti ti-home"></i></a>
                            </span>
                            <span class="ttm-bread-sep">&nbsp; / &nbsp;</span>
                            <span><span>Services with Parcel Price</span></span>
                        </div>
                    </div>
                </div>
                <!-- /.col-md-12 -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container -->
    </div>
    <!-- page-title end-->

    <!--site-main start-->
    <div class="site-main">

        <!-- about-section -->
        @foreach ($services as $service)
            <section class="ttm-row break-991-colum about3-section">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-5 col-sm-12">
                            <!-- ttm_single_image-wrapper -->
                            <div class="ttm_single_image-wrapper text-left mb-35">
                                <img class="img-fluid" src="{{ asset('/storage/' . $service->image) }}" alt="">
                            </div>
                            <div class="about-overlay-shape text-center">
                                <div class="row">
                                    <div class="col-lg-6"></div>
                                    <div class="col-lg-6 max-content mt_214 ml-287 res-991-ml-0">
                                        <div
                                            class="about-content ttm-col-bgcolor-yes ttm-bg ttm-bgcolor-skincolor sapcing-7 ttm-textcolor-white">
                                            <div class="ttm-col-wrapper-bg-layer ttm-bg-layer"></div>
                                            <div class="layer-content">
                                                <h2>{{ $service->experience }}</h2>
                                                <h5>year<br>Experience</h5>
                                            </div>
                                        </div>
                                        <!-- ttm_single_image-wrapper end -->
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-7 col-sm-12">
                            <div class="pl-5">
                                <!-- section title -->
                                <div class="section-title with-desc clearfix">
                                    <div class="title-header">
                                        <h5>WHY CHOOSE US</h5>
                                        <h2 class="title">{{ $service->why_choose_us }}</h2>
                                    </div>
                                    <div class="title-desc">{{ $service->description }}</div>
                                </div>
                                <!-- section title end -->
                                <div class="row mb-40">
                                    <div class="col-lg-6">
                                        <!--featured-icon-box-->
                                        <div class="featured-icon-box left-icon">
                                            <div class="ttm-icon ttm-icon_element-color-skincolor ttm-icon_element-size-md">
                                                <i class="flaticon-level"></i>
                                            </div>
                                            <div class="featured-content">
                                                <div class="featured-title">
                                                    <h5>P2P</h5>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- featured-icon-box end-->
                                        <!--featured-icon-box-->
                                        <div class="featured-icon-box left-icon">
                                            <div class="featured-icon">
                                                <div
                                                    class="ttm-icon ttm-icon_element-color-skincolor ttm-icon_element-size-md">
                                                    <i class="flaticon-helmet"></i>
                                                </div>
                                            </div>
                                            <div class="featured-content">
                                                <div class="featured-title">
                                                    <h5>B2P</h5>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- featured-icon-box end-->
                                    </div>
                                    <div class="col-lg-6">
                                        <!--featured-icon-box-->
                                        <div class="featured-icon-box left-icon">
                                            <div class="featured-icon">
                                                <div
                                                    class="ttm-icon ttm-icon_element-color-skincolor ttm-icon_element-size-md">
                                                    <i class="flaticon-plumber"></i>
                                                </div>
                                            </div>
                                            <div class="featured-content">
                                                <div class="featured-title">
                                                    <h5>B2B</h5>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- featured-icon-box end-->
                                        <!--featured-icon-box-->
                                        <div class="featured-icon-box left-icon">
                                            <div class="featured-icon">
                                                <div
                                                    class="ttm-icon ttm-icon_element-color-skincolor ttm-icon_element-size-md">
                                                    <i class="flaticon-wall"></i>
                                                </div>
                                            </div>
                                            <div class="featured-content">
                                                <div class="featured-title">
                                                    <h5>C2B</h5>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- featured-icon-box end-->
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-5">

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        @endforeach
        <!-- about-section end -->


        <!--pricing-plan-section-->
        <section
            class="ttm-row pricing-plan-section bg-img3 pb-180 res-991-pb-100 ttm-bgimage-yes ttm-bgcolor-white clearfix">
            <div class="container clearfix">
                <!-- row -->
                <div class="row">
                    <div class="col-lg-9 col-md-12">
                        <!-- section-title -->
                        <div class="section-title style2 clearfix">
                            <div class="title-header">
                                <h5>PRICING & PLAN FOR DHAKA CITY</h5>
                                <h2 class="title">A Fee Plan</h2>
                            </div>
                            <div class="title-desc">FNF Express Ltd has 1+ years of experience with providing wide area
                                of specialty services works listed below.</div>
                        </div>
                        <!-- section-title end -->
                    </div>
                    <div class="col-lg-3 col-md-12">
                        <a class="ttm-btn ttm-btn-size-md ttm-btn-shape-square ttm-icon-btn-right ttm-btn-style-border ttm-btn-color-black mt-15 mb-30 float-right"
                            href="#">+8801924001500<i class="ti ti-angle-double-right"></i></a>
                    </div>
                </div>
                <!-- row end -->
                <div class="row m-0 pt-65 pl-15 pr-15 res-767-pt-15">
                    @foreach ($plans as $plan)
                        <div class="col-md-4">
                            <!--ttm-pricing-plan-->
                            <div class="ttm-pricing-plan clearfix">
                                <div class="ttm-ptablebox-title">
                                    <h3>{{ $plan->title }}</h3>
                                </div>
                                <div class="ttm-ptablebox-desc">{{ $plan->subtitle }}
                                </div>
                                <div class="ttm-ptablebox-price-w">
                                    <div class="ttm-ptablebox-cur-symbol-before">৳</div>
                                    <div class="ttm-ptablebox-price">{{ $plan->price }}</div>
                                    <div class="ttm-ptablebox-frequency">{{ $plan->unit }}</div>
                                </div>
                                <div class="ttm-ptablebox-content">
                                    <div class="ttm-ptablebox-features">
                                        <ul class="ttm-feature-lines">
                                            <li>{{ $plan->input1 }}</li>
                                            <li>{{ $plan->input2 }}</li>
                                            <li>{{ $plan->input3 }}</li>
                                            <li>{{ $plan->input4 }}</li>
                                        </ul>
                                    </div>
                                    <div class="price_btn">
                                        <a class="ttm-btn ttm-btn-size-md ttm-btn-shape-square ttm-btn-style-fill ttm-btn-bgcolor-grey ttm-btn-color-black"
                                            href="#">{{ $plan->mobile_no }}</a>
                                    </div>
                                </div>
                            </div>
                            <!--ttm-pricing-plan-->
                        </div>
                    @endforeach
                </div>
            </div>
        </section>
        <!--pricing-plan-section end-->

        <!--pricing-plan-section-->

        <!--pricing-plan-section end-->


    </div>
    <!--site-main end-->
@endsection
