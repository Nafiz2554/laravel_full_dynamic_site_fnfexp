<!DOCTYPE html>
<html lang="en">

<head>

    <!-- start: Meta -->
    <meta charset="utf-8">
    <title>Admin Page</title>
    <meta name="description" content="Bootstrap Metro Dashboard">
    <meta name="author" content="Dennis Ji">
    <meta name="keyword"
        content="Metro, Metro UI, Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">
    <!-- end: Meta -->

    <!-- start: Mobile Specific -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- end: Mobile Specific -->

    <!-- start: CSS -->
    <link id="bootstrap-style" href="{{ asset('admin/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('admin/css/bootstrap-responsive.min.css') }}" rel="stylesheet">
    <link id="base-style" href="{{ asset('admin/css/style.css') }}" rel="stylesheet">
    <link id="base-style-responsive" href="{{ asset('admin/css/style-responsive.css') }}" rel="stylesheet">
    <link
        href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800&subset=latin,cyrillic-ext,latin-ext'
        rel='stylesheet' type='text/css'>
    <!-- end: CSS -->


    <!-- The HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]-->
    <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <link id="ie-style" href="{{ asset('admin/css/ie.css') }}" rel="stylesheet">
    <!--[endif]-->

    <!--[if IE 9]-->
    <link id="ie9style" href="{{ asset('admin/css/ie9.css') }}" rel="stylesheet">
    <!--[endif]-->

    <!-- start: Favicon -->
    <link rel="shortcut icon" href="img/favicon.ico">
    <!-- end: Favicon -->




</head>

