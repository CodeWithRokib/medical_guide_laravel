@extends('frontEnd.layout.master')
@section('title')
Service
@endsection
@section('content')
  <!-- breadcrumbs start -->
  <section class="breadcrumbs-area ptb-120 bg-1 fix">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12 text-center">
                                <div class="breadcrumbs">
                                    <h2 class="page-title">services</h2>
                                    <ul>
                                        <li>
                                            <a class="active" href="{{route('/')}}">Home</a>
                                        </li>
                                        <li>services</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- breadcrumbs end -->
                <!-- Start of Service Area -->
                <div id="service" class="service-area text-start ptb-100">
                    <div class="container">
                        <div class="row">
                            <div class="col-12">
                                <div class="section-title">
                                    <h2 class="text-uppercase">our services</h2>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elitsed do eiusmod incidi.</p>
                                </div>           
                            </div>
                        </div>
                        <div class="row mb-n35">      
                            <div class="col-lg-4 col-md-6 col-12 mb-35">
                                <div class="single-service text-start">
                                    <div class="single-service-icon">
                                        <img src="{{asset('frontEndAsset')}}/images/service/1.webp" alt="service">
                                    </div> 
                                    <div class="single-service-content">
                                        <h3>Fixing Your Teeth</h3> 
                                        <p>Lorem ipsum dolor sit amet, consectetur a elit, sed do eiusmod tempor incididunt ute labore etrt dolore. </p>
                                    </div>    
                                </div>        
                            </div>     
                            <div class="col-lg-4 col-md-6 col-12 mb-35">
                                <div class="single-service text-start">
                                    <div class="single-service-icon">
                                        <img src="{{asset('frontEndAsset')}}/images/service/2.webp" alt="service">
                                    </div> 
                                    <div class="single-service-content">
                                        <h3>Teeth whitening</h3> 
                                        <p>Lorem ipsum dolor sit amet, consectetur a elit, sed do eiusmod tempor incididunt ute labore etrt dolore. </p>
                                    </div>    
                                </div>        
                            </div>     
                            <div class="col-lg-4 col-md-6 col-12 mb-35">
                                <div class="single-service text-start">
                                    <div class="single-service-icon">
                                        <img src="{{asset('frontEndAsset')}}/images/service/3.webp" alt="service">
                                    </div> 
                                    <div class="single-service-content">
                                        <h3>Tooth Protection</h3> 
                                        <p>Lorem ipsum dolor sit amet, consectetur a elit, sed do eiusmod tempor incididunt ute labore etrt dolore. </p>
                                    </div>    
                                </div>        
                            </div>     
                            <div class="col-lg-4 col-md-6 col-12 mb-35">
                                <div class="single-service text-start">
                                    <div class="single-service-icon">
                                        <img src="{{asset('frontEndAsset')}}/images/service/4.webp" alt="service">
                                    </div> 
                                    <div class="single-service-content">
                                        <h3>Fixing Your Teeth</h3> 
                                        <p>Lorem ipsum dolor sit amet, consectetur a elit, sed do eiusmod tempor incididunt ute labore etrt dolore. </p>
                                    </div>    
                                </div>        
                            </div>     
                            <div class="col-lg-4 col-md-6 col-12 mb-35">
                                <div class="single-service text-start">
                                    <div class="single-service-icon">
                                        <img src="{{asset('frontEndAsset')}}/images/service/5.webp" alt="service">
                                    </div> 
                                    <div class="single-service-content">
                                        <h3>Teeth whitening</h3> 
                                        <p>Lorem ipsum dolor sit amet, consectetur a elit, sed do eiusmod tempor incididunt ute labore etrt dolore. </p>
                                    </div>    
                                </div>        
                            </div>     
                            <div class="col-lg-4 col-md-6 col-12 mb-35">
                                <div class="single-service text-start">
                                    <div class="single-service-icon">
                                        <img src="{{asset('frontEndAsset')}}/images/service/6.webp" alt="service">
                                    </div> 
                                    <div class="single-service-content">
                                        <h3>Tooth Protection</h3> 
                                        <p>Lorem ipsum dolor sit amet, consectetur a elit, sed do eiusmod tempor incididunt ute labore etrt dolore. </p>
                                    </div>    
                                </div>        
                            </div>    
                        </div>
                    </div>
                </div>
                <!-- End of Service Area -->
                <!-- Start of Emergency area -->
                <div class="emergency-area ptb-100">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="emergency-left">
                                    <img src="{{asset('frontEndAsset')}}/images/emergency/1.webp" alt="emergency">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="emergency-right">
                                    <div class="section-title">
                                        <h2>emergency services</h2>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elitsed do eiusmod incidi. </p>
                                    </div>
                                    <div class="emergency-content">
                                        <div class="single-emergency mb-50">
                                            <div class="emergency-icon">
                                                <img class="primary" src="{{asset('frontEndAsset')}}/images/emergency/2.webp" alt="emergency">
                                                <img class="secondary" src="{{asset('frontEndAsset')}}/images/emergency/2h.webp" alt="emergency">
                                            </div>
                                            <div class="single-content">
                                                <h3>missing your teeth</h3>
                                                <p>Lorem ipsum dolor sit amet, consectetur a elit, sed do eiu tempor incididunt ute labore etrt dolore. </p>
                                            </div>
                                        </div>
                                        <div class="single-emergency mb-50">
                                            <div class="emergency-icon">
                                                <img class="primary" src="{{asset('frontEndAsset')}}/images/emergency/3.webp" alt="emergency">
                                                <img class="secondary" src="{{asset('frontEndAsset')}}/images/emergency/3h.webp" alt="emergency">
                                            </div>
                                            <div class="single-content">
                                                <h3>tooth pain</h3>
                                                <p>Lorem ipsum dolor sit amet, consectetur a elit, sed do eiu tempor incididunt ute labore etrt dolore. </p>
                                            </div>
                                        </div>
                                        <div class="single-emergency">
                                            <div class="emergency-icon">
                                                <img class="primary" src="{{asset('frontEndAsset')}}/images/emergency/4.webp" alt="emergency">
                                                <img class="secondary" src="{{asset('frontEndAsset')}}/images/emergency/4h.webp" alt="emergency">
                                            </div>
                                            <div class="single-content">
                                                <h3>dental calculus</h3>
                                                <p>Lorem ipsum dolor sit amet, consectetur a elit, sed do eiu tempor incididunt ute labore etrt dolore. </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End of Emergency area -->
@endsection