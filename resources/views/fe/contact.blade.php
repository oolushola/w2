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
                        <span>For more information about our cargo logistics, get in touch with Kaya</span>

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
                                    <a href="tel:{{ $companyProfile->phone_no_one }}">{{ $companyProfile->phone_no_one }}</a>
                                </li>
                                <li>
                                    <span>Mobile:</span>
                                    <a href="tel:{{ $companyProfile->phone_no_two }}">{{ $companyProfile->phone_no_two }}</a>
                                </li>
                            </ul>
                        </div>
                        <div class="contact-item">
                            <i class="flaticon-placeholder"></i>
                            <h4>Our location</h4>
                            <span>{{ $companyProfile->address }}</span>
                        </div>
                        <div class="contact-item">
                            <i class="flaticon-email"></i>
                            <h4>Email</h4>
                            <ul>
                                <li>
                                    <span>Enquiry:</span>
                                    <a href="mailto:{{ $companyProfile->email_one }}">{{ $companyProfile->email_one }}</a>
                                </li>
                                <li>
                                    <span>Support:</span>
                                    <a href="mailto:{{ $companyProfile->email_two }}">{{ $companyProfile->email_two }}</a>
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
    <div class="map-area">
        <iframe id="map" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3950.7812664354583!2d3.4422616875793905!3d6.458490162751376!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x103bf4eb6716dc0f%3A0xe37e6a965e154dcf!2s3a%20Gbenga%20Ademulegun%20Ln%2C%20Parkview%20101233%2C%20Lagos!5e0!3m2!1sen!2sng!4v1613377549516!5m2!1sen!2sng"  allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
    </div>
    <!-- End Map -->

@stop

        

        


        
