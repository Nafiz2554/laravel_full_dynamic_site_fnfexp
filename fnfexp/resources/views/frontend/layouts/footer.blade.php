 <!--footer start-->
 <footer class="footer widget-footer clearfix">
     <div class="first-footer">
         <div class="container">
             <div class="row">

             </div>
         </div>
     </div>
     <div class="second-footer ttm-textcolor-white">
         <div class="container">
             <div class="row">
                 <div class="col-xs-12 col-sm-12 col-md-6 col-lg-3 widget-area">
                     <div class="widget clearfix">
                         <div class="footer-logo">
                             @foreach ($headers as $header)
                                 <img id="footer-logo-img" class="img-center" width="300px" height="400px"
                                     src="{{ asset('/storage/' . $header->image) }}" alt="">
                             @endforeach
                         </div>

                     </div>
                     <div class="widget widget_text clearfix">
                         <h3 class="widget-title">Work Days</h3>
                         <div class="textwidget widget-text">
                             <div class="ttm-pricelistbox-wrapper ">
                                 <div class="ttm-timelist-block-wrapper">
                                     <ul class="ttm-timelist-block">
                                         <li>Wed - sat <span class="service-time">09 AM - 10 PM</span></li>
                                         <li>Friday<span class="service-time"><strong>Closed</strong></span></li>
                                     </ul>
                                 </div>
                             </div>
                         </div>
                     </div>
                 </div>
                 <div class="col-xs-12 col-sm-12 col-md-6 col-lg-3 widget-area">
                     <div class="widget widget_nav_menu clearfix">
                         <h3 class="widget-title">Our Services</h3>
                         <ul id="menu-footer-services">
                             <li><a href="{{ url('/') }}">Home</a></li>
                             <li><a href="{{ url('/') }}">Tracking</a></li>
                             <li><a href="{{ url('/service') }}">Service</a></li>
                             <li><a href="{{ url('/area-coverage') }}">Area</a></li>
                             <li><a href="{{ url('/') }}">Profile</a></li>
                             <li><a href="{{ url('/our-management') }}">Team</a></li>
                             <li><a href="{{ url('/faq') }}">FAQ</a></li>
                             <li><a href="{{ url('/blog') }}">News</a></li>
                             <li><a href="{{ url('/success-story') }}">Success</a></li>
                             <li><a href="{{ url('/contact') }}">Contact</a></li>

                         </ul>
                     </div>
                 </div>
                 <div class="col-xs-12 col-sm-12 col-md-6 col-lg-3 widget-area">
                     <div class="widget widget_text clearfix">
                         <h3 class="widget-title">Cell No</h3>
                         @foreach ($footers as $footer)
                             <div class="textwidget widget-text">
                                 <h3 class="ttm-textcolor-skincolor">{{ $footer->phone }}</h3>


                             </div>
                         @endforeach
                     </div>
                 </div>
                 <div class="col-xs-12 col-sm-12 col-md-6 col-lg-3 widget-area">
                     <div class="widget flicker_widget clearfix ">
                         <h3 class="widget-title">Partner</h3>
                         <div class=" d-flex flex-wrap">
                             @foreach ($footers as $footer)
                                 <div class="ttm-flicker-widget-wrapper">
                                     <a href="{{ asset('/storage/' . $footer->image) }}"><img style="width: 80%;"
                                             src="{{ asset('/storage/' . $footer->image) }}" alt="A photo on Flickr"
                                             title="themetech-one"></a>
                                 </div>
                             @endforeach

                         </div>
                     </div>
                 </div>
             </div>
         </div>
     </div>
     <div class="bottom-footer-text ttm-textcolor-white">
         <div class="container">
             <div class="row copyright">
                 <div class="col-md-8 ttm-footer2-left">
                     <span>Copy Right Our Company Title <a href=" " target="_blank"> Design and
                             developed By Royal It</a></span>
                 </div>
                 <div class="col-md-4 ttm-footer2-right">
                     <div class="social-icons">
                         <ul class="list-inline">
                             <li><a href=" "><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                             <li><a href=" "><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                             <li><a href=" "><i class="fa fa-whatsapp" aria-hidden="true"></i></a></li>

                         </ul>
                     </div>
                 </div>
             </div>
         </div>
     </div>
 </footer>
