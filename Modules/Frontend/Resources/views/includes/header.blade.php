<!DOCTYPE html>
<html lang="en">

<head>
    <!-- ========== Meta Tags ========== -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="modinatheme">
    <!-- ======== Page title ============ -->
    {!! SEOMeta::generate() !!}
    {!! OpenGraph::generate() !!}

    <!-- ========== Favicon Icon ========== -->
    <link rel="shortcut icon" href="{{ Storage::url(@$dashboard_site->fav_icon) }}? {{ Storage::url(@$dashboard_site->fav_icon) }} :{{ asset('frontend/assets/img/caedlogo.jpg') }}">
    <!-- ===========  All Stylesheet ================= -->
    <!--  Icon css plugins -->
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/icons.css') }}">
    <!--  animate css plugins -->
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/animate.css') }}">
    <!--  magnific-popup css plugins -->
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/magnific-popup.css') }}">
    <!--  owl carosuel css plugins -->
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/owl.carousel.min.css') }}">
    <!-- metis menu css file -->
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/metismenu.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/lightbox.css') }}">
    <!--  owl theme css plugins -->
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/owl.theme.css') }}">
    <!--<link href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&display=swap" rel="stylesheet">-->
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
    <!--  Bootstrap css plugins -->
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/bootstrap.min.css') }}">
    <!--  main style css file -->
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/style.css') }}">
    <!-- template main style css file -->
    <link rel="stylesheet" href="{{ asset('frontend/assets/style.css') }}">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body class="body-wrapper">

    <!-- welcome content start from here -->
    <header class="header-wrap header-box-style header-1">
        <div class="container">
            <div class="row align-items-center">
                <!-- <div class="col-12 p-0 d-lg-none d-block d-none-mobile">
                    <div class="top-bar text-right">
                        <a href="mailto:caedseacow@info.com.np"><i class="fal fa-envelope"></i>caedseacow@info.com.np</a>
                        <a href="tel:+977-1-5180340"><i class="fal fa-phone"></i>+977-1-5180340</a>
                        <a href="donation.html" class="d-btn">Donate Now</a>
                    </div>
                </div> -->

                <div class="col-xl-2 col-6 col-lg-3 pr-0">
                    <div class="logo headerkologo">
                        <a href="{{route('index')}}"><img src="{{ Storage::url(@$dashboard_site->header_logo) }}? {{ Storage::url(@$dashboard_site->header_logo) }} :{{ asset('frontend/assets/img/caedlogo.jpg') }}" class="img img-responsive" alt="caed"></a>
                    </div>
                </div>
                <div class="col-xl-10 pl-lg-0 col-lg-9 d-none d-lg-block">
                    <div class="box-wrap">
                        <div class="top-bar text-right">
                            <!--<a href="mailto:caedseacow@info.com.np"><i class="fal fa-envelope"></i>caedseacow@info.com.np</a>-->
                            <!--<a href="tel:+977-1-5180340"><i class="fal fa-phone"></i>+977-1-5180340</a>-->
                            <!--<a href="#" class="d-btn">Donate Now</a>-->
                            <!--<p>वातावरणीय कृषि तथा विकास केन्द्रय</p>-->
                            <p>{{$dashboard_about['navbar_title']}}</p>
                        </div>
                        <div class="menu-wrap d-flex align-items-center justify-content-around">
                            <div class="main-menu">
                                <ul>
                                    <li><a href="{{route('index')}}">Home</a>

                                    </li>

                                    <li><a href="{{route('about')}}">About Us <i class="fa fa-angle-down"></i></a>
                                        <ul class="sub-menu">
                                            <li>
                                                <a href="{{route('about')}}">Who We Are</a>
                                            </li>
                                            <li>
                                                <a href="{{route('about')}}">Organizational Structure</a>
                                            </li>
                                            <li>
                                                <a href="{{route('about')}}">Approachs and Strategies </a>
                                                <!--        <ul class="sub-menu">-->
                                                <!--    <li>-->
                                                <!--       <a href="{{route('about')}}">CAED Approach and Strategies</a>-->
                                                <!--    </li>-->

                                                <!--</ul>-->
                                            </li>
                                            <li>
                                                <a href="{{route('about')}}">Our Team <i class="fa fa-angle-right"></i></a>
                                                <ul class="sub-menu">
                                                    <li>
                                                        <a href="{{route('about')}}">Executive Members</a>
                                                    </li>
                                                    <li>
                                                        <a href="{{route('about')}}">Our Staffs</a>
                                                    </li>
                                                </ul>
                                            </li>

                                        </ul>
                                    </li>

                                    <li><a class="has-arrow" href="{{route('projects')}}">Projects & Partners <i class="fa fa-angle-down"></i></a>
                                        <ul class="sub-menu">
                                            <li>
                                                <a href="{{route('issueAndThemes')}}">Issues and Themes</a>
                                            </li>
                                            <li>
                                                <a href="{{route('partners')}}">Our Partners <i class="fa fa-angle-right"></i></a>
                                                <ul class="sub-menu">
                                                    <li>
                                                        <a href="{{route('partners')}}">Funding Partners</a>
                                                    </li>
                                                    <li>
                                                        <a href="{{route('partners')}}">Consortium Partners</a>
                                                    </li>
                                                    <li>
                                                        <a href="{{route('partners')}}">Implementing Partners</a>
                                                    </li>

                                                </ul>
                                            </li>
                                            @foreach($dashboard_project_categories->where('id','!=',1) as $procat)
                                            <li>
                                                <a href="{{route('projects')}}">{{$procat->title}} <i class="fa fa-angle-right"></i></a>
                                                <ul class="sub-menu">
                                                    @foreach($procat->projects as $project)
                                                    <li>
                                                        <a href="{{route('projects')}}">{{$project->title}} </a>
                                                    </li>
                                                    @endforeach
                                                    <!-- <li>
                                                        <a href="partner.html">Women, Girls and Child Rights Program (WoGCRP) </a>
                                                    </li>
                                                    <li>
                                                        <a href="partner.html">Karnali Livelihood Empowerment Program (KLEP)</a>
                                                    </li> -->

                                                </ul>
                                            </li>
                                            @endforeach
                                            <!-- <li>
                                                <a href="{{route('projects')}}">Completed Projects and Partners <i class="fa fa-angle-right"></i></a>
                                                <ul class="sub-menu">
                                                    <li>
                                                        <a href="partner.html">School of Ecology, Agriculture and Community Works (SEACOW)</a>
                                                    </li>
                                                    <li>
                                                        <a href="partner.html">Sustainable Livelihood Program (SLP)</a>
                                                    </li>
                                                    <li>
                                                        <a href="partner.html">Chepang Interest Program (CIP)</a>
                                                    </li>
                                                    <li>
                                                        <a href="partner.html">Forest Rights Program (FRP)</a>
                                                    </li>
                                                    <li>
                                                        <a href="partner.html">Alternative Herbal Products (AHP)</a>
                                                    </li>
                                                    <li>
                                                        <a href="partner.html">Praja NTFP Action Research Program (PNARP)</a>
                                                    </li>

                                                </ul>
                                            </li> -->

                                        </ul>
                                    </li>

                                    <li><a href="{{route('newsList')}}">News & Events</a></li>


                                    <li><a href="#">Getting Involved <i class="fa fa-angle-down"></i></a>
                                        <ul class="sub-menu">
                                            <li>
                                                <a href="{{route('supportAndDonate')}}">Support/Donate</a>
                                            </li>
                                            <li>
                                                <a href="{{route('volunteer')}}">Volunteering</a>
                                            </li>
                                            <li>
                                                <a href="{{route('vacancyList')}}">Vacancies</a>
                                            </li>

                                        </ul>
                                    </li>

                                    <li><a href="{{route('resources')}}">Resources <i class="fa fa-angle-down"></i></a>
                                        <ul class="sub-menu">
                                            <li>
                                                <a href="{{route('projectReports')}}">Project Reports</a>
                                            </li>
                                            <li>
                                                <a href="{{route('publications')}}">Publications</a>
                                            </li>

                                        </ul>
                                    </li>
                                    <li><a href="{{route('galleries')}}">Gallery</a>
                                    <li><a href="{{route('contact')}}">Contact</a></li>
                                </ul>
                            </div>
                            <!-- <div class="social-link">
                                <a href="#"><i class="fab fa-facebook-f"></i></a>
                                <a href="#"><i class="fab fa-twitter"></i></a>
                                <a href="#"><i class="fab fa-linkedin-in"></i></a>
                                <a href="#"><i class="fab fa-youtube"></i></a>
                                <a href="#"><i class="fab fa-instagram"></i></a>
                            </div> -->
                        </div>
                    </div>
                </div>
                <div class="col-6 d-lg-none d-block pl-0">
                    <div class="mobile-nav-wrap">
                        <div id="hamburger">
                            <i class="fal fa-bars"></i>
                        </div>
                        <!-- mobile menu - responsive menu  -->
                        <div class="mobile-nav">
                            <button type="button" class="close-nav">
                                <i class="fal fa-times-circle"></i>
                            </button>
                            <nav class="sidebar-nav">
                                <ul class="metismenu" id="mobile-menu">

                                    <li><a href="{{route('index')}}">Home</a>
                                    </li>

                                    <li><a class="has-arrow" href="{{route('about')}}">About Us</a>
                                        <ul class="sub-menu">
                                            <li>
                                                <a href="{{route('about')}}">Who We Are</a>
                                            </li>
                                            <li>
                                                <a href="{{route('about')}}">Organizational Structure</a>
                                            </li>
                                            <li>
                                                <a href="{{route('about')}}">Approach and Strategies</a>
                                            </li>
                                            <li>
                                                <a href="{{route('about')}}">Our Team</a>
                                            </li>

                                        </ul>
                                    </li>

                                    <li><a href="#" class="has-arrow">Getting Involved</a>
                                        <ul class="sub-menu">
                                            <li>
                                                <a href="supportanddonate.html">Support and Donate</a>
                                            </li>
                                            <li>
                                                <a href="volunteering.html">Volunteering</a>
                                            </li>
                                            <li>
                                                <a href="vacancies.html">Vacancies</a>
                                            </li>

                                        </ul>
                                    </li>

                                    <li><a href="#">News & Events</a></li>

                                    <li><a class="has-arrow" href="partner.html">Project & Partners</a>
                                        <ul class="sub-menu">
                                            <li>
                                                <a href="issuesandthemes.html">Issues and Themes</a>
                                            </li>
                                            <li>
                                                <a href="partner.html">Our Partners</a>
                                            </li>
                                            <li>
                                                <a href="partner.html">Onging Projects and Partners</a>
                                            </li>
                                            <li>
                                                <a href="partner.html">Completed Projects and Partners</a>
                                            </li>

                                        </ul>
                                    </li>

                                    <li><a href="#" class="has-arrow">Resources</a>
                                        <ul class="sub-menu">
                                            <li>
                                                <a href="resources.html">Resources</a>
                                            </li>
                                            <li>
                                                <a href="gallery.html">Gallery</a>
                                            </li </ul>
                                    </li>
                                    <li><a href="contact.html">Contact</a></li>
                                </ul>
                            </nav>

                            <div class="action-bar">
                                <a href="mailto:caedseacow@info.com.np"><i class="fal fa-envelope"></i>caedseacow@info.com.np</a>
                                <a href="tel:+977-1-5180340"><i class="fal fa-phone"></i>+977-1-5180340</a>
                            </div>
                        </div>
                    </div>
                    <div class="overlay"></div>
                </div>
            </div>
        </div>
    </header>