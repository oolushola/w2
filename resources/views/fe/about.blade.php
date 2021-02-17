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
                            <h2>Kaya is a fast rising tech logistic firm with a niche for excellence. </h2>
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
                            <h2>With our Technology</h2>
                        </div>
                        <ul>
                            <li>
                                <i class="flaticon-cargo-ship"></i>
                                <h3>Experienced carriers</h3>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore.</p>
                            </li>
                            <li>
                                <i class="flaticon-eye"></i>
                                <h3>24/7 Visibility</h3>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore.</p>
                            </li>
                            <li>
                                <i class="flaticon-shield-border"></i>
                                <h3>Customer Service</h3>
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
                                    <span class="odometer" data-count="4520">00</span> 
                                </h3>
                                <p>Cargo Delivered</p>
                            </div>
                        </div>
                        <div class="col-sm-6 col-lg-6">
                            <div class="counter-item">
                                <img src="assets/img/home-one/counter-shape.png" alt="Counter">
                                <h3>
                                    <span class="odometer" data-count="22">00</span> 
                                </h3>
                                <p>Happy Clients</p>
                            </div>
                        </div>
                        <div class="col-sm-6 col-lg-6">
                            <div class="counter-item">
                                <img src="assets/img/home-one/counter-shape.png" alt="Counter">
                                <h3>
                                    <span class="odometer" data-count="1590">00</span> 
                                </h3>
                                <p>Trucks</p>
                            </div>
                        </div>
                        <div class="col-sm-6 col-lg-6">
                            <div class="counter-item two">
                                <img src="assets/img/home-one/counter-shape.png" alt="Counter">
                                <h3>
                                    <span class="odometer" data-count="2">00</span> 
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
@stop

        

        


        