<body>
    <!-- start: Header -->
    <div class="navbar">
        <div class="navbar-inner">
            <div class="container-fluid">
                <a class="btn btn-navbar" data-toggle="collapse"
                    data-target=".top-nav.nav-collapse,.sidebar-nav.nav-collapse">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </a>
                <a class="brand" href="index.html"><span><strong> Admin</strong></span></a>

                <!-- start: Header Menu -->
                <div class="nav-no-collapse header-nav">
                    <ul class="nav pull-right">

                        <li class="dropdown">
                            <a class="btn dropdown-toggle" data-toggle="dropdown" href="#">
                                <i class="halflings-icon white user"></i> Super Admin
                                <span class="caret"></span>
                            </a>
                            <ul class="dropdown-menu">
                                <li class="dropdown-menu-title">
                                    <span>Account Settings</span>
                                </li>
                                <li><a href="#"><i class="halflings-icon user"></i> Profile</a></li>
                                <li><a href="{{ url('/logout') }}"><i class="halflings-icon off"></i> Logout</a></li>
                            </ul>
                        </li>
                        <!-- end: User Dropdown -->
                    </ul>
                </div>
                <!-- end: Header Menu -->

            </div>
        </div>
    </div>
    <!-- start: Header -->

    <div class="container-fluid-full">
        <div class="row-fluid">

            <!-- start: Main Menu -->
            <div id="sidebar-left" class="span2">
                <div class="nav-collapse sidebar-nav">
                    <ul class="nav nav-tabs nav-stacked main-menu">
                        <li><a href="{{ url('/dashboard') }}"><i class="icon-bar-chart"></i><span
                                    class="hidden-tablet">
                                    Dashboard</span></a></li>
                        {{-- <li><a href="messages.html"><i class="icon-envelope"></i><span class="hidden-tablet">
                                    Messages</span></a></li>
                        <li><a href="tasks.html"><i class="icon-tasks"></i><span class="hidden-tablet">
                                    Tasks</span></a></li>
                        <li><a href="ui.html"><i class="icon-eye-open"></i><span class="hidden-tablet"> UI
                                    Features</span></a></li>
                        <li><a href="widgets.html"><i class="icon-dashboard"></i><span class="hidden-tablet">
                                    Widgets</span></a></li> --}}

                        <li>
                            <a class="dropmenu" href="#"><i class="icon-folder-close-alt"></i><span
                                    class="hidden-tablet">Homepage</span></a>
                            <ul>
                                <li><a class="submenu" href="{{ url('/company_intros/create') }}"><i
                                            class="icon-file-alt"></i><span class="hidden-tablet"> Add Company
                                            Introduction</span></a></li>
                                <li><a class="submenu" href="{{ url('/company_intros') }}"><i
                                            class="icon-file-alt"></i><span class="hidden-tablet"> Company
                                            Introduction</span></a></li>

                            </ul>
                        </li>




                        <li>
                            <a class="dropmenu" href="#"><i class="icon-folder-close-alt"></i><span
                                    class="hidden-tablet"> Company Profile</span></a>
                            <ul>
                                <li><a class="submenu" href="{{ url('/company_profiles/create') }}"><i
                                            class="icon-file-alt"></i><span class="hidden-tablet"> Add
                                            Information</span></a></li>
                                <li><a class="submenu" href="{{ url('/company_profiles') }}"><i
                                            class="icon-file-alt"></i><span class="hidden-tablet"> Show
                                            Informations</span></a></li>

                                <li><a class="submenu" href="{{ url('/testimonials/create') }}"><i
                                            class="icon-file-alt"></i><span class="hidden-tablet"> Add
                                            Testimonial</span></a></li>
                                <li><a class="submenu" href="{{ url('/testimonials') }}"><i
                                            class="icon-file-alt"></i><span class="hidden-tablet"> Show
                                            Testimonials</span></a></li>

                                <li><a class="submenu" href="{{ url('/teams/create') }}"><i
                                            class="icon-file-alt"></i><span class="hidden-tablet"> Add
                                            Team Member</span></a></li>
                                <li><a class="submenu" href="{{ url('/teams') }}"><i
                                            class="icon-file-alt"></i><span class="hidden-tablet"> Show
                                            Team Members</span></a></li>

                            </ul>
                        </li>
                        <li>
                            <a class="dropmenu" href="#"><i class="icon-folder-close-alt"></i><span
                                    class="hidden-tablet">Management Team</span></a>
                            <ul>
                                <li><a class="submenu" href="{{ url('/aboutuses/create') }}"><i
                                            class="icon-file-alt"></i><span class="hidden-tablet"> Add
                                            Member</span></a></li>
                                <li><a class="submenu" href="{{ url('/aboutuses') }}"><i
                                            class="icon-file-alt"></i><span class="hidden-tablet"> All
                                            Members</span></a></li>

                            </ul>
                        </li>
                        <li>
                            <a class="dropmenu" href="#"><i class="icon-folder-close-alt"></i><span
                                    class="hidden-tablet"> Services</span></a>
                            <ul>
                                <li><a class="submenu" href="{{ url('/services/create') }}"><i
                                            class="icon-file-alt"></i><span class="hidden-tablet"> Add
                                            Service</span></a>
                                </li>
                                <li><a class="submenu" href="{{ url('/services') }}"><i
                                            class="icon-file-alt"></i><span class="hidden-tablet"> All
                                            Services</span></a></li>

                                <li><a class="submenu" href="{{ url('/plans/create') }}"><i
                                            class="icon-file-alt"></i><span class="hidden-tablet"> Add Service Plan
                                            Plan</span></a>
                                </li>
                                <li><a class="submenu" href="{{ url('/plans') }}"><i
                                            class="icon-file-alt"></i><span class="hidden-tablet"> All
                                            Plans</span></a></li>

                            </ul>
                        </li>
                        <li>
                            <a class="dropmenu" href="#"><i class="icon-folder-close-alt"></i><span
                                    class="hidden-tablet">News/ Media/ FaQ</span></a>
                            <ul>
                                <li><a class="submenu" href="{{ url('/blogs/create') }}"><i
                                            class="icon-file-alt"></i><span class="hidden-tablet"> Add
                                            News</span></a></li>
                                <li><a class="submenu" href="{{ url('/blogs') }}"><i
                                            class="icon-file-alt"></i><span class="hidden-tablet"> All
                                            News</span></a></li>

                                <li><a class="submenu" href="{{ url('/faqs/create') }}"><i
                                            class="icon-file-alt"></i><span class="hidden-tablet"> Add
                                            FaQs</span></a></li>
                                <li><a class="submenu" href="{{ url('/faqs') }}"><i
                                            class="icon-file-alt"></i><span class="hidden-tablet"> All
                                            FaQs</span></a></li>

                            </ul>
                        </li>

                        <li>
                            <a class="dropmenu" href="#"><i class="icon-folder-close-alt"></i><span
                                    class="hidden-tablet">Client Messages</span></a>
                            <ul>

                                <li><a class="submenu" href="{{ url('/show-message') }}"><i
                                            class="icon-file-alt"></i><span class="hidden-tablet"> All
                                            Messages</span></a></li>

                            </ul>
                        </li>

                        <li>
                            <a class="dropmenu" href="#"><i class="icon-folder-close-alt"></i><span
                                    class="hidden-tablet"> Header Infromations</span></a>
                            <ul>
                                <li><a class="submenu" href="{{ url('/create-header') }}"><i
                                            class="icon-file-alt"></i><span class="hidden-tablet"> Add
                                            Header Info</span></a></li>
                                <li><a class="submenu" href="{{ url('/headers/') }}"><i
                                            class="icon-file-alt"></i><span class="hidden-tablet"> All
                                            Header Info</span></a></li>

                            </ul>
                        </li>

                        <li>
                            <a class="dropmenu" href="#"><i class="icon-folder-close-alt"></i><span
                                    class="hidden-tablet"> Footer Infromations</span></a>
                            <ul>
                                <li><a class="submenu" href="{{ url('/footers/create') }}"><i
                                            class="icon-file-alt"></i><span class="hidden-tablet"> Add
                                            Footer</span></a></li>
                                <li><a class="submenu" href="{{ url('/footers') }}"><i
                                            class="icon-file-alt"></i><span class="hidden-tablet"> All
                                            Footer</span></a></li>

                            </ul>
                        </li>

                        

                    </ul>
                </div>
            </div>
            <!-- end: Main Menu -->

            <noscript>
                <div class="alert alert-block span10">
                    <h4 class="alert-heading">Warning!</h4>
                    <p>You need to have <a href="http://en.wikipedia.org/wiki/JavaScript"
                            target="_blank">JavaScript</a>
                        enabled to use this site.</p>
                </div>
            </noscript>

            <!-- start: Content -->
            <div id="content" class="span10">


                <ul class="breadcrumb">
                    <li>
                        <i class="icon-home"></i>
                        <a href="{{ url('/') }}">Home</a>
                        <i class="icon-angle-right"></i>
                    </li>
                    <li><a href="#">Dashboard</a></li>
                </ul>



                @yield('admin_content')

                <!-- end: Content -->
            </div>
            <!--/#content.span10-->
        </div>
        <!--/fluid-row-->

        <div class="modal hide fade" id="myModal">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">??</button>
                <h3>Settings</h3>
            </div>
            <div class="modal-body">
                <p>Here settings can be configured...</p>
            </div>
            <div class="modal-footer">
                <a href="#" class="btn" data-dismiss="modal">Close</a>
                <a href="#" class="btn btn-primary">Save changes</a>
            </div>
        </div>



        <!-- start: JavaScript-->

        <script src="{{ asset('admin/js/jquery-1.9.1.min.js') }}"></script>
        <script src="{{ asset('admin/js/jquery-migrate-1.0.0.min.js') }}"></script>

        <script src="{{ asset('admin/js/jquery-ui-1.10.0.custom.min.js') }}"></script>

        <script src="{{ asset('admin/js/jquery.ui.touch-punch.js') }}"></script>

        <script src="{{ asset('admin/js/modernizr.js') }}"></script>

        <script src="{{ asset('admin/js/bootstrap.min.js') }}"></script>

        <script src="{{ asset('admin/js/jquery.cookie.js') }}"></script>

        <script src="{{ asset('admin/js/fullcalendar.min.js') }}"></script>

        <script src="{{ asset('admin/js/jquery.dataTables.min.js') }}"></script>

        <script src="{{ asset('admin/js/excanvas.js') }}"></script>
        <script src="{{ asset('admin/js/jquery.flot.js') }}"></script>
        <script src="{{ asset('admin/js/jquery.flot.pie.js') }}"></script>
        <script src="{{ asset('admin/js/jquery.flot.stack.js') }}"></script>
        <script src="{{ asset('admin/js/jquery.flot.resize.min.js') }}"></script>

        <script src="{{ asset('admin/js/jquery.chosen.min.js') }}"></script>

        <script src="{{ asset('admin/js/jquery.uniform.min.js') }}"></script>

        <script src="{{ asset('admin/js/jquery.cleditor.min.js') }}"></script>

        <script src="{{ asset('admin/js/jquery.noty.js') }}"></script>

        <script src="{{ asset('admin/js/jquery.elfinder.min.js') }}"></script>

        <script src="{{ asset('admin/js/jquery.raty.min.js') }}"></script>

        <script src="{{ asset('admin/js/jquery.iphone.toggle.js') }}"></script>

        <script src="{{ asset('admin/js/jquery.uploadify-3.1.min.js') }}"></script>

        <script src="{{ asset('admin/js/jquery.gritter.min.js') }}"></script>

        <script src="{{ asset('admin/js/jquery.imagesloaded.js') }}"></script>

        <script src="{{ asset('admin/js/jquery.masonry.min.js') }}"></script>

        <script src="{{ asset('admin/js/jquery.knob.modified.js') }}"></script>

        <script src="{{ asset('admin/js/jquery.sparkline.min.js') }}"></script>

        <script src="{{ asset('admin/js/counter.js') }}"></script>

        <script src="{{ asset('admin/js/retina.js') }}"></script>

        <script src="{{ asset('admin/js/custom.js') }}"></script>
        <!-- end: JavaScript-->

</body>

</html>
