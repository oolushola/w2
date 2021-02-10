@extends('layout')

@section('title') Contact Us @stop

@section('main')
    
<!-- Page Title -->
    <div class="page-title-area">
        <div class="d-table">
            <div class="d-table-cell">
                <div class="container">
                    <div class="title-content">
                        <h2>Contact Us!</h2>
                        <ul>
                            <li>
                                <a href="{{ URL('/') }}">Home</a>
                            </li>
                            <li>
                                <span>/</span>
                            </li>
                            <li>Contact</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Page Title -->

    <!-- Contact -->
    <div class="contact-area two pt-100 pb-70">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="contact-form">
                        <h3>Drop us message for any query</h3>
                        <span>For more information about our Transport, get in touch with Kaya</span>

                        <form id="contactForm">
                            <div class="row">
                                <div class="col-sm-6 col-lg-6">
                                    <div class="form-group">
                                        <label>Name</label>
                                        <input type="text" name="name" id="name" class="form-control" required data-error="Please enter your name">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
    
                                <div class="col-sm-6 col-lg-6">
                                    <div class="form-group">
                                        <label>Email</label>
                                        <input type="email" name="email" id="email" class="form-control" required data-error="Please enter your email">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>

                                <div class="col-sm-6 col-lg-6">
                                    <div class="form-group">
                                        <label>Phone</label>
                                        <input type="text" name="phone_number" id="phone_number" required data-error="Please enter your number" class="form-control">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
        
                                <div class="col-sm-6 col-lg-6">
                                    <div class="form-group">
                                        <label>Subject</label>
                                        <input type="text" name="msg_subject" id="msg_subject" class="form-control" required data-error="Please enter your subject">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
    
                                <div class="col-md-12 col-lg-12">
                                    <div class="form-group">
                                        <label>Message</label>
                                        <textarea name="message" class="form-control" id="message" cols="30" rows="8" required data-error="Write your message"></textarea>
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
    
                                <div class="col-md-12 col-lg-12">
                                    <button type="submit" class="cmn-btn btn">
                                        Send Message
                                    </button>
                                    <div id="msgSubmit" class="h3 text-center hidden"></div>
                                    <div class="clearfix"></div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="contact-place">
                        <div class="contact-item">
                            <i class="flaticon-call"></i>
                            <h4>Call us</h4>
                            <ul>
                                <li>
                                    <span>Phone:</span>
                                    <a href="tel:+15143125678">+234 (802)-244-0810 </a>
                                </li>
                                <li>
                                    <span>Mobile:</span>
                                    <a href="tel:+15143126688">+234 (802)-244-0810</a>
                                </li>
                            </ul>
                        </div>
                        <div class="contact-item">
                            <i class="flaticon-placeholder"></i>
                            <h4>Our location</h4>
                            <span>3A Gbenga Ademulegun Lane, Park View, Ikeja, Lagos.</span>
                        </div>
                        <div class="contact-item">
                            <i class="flaticon-email"></i>
                            <h4>Email</h4>
                            <ul>
                                <li>
                                    <span>Enquiry:</span>
                                    <a href="mailto:hello@tranx.com">info@kayaafrica.co</a>
                                </li>
                                <li>
                                    <span>Support:</span>
                                    <a href="mailto:tranx@gmail.com">support@kayaafrica.co</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Contact -->

    <!-- Map -->
    <div class="map-area"></div>
    <!-- End Map -->

@stop

        

        


        
