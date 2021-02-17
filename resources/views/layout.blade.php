<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <link rel="stylesheet" href="{{URL::asset('assets/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{URL::asset('assets/css/meanmenu.css')}}">
    <link rel="stylesheet" href="{{URL::asset('assets/css/boxicons.min.css')}}">
    <link rel="stylesheet" href="{{URL::asset('assets/fonts/flaticon.css')}}">
    <link rel="stylesheet" href="{{URL::asset('assets/css/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{URL::asset('assets/css/owl.theme.default.min.css')}}">
    <link rel="stylesheet" href="{{URL::asset('assets/css/magnific-popup.css')}}">
    <link rel="stylesheet" href="{{URL::asset('assets/css/odometer.css')}}">
    <link rel="stylesheet" href="{{URL::asset('assets/css/nice-select.css')}}">
    <link rel="stylesheet" href="{{URL::asset('assets/css/animate.min.css')}}">
    <link rel="stylesheet" href="{{URL::asset('assets/css/style.css')}}">
    <link rel="stylesheet" href="{{URL::asset('assets/css/responsive.css')}}">
    <title>@yield('title')</title>
    <link rel="icon" type="image/png" href="">
</head>
<body>
    
    <!-- Preloader -->
    <div class="loader">
        <div class="d-table">
            <div class="d-table-cell">
                <div class="loading-wrapper">
                    <div class="loading"></div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Preloader -->

    <!-- Start Navbar -->
    <div class="navbar-area sticky-top">
        <!-- Menu For Mobile Device -->
        <div class="mobile-nav">
            <a href="index.html" class="logo">
                <img src="{{URL::asset('assets/img/'.$companyProfile->logo)}}" alt="Kaya Logo" width="40" height="40">
            </a>
        </div>

        <!-- Menu For Desktop Device -->
        <div class="main-nav two three">
            <div class="container-fluid ">
                <nav class="navbar navbar-expand-md navbar-light">
                    <a class="navbar-brand" href="index.html">
                        <img src="{{URL::asset('assets/img/'.$companyProfile->logo)}}" width="50" height="50" alt="Kaya Logo">
                    </a>
                    <div class="collapse navbar-collapse mean-menu" id="navbarSupportedContent">
                        <ul class="navbar-nav">
                            @foreach($menuItems as $key=> $menu)
                                <li class="nav-item">
                                    <a href="{{ URL($menu->url_path) }}" class="nav-link dropdown-toggle">
                                        {{ $menu->application_name }}
                                        <?php
                                            if($menu->has_children == TRUE) { ?>
                                                <i class='bx bx-chevron-down'></i>
                                        <?php } ?>
                                    </a>
                                    <?php if($menu->has_children == TRUE) { ?>
                                    <ul class="dropdown-menu">
                                        @foreach($childLinks as $item)
                                            @if($item->site_application_id == $menu->id)
                                                <li class="nav-item">
                                                    <a href="{{ URL($item->url_path) }}" class="nav-link">{{ $item->application_name }}</a>
                                                </li>
                                            @endif
                                        @endforeach
                                    </ul>
                                    <?php } ?>
                                </li>
                            @endforeach
                        </ul>
                        <div class="side-nav">
                            <ul>
                                <li>
                                    <div class="nav-srh">
                                        <div class="search-toggle">
                                            <button class="search-icon icon-search"><i class='bx bx-search-alt'></i></button>
                                            <button class="search-icon icon-close"><i class='bx bx-x'></i></button>
                                        </div>
                                        <div class="search-area">
                                            <form>
                                                <input type="text" class="src-input" id="search-terms" placeholder="Search here..." />
                                                <button type="submit" name="submit" value="Go" class="search-icon"><i class='bx bx-search-alt'></i></button>
                                            </form>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="call">
                                        <i class='bx bxs-phone-call'></i>
                                        <span>Call Now</span>
                                        <a href="tel:{{ $companyProfile->phone_no_one }}">{{ $companyProfile->phone_no_one }}</a>
                                    </div>
                                </li>
                                <li>
                                    <button type="button" class="btn modal-btn" data-toggle="modal" data-target="#myModalRight">
                                        <span></span>
                                        <span></span>
                                        <span></span>
                                    </button>
                                </li>
                            </ul>
                        </div>
                    </div>
                </nav>
            </div>
        </div>
    </div>
    <!-- End Navbar -->

    <!-- Sidebar Modal -->
    <div id="myModalRight" class="modal fade modal-right" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <img src="{{URL::asset('assets/img/'.$companyProfile->logo)}}" width="50" height="50" alt="Logo">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <p>{!! $companyProfile->our_history !!}</p>
                    <div class="contact-area">
                        <h2>Contact Us</h2>
                        <ul>
                            <li>
                                <i class='flaticon-placeholder'></i>
                                <span>{{ $companyProfile->address }}</span>
                            </li>
                            <li>
                                <i class='flaticon-email'></i>
                                <span>Admin: <a href="mailto:{{ $companyProfile->email_one }}">{{ $companyProfile->email_one }}</a></span>
                                <span>Support: <a href="mailto:{{ $companyProfile->email_two }}">{{ $companyProfile->email_two }}</a></span>
                            </li>
                            <li>
                                <i class='flaticon-call'></i>
                                <span>Phone: <a href="tel:{{ $companyProfile->phone_no_one }}">{{ $companyProfile->phone_no_one }}</a></span>
                                <span>Phone: <a href="tel:{{ $companyProfile->phone_no_two }}">{{ $companyProfile->phone_no_two }}</a></span>
                            </li>
                        </ul>
                    </div>
                    <div class="image-area">
                        <h2>Gallery</h2>
                        <div class="row popup-gallery">
                            <div class="col-6 col-lg-4">
                                <a href="assets/img/gallery1.jpg">
                                    <img src="assets/img/gallery1.jpg" alt="Gallery">
                                </a>
                            </div>
                            <div class="col-6 col-lg-4">
                                <a href="assets/img/gallery2.jpg">
                                    <img src="assets/img/gallery2.jpg" alt="Gallery">
                                </a>
                            </div>
                            <div class="col-6 col-lg-4">
                                <a href="assets/img/gallery3.jpg">
                                    <img src="assets/img/gallery3.jpg" alt="Gallery">
                                </a>
                            </div>
                            <div class="col-6 col-lg-4">
                                <a href="assets/img/gallery4.jpg">
                                    <img src="assets/img/gallery4.jpg" alt="Gallery">
                                </a>
                            </div>
                            <div class="col-6 col-lg-4">
                                <a href="assets/img/gallery5.jpg">
                                    <img src="assets/img/gallery5.jpg" alt="Gallery">
                                </a>
                            </div>
                            <div class="col-6 col-lg-4">
                                <a href="assets/img/gallery6.jpg">
                                    <img src="assets/img/gallery6.jpg" alt="Gallery">
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="social-area">
                        <h2>Follow Us</h2>
                        <ul>
                            <li>
                                <a href="#" target="_blank">
                                    <i class='bx bxl-facebook' ></i>
                                </a>
                            </li>
                            <li>
                                <a href="#" target="_blank">
                                    <i class='bx bxl-twitter' ></i>
                                </a>
                            </li>
                            <li>
                                <a href="#" target="_blank">
                                    <i class='bx bxl-linkedin' ></i>
                                </a>
                            </li>
                            <li>
                                <a href="#" target="_blank">
                                    <i class='bx bxl-instagram' ></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Sidebar Modal -->


    @yield('main')


    <footer class="pt-100 pb-70">
        <div class="container">
            <div class="row">
                <div class="col-sm-6 col-lg-3">
                    <div class="footer-item">
                        <div class="footer-logo">
                            <a href="index.html">
                                <!-- <img src="assets/img/logo-two.png" alt="Logo"> -->
                                <img src="assets/img/kaya-official.jpeg" width="80" height="80" alt="Kaya Logo" style="margin-top:-50px">
                            </a>
                            <p>Aggregating Cargo Owners, Clients and Transporters to satisfy end users</p>
                            <ul>
                                <li>
                                    <i class='bx bx-location-plus'></i>
                                    <span>3A Gbenga Ademulegun Lane, Park View, Ikoyi, Lagos.</span>
                                </li>
                                <li>
                                    <i class='bx bx-mail-send'></i>
                                    <a href="mailto:hello@tranx.com">support@kayaafrica.co</a>
                                </li>
                                <li>
                                    <i class='bx bx-phone-call'></i>
                                    <a href="tel:+15143125678">+1 (514) 312-5678</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-3">
                    <div class="footer-item">
                        <div class="footer-service">
                            <h3>Our services</h3>
                            <ul>
                                <li>
                                    <a href="#" target="_blank">Road transport services</a>
                                </li>
                                <li>
                                    <a href="#" target="_blank">Sea freight services</a>
                                </li>
                                <li>
                                    <a href="#" target="_blank">Rail transport services</a>
                                </li>
                                <li>
                                    <a href="#" target="_blank">Warehousing solutions</a>
                                </li>
                                <li>
                                    <a href="#" target="_blank">International delivery</a>
                                </li>
                                <li>
                                    <a href="#" target="_blank">Packing & Shipping Supplies</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-3">
                    <div class="footer-item">
                        <div class="footer-post">
                            <h3>Recent posts</h3>
                            <ul>
                                <li>
                                    <img src="assets/img/home-one/post1.jpg" alt="Post">
                                    <a href="#" target="_blank">Logistics Solutions</a>
                                    <span>28 July, 2020</span>
                                </li>
                                <li>
                                    <img src="assets/img/home-one/post2.jpg" alt="Post">
                                    <a href="#" target="_blank">Manage logistics operations</a>
                                    <span>29 July, 2020</span>
                                </li>
                                <li>
                                    <img src="assets/img/home-one/post3.jpg" alt="Post">
                                    <a href="#" target="_blank">Supply chain solutions</a>
                                    <span>30 July, 2020</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-3">
                    <div class="footer-item">
                        <div class="footer-touch">
                            <h3>Get in touch</h3>
                            <p>Get Cargo & Logistic Tip and solutions to your problems from our platform</p>
                            <form class="newsletter-form" data-toggle="validator">
                                <input type="email" class="form-control" placeholder="Enter your email" name="EMAIL" required autocomplete="off">
        
                                <button class="btn cmn-btn" type="submit">
                                    Subscribe Now
                                </button>
                                <div id="validator-newsletter" class="form-result"></div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <div class="copyright-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="copyright-item">
                        <p>Copyright {{ date('Y') }} Design & Developed by <a href="#" target="_blank">Kaya Tech Team</a></p>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="copyright-item">
                        <ul>
                            <li>
                                <a href="#" target="_blank">Privacy Policy</a>
                            </li>
                            <li>
                                <span>-</span>
                            </li>
                            <li>
                                <a href="#" target="_blank">Terms & Conditions</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Essential JS -->
    <script src="{{ URL::asset('assets/js/jquery-3.5.1.min.js') }}"></script>
    <script src="{{ URL::asset('assets/js/popper.min.js') }}"></script>
    <script src="{{ URL::asset('assets/js/bootstrap.min.js') }}"></script>
    <script src="{{ URL::asset('assets/js/form-validator.min.js') }}"></script>
    <script src="{{ URL::asset('assets/js/contact-form-script.js') }}"></script>
    <script src="{{ URL::asset('assets/js/jquery.ajaxchimp.min.js') }}"></script>
    <script src="{{ URL::asset('assets/js/jquery.meanmenu.js') }}"></script>
    <script src="{{ URL::asset('assets/js/owl.carousel.min.js') }}"></script>
    <script src="{{ URL::asset('assets/js/jquery.magnific-popup.min.js') }}"></script>
    <script src="{{ URL::asset('assets/js/odometer.min.js') }}"></script>
    <script src="{{ URL::asset('assets/js/jquery.appear.js') }}"></script>
    <script src="{{ URL::asset('assets/js/jquery.nice-select.min.js') }}"></script>
    <script src="{{ URL::asset('assets/js/progressbar.min.js') }}"></script>
    <script src="{{ URL::asset('assets/js/wow.min.js') }}"></script>
    <script src="{{ URL::asset('assets/js/custom.js') }}"></script>
</body>
</html>