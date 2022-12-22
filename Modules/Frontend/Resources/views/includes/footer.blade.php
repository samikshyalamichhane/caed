<footer class="footer-1 footer-wrap">
        <div class="footer-widgets section-bg pt-60 pb-60 newgetintouch">            
            <div class="container">
                <div class="row">
                    <div class="col-md-3">                        
                        <div class="single-footer-wid site-info-widget">
                            <div class="wid-title">
                                <h4>Get In Touch</h4>
                            </div>
                            <div class="contact-us">
                                <div class="single-contact-info">
                                    <div class="icon">
                                        <i class="fal fa-phone"></i>
                                    </div>
                                    <div class="contact-info">
                                        <span>{{@$dashboard_site->contact1}}</span>
                                        <span>{{@$dashboard_site->contact2}}</span>
                                    </div>
                                </div>
                                <div class="single-contact-info">
                                    <div class="icon">
                                        <i class="fal fa-envelope"></i>
                                    </div>
                                    <div class="contact-info">
                                        <span>{{@$dashboard_site->email1}} </span>
                                        <span>{{@$dashboard_site->email2}}</span>
                                    </div>
                                </div>
                                <div class="single-contact-info">
                                    <div class="icon">
                                        <i class="fal fa-map-marker-alt"></i>
                                    </div>
                                    <div class="contact-info">
                                        <span>{{@$dashboard_site->address}}</span>
                                    </div>
                                    <div class="mt-5">
                                    <iframe src="{{@$dashboard_site->map}}" width="100%" height="200" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                                </div>
                                </div>
                            </div>

                            <div class="social-link">
                                <a href="{{@$dashboard_site->facebook}}"><i class="fab fa-facebook-f"></i></a>
                                <a href="{{@$dashboard_site->twitter}}"><i class="fab fa-twitter"></i></a>
                                <a href="{{@$dashboard_site->instagram}}"><i class="fab fa-instagram"></i></a>
                                <a href="{{@$dashboard_site->youtube}}"><i class="fab fa-youtube"></i></a>
                            </div>
                        </div>
                    </div> <!-- /.col-lg-3 - single-footer-wid -->
                    <div class="offset-1 col-md-3 po">
                        <div class="single-footer-wid">
                            <div class="wid-title">
                                <h4>About Us</h4>
                            </div>
                            <div class="special-menu">
                                <ul>
                                    <li><a href="{{route('about')}}">Who We Are</a></li>
                                    <li><a href="{{route('about')}}">Organizational Structure</a></li>
                                    <li><a href="{{route('about')}}">Approach and Strategies</a></li>
                                    <li><a href="{{route('about')}}">Our Team</a></li>
                                    <!--<li><a href="team.html">Team</a></li>                                  -->
                                    <!--<li><a href="contact.html">Contact Us</a></li>                                    -->
                                </ul>
                            </div>
                            <!--<div class="special-menu">-->
                            <!--    <ul>-->
                            <!--        <li><a href="causes.html">Causes List</a></li>-->
                            <!--        <li><a href="donation.html">donation</a></li>-->
                            <!--        <li><a href="team.html">Careers</a></li>-->
                            <!--        <li><a href="contact.html">Get A Quote</a></li>-->
                            <!--        <li><a href="faq.html">Terms & Conditions</a></li>-->
                            <!--    </ul>-->
                            <!--</div>-->
                        </div>
                    </div> <!-- /.col-lg-3 - single-footer-wid -->
                    <div class="col-md-3">
                        <div class="single-footer-wid">
                            <div class="wid-title">
                                <h4>Getting Involved</h4>
                            </div>
                            <ul>
                                <li><a href="{{route('supportAndDonate')}}">Support and Donate</a></li>
                                <li><a href="{{route('volunteer')}}">Volunteering</a></li>
                                <li><a href="{{route('vacancyList')}}">Vacancies</a></li>
                                                             
                            </ul>
                        </div>
                    </div> <!-- /.col-lg-3 - single-footer-wid -->
                      <div class="col-md-2">
                        <div class="single-footer-wid">
                            <div class="wid-title">
                                <h4>Resources</h4>
                            </div>
                            <ul>
                                <li><a href="{{route('resources')}}">Resources</a></li>
                                <li><a href="{{route('galleries')}}">Gallery</a></li>
                                <li><a href="{{route('contact')}}">Contact</a></li>
                                                             
                            </ul>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <div class="footer-bottom">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-12 text-center">
                        <div class="copyright-info">
                            <p>&copy; <a href="https://webhousenepal.com/">Webhouse Nepal Pvt. Ltd</a> All rights reserved.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <!--  ALl JS Plugins
    ====================================== -->
    
    <script src="{{ asset('frontend/assets/js/jquery.min.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/modernizr.min.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/jquery.easing.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/popper.min.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/isotope.pkgd.min.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/imageload.min.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/scrollUp.min.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/magnific-popup.min.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/waypoint.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/easypiechart.min.js') }}"></script>
    <!--<script src="{{ asset('frontend/lib/animate/animate.min.css') }}assets/js/counterup.min.js"></script>-->
    <script src="{{ asset('frontend/assets/js/wow.min.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/lightbox.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/metismenu.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/timeline.min.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/ajax-mail.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/active.js') }}"></script>
    <!-- Go to www.addthis.com/dashboard to customize your tools --> 
    <script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-639b158bf92efe1d"></script>
</body>

</html>