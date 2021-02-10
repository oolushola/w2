@extends('layout')

@section('title') Kaya Africa Technology ::. Moving Africa @stop

@section('main')
<!-- Page Title -->
<div class="page-title-area">
    <div class="d-table">
        <div class="d-table-cell">
            <div class="container">
                <div class="title-content">
                    <h2>Blog Details</h2>
                    <ul>
                        <li>
                            <a href="index.html">Home</a>
                        </li>
                        <li>
                            <span>/</span>
                        </li>
                        <li>Blog Details</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Page Title -->

<!-- Blog Details -->
<div class="blog-details-area pt-100 pb-70">
    <div class="container">
        <div class="row">
            <div class="col-lg-9">
                <div class="details-item">
                    <div class="details-img">
                        <img src="assets/img/blog-details1.jpg" alt="Blog Details">
                        <div class="details-img-inner">
                            <ul>
                                <li>
                                    <i class='bx bx-user'></i>
                                    <span>By:</span>
                                    <a href="#">admin</a>
                                </li>
                                <li>
                                    <i class='bx bx-calendar-alt'></i>
                                    <span>28 July, 2020</span>
                                </li>
                                <li>
                                    <i class='bx bx-comment-detail'></i>
                                    <a href="#">Comments (02)</a>
                                </li>
                            </ul>
                            <h3>The important role of technology during supply chain</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis. Nam liber tempor cum soluta nobis eleifend option congue nihil imperdiet doming id quod mazim placerat facer possim assum.</p>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, made of owl the quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure and dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur header. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis unde omnis iste natus error sit voluptatem and accusantium doloremque laudantium. </p>
                        <blockquote>
                            <i class='bx bxs-quote-alt-left'></i>
                            Duis aute irure and dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur header. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                        </blockquote>
                        <p>Risus commodo viverra maecenas accumsan lacus vel facilisis. Nam liber tempor cum soluta nobis eleifend option congue nihil imperdiet doming id quod mazim placerat facer possim assum.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
                        </div>
                    </div>
                    <div class="details-tag align-items-center">
                        <div class="left">
                            <ul>
                                <li>
                                    <span>Tags:</span>
                                </li>
                                <li>
                                    <a href="#" target="_blank">Transport</a>
                                </li>
                                <li>
                                    <a href="#" target="_blank">Logistics</a>
                                </li>
                                <li>
                                    <a href="#" target="_blank">Freight</a>
                                </li>
                            </ul>
                        </div>
                        <div class="right">
                            <ul>
                                <li>
                                    <span>Share this post:</span>
                                </li>
                                <li>
                                    <a href="#" target="_blank">
                                        <i class='bx bxl-facebook'></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" target="_blank">
                                        <i class='bx bxl-twitter'></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" target="_blank">
                                        <i class='bx bxl-instagram'></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" target="_blank">
                                        <i class='bx bxl-pinterest-alt'></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="details-comments">
                        <h3>Comments (02)</h3>
                        <ul>
                            <li>
                                <img src="assets/img/blog-details2.jpg" alt="Blog Details">
                                <h4>Lawrence Leonard</h4>
                                <span>Wednesday, July 29, 2020</span>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit sed do eiusmod tempor incdidunt labore et dolore magna aliqua. Veniam quis nostrud exercitation ullaco laboris</p>
                                <a href="#">Reply</a>
                            </li>
                            <li>
                                <img src="assets/img/blog-details3.jpg" alt="Blog Details">
                                <h4>Tom Henry</h4>
                                <span>Wednesday, July 30, 2020</span>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit sed do eiusmod tempor incdidunt labore et dolore magna aliqua. Veniam quis nostrud exercitation ullaco laboris</p>
                                <a href="#">Reply</a>
                            </li>
                        </ul>
                    </div>
                    <div class="details-form">
                        <h3>Leave A Reply</h3>
                        <span>Your email address will not be published. Required fields are marked *</span>
                        <form>
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label>Name*</label>
                                        <input type="text" class="form-control">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label>Email*</label>
                                        <input type="email" class="form-control">
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <label>Your Website</label>
                                        <input type="text" class="form-control">
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <label>Comment</label>
                                        <textarea id="your-comment" rows="10" class="form-control"></textarea>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                                        <label class="form-check-label" for="defaultCheck1">
                                            Save my name, email, and website in this browser for the next time I comment.
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <button type="submit" class="btn cmn-btn">Submit A Comment</button>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="widget-area">
                    <div class="search">
                        <form>
                            <input type="text" class="form-control" placeholder="Search here">
                            <button type="submit" class="btn">
                                <i class='bx bx-search'></i>
                            </button>
                        </form>
                    </div>
                    <div class="cat widget-item">
                        <h3>Categories</h3>
                        <ul>
                            <li>
                                <a href="#" target="_blank">Air Freight</a>
                            </li>
                            <li>
                                <a href="#" target="_blank">Sea Freight</a>
                            </li>
                            <li>
                                <a href="#" target="_blank">Home Delivery</a>
                            </li>
                            <li>
                                <a href="#" target="_blank">Maritime Freight</a>
                            </li>
                            <li>
                                <a href="#" target="_blank">Shipping Survival</a>
                            </li>
                            <li>
                                <a href="#" target="_blank">Logistics Solutions</a>
                            </li>
                            <li>
                                <a href="#" target="_blank">Industry Solutions</a>
                            </li>
                        </ul>
                    </div>
                    <div class="post widget-item">
                        <h3>Recent posts</h3>
                        <ul>
                            <li>
                                <div class="img">
                                    <img src="assets/img/blog5.jpg" alt="Blog">
                                </div>
                                <div class="content">
                                    <a href="#">Logistics Solutions</a>
                                    <span>28 July, 2020</span>
                                </div>
                            </li>
                            <li>
                                <div class="img">
                                    <img src="assets/img/blog6.jpg" alt="Blog">
                                </div>
                                <div class="content">
                                    <a href="#">Manage Logistics Operations</a>
                                    <span>27 July, 2020</span>
                                </div>
                            </li>
                            <li>
                                <div class="img">
                                    <img src="assets/img/blog7.jpg" alt="Blog">
                                </div>
                                <div class="content">
                                    <a href="#">Supply Chain Solutions</a>
                                    <span>26 July, 2020</span>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <div class="tag widget-item">
                        <h3>Tags</h3>
                        <ul>
                            <li>
                                <a href="#">Transport</a>
                            </li>
                            <li>
                                <a href="#">Freight</a>
                            </li>
                            <li>
                                <a href="#">Tech</a>
                            </li>
                            <li>
                                <a href="#">Tech</a>
                            </li>
                            <li>
                                <a href="#">Cargo</a>
                            </li>
                            <li>
                                <a href="#">Supply Chain</a>
                            </li>
                            <li>
                                <a href="#">Logistics</a>
                            </li>
                            <li>
                                <a href="#">Import</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Blog Details -->

@stop
