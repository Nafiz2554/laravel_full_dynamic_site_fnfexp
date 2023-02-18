<header id="masthead" class="header ttm-header-style-classic">
    <!-- ttm-topbar-wrapper -->
    <div class="ttm-topbar-wrapper ttm-bgcolor-darkgrey ttm-textcolor-white clearfix">
        <div class="container">
            <div class="ttm-topbar-content">
                <ul class="top-contact ttm-highlight-left text-left">
                    @foreach ($headers as $header)
                        <li style="font-size: 20px;"><i class="fa fa-phone"></i><strong>Hot Line Number:</strong> <span
                                class="tel-no">{{ $header->phone }}</span></li>
                    @endforeach

                </ul>
                <div class="topbar-right text-right">
                    <ul class="top-contact">
                        @foreach ($headers as $header)
                            <li><i class="fa fa-envelope-o"></i><strong>Email: </strong><a
                                    href="mailto:{{ $header->email }}">{{ $header->email }}</a></li>
                        @endforeach
                    </ul>
                    <div class="ttm-social-links-wrapper list-inline">
                        <ul class="social-icons">
                            <li><a href=" "><i class="fa fa-facebook"></i></a>
                            </li>
                            <li><a href=" "><i class="fa fa-twitter"></i></a>
                            </li>
                            <li><a href=" "><i class="fa fa-whatsapp"></i></a>
                            </li>

                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ttm-topbar-wrapper end -->
    <!-- ttm-header-wrap -->
    <div class="ttm-header-wrap">
        <!-- ttm-stickable-header-w -->
        <div id="ttm-stickable-header-w" class="ttm-stickable-header-w clearfix">
            <div id="site-header-menu" class="site-header-menu">
                <div class="site-header-menu-inner ttm-stickable-header">
                    <div class="container">
                        <!-- site-branding -->
                        <div class="site-branding">
                            @foreach ($headers as $header)
                                <a class="home-link" href="{{ url('/') }}" title="Boldman" rel="home">
                                    <img id="logo-img" class="img-center" width="70px"
                                        src="{{ asset('/storage/' . $header->image) }}" alt="logo-img">
                                </a>
                            @endforeach
                        </div>
                        <!-- site-branding end -->
                        <!--site-navigation -->
                        <div id="site-navigation" class="site-navigation">
                            <div class="header-btn">
                                <a class="ttm-btn ttm-btn-size-md ttm-btn-shape-square ttm-btn-style-border ttm-btn-color-black"
                                    href="{{ url('/') }}">Login </a>
                                <a class="ttm-btn ttm-btn-size-md ttm-btn-shape-square ttm-btn-style-border ttm-btn-color-black"
                                    href="{{ url('/') }}">Registration </a>
                            </div>
                            {{-- <div class="header-btn">
                                <a class="ttm-btn ttm-btn-size-md ttm-btn-shape-square ttm-btn-style-border ttm-btn-color-black"
                                    href="https://foa-courier.himelrana.com/merchant_registration.php">Registration </a>
                            </div> --}}
                            <!-- header-icins -->
                            {{-- <div class="ttm-header-icons "> 
                                <div class="ttm-header-icon ttm-header-search-link">
                                    <a href="#"><i class="ti ti-search"></i></a>
                                    <div class="ttm-search-overlay">
                                        <form method="get" class="ttm-site-searchform" action="#">
                                            <div class="w-search-form-h">
                                                <div class="w-search-form-row">
                                                    <div class="w-search-input">
                                                        <input type="search" class="field searchform-s" name="s"
                                                            placeholder="Type Word Then Enter...">
                                                        <button type="submit">
                                                            <i class="ti ti-search"></i>
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div> --}}
                            <!-- header-icons end -->
                            <div class="ttm-menu-toggle">
                                <input type="checkbox" id="menu-toggle-form" />
                                <label for="menu-toggle-form" class="ttm-menu-toggle-block">
                                    <span class="toggle-block toggle-blocks-1"></span>
                                    <span class="toggle-block toggle-blocks-2"></span>
                                    <span class="toggle-block toggle-blocks-3"></span>
                                </label>
                            </div>
                            <nav id="menu" class="menu">
                                <ul class="dropdown">

                                    <li class="active"><a href="{{ url('/') }}">Home</a></li>

                                    <li><a href="#">Company</a>
                                        <ul>
                                            <li><a href="#intro">Introduction</a></li>
                                            <ul>
                                            </ul>
                                    </li>

                                </ul>
                                </li>
                                <li><a href="#">Services</a>
                                    <ul>
                                        <li><a href="{{ url('/service') }}">Our Service</a></li>
                                        <li><a href="{{ url('/area-coverage') }}">Area Coverage</a></li>
                                        <li><a href="{{ url('/contact') }}">Contact Us</a></li>
                                    </ul>
                                </li>
                                <li><a href="#">About Us</a>
                                    <ul>
                                        <li><a href="{{ url('/company-profile') }}">Company Profile</a></li>
                                        <li><a href="{{ url('/our-management') }}">Our Management</a></li>


                                    </ul>
                                </li>
                                <li><a href="#">News/Media</a>
                                    <ul>
                                        <li><a href="{{ url('/blog') }}">News</a></li>
                                        <li><a href="{{ url('/blog') }}">Media</a></li>
                                        <li><a href="{{ url('/faq') }}">FaQs</a></li>
                                    </ul>
                                </li>

                                </ul>
                            </nav>
                        </div>
                        <!-- site-navigation end-->
                    </div>
                </div>
            </div>
        </div>
        <!-- ttm-stickable-header-w end-->
    </div>
    <!--ttm-header-wrap end -->
</header>
