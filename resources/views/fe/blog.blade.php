@extends('layout')

@section('title') Kaya Africa Technology ::. Moving Africa @stop

@section('main')
   <!-- Page Title -->
   <div class="page-title-area">
        <div class="d-table">
            <div class="d-table-cell">
                <div class="container">
                    <div class="title-content">
                        <h2>Explore & Learn</h2>
                        <ul>
                            <li>
                                <a href="{{ URL('/')}}">Home</a>
                            </li>
                            <li>
                                <span>/</span>
                            </li>
                            <li>Learn</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Page Title -->

    <!-- Blog -->
    <section class="blog-area ptb-100">
        <div class="container">
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
                            <a class="cmn-btn" href="{{URL('blog-details')}}">Read More</a>
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
                <div class="col-sm-6 col-lg-4">
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
                <div class="col-sm-6 col-lg-4">
                    <div class="blog-item">
                        <div class="blog-top">
                            <a href="blog-details.html">
                                <img src="assets/img/home-one/blog4.jpg" alt="Blog">
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
                                    <span>01 July, 2020</span>
                                </li>
                            </ul>
                            <h3>
                                <a href="blog-details.html">How every countries are doing import and export?</a>
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
                                <img src="assets/img/home-one/blog5.jpg" alt="Blog">
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
                                    <span>02 July, 2020</span>
                                </li>
                            </ul>
                            <h3>
                                <a href="blog-details.html">How to improve cargo services in your country?</a>
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
                                <img src="assets/img/home-one/blog6.jpg" alt="Blog">
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
                                    <span>03 July, 2020</span>
                                </li>
                            </ul>
                            <h3>
                                <a href="blog-details.html">How the world is going by import and export?</a>
                            </h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua....</p>
                            <a class="cmn-btn" href="blog-details.html">Read More</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="pagination-area two">
                <ul>
                    <li>
                        <a href="#">Prev</a>
                    </li>
                    <li>
                        <a class="active" href="#">1</a>
                    </li>
                    <li>
                        <a href="#">2</a>
                    </li>
                    <li>
                        <a href="#">Next</a>
                    </li>
                </ul>
            </div>
        </div>
    </section>
    <!-- End Blog -->

@stop

        

        


        
