@extends('layout')

@section('title') Kaya Africa Technology ::. Moving Africa @stop

@section('main')    
    <!-- Banner -->
    <div class="banner-area">
        <div class="banner-slider owl-theme owl-carousel">
            <div class="banner-item two">
                <img src="assets/img/home-two/banner-main2.png" alt="Banner">
                <div class="d-table">
                    <div class="d-table-cell">
                        <div class="container">
                            <div class="banner-text">
                                <h1>Professional Transport Company with Real Time Cargo Visibility</h1>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua quis ipsum suspendisse.</p>
                                <a class="cmn-btn" href="#">Get A Quote</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="banner-social">
            <ul>
                <li>
                    <a href="https://www.facebook.com/{{$companyProfile->facebook}}" target="_blank">FACEBOOK</a>
                </li>
                <li>
                    <a href="https://www.instagram.com/{{$companyProfile->instagram}}" target="_blank">INSTAGRAM</a>
                </li>
                <li>
                    <a href="https://www.twitter.com/{{$companyProfile->twitter}}" target="_blank">TWITTER</a>
                </li>
                <li>
                    <a href="https://www.linkdin.com/{{$companyProfile->linkdin}}" target="_blank">LINKDIN</a>
                </li>
            </ul>
        </div>
    </div>

    <!-- Feature -->
    <div class="feature-area two pt-100 pb-70">
        <div class="container">
            <div class="row">
                <div class="col-sm-6 col-lg-4">
                    <div class="feature-item">
                        <i class="flaticon-truck-1"></i>
                        <h3>Modern Truck Equipment</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore.</p>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-4">
                    <div class="feature-item">
                        <i class="flaticon-insight"></i>
                        <h3>Strong Customer Focus</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore.</p>
                    </div>
                </div>
                <div class="col-sm-6 offset-sm-3 offset-lg-0 col-lg-4">
                    <div class="feature-item">
                        <i class="flaticon-delivery-truck"></i>
                        <h3>On Time Delivery</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Feature -->

    <!-- About -->
    <div class="about-area two pb-70">
        <div class="container">
            <div class="row">
                <div class="col-lg-5">
                    <div class="about-img">
                        <img src="assets/img/inner_service.png" alt="About">
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
                            <h2>Kaya is a fast rising tech logistics firm with a niche for excellence.</h2>
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
                                {!! $companyProfile->our_history !!}
                                <a class="cmn-btn" href="{{URL('about')}}">Explore</a>
                            </div>
                            <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
                                {!! $companyProfile->our_vision !!}
                                <a class="cmn-btn" href="{{URL('about')}}">Explore</a>
                            </div>
                            <div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab">
                                {!! $companyProfile->our_mission !!}
                                <a class="cmn-btn" href="{{URL('about')}}">Explore</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End About -->

    <!-- Counter -->
    <div class="counter-area pb-70">
        <div class="container">
            <div class="row">
                <div class="col-sm-6 col-lg-3">
                    <div class="counter-item">
                        <img src="assets/img/home-one/counter-shape.png" alt="Counter">
                        <h3>
                            <span class="odometer" data-count="4520">00</span> 
                        </h3>
                        <p>Cargo Delivered</p>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-3">
                    <div class="counter-item">
                        <img src="assets/img/home-one/counter-shape.png" alt="Counter">
                        <h3>
                            <span class="odometer" data-count="22">00</span> 
                        </h3>
                        <p>Happy Clients</p>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-3">
                    <div class="counter-item">
                        <img src="assets/img/home-one/counter-shape.png" alt="Counter">
                        <h3>
                            <span class="odometer" data-count="1590">00</span> 
                        </h3>
                        <p>Trucks</p>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-3">
                    <div class="counter-item">
                        <img src="assets/img/home-one/counter-shape.png" alt="Counter">
                        <h3>
                            <span class="odometer" data-count="2">00</span> 
                        </h3>
                        <p>Years Hands On Experience</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Counter -->

    <!-- Work -->
    <section class="work-area two pb-70">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="work-left">
                        <h2>Our Drive</h2>
                        <span>Since 2019, Kaya has delivered world-class supply chain solutions, responsibly and safely. Today, Kaya is among the top three largest truckload carriers in Nigeria, and a transportation and logistics leader.</span>
                        <ul>
                            <li>
                                <i class="flaticon-transport"></i>
                                <h3>Unrivaled Capacity</h3>
                                <p>With our nationwide truckload capacity, your immediate and complex truckload needs will be fulfilled with our breadth and flexibility of services through the surges and ever-changing freight market.</p>
                            </li>
                            <li>
                                <i class="flaticon-security-purposes"></i>
                                <h3>Extra Helping Hands You Can Count On</h3>
                                <p>We are committed to being a true partner to all our businesses, providing your company with the benefits of Kaya's experience, expertise, and resources necessary to achieve excellence. We understand your needs are unique and require a specifically designed solution.</p>
                            </li>
                            <li>
                                <i class="flaticon-international-delivery"></i>
                                <h3>Industry Safety Leader</h3>
                                <p>Ranked as one of Nigeria's safest fleets, our commitment to safety is a commitment to the welfare of our employees and the community. </p>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="work-right">
                        <h3>Request a quote</h3>
                        <p>Tell us your needs, and our industry experts will respond shortly.</p>
                        <form>
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label>Your name</label>
                                        <input type="text" class="form-control">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label>Your email</label>
                                        <input type="email" class="form-control">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label>Phone</label>
                                        <input type="text" class="form-control">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label>Subject</label>
                                        <input type="text" class="form-control">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label>Freight type</label>
                                        <select>
                                            <option>Air Freight</option>
                                            <option>Another option</option>
                                            <option>A option</option>
                                            <option>Potato</option>
                                        </select>	
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label>City of departure</label>
                                        <input type="text" class="form-control">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label>Delivery city</label>
                                        <input type="text" class="form-control">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label>Incoterms</label>
                                        <select>
                                            <option>Demo</option>
                                            <option>Another option</option>
                                            <option>A option</option>
                                            <option>Potato</option>
                                        </select>	
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label>Weight</label>
                                                <input type="text" class="form-control">
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label>Height</label>
                                                <input type="text" class="form-control">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label>Width</label>
                                                <input type="text" class="form-control">
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label>Length</label>
                                                <input type="text" class="form-control">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
                                        <label class="form-check-label" for="inlineCheckbox1">Fragile</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
                                        <label class="form-check-label" for="inlineCheckbox2">Express delivery</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="checkbox" id="inlineCheckbox3" value="option3">
                                        <label class="form-check-label" for="inlineCheckbox3">Insurance</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="checkbox" id="inlineCheckbox4" value="option4">
                                        <label class="form-check-label" for="inlineCheckbox4">Packaging</label>
                                    </div>
                                </div>
                            </div>
                            <button type="submit" class="btn cmn-btn">Request A Quote</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Work -->

    <!-- Client -->
    <section class="client-area two ptb-100">
        <div class="section-title">
            <span class="sub-title">Clients Words</span>
            <h2>What our clients say</h2>
        </div>
        <div class="container">
            <div class="client-slider owl-theme owl-carousel">
                @foreach($testimonials as $testimonial)
                <div class="client-item">
                    <i class="flaticon-right-quote"></i>
                    <p>“{{ $testimonial->comment }}”</p>
                    <div class="client-top">
                        <img src="{{URL::asset('assets/img/testimonial/'.$testimonial->photo.'')}}" alt="Client {{$testimonial->full_name}}"  style="border-radius:100%">
                        <h3>{{ $testimonial->full_name }}</h3>
                        <span>{{ $testimonial->designation }}</span>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>
    <!-- End Client -->

    <!-- Blog -->
    <section class="blog-area pt-100 pb-70">
        <div class="container">
            <div class="section-title">
                <span class="sub-title">Our News</span>
                <h2>Read our latest news</h2>
            </div>
            <div class="row">
                <div class="col-sm-6 col-lg-4">
                    <div class="blog-item">
                        <div class="blog-top">
                            <a href="blog-details.html">
                                <img src="assets/img/home-one/blog1.jpg" alt="Blog">
                            </a>
                        </div>
                        <div class="blog-bottom">
                            <ul>
                                <li>
                                    <i class='bx bxs-user'></i>
                                    <span>By:</span>
                                    <a href="#">admin</a>
                                </li>
                                <li>
                                    <i class='bx bx-calendar-alt'></i>
                                    <span>28 July, 2020</span>
                                </li>
                            </ul>
                            <h3>
                                <a href="blog-details.html">The important role of technology during supply chain</a>
                            </h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua....</p>
                            <a class="cmn-btn" href="blog-details.html">Read More</a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-4">
                    <div class="blog-item">
                        <div class="blog-top">
                            <a href="blog-details.html">
                                <img src="assets/img/home-one/blog2.jpg" alt="Blog">
                            </a>
                        </div>
                        <div class="blog-bottom">
                            <ul>
                                <li>
                                    <i class='bx bxs-user'></i>
                                    <span>By:</span>
                                    <a href="#">admin</a>
                                </li>
                                <li>
                                    <i class='bx bx-calendar-alt'></i>
                                    <span>29 July, 2020</span>
                                </li>
                            </ul>
                            <h3>
                                <a href="blog-details.html">Creating value beyond the deal in the Transport & Logistics sector</a>
                            </h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua....</p>
                            <a class="cmn-btn" href="blog-details.html">Read More</a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 offset-sm-3 offset-lg-0 col-lg-4">
                    <div class="blog-item">
                        <div class="blog-top">
                            <a href="blog-details.html">
                                <img src="assets/img/home-one/blog3.jpg" alt="Blog">
                            </a>
                        </div>
                        <div class="blog-bottom">
                            <ul>
                                <li>
                                    <i class='bx bxs-user'></i>
                                    <span>By:</span>
                                    <a href="#">admin</a>
                                </li>
                                <li>
                                    <i class='bx bx-calendar-alt'></i>
                                    <span>30 July, 2020</span>
                                </li>
                            </ul>
                            <h3>
                                <a href="blog-details.html">How to improve the performance of your warehouse operations?</a>
                            </h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua....</p>
                            <a class="cmn-btn" href="blog-details.html">Read More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Blog -->

@stop

        

        


        
