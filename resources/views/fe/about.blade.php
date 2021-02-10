@extends('layout')

@section('title') Kaya Africa Technology ::. Moving Africa @stop

@section('main')
    <!-- Page Title -->
    <div class="page-title-area">
        <div class="d-table">
            <div class="d-table-cell">
                <div class="container">
                    <div class="title-content">
                        <h2>About</h2>
                        <ul>
                            <li>
                                <a href="{{ URL('/') }}">Home</a>
                            </li>
                            <li>
                                <span>/</span>
                            </li>
                            <li>About</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Page Title -->

    <!-- About -->
    <div class="about-area two three pt-100 pb-70">
        <div class="container">
            <div class="row">
                <div class="col-lg-5">
                    <div class="about-img">
                        <!-- assets/img/home-two/about-main.jpg -->
                        <img src="{{ URL::asset('assets/img/about.jpg') }}" alt="About">
                    </div>
                    <div class="year">
                        <h2>2</h2>
                        <span>Years of experience</span>
                    </div>
                </div>
                <div class="col-lg-7">
                    <div class="about-content">
                        <div class="section-title">
                            <span class="sub-title">About Company</span>
                            <h2>Kaya is the largest transport and logistics company in the world</h2>
                        </div>
                        <ul class="nav nav-pills" id="pills-tab" role="tablist">
                            <li class="nav-item" role="presentation">
                                <a class="nav-link active" id="pills-home-tab" data-toggle="pill" href="#pills-home" role="tab" aria-controls="pills-home" aria-selected="true">Our history</a>
                            </li>
                            <li class="nav-item" role="presentation">
                                <a class="nav-link" id="pills-profile-tab" data-toggle="pill" href="#pills-profile" role="tab" aria-controls="pills-profile" aria-selected="false">Our vision</a>
                            </li>
                            <li class="nav-item" role="presentation">
                                <a class="nav-link" id="pills-contact-tab" data-toggle="pill" href="#pills-contact" role="tab" aria-controls="pills-contact" aria-selected="false">Our mission</a>
                            </li>
                        </ul>
                        <div class="tab-content" id="pills-tabContent">
                            <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis.</p>
                                <ul>
                                    <li>At vero eos et accusam et justo duo dolores et ea rebum.</li>
                                    <li>Stet clita kasd gubergren, no sea takimata sanctus.</li>
                                    <li>Tempor invidunt ut labore et dolore magna aliquyam erat.</li>
                                    <li>Risus commodo viverra maecenas accumsan lacus vel facilisis. </li>
                                </ul>
                                <a class="cmn-btn" href="#">Read More</a>
                            </div>
                            <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis.</p>
                                <ul>
                                    <li>At vero eos et accusam et justo duo dolores et ea rebum.</li>
                                    <li>Stet clita kasd gubergren, no sea takimata sanctus.</li>
                                    <li>Tempor invidunt ut labore et dolore magna aliquyam erat.</li>
                                    <li>Risus commodo viverra maecenas accumsan lacus vel facilisis. </li>
                                </ul>
                                <a class="cmn-btn" href="#">Read More</a>
                            </div>
                            <div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab">
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis.</p>
                                <ul>
                                    <li>At vero eos et accusam et justo duo dolores et ea rebum.</li>
                                    <li>Stet clita kasd gubergren, no sea takimata sanctus.</li>
                                    <li>Tempor invidunt ut labore et dolore magna aliquyam erat.</li>
                                    <li>Risus commodo viverra maecenas accumsan lacus vel facilisis. </li>
                                </ul>
                                <a class="cmn-btn" href="#">Read More</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End About -->

    <!-- Work -->
    <section class="work-area three five pt-100">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="work-left">
                        <div class="section-title">
                            <span class="sub-title">Why Choose Us</span>
                            <h2>Explore our main goals for business</h2>
                        </div>
                        <ul>
                            <li>
                                <i class="flaticon-cargo-ship"></i>
                                <h3>Experienced carriers</h3>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore.</p>
                            </li>
                            <li>
                                <i class="flaticon-eye"></i>
                                <h3>Specialized care</h3>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore.</p>
                            </li>
                            <li>
                                <i class="flaticon-shield-border"></i>
                                <h3>Border crossings</h3>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore.</p>
                            </li>
                            <li>
                                <i class="flaticon-security-purposes"></i>
                                <h3>Reliable shipping</h3>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore.</p>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="row">
                        <div class="col-sm-6 col-lg-6">
                            <div class="counter-item one">
                                <img src="assets/img/home-one/counter-shape.png" alt="Counter">
                                <h3>
                                    <span class="odometer" data-count="99">00</span> 
                                </h3>
                                <p>Vehicles</p>
                            </div>
                        </div>
                        <div class="col-sm-6 col-lg-6">
                            <div class="counter-item">
                                <img src="assets/img/home-one/counter-shape.png" alt="Counter">
                                <h3>
                                    <span class="odometer" data-count="420">00</span> 
                                </h3>
                                <p>Active customer</p>
                            </div>
                        </div>
                        <div class="col-sm-6 col-lg-6">
                            <div class="counter-item">
                                <img src="assets/img/home-one/counter-shape.png" alt="Counter">
                                <h3>
                                    <span class="odometer" data-count="107">00</span> 
                                </h3>
                                <p>Team member</p>
                            </div>
                        </div>
                        <div class="col-sm-6 col-lg-6">
                            <div class="counter-item two">
                                <img src="assets/img/home-one/counter-shape.png" alt="Counter">
                                <h3>
                                    <span class="odometer" data-count="19">00</span> 
                                </h3>
                                <p>Years experience</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Work -->

    <!-- Video -->
    <div class="video-area ptb-100">
        <img src="assets/img/about-main.jpg" alt="Work">
        <a class="popup-youtube" href="https://www.youtube.com/watch?v=aHez0eBJEGw">
            <i class="flaticon-video-player"></i>
        </a>
    </div>
    <!-- End Video -->

@stop

        

        


        
