@extends('frontEnd.layout.master')
@section('title')
Contact
@endsection
@section('content')
  <!-- breadcrumbs start -->
  <section class="breadcrumbs-area ptb-120 bg-1 fix">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12 text-center">
                                <div class="breadcrumbs">
                                    <h2 class="page-title">Contact Us</h2>
                                    <ul>
                                        <li>
                                            <a class="active" href="{{route('/')}}">Home</a>
                                        </li>
                                        <li>Contact Us</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- breadcrumbs end -->
                <!-- Start of contact area -->
                <div id="contact" class="contact-area gray-bg ptb-100">
                    <div class="container">
                        <div class="row">
                            <form id="contact-form" action="mail.php" method="post" class="col-lg-8 col-12">
                                <div class="all-contact-text">
                                    <div class="row">
                                        <div class="col-md-6 col-12">
                                            <div class="main-contact">
                                                <input name="name" class="form-control" type="text" required="" placeholder="Name">
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-12">
                                            <div class="main-contact">
                                                <input name="email" class="form-control" type="email" required="" placeholder="Email">
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-12">
                                            <div class="main-contact">
                                                <input name="telephone" class="form-control" type="text" required="" placeholder="Tel">
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-12">
                                            <div class="main-contact contact-mrgn">
                                                <input name="subject" class="form-control" type="text" required="" placeholder="Subject">
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="tnm-textarea">
                                                <textarea name="message" class="form-control" required="" placeholder="Message"></textarea>
                                            </div>
                                            <div class="submit">
                                                <input class="submit" type="submit" value="Send message">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                            <div class="col-lg-4 col-12">
                                <div class="footer-widget info info-color">
                                    <h3 class="leave-comment-text">contact info</h3>
                                    <div class="single-widget mb-15">
                                        <div class="widget-icon">
                                            <i class="zmdi zmdi-phone"></i>
                                        </div>
                                        <div class="widget-info">
                                            <p>+660 256 24857<br>
                                            +660 256 24857</p>
                                        </div>
                                    </div>
                                    <div class="single-widget mb-15">
                                        <div class="widget-icon">
                                            <i class="zmdi zmdi-email"></i>
                                        </div>
                                        <div class="widget-info">
                                            <p><a href="#">Username@gmail.com </a></p>
                                            <p><a href="#">Damo@gmail.com</a></p>
                                        </div>
                                    </div>
                                    <div class="single-widget">
                                        <div class="widget-icon">
                                            <i class="zmdi zmdi-pin"></i>
                                        </div>
                                        <div class="widget-info">
                                            <p>House No 27, Road No 07, East<br>
                                            Road, Dhaka, Bangladesh</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <p class="form-messege"></p>
                        </div>
                    </div>
                </div>
                <div class="map-area">
                    <div class="contact-map">
                            <iframe id="gmap_canvas" style="height: 360px; width: 100%;" src="https://maps.google.com/maps?q=121%20King%20St%2C%20Melbourne%20VIC%203000%2C%20Australia&t=&z=13&ie=UTF8&iwloc=&output=embed"></iframe>
                    </div>
                </div>
                <!-- End of contact area -->
@endsection