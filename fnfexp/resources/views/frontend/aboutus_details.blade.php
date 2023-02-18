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
                            <h1 class="title">Our management Team</h1>
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

    <div class="container">
        <div class="row">
            @if ($aboutus)
                @foreach ($aboutus as $aboutus)
                    <div class="col-sm-12 col-lg-6">
                        <div class="card">
                            <div class="card-body">
                                <img src="{{ asset('/storage/' . $aboutus->image) }}" class="card-img-top" alt="...">
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-body text-center">
                                <p style="font-family:cursive;font-size:larger;color:#3ea30a;">Our Management</p>
                                <hr>
                                <p style="font-weight:bold;opacity:80%;">We Serve You!</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12 col-lg-6" style="margin-top: 6rem;">
                        <div class="card">
                            <div class="card-body">
                                <ul class="list-group">
                                    <li class="list-group-item text-center"><b>Name: {{ $aboutus->name }}</b></li>
                                    <li class="list-group-item  text-center"><b>Designation:</b> {{ $aboutus->designation }}</li>
                                    <li class="list-group-item">{{ $aboutus->desc }}</li>

                                </ul>
                            </div>
                        </div>

                    </div>
                @endforeach
            @endif
        </div>
    </div>


@endsection
