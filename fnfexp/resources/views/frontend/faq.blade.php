@extends('frontend.layouts.base')
@section('main-container')
    <div class="site-main">

        <section class="ttm-row">
            <div class="container">
                <div class="row">
                    <div class="col-md-2"></div>
                    <div class="col-md-8">
                        <!-- section title -->
                        <div class="section-title with-desc title-style-center_text mb-55 clearfix">
                            <div class="title-header">
                                <h2 class="title">Do you have Questions?</h2>
                            </div>
                            <div class="title-desc"><a href="{{url('/contact')}}">Click Here To Ask</a></div>
                        </div><!-- section title end -->
                    </div>
                    <div class="col-md-2"></div>
                </div>
                <div class="row">
                    <div class="col-lg-6">
                        <!-- single-img -->
                        <div class="single-img mb-35">
                            <img class="img-fluid" src="{{ asset('assets/images/single-image-seven.jpg') }}" alt="">
                            <div class="ttm-video-btn text-center">
                                <a class="ttm-play-btn ttm_prettyphoto" href="https://youtu.be/MdLVzXf7v5E">
                                    <span class="ttm-btn-play"><i class="fa fa-play"></i></span>
                                </a>
                            </div>
                        </div><!-- single-img end -->
                    </div>
                    <div class="col-lg-6">
                        <!-- acadion -->
                        <div class="accordion">
                            <!-- toggle -->
                            @foreach ($faqs as $faq)
                                <div class="toggle ttm-style-classic ttm-toggle-title-border">
                                    <div class="toggle-title"><a data-toggle="collapse" data-parent="#accordion"
                                            href="#collapseOne">{{$faq->ques}}</a></div>
                                    <div class="toggle-content">
                                        <p>{{$faq->ans}}</p>
                                    </div>
                                </div><!-- toggle end -->
                            @endforeach



                        </div><!-- acadion end-->
                    </div>
                </div>

            </div>
        </section>



    </div>
    <!--site-main end-->
@endsection
