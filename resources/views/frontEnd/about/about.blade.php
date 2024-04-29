@extends('frontEnd.layout.master')
@section('title')
About
@endsection
@section('content')
 <!-- breadcrumbs start -->
 <section class="breadcrumbs-area ptb-120 bg-1 fix">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12 text-center">
                                <div class="breadcrumbs">
                                    <h2 class="page-title">about us</h2>
                                    <ul>
                                        <li>
                                            <a class="active" href="{{route('/')}}">Home</a>
                                        </li>
                                        <li>about us</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- breadcrumbs end -->
                <!--Start of Choose Area-->
                <div id="choose" class="choose-area text-start ptb-100">
                    <div class="container">
                        <div class="row">
                            <div class="col-12">
                                <div class="section-title">
                                    <h2 class="text-uppercase">Why Choose Decare</h2>
                                    <p>Welcome to CureWays, your trusted partner in medical tourism and healthcare services!<br><br>

                                        At CureWays, we are passionate about providing comprehensive and innovative solutions to
                                        make healthcare accessible and hassle-free. We understand that navigating the healthcare
                                        system can be overwhelming, especially when it involves travelling to another country or
                                        coordinating with multiple providers. That's why we are here to simplify the process and
                                        ensure a seamless experience for you.<br><br>

                                        <b>Our Range of Services:</b>
                                        <br><br>

                                        Medical Tourism: We specialize in medical tourism, connecting patients with renowned healthcare
                                        facilities and expert medical professionals worldwide. Whether you are seeking specialized
                                        treatments, surgical procedures, or advanced healthcare options, we will assist you in finding
                                        the best destinations and providers that suit your specific needs.<br><br>

                                        Domestic and International Doctor Appointments: We make it easy for you to schedule appointments
                                        with doctors, both locally and internationally. Our extensive network of trusted doctors and
                                        specialists ensures that you receive top-notch care, regardless of your location.<br><br>

                                        Visa Invitation Letters: We understand the importance of smooth travel arrangements for international
                                        patients. Our team is dedicated to assisting you with the necessary paperwork and requirements,
                                        including visa invitation letters so that you can focus on your health and well-being.<br><br>

                                        Health Monitoring Services: We offer comprehensive health monitoring services, allowing you
                                        to keep track of your health parameters from the comfort of your home. With advanced monitoring
                                        devices and user-friendly platforms, we empower you to take proactive steps towards a healthier
                                        lifestyle.<br><br>

                                        Service Diagnostic Labs at Home: We bring convenience to your doorstep with our service diagnostic
                                        labs. Our skilled professionals collect samples from your home, ensuring accuracy and reliability
                                        in test results, without the need for you to visit a lab.<br><br>

                                        Emergency Doctor Counseling: In times of medical emergencies, having access to immediate medical
                                        advice is crucial. Our emergency doctor counseling service connects you with experienced professionals
                                        who can provide timely guidance and support, helping you make informed decisions about your health.<br><br>

                                        Digital Health Tracking Service: Our digital health tracking service combines technology and healthcare
                                        to help you monitor and manage your health effectively. From tracking vital signs to managing medication
                                        schedules, our user-friendly platform keeps you informed and in control.<br><br>

                                        At CureWays, your satisfaction, safety, and personalized care are our top priorities. Our dedicated team
                                        of healthcare professionals and customer service representatives work tirelessly to ensure that you receive
                                        the highest quality of care throughout your medical journey.<br><br>

                                        We believe that everyone deserves access to world-class healthcare. Our mission is to bridge the gap between
                                        patients and exceptional healthcare services worldwide. Trust CureWays to be your partner in your pursuit of
                                        good health, and let us guide you towards a better, healthier future.<br><br>

                                        Get in touch with us today to learn more about our services and embark on your journey towards optimal health
                                        and wellness with CureWays</p>
                                </div>           
                            </div>
                        </div>
                        <div class="row mb-n30">      
                            <div class="col-lg-3 col-md-6 col-12 mb-30">
                                <div class="single-choose text-center">
                                    <div class="single-choose-icon">
                                        <img class="primary" src="{{asset('frontEndAsset')}}/images/choose/1.webp" alt="">
                                        <img class="secondary" src="{{asset('frontEndAsset')}}/images/choose/h1.webp" alt="">
                                    </div> 
                                    <div class="single-choose-content">
                                        <p>24 Hours Dental Services</p>
                                    </div>    
                                </div>        
                            </div>      
                            <div class="col-lg-3 col-md-6 col-12 mb-30">
                                <div class="single-choose text-center">
                                    <div class="single-choose-icon">
                                        <img class="primary" src="{{asset('frontEndAsset')}}/images/choose/2.webp" alt="">
                                        <img class="secondary" src="{{asset('frontEndAsset')}}/images/choose/h2.webp" alt="">
                                    </div> 
                                    <div class="single-choose-content">
                                        <p>22 years of experience</p>
                                    </div>    
                                </div>        
                            </div>    
                            <div class="col-lg-3 col-md-6 col-12 mb-30">
                                <div class="single-choose text-center">
                                    <div class="single-choose-icon">
                                        <img class="primary" src="{{asset('frontEndAsset')}}/images/choose/3.webp" alt="">
                                        <img class="secondary" src="{{asset('frontEndAsset')}}/images/choose/h3.webp" alt="">
                                    </div> 
                                    <div class="single-choose-content">
                                        <p>offering sedation Services</p>
                                    </div>    
                                </div>        
                            </div>   
                            <div class="col-lg-3 col-md-6 col-12 mb-30">
                                <div class="single-choose text-center">
                                    <div class="single-choose-icon">
                                        <img class="primary" src="{{asset('frontEndAsset')}}/images/choose/4.webp" alt="">
                                        <img class="secondary" src="{{asset('frontEndAsset')}}/images/choose/h4.webp" alt="">
                                    </div> 
                                    <div class="single-choose-content">
                                        <p>fexible payment options</p>
                                    </div>    
                                </div>        
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End of Choose Area -->
                <!-- fun factor area start -->
                <div id="fun" class="fun-factor-area ptb-100">
                    <div class="container">
                        <div class="row mb-n50">
                            <div class="col-lg-3 col-md-6 col-12 mb-50">
                                <div class="single-fun-factor">
                                    <div class="fun-icon pull-left">
                                        <img src="{{asset('frontEndAsset')}}/images/fun/1.webp" alt="fun">  
                                    </div>
                                    <div class="fun-content">
                                        <h3 class="counter">200</h3>
                                        <h5>decare rooms</h5> 
                                    </div>       
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6 col-12 mb-50">
                                <div class="single-fun-factor">
                                    <div class="fun-icon pull-left">
                                        <img src="{{asset('frontEndAsset')}}/images/fun/2.webp" alt="fun"> 
                                    </div>
                                    <div class="fun-content">    
                                        <h3 class="counter">150</h3>
                                        <h5>expert doctors</h5>
                                    </div>    
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6 col-12 mb-50">
                                <div class="single-fun-factor">
                                    <div class="fun-icon pull-left">
                                        <img src="{{asset('frontEndAsset')}}/images/fun/3.webp" alt="fun"> 
                                    </div>
                                    <div class="fun-content">
                                        <h3 class="counter">110</h3>
                                        <h5>winning award</h5>
                                    </div>        
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6 col-12 mb-50">
                                <div class="single-fun-factor">
                                   <div class="fun-icon pull-left">
                                        <img src="{{asset('frontEndAsset')}}/images/fun/4.webp" alt="fun"> 
                                    </div>
                                    <div class="fun-content">
                                        <h3 class="counter">540</h3>
                                        <h5>happy patients</h5>   
                                    </div>     
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End of Fun Factor -->
                <!-- Start of About Area <-->
                <div id ="about" class="about-area ptb-100">
                    <div class="container">
                        <div class="row">
                            <div class="about-left" style="background-image: url({{asset('frontEndAsset')}}/images/about/1.webp);">
                                <div class="about-content">
                                    <h3>About Decare</h3>
                                    <p>Lorem ipsum dolor sit amet, conse adipr elit, sed do eiusmod tempor incididunt ut lab et dolore.</p>
                                    <a class="default-button" href="#">read more</a>  
                                </div>
                            </div>
                            <div class="about-middle" style="background-image: url({{asset('frontEndAsset')}}/images/about/2.webp);">
                                <div class="about-content">
                                    <h3>opening hour</h3>
                                    <ul>
                                        <li>monday-friday <span>8:00 am - 4:00 pm</span></li>
                                        <li>monday-friday <span>8:00 am - 4:00 pm</span></li>
                                        <li>monday-friday <span>8:00 am - 4:00 pm</span></li>
                                    </ul>
                                </div>    
                            </div>
                            <div class="about-right" style="background-image: url({{asset('frontEndAsset')}}/images/about/3.webp);">
                                <div class="about-content">
                                    <h3>Book An Appointment</h3>
                                    <form id="contact-form-all" action="#">
                                        <input class="mr-30 mb-20 pull-left" placeholder="Name* " name="name" type="text">
                                        <input class="mb-20" placeholder="Mail " name="Email*" type="text">
                                        <div class="orderby-wrapper mr-30  mb-10">
                                            <select name="orderby" class="hidden-xs orderby">
                                                <option value="">Department</option>
                                                <option value="">Sector</option>
                                                <option value="">Zone</option>
                                            </select>
                                        </div>
                                        <div class="orderby-wrapper mb-10">
                                            <select name="orderby" class="hidden-xs orderby">
                                                <option value="">time</option>
                                                <option value="">day</option>
                                                <option value="">month</option>
                                            </select>
                                        </div>
                                        <div class="attending-button text-center">
                                            <button type="submit">send message</button>
                                        </div>    
                                    </form>
                                </div>    
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End of About Area -->
                <!-- testimonial area start -->
                <div class="testimonial-area ptb-100 text-center">
                    <div class="container">
                        <div class="row">
                            <div class="col-12">
                                <div class="row">
                                    <div class="col-lg-4 col-md-10 col-12 mx-auto">
                                        <div class="testimonial-image-slider text-center">
                                            <div class="sin-testiImage">
                                                <div class="sin-opacity">
                                                    <img src="{{asset('frontEndAsset')}}/images/testimonial/1.webp" alt="testimonial 1" /> 
                                                </div>
                                            </div>
                                            <div class="sin-testiImage">
                                                <div class="sin-opacity">
                                                    <img src="{{asset('frontEndAsset')}}/images/testimonial/2.webp" alt="testimonial 2" />
                                                </div>    
                                            </div>
                                            <div class="sin-testiImage">
                                                <div class="sin-opacity">
                                                    <img src="{{asset('frontEndAsset')}}/images/testimonial/3.webp" alt="testimonial 3" />
                                                </div>    
                                            </div>
                                            <div class="sin-testiImage">
                                                <div class="sin-opacity">
                                                    <img src="{{asset('frontEndAsset')}}/images/testimonial/1.webp" alt="testimonial 1" />
                                                </div>    
                                            </div>
                                            <div class="sin-testiImage">
                                                <div class="sin-opacity">
                                                    <img src="{{asset('frontEndAsset')}}/images/testimonial/2.webp" alt="testimonial 2" />
                                                </div>    
                                            </div>
                                            <div class="sin-testiImage">
                                                <div class="sin-opacity">
                                                    <img src="{{asset('frontEndAsset')}}/images/testimonial/3.webp" alt="testimonial 3" />
                                                </div>    
                                            </div>
                                        </div>
                                    </div>
                                </div> 
                                <div class="testimonial-text-slider text-center">
                                    <div class="sin-testiText">
                                        <h2>Ricardo Martin</h2>
                                        <h5>Parients</h5>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore  nostr exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor  voluptate velit     esscillum dolore eu fugiat nulla pariatur. </p>
                                    </div>
                                    <div class="sin-testiText">
                                        <h2>Chowchilla Madera</h2>
                                        <h5>Parients</h5>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore  nostr exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor  voluptate velit     esscillum dolore eu fugiat nulla pariatur. </p>
                                    </div>
                                    <div class="sin-testiText">
                                        <h2>Kattie Luis</h2>
                                        <h5>Parients</h5>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore  nostr exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor  voluptate velit     esscillum dolore eu fugiat nulla pariatur. </p>
                                    </div>
                                    <div class="sin-testiText">
                                        <h2>M S Nawaz </h2>
                                        <h5>Parients</h5>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore  nostr exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor  voluptate velit     esscillum dolore eu fugiat nulla pariatur. </p>
                                    </div>
                                    <div class="sin-testiText">
                                        <h2>Chowchilla Madera</h2>
                                        <h5>Parients</h5>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore  nostr exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor  voluptate velit     esscillum dolore eu fugiat nulla pariatur. </p>
                                    </div>
                                    <div class="sin-testiText">
                                        <h2>Kattie Luis </h2>
                                        <h5>Parients</h5>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore  nostr exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor  voluptate velit     esscillum dolore eu fugiat nulla pariatur. </p>
                                    </div>
                                </div>   
                            </div>
                        </div>
                    </div>
                </div>
                <!-- testimonial area end -->
@endsection