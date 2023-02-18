<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="keywords" content="HTML5 Template" />
    <meta name="description" content="Boldman Infostack &raquo; Comments Feed HTML Template" />

    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <title>Our &#8211; Company &amp; Title</title>

    <!-- favicon icon -->
    <link rel="shortcut icon" href="{{asset('assets/images/favicon.png')}}" />

    <!-- bootstrap -->
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/bootstrap.min.css')}}" />

    <!-- animate -->
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/animate.css')}}" />

    <!-- owl-carousel -->
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/owl.carousel.css')}}">

    <!-- fontawesome -->
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/font-awesome.css')}}" />

    <!-- themify -->
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/themify-icons.css')}}" />

    <!-- flaticon -->
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/flaticon.css')}}" />


    <!-- REVOLUTION LAYERS STYLES -->

    <link rel="stylesheet" type="text/css" href="{{asset('assets/revolution/css/layers.css')}}">

    <link rel="stylesheet" type="text/css" href="{{asset('assets/revolution/css/settings.css')}}">

    <!-- prettyphoto -->
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/prettyPhoto.css')}}">

    <!-- shortcodes -->
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/shortcodes.css')}}" />

    <!-- main -->
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/main.css')}}" />

    <!--Color Switcher Mockup-->
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/color-switcher.css')}}">

    <!--Color Themes-->
    <link id="switcher-color" href="{{asset('assets/css/colors/default-color.css')}}" rel="stylesheet">

    <!-- responsive -->
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/responsive.css')}}" />
    


     

    


</head>

<body>

    @include('frontend.layouts.header')

    @yield('main-container')

    @include('frontend.layouts.footer')


     <!-- Javascript -->
      

    <script src="{{asset('assets/js/jquery.min.js')}}"></script>
    <script src="{{asset('assets/js/tether.min.js')}}"></script>
    <script src="{{asset('assets/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('assets/js/color-switcher.js')}}"></script>
    <script src="{{asset('assets/js/jquery.easing.js')}}"></script>
    <script src="{{asset('assets/js/jquery-waypoints.js')}}"></script>
    <script src="{{asset('assets/js/jquery-validate.js')}}"></script>
    <script src="{{asset('assets/js/owl.carousel.js')}}"></script>
    <script src="{{asset('assets/js/jquery.prettyPhoto.js')}}"></script>
    <script src="{{asset('assets/js/numinate.min69596959.js?ver=4.9.3')}}"></script>
    <script src="{{asset('assets/js/main.js')}}"></script>

    <!-- Revolution Slider -->
    <script src="{{asset('assets/revolution/js/jquery.themepunch.tools.min.js')}}"></script>
    <script src="{{asset('assets/revolution/js/jquery.themepunch.revolution.min.js')}}"></script>
    <script src="{{asset('assets/revolution/js/slider.js')}}"></script>

    <!-- SLIDER REVOLUTION 5.0 EXTENSIONS  (Load Extensions only on Local File Systems !  The following part can be removed on Server for On Demand Loading) -->

    <script src="{{asset('assets/revolution/js/extensions/revolution.extension.actions.min.js')}}"></script>
    <script src="{{asset('assets/revolution/js/extensions/revolution.extension.carousel.min.js')}}"></script>
    <script src="{{asset('assets/revolution/js/extensions/revolution.extension.kenburn.min.js')}}"></script>
    <script src="{{asset('assets/revolution/js/extensions/revolution.extension.layeranimation.min.js')}}"></script>
    <script src="{{asset('assets/revolution/js/extensions/revolution.extension.migration.min.js')}}"></script>
    <script src="{{asset('assets/revolution/js/extensions/revolution.extension.navigation.min.js')}}"></script>
    <script src="{{asset('assets/revolution/js/extensions/revolution.extension.parallax.min.js')}}"></script>
    <script src="{{asset('assets/revolution/js/extensions/revolution.extension.slideanims.min.js')}}"></script>

</body>



</html>
